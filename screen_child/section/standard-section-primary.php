		<?php
		
		if(!isset($button_group)){
			
			$button_group = 0;
			
		}
		
		
		global $page_id;
		
		if(empty($page_id )){
		
			global $post;
		
			$post_id = $post->ID;		
		} else {
			
			$post_id = $page_id;
			
			
		}
		
		$image_alignment = get_field( "standard_section_image_alignment_primary", $post_id );
		
		if(!isset($image_alignment)){
			
			$image_alignment = "right";
			
		}
		
		
		?>
		 <!-- intro -->
            <section class="section standard-section primary_gradient-bg ">
                <div class="container">
                    <div class="row">
                       
						<?php
						
						$standard_section_image = get_field( "standard_section_image_primary", $post_id );
						
						if(!empty($standard_section_image['sizes']['2048x2048'])){
							$hero_image_url = $standard_section_image['sizes']['2048x2048'];
						} else {
							$hero_image_url = $standard_section_image['url'];	
						}						
						
						
						if($image_alignment=="left"){
						?>
                             <div class="column">
								<div class="section-image-wrap image-wrap standard-image-wrap">
									<img src="<?php echo $hero_image_url ?>" alt=" Image" class="sample-image">
								</div>
							</div>
						<?php
						}
						?>
                        <div class="column">
                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
										<?php
										$standard_title_primary = get_field( "standard_title_primary_primary", $post_id );

										$standard_sub_title = get_field( "standard_sub_title_primary", $post_id );

										$standard_text_1 = get_field( "standard_text_1_primary", $post_id );
										//$standard_text_2 = get_field( "standard_text_2_primary", $post_id );
										//$standard_text_3 = get_field( "standard_text_3_primary", $post_id );
										//$standard_text_4 = get_field( "standard_text_4_primary", $post_id );
										
										$standard_subtitle_first = get_field( "standard_subtitle_first", $post_id );
										
										$link_standard_button_to_enquiry_form_1= get_field( "link_standard_button_to_enquiry_form_1", $post_id );
										
										$link_standard_button_to_enquiry_form_2= get_field( "link_standard_button_to_enquiry_form_2", $post_id );
										
										if(empty($standard_subtitle_first)){
											$standard_subtitle_first = "no";
										}

										?>
										
											
                                            <div class="standard-heading">
											<?php
											if($standard_subtitle_first=="no"){
												if(!empty($standard_title_primary)){
												?>
												<h2 class="standard-title"><?php echo $standard_title_primary ?></h2>
												<?php
												}
												?>
												<?php
												if(!empty($standard_sub_title)){
												?>											
												<h4 class="standard-subtitle"><?php echo $standard_sub_title ?></h4>
												<?php
												}
											}

											if($standard_subtitle_first=="yes"){
											
												if(!empty($standard_sub_title)){
												?>											
												<h4 class="standard-subtitle primary"><?php echo $standard_sub_title ?></h4>
												<?php
												}
												if(!empty($standard_title_primary)){
												?>
												<h2 class="standard-title"><?php echo $standard_title_primary ?></h2>
												<?php
												}
											}
											?>
											</div>
                                            <?php
											if(!empty($standard_text_1)){
												
												
													$standard_text_1 = preg_replace(
														'/<p(?![^>]*\bclass=)([^>]*)>/i',
														'<p class="standard-copy"$1>',
														$standard_text_1
													);

													// If <p> already has a class, append "standard-copy" to it
													$standard_text_1 = preg_replace_callback(
														'/<p[^>]*\bclass=["\']([^"\']*)["\']([^>]*)>/i',
														function($matches) {
															$existing_classes = trim($matches[1]);
															$rest = $matches[2];
															$new_class = $existing_classes . ' standard-copy';
															return '<p class="' . esc_attr($new_class) . '"' . $rest . '>';
														},
														$standard_text_1
													);

												
												
												
											?>															
											<div class="standard-text">
												<?php echo $standard_text_1 ?>
											</div>
											<?php
											}
											?>	
                                        </div>
										<?php
										$standard_button_text_1 = get_field( "standard_button_text_1_primary", $post_id );
										$standard_button_text_2 = get_field( "standard_button_text_2_primary", $post_id );
										$standard_button_link_1 = get_field( "standard_button_link_1_primary", $post_id );
										$standard_button_link_2 = get_field( "standard_button_link_2_primary", $post_id );
										
										//link_standard_button_to_enquiry_form_1
										
										
										
											$css_1="";
											$css_2="";
											
											if(!empty($link_standard_button_to_enquiry_form_1)){
												if($link_standard_button_to_enquiry_form_1[0]=='yes'){
													 $standard_button_link_1="#";
													 $css_1="pop-up-trigger";
												}
											}
											//link_standard_button_to_enquiry_form_2
											
											if(!empty($link_standard_button_to_enquiry_form_2)){
												if($link_standard_button_to_enquiry_form_2[0]=='yes'){
													$standard_button_link_2="#";
													$css_2="pop-up-trigger";
												}
											}
										
										
										?>
										
                                        <?php
										if(!empty($button_group) || !empty($standard_button_text_2)){
											?>
											<div class="button-group primary">
													<a href="<?php echo $standard_button_link_1 ?>" class="button mono <?php echo $css_1 ?>"><?php echo $standard_button_text_1 ?></a>
													<a href="<?php echo $standard_button_link_2 ?>" class="button mono <?php echo $css_2 ?>"><?php echo $standard_button_text_2 ?></a>
											</div>
											<?php
										} else {
												if(!empty($standard_button_text_1)){
													?>
													<a href="<?php echo $standard_button_link_1 ?>" class="button primary <?php echo $css_1 ?>"><?php echo $standard_button_text_1 ?></a>
													<?php
												}
										}
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php
						if($image_alignment=="right"){
						?>
                             <div class="column">
								<div class="section-image-wrap image-wrap standard-image-wrap">
									<img src="<?php echo $hero_image_url ?>" alt=" Image" class="sample-image">
								</div>
							</div>
						<?php
						}
						?>
						
						
                    </div>                                    
                </div>
            </section>

<!--





            <section class="section standard-section primary_gradient-bg ">
                <div class="container">
                    <div class="row">                        

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h2 class="standard-title ">So she got to work. </h2>
 
                                            <p class="standard-text">Along with friend David Montgomery, Jo developed the idea of a place for those who are called to the land. A place where farmers could learn new skills, and young people could sink their hands into the soil, perhaps for the very first time.</p>

                                            <p class="standard-text">The idea took shape, a local businessman offered the use of his farm, and they were off and running.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Our_Story_work.jpg" alt=" Our_Story_work" class="sample-image">
                            </div>
                                
                        </div>

                    </div>                                    
                </div>
            </section>










            // intro / standard section (img left )//
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Our_Story_common_ground.jpg" alt="Our_Story_common_ground" class="sample-image">
                            </div>
                        </div>
                        <div class="column">
                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle primary">Our Team</h4>
                                            <h2 class="standard-title ">Common ground, purpose and values.</h2>
                                            <p class="standard-text">In Crookwell we’re fortunate enough to be surrounded by incredibly smart and passionate people, who’ve put their heart and soul into building this place.</p>
                                            <p class="standard-text">Working together we found common ground in our purpose, and values, and everyone is dedicated to the guardianship of this land for the future.</p>
                                        </div>
                                        <div class="button-group primary">
                                            <a href="#" class="button mono">Learn More</a><a href="#" class="button ghost">Enquire Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>

            




           //   legacy / standard section (img left ) //
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Partners_together.jpg" alt="Partners_together" class="sample-image">
                            </div>
                                
                        </div>

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle primary">Working Together</h4>
                                            <h2 class="standard-title ">Lifting us all</h2>
                                            <p class="standard-text">We’ve achieved so much with the help of our partnering organisations.</p>
                                            <p class="standard-text">Working together helps lift the entire industry, strengthens  ties in our community, and benefits everyone living here.</p>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>







            //			legacy / standard section (img left )- //
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Sustainability_legacy.jpg" alt="Sustainability_legacy" class="sample-image">
                            </div>
                                
                        </div>

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle primary">Sustainability</h4>
                                            <h2 class="standard-title ">Led by legacy</h2>
                                            <p class="standard-text">Sustainability means lots of things to lots of people, but we take our cue from the indigenous population who tended this land for thousands of years.</p>
                                            <p class="standard-text">The land owns us, it nourishes us, and it’s our responsibility to look after it in return.</p>
                                            <p class="standard-text">There’s much we can learn from that legacy, and we’ve narrowed it down to a few basic principles, aligned with sustainable development goals.</p>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>

            
            
			
            //- intro / standard section (img left )--//
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Our_Story_hands.jpg" alt="Our_Story_hand" class="sample-image">
                            </div>
                                
                        </div>

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h2 class="standard-title primary">Born in the city, but drawn to the country</h2>
                                            <h4 class="standard-subtitle">Jo Marshall simply felt at home out here.</h4>

                                            <p class="standard-text">Where the sky stretches forever, and fresh air fills your soul. Where there’s room to breathe, and room for a family to grow.</p>
                                            <p class="standard-text">And where, surrounded by farmers who cared for the land, she became aware of the issue that many were facing.</p>
                                            <p class="standard-text">Young people leaving the regions, and leaving a shortage of labour and skills in the agricultural industry, all over Australia.</p>
                                        </div>
                                        <a href="#" class="button ghost">Learn More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>




			// born / standard section (img left )--//
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/About/Our_Story_born.jpg" alt="Our_Story_born" class="sample-image">
                            </div>
                                
                        </div>

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle">Foundation</h4>
                                            <h2 class="standard-title primary">The AAC was born</h2>
                                            
                                            <p class="standard-text">Now the Australian Agriculture Centre welcomes people from all over the country, with school excursions delivering exceptional experiences, for more and more children.</p>
                                            <p class="standard-text">Women in Ag is a focus too, empowering women with skills in agricultural science, animal husbandry, wool science, tractors, quads, chainsaws you name it.</p>
                                            <p class="standard-text">Our impact is growing, our mission the same, to deliver the skills and training our farmers require, and give young people the chance to experience life on a farm.</p>
                                            <p class="standard-text">So if you want to get involved, take a course or partner with us in some way, just let us know, we’d love to hear from you.</p>

                                        </div>
                                        <a href="#" class="button primary">Learn More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>








			<section class="section standard-section ">
                <div class="container">
                    <div class="row">                        
                        <div class="column">
                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle primary">Agricultural Training</h4>
                                            <h2 class="standard-title ">Advancing Australian Agriculture</h2>
                                            <p class="standard-text">One of the great things about Australian Agriculture is that we constantly invest in R&D, leading to new technologies, increased efficiencies and farm management practices that keep us one step ahead of our competitors overseas.
                                            <p class="standard-text">The down side however, is staying on top of it all. That’s why we’re constantly on the lookout for new developments that can improve your performance on the farm, and the profitability of your business. </p>
                                        </div>
                                        <div class="group">
                                            <a href="#" class="button primary">Learn More</a>
                                            <a href="#" class="button ghost">Enquire Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/training_agtraining.jpg" alt=" Image" class="sample-image">
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>






<section class="section standard-section ">
                <div class="container">
                    <div class="row">                        
                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <h4 class="standard-subtitle primary">School Excursions</h4>
                                            <h2 class="standard-title ">Expand your students horizons, and totally blow their minds.</h2>
                                            <p class="standard-text">Everyone remembers their first time on a farm. That’s why we’ve opened the doors to all of those future agriculturists out there, who perhaps don’t even know it as yet. Primary and secondary school children who might never have been on a farm before, giving them an experience they’ll never forget. </p>
                                        </div>
                                        <div class="group">
                                            <a href="#" class="button primary">Primary School</a>
                                            <a href="#" class="button ghost">High School</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/content/home_future.jpg" alt=" Image" class="sample-image">
                            </div>
                                
                        </div>

                    </div>                                    
                </div>
            </section>





-->