            <?php
			
				if(!isset($hero_type) || empty($hero_type)){
					$hero_type = 'default';
				}

		
				global $page_id;
				
				if(empty($page_id )){
				
					global $post;
				
					$post_id = $post->ID;		
				} else {
					
					$post_id = $page_id;
					
				}
				
				
				
				if($hero_type=="half"){
					$hero_image = get_field( "hero_image_2", $post_id );	//TODO
					$hero_alt = get_field( "hero_alt_2", $post_id );
					$hero_heading = get_field( "hero_heading_2", $post_id );
					$hero_subheading = get_field( "hero_subheading_2", $post_id );
					$hero_button = get_field( "hero_button_2", $post_id );
					$hero_link = get_field( "hero_link_2", $post_id );
					$link_hero_button_to_enquiry_form = get_field("link_hero_button_to_enquiry_form_2", $post_id );
					
				} else {
					$hero_image = get_field( "hero_image", $post_id );
					$hero_alt = get_field( "hero_alt", $post_id );
					$hero_heading = get_field( "hero_heading", $post_id );
					$hero_subheading = get_field( "hero_subheading", $post_id );
					$hero_button = get_field( "hero_button", $post_id );
					$hero_link = get_field( "hero_link", $post_id );
					$link_hero_button_to_enquiry_form = get_field("link_hero_button_to_enquiry_form", $post_id );
				}
				
				

				if(!empty($hero_image['sizes']['2048x2048'])){
					$hero_image_url = $hero_image['sizes']['2048x2048'];
				} else {
					$hero_image_url = $hero_image['url'];	
				}
				
				//print_r($hero_image);
				
			?>
            <!-- home hero -->
            <section class="section generic-hero-section hero">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="generic-hero full-width has-image">
                                <div class="generic-hero-image image-wrap">
                                    <img src="<?php echo $hero_image_url; ?>" alt="<?php echo $hero_alt ?>" class="sample-image">
                                </div>
								<?php
								if($hero_type=="half"){
									$class = "generic-hero-content half-width has-gradient";
									$h1="h4";
									$h2="h3";
									$class2="";
									$class3="white regular";
									
								} else {
									
									$class = "generic-hero-content has-gradient";
									$h1="h1";
									$h2="h2";
									$class2="generic-hero-title";
									$class3="generic-hero-subtitle";									
								}
								
								?>
                                <div class="<?php echo $class; ?>">
                                    <div class="generic-hero-content-item">
                                        <div class="generic-hero-content-inner">
                                            <<?php echo $h1; ?> class="<?php echo $class2; ?>"><?php echo $hero_heading; ?></<?php echo $h1; ?>>
                                            <<?php echo $h2; ?> class="<?php echo $class3; ?>"><?php echo $hero_subheading; ?></<?php echo $h2; ?>>
											<?php
											if($hero_type=="half"){
											?>
												<div class="generic-hero-text">
													<p>No matter how much experience you have, there’s always something new to learn.</p>
													<p>We bring expertise and practitioners together in an environment where knowledge can be transferred, 
													and skills can be learned in a real working farm. Unbelievably useful, and unfortunately all too rare.</p>
												</div>
											<?php
											}
											?>
                                        </div>
										<?php
										 
											$css_1="";

											if(!empty($link_hero_button_to_enquiry_form)){
												if($link_hero_button_to_enquiry_form[0]=='yes'){
													 $hero_link="#";
													 $css_1="pop-up-trigger";
												}
											}
										
										if(!empty($hero_button)){
											?>
												<a href="<?php echo $hero_link; ?>" class="button primary <?php echo $css_1 ?>"><?php echo $hero_button; ?></a>
											<?php
											}
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>


			<!--
			TRAINING 
			
			
            <section class="section generic-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="generic-hero full-width has-image">
                                <div class="generic-hero-image image-wrap">
                                    <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/Heros/Training_hero.jpg" alt="Training_hero Image" class="sample-image">
                                </div>
                                <div class="generic-hero-content has-gradient">
                                    <div class="generic-hero-content-item">
                                        <div class="generic-hero-content-inner">
                                            <h1 class="generic-hero-title">Agricultural Training</h1>
                                            <h2 class="generic-hero-subtitle">Finding a better way to farm.</h2>
                                        </div>
                                        <a href="#" class="button primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>
			
			/* mildly differtent version */
            <section class="section generic-hero-section hero">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="generic-hero full-width has-image">
                                <div class="generic-hero-image image-wrap">
                                    <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/home_training.jpg" alt="Home: training" class="sample-image">
                                </div>
                                <div class="generic-hero-content half-width has-gradient">***
                                    <div class="generic-hero-content-item">
                                        <div class="generic-hero-content-inner">
                                            <h4 class="">Agricultural Training</h4>
                                            <h3 class="white regular">Improve your performance on the farm, and the profitability of your agri-business.</h3>
                                            <div class="generic-hero-text">
                                                <p>No matter how much experience you have, there’s always something new to learn.</p>
                                                <p>We bring expertise and practitioners together in an environment where knowledge can be transferred, and skills can be learned in a real working farm. Unbelievably useful, and unfortunately all too rare.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="button primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>
			
			
			
			
			-->
			
			









