<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Contact Template (AAC)
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	global $post;

	$page_id = $post->ID;	
	
	get_header(); ?>


        <main>

            
            
            <!-- half hero img right-->
            <section class="section contact-hero hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                
                                <!--  -->
                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
											<?php
											$Contact_Title=get_the_title();
											?>
                                                <h1 class="split-hero-title"><?php echo $Contact_Title ?></h1>
												<?php
													$contact_hero_subheading = get_field('contact_hero_subheading', $page_id);
													$contact_hero_button_text = get_field('contact_hero_button_text', $page_id);
												?>
                                                <h2 class="split-hero-subtitle"><?php echo $contact_hero_subheading ?></h2>

                                            </div>
                                            <button  class="button mono pop-up-trigger"><?php echo $contact_hero_button_text ?></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>



            <!-- legacy / standard section (img left )-->
            <section class="section contact-section standard-section ">
                <div class="container">
                    <div class="row">
                        

                        <div class="column">

                           <div class="content-item">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">

                                            <div class="standard-heading"> 
												<?php
													$contact_standard_section_title = get_field('contact_standard_section_title', $page_id);
													$contact_standard_section_subtitle = get_field('contact_standard_section_subtitle', $page_id);
													$contact_standard_section_main_text = get_field('contact_standard_section_main_text', $page_id);
												
												?>
                                                <h4 class="standard-subtitle primary"><?php echo $contact_standard_section_title ?></h4>
                                                <h2 class="standard-title "><?php echo $contact_standard_section_subtitle ?></h2>
                                            </div>
                                            <div class="standard-text">
											<?php echo $contact_standard_section_main_text ?>
                                            </div>
                                            
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="column">

                            <div class="content-item">
                                <div class="column-content">
                                    <div class="column-content-item">

                                        <div class="form_wrap">
                                        <!--<form>
                                
                                            <div class="form-group">
                                                <label class="required" for="name">Name:</label>
                                                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                                <div id="error" class="error-msg">Error Message visible.</div>

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Select:</label>
                                                <select id="email" name="email" required class="custom-select">
                                                    <option value="" disabled selected>Enquiry Type</option>
                                                    <option value="type 01">Type 01</option>
                                                    <option value="type 02">Type 02</option>
                                                    <option value="type 03">Type 03</option>
                                                    <option value="type 04">Type 04</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                                            </div>
                                            <div class="form-group checkbox-group">
                                                <input type="checkbox" id="tsandcs" name="vehicle1" value="agree" required>
                                                <label for="tsandcs">I agree to your <a href="#t&cs"></a>terms and conditions</a>.</label>
                                            </div>

                                            <button type="submit" class="button-medium primary">Submit</button>
                                        </form>
										-->
										<?php
										//[contact-form-7 id="d55e27e" title="Contact form (Standard)"]
										echo do_shortcode('[contact-form-7 id="d55e27e" title="Contact form (Standard)"]');
										?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>                                    
                </div>
            </section>


            <?php
			
				$category = 'upcoming';
				include "section/upcoming-program.php";
				
				include "section/contact.php";
			
			
			?>
            

        </main>




<?php



get_footer();
