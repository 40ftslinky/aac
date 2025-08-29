<?php

		
		global $page_id;
		
		if(empty($page_id )){
		
			global $post;
		
			$post_id = $post->ID;		
		} else {
			
			$post_id = $page_id;
			
		}
		
		
		if(empty($BioType)){
			$BioType = "team-members";
		}


	$who_we_are= get_field( "who_we_are", $post_id );
	
	$core_team= get_field( "core_team", $post_id );
	
	
	if($BioType=="jobs")
	{
		$typeClass ="job";
	} else {
		$typeClass ="biog";
	}


?>


            <section class="section <?php echo $typeClass ?>-horiz-section white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo $who_we_are; ?></h4>                            
                                <h2><?php echo $core_team; ?></h2>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
						   
						   <?php
																			   
							$args = [
								'post_type'      => $BioType,
								'posts_per_page' => -1,
								'post_status'    => 'publish',
								'meta_key'       => '_tm_order_value',
								'orderby'        => 'meta_value_num',
								'order'          => 'ASC'
							];
							
							if ($selected_cat) {
									$args['tax_query'] =[
										[
											'taxonomy' => 'jobs_category',
											'field'    => 'term_id', // Use the numeric ID
											'terms'    => $selected_cat,     
										]
									];
							}
													
							if(!empty($search_term)){						
								$args['s'] = $search_term;
							}
							
							
							
							if($BioType=="team-members"){
								
								$args['meta_query'] =[
									[
										'key'     => 'core_team_member',
										'value'   => 'yes',
										'compare' => '='
									]
								];
								
							}
							
							
							

						$query = new WP_Query($args);

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								$post_title =get_the_title();
								$Pid = get_the_ID();
								$The_content = get_the_content();
								$featured_image_url = get_the_post_thumbnail_url($Pid, 'medium'); // 'full', 'medium', 'thumbnail', etc.
						   ?>
                                    
                                    <div class="<?php echo $typeClass ?>-card ">
									<?php
											if (!empty($featured_image_url)){
											?>
												<div class="<?php echo $typeClass ?>-card-image">
													<img src="<?php echo $featured_image_url; ?>" alt="<?php echo $post_title ?>" class="<?php echo $typeClass ?>-image">
												</div>
												<?php
											}
										?>
                                        <div class="<?php echo $typeClass ?>-card-content">
										<?php

										$team_member_card_position = get_field( "team_member_card_position", $Pid );
										
										$team_member_card_position_2 = get_field( "team_member_card_position_2", $Pid );
										
										$core_team_member = get_field( "core_team_member", $Pid );
										
										$team_members_linked_in_url = get_field( "team_members_linked_in_url", $Pid );
										
										
										
										?>
                                            <h4 class="<?php echo $typeClass ?>-card-title"><?php echo $post_title ?></h4>
											
											<?php 
											
											if(!empty($team_member_card_position) && !empty($team_member_card_position_2)){
											?>
												<div class="<?php echo $typeClass ?>-card-position"><?php echo $team_member_card_position ?> | <?php echo $team_member_card_position_2 ?></div>
											<?php
											} elseif (!empty($team_member_card_position)){
											
											?>
												<div class="<?php echo $typeClass ?>-card-position"><?php echo $team_member_card_position ?></div>
											<?php
											} elseif(!empty($team_member_card_position_2)){
											?>
												<div class="<?php echo $typeClass ?>-card-position"><?php echo $team_member_card_position_2 ?></div>
											<?php		
											}
											?>
											
                                            <div class="<?php echo $typeClass ?>-card-text">
											<?php
												if(!empty($The_content)){
													?>
													<div class="<?php echo $typeClass ?>-text"><?php echo $The_content ?></div>
													<?php
												}
												if(!empty($team_members_linked_in_url)){
													?>
													<a class="social_link" href="<?php echo $team_members_linked_in_url ?>" target="_blank" rel="noopener noreferrer">                                                
														<svg class="linkedin_icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill="#202020" fill-rule="evenodd" d="M.063 2.014a1.12 1.12 0 0 1 1.12-1.12h11.164a1.12 1.12 0 0 1 1.12 1.12v11.165a1.12 1.12 0 0 1-1.12 1.122H1.184a1.12 1.12 0 0 1-1.12-1.121V2.014Zm5.305 3.992h1.816v.912c.261-.525.933-.996 1.94-.996 1.93 0 2.388 1.044 2.388 2.959v3.548H9.557V9.317c0-1.09-.261-1.706-.927-1.706-.923 0-1.307.664-1.307 1.706v3.112H5.369V6.006Zm-3.352 6.34h1.955V5.92H2.018v6.425Zm2.236-8.52a1.257 1.257 0 1 1-2.514.054 1.257 1.257 0 0 1 2.514-.053v-.001Z" clip-rule="evenodd"/>
														</svg>
													<span class="visually-hidden">LinkedIn</span>
												 </a>
												<?php
												}
												?>
												
												<?php

												if(!empty($BioType)){
													if($BioType=='jobs'){
														$categories = get_the_terms( get_the_ID(), 'jobs_category' );
														$CATS = array();
														if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
															foreach ( $categories as $cat ) {
																$CATS[] =  $cat->slug;
															}
														}
														if(in_array("employee", $CATS)){	
															?>
															<a class="button mono job-enquiry pop-up-trigger" href="#job-enquiry">Apply Now</a>
															<?php
														} else {
															?>
															<a class="button mono pop-up-trigger" href="#job-enquiry">Contact Now</a>
															<?php
					
														}
													}
												}
												?>
                                           
                                            </div>
                                        </div>                                    
                                    </div>
<?php


							}
							wp_reset_postdata();
						} else {
							//echo 'No core team members found.';
						}

?>

                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>
			
			