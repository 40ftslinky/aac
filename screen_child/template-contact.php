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

            				
				
				<?php
				include "section/split-hero.php";

				?>


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
                                        
										<!-- SHORT CODE HERE -->
										<?php
										//[contact-form-7 id="d55e27e" title="Contact form (Standard)"]
										$contact_form_shortcode = get_field('contact_form_shortcode', $page_id);
										
										//echo do_shortcode('[contact-form-7 id="d55e27e" title="Contact form (Standard)"]');
										echo do_shortcode($contact_form_shortcode);
										?>
										<!-- END SHORT CODE   -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>                                    
                </div>
            </section>

            <?php
			
			 
				$checkbox_to_hide_the_product_carousel  = get_field('checkbox_to_hide_the_product_carousel', $page_id);
				
				$checkbox_to_hide_the_contact_form  = get_field('checkbox_to_hide_the_contact_form', $page_id);				
			 
				if($checkbox_to_hide_the_product_carousel[0]!="yes"){
					include "section/upcoming-program.php";
				}
				if($checkbox_to_hide_the_contact_form[0]!="yes"){
					include "section/contact.php";
				}
				
			
			
			?>
            

        </main>




<?php



get_footer();
