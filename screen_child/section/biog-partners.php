<?php

		
		global $page_id;
		
		if(empty($page_id )){
		
			global $post;
		
			$post_id = $post->ID;		
		} else {
			
			$post_id = $page_id;
			
		}
		
		
		if(!isset($PartnerType)){
			$PartnerType = "partner";
		}
		
											   
		$args = [
			'post_type'      => 'team-members',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'meta_query'     => [
				[
					'key'     => 'core_team_member',
					'value'   => $PartnerType,
					'compare' => '='
				]
			],
			'meta_key'       => '_tm_order_value',
			'orderby'        => 'meta_value_num',
			'order'          => 'ASC'
		];

	$query = new WP_Query($args);
	
	
		
	$team_partners_title= get_field( "team_partners_title", $post_id );

	$organisations_title = get_field( "organisations_title", $post_id );
	
	$team_partners_main_paragraph = get_field( "extended_team_main_paragraph", $post_id );

?>


  <section class="section partner-section">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo $team_partners_title ?></h4>                            
                                <h2><?php echo $organisations_title ?></h2>
                                <p class="body-4"><?php echo $team_partners_main_paragraph ?></p>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner ">
                                    
									
                                  <?php
									  $x=0;
									  
									if ($query->have_posts()) {
										while ($query->have_posts()) {
											$query->the_post();
											
											$Pid = get_the_ID();
											
											
											$post_title =get_the_title();
											$The_content = get_the_content();
											$featured_image_url = get_the_post_thumbnail_url($Pid, 'medium'); // 'full', 'medium', 'thumbnail', etc.
											$team_member_card_position = get_field( "team_member_card_position", $Pid );
											
											$team_member_card_position_2 = get_field( "team_member_card_position_2", $Pid );
											
											$core_team_member = get_field( "core_team_member", $Pid );
											
											$team_members_linked_in_url = get_field( "team_members_linked_in_url", $Pid );
											
											$x++;
									
									?>
									
									
                                    <div class="card-4-col ">
										<?php
										if(!empty($featured_image_url)){
										?>
                                        <div class="card-4-col-image">
                                            <img src="<?php echo $featured_image_url ?>" alt="<?php echo $post_title ?>" class="image">
                                        </div>
										<?php
										}
										?>
                                        <div class="card-4-col-content">
                                            <h4 class="card-4-col-title"><?php echo $post_title ?></h4>
                                            <div class="card-4-col-position"><?php echo $team_member_card_position ?> | <?php echo $team_member_card_position_2 ?></div>
                                            <div class="card-4-col-text">
                                                
                                                    <?php
													
													echo $The_content;
													
													?>
                                               
                                            </div>
											<?php
											if(!empty($team_members_linked_in_url)){
												?>
												<a class="link-only" href="<?php echo $team_members_linked_in_url ?>">Partner Link</a>
												<?php
											}
											?>
                                        </div>                                    
                                    </div>

									<?php
										}
									}
									
									
									?>
                                    <!--<div class="card-4-col ">
                                        <div class="card-4-col-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/partners/Emergency_Australia.png" alt="Partner: Name" class="image">
                                        </div>
                                        <div class="card-4-col-content">
                                            <h4 class="card-4-col-title">Emergency Australia</h4>
                                            <div class="card-4-col-position">Program | Adult Short Courses</div>
                                            <div class="card-4-col-text">
                                                <div class="card-4-col-text">
                                                    <p>Emergency Australia delivers the NSW government-funded program AgSkilled, that connects people with subsidised agricultural training to work in the industry. That includes anyone in the industry already, or job seekers and school leavers looking for a path to employment. Programs range from soils and nutrition to farm business management, emerging technologies to machinery operation and management.</p>
                                               </div>
                                            </div>
                                            <a class="link-only" href="">Partner Link</a>
                                        </div>                                    
                                    </div>

                                    <div class="card-4-col ">
                                        <div class="card-4-col-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/partners/FPV-Australia.png" alt="Partner: FPV_australia" class="image">
                                        </div>
                                        <div class="card-4-col-content">
                                            <h4 class="card-4-col-title">FPV Australia</h4>
                                            <div class="card-4-col-position">Program | Drone Flying, Drone Taster Days </div>
                                            <div class="card-4-col-text">
                                                <div class="card-4-col-text">
                                                    <p>FPV is one of the longest running drone training organisations in the country, having established their first program back in 2014. They’re also one of the most respected in the industry, and will teach you to fly a drone up to commercial level, even obtaining certification from the Civil Aviation Safety Authority, if that’s what you require.</p>
                                               </div>
                                            </div>
                                            <a class="link-only" href="">Partner Link</a>
                                        </div>                                    
                                    </div>

                                    <div class="card-4-col ">
                                        <div class="card-4-col-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/partners/TAFE_NSW.png" alt="Partner: Name" class="image">
                                        </div>
                                        <div class="card-4-col-content">
                                            <h4 class="card-4-col-title">TAFE</h4>
                                            <div class="card-4-col-position">Program | Programs </div>
                                            <div class="card-4-col-text">
                                                <div class="card-4-col-text">
                                                    <p>Whether it’s a TAFE course delivering on our learning farm or our bespoke courses delivered by TAFE teachers, our collaboration with TAFE programs and teachers has provided accredited training to many participants to date.</p>
                                               </div>
                                            </div>
                                            <a class="link-only" href="">Partner Link</a>
                                        </div>                                    
                                    
                                    </div>
                                </div>
                                    
								-->


                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>
			
			