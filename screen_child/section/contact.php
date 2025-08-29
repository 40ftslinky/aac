<?php

		
		global $page_id;
		
		if(empty($page_id )){
		
			global $post;
		
			$post_id = $post->ID;		
		} else {
			
			$post_id = $page_id;
			
		}
		



?>



		<section class="section contact-section">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
										<?php

										$homepage_id = getHomepagePostId();
										print "<!--   **homepage_id=$homepage_id           -->";
										$contact_us_title = get_field('contact_us_title', $homepage_id );
										$contact_us_subtitle = get_field('contact_us_subtitle', $homepage_id );
										$contact_us_paragraph_1 = get_field('contact_us_paragraph_1', $homepage_id );
										$contact_us_paragraph_2 = get_field('contact_us_paragraph_2', $homepage_id );

										
										?>
											<div class="standard-heading">
                                            <h4 class="standard-subtitle primary"><?php echo $contact_us_title ?></h4>
                                            <h2 class="title"><?php echo $contact_us_subtitle ?></h2>
											</div>
											<div class="standard-text">
                                            <p class="body-1"><?php echo $contact_us_paragraph_1 ?></p>
                                            <p class="body-3"><?php echo $contact_us_paragraph_2 ?></p>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>

                        <div class="column">

                            <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">

                                        <div class="form_wrap">
										
											<?php
											$contact_us_name_label = get_field('contact_us_name_label', $homepage_id );
											$contact_us_name_label_2 = get_field('contact_us_name_label_2', $homepage_id );
											
											$contact_us_name_label_3 = get_field('contact_us_name_label_3', $homepage_id );
											$contact_us_email_placeholder = get_field('contact_us_email_placeholder', $homepage_id );
											
											//contact_us_email_provider_label
											$contact_us_message_label = get_field('contact_us_message_label', $homepage_id );
											$contact_us_message_placeholder = get_field('contact_us_message_placeholder', $homepage_id );
											$contact_us_terms_conditions = get_field('contact_us_terms_conditions', $homepage_id );
											//contact_us_button_text
											$contact_us_button_text = get_field('contact_us_button_text', $homepage_id );											
											$contact_us_email_provider_label = get_field('contact_us_email_provider_label', $homepage_id );
											
											?>					
											
											<?php
											
											echo do_shortcode('[contact-form-7 id="d55e27e" title="Contact form (Standard)"]');
											
											?>

											
										<!--
                                        <form>

                                            <div class="form-group">
                                                <label class="required" for="name"><?php echo $contact_us_name_label ?></label>
                                                <input type="text" id="name" name="name" placeholder="<?php echo $contact_us_name_label_2 ?>" required>
                                                <div id="error" class="error-msg">Error Message visible.</div>

                                            </div>
                                            <div class="form-group">
                                                <label for="email"><?php echo $contact_us_name_label_3 ?></label>
                                                <input type="email" id="email" name="email" placeholder="<?php echo $contact_us_email_placeholder ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Select:</label>
                                                <select id="email" name="email" required class="custom-select">
                                                    <option value="" disabled selected><?php echo $contact_us_email_provider_label ?></option>
                                                    <option value="gmail">Gmail</option>
                                                    <option value="yahoo">Yahoo</option>
                                                    <option value="outlook">Outlook</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
											<?php

											
											?>
                                            <div class="form-group">
                                                <label for="message"><?php echo $contact_us_message_label ?></label>
                                                <textarea id="message" name="message" placeholder="<?php echo $contact_us_message_placeholder ?>" required></textarea>
                                            </div>
                                            <div class="form-group checkbox-group">
                                                
                                                <input type="checkbox" id="tsandcs" name="vehicle1" value="agree" required>
                                                <label for="tsandcs"><?php echo $contact_us_terms_conditions ?></label>
                                            </div>

                                            <button type="submit" class="button-medium primary"><?php echo $contact_us_button_text ?></button>
                                        </form>
										-->
										
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>
			<!-- end of contact section -->