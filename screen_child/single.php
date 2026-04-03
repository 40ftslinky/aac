<?php
/**
 * The template for displaying all single event.
 *
 * @package storefront
 */
 
 
	$pageType = 'posts';
 
 
	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;
	
	$content = $post->post_content;

	$page_id = $post->ID;	
	
	get_header(); 

 ?>
 
         <main>
			<?php
			
				include "section/split-hero-post.php";
			
			?>
           
            <!-- half hero img right-->
            <!-- <section class="section split-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                

                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
                                                <h1 class="split-hero-title">Single Post</h1>
                                                <h2 class="split-hero-subtitle">No Image</h2>

                                            </div>
                                            <a href="#" class="button mono">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>
			-->



            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        

                        <div class="column">

                           <div class="content-item">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <!--<div class="standard-heading"> 
												<?php
														$categories = get_the_category();
														if ( ! empty( $categories ) ) {
															$cat_names = wp_list_pluck( $categories, 'name' );
															$output = count( $cat_names ) > 1 ? implode( ' | ', $cat_names ) : $cat_names[0];
															echo '<h4 class="standard-subtitle primary">' . esc_html( $output ) . '</h4>';
														}
												
														$standard_section_subheading = get_field('standard_section_subheading', $page_id);
														
												?>

												<?php
												if(!empty($standard_section_subheading)){
													?>
													<h2 class="standard-title "><?php echo $standard_section_subheading ?></h2>
													<?php
												}
												?>
                                            </div> -->
											
											<div class="standard-heading"> 
												<?php
													/*
													$categories = get_the_category();
													if ( ! empty( $categories ) ) {
														$cat_names = wp_list_pluck( $categories, 'name' );
														$output = count( $cat_names ) > 1 ? implode( ' | ', $cat_names ) : $cat_names[0];
														echo '<h4 class="standard-subtitle primary">' . esc_html( $output ) . '</h4>';
													}
													
													*/
													
													// Add post date below category
													$post_date = get_the_date( 'F j, Y' ); // e.g., August 30, 2025
													echo '<h5 class="standard-date">' . esc_html( $post_date ) . '</h5>';

													$standard_section_subheading = get_field('standard_section_subheading', $page_id);
												?>

												<?php if ( ! empty( $standard_section_subheading ) ) : ?>
													<h2 class="standard-title"><?php echo esc_html( $standard_section_subheading ); ?></h2>
												<?php endif; ?>
											</div>
											
											
											<div class="standard-text">
												<?php
													
													echo wpautop($content);

												?>
											</div>
                                          
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

