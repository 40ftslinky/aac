            <?php
			
				if(!isset($hero_type) || empty($hero_type)){
					$hero_type = 'default';
				}
				
				if(empty($pageType)){
					
					$pageType = "pages";
					
				}

				
				global $page_id;
				
				if(empty($page_id )){
				
					global $post;
				
					$post_id = $post->ID;		
				} else {
					
					$post_id = $page_id;
					
				}
				
						
				
				$hero_image = get_field( "split_hero_image", $post_id );
				$hero_alt = get_field( "split_hero_alt", $post_id );
				$hero_heading = get_field( "split_hero_heading", $post_id );
				$hero_subheading = get_field( "split_hero_subheading", $post_id );
				$split_hero_paragraph_copy = get_field( "split_hero_paragraph_copy", $post_id );
				$hero_button = get_field( "split_hero_button", $post_id );
				$hero_link = get_field( "split_hero_link", $post_id );				
				$link_hero_button_to_enquiry_form_3 = get_field( "link_hero_button_to_enquiry_form_3", $post_id );	
				
				if(!empty($hero_image['sizes']['2048x2048'])){
					$hero_image_url = $hero_image['sizes']['2048x2048'];
				} else {
					$hero_image_url = $hero_image['url'];	
				}				
			?>
			<section class="section split-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                
                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
												<?php
												
												if(empty($hero_heading) && ($pageType=="posts")){
													$hero_heading=get_the_title();
												}
												
												if(!empty($hero_heading)){
														?>											
														<h2 class="split-hero-title"><?php echo $hero_heading  ?></h2>
														<?php
												}
												if(!empty($hero_subheading)){
														?>																
														<h2 class="split-hero-subtitle"><?php echo $hero_subheading ?></h2>
														<?php
												}
												if(!empty($split_hero_paragraph_copy)){
														?>
														<p class="split-hero-text"><?php echo $split_hero_paragraph_copy ?></p>
														<?php
												}
												?>
                                            </div>
											<?php
											if(!empty($hero_button)){
												
													$css_1="";

													if(!empty($link_hero_button_to_enquiry_form_3)){
														if($link_hero_button_to_enquiry_form_3[0]=='yes'){
															 $hero_link="#";
															 $css_1="pop-up-trigger";
														}
													}
												
												?>
												<a href="<?php echo $hero_link ?>" class="button mono <?php echo $css_1; ?>"><?php echo $hero_button ?></a>
												<?php
												
											}
											?>
                                        </div>
                                    </div>
                                </div>
                                <?php
								if(!empty($hero_image_url)){
									?>
									<div class="content-grid-item content-grid-item--2-col">
										<div class="split-hero-image image-wrap">
											<img src="<?php echo $hero_image_url; ?>" alt="<?php echo $hero_alt; ?>" class="sample-image">
										</div>
									</div>
									<?php
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
		