<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage Template (AAC)
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;

	$page_id = $post->ID;	

	
	get_header(); ?>

		<main>
			<?php	
			
				include "section/generic-hero.php";	
				
				$category = 'current';
				
				include "section/current-program.php";
				
				$category = 'upcoming';

				include "section/upcoming-program.php";	
				
				include "section/standard-section.php";	

				
			?>
			

            
            <!-- mission -->
			
            <section class="section standard-section mission-section">
                <div class="container">
                    
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
                                    <?php
									
										
									
										$homepage_mission_image_1 = get_field( "homepage_mission_image_1", $page_id );
										if(!empty($homepage_mission_image_1['sizes']['2048x2048'])){
											$mission_image_url = $homepage_mission_image_1['sizes']['2048x2048'];
										} else {
											$mission_image_url = $homepage_mission_image_1['url'];	
										}
									  $homepage_mission_title_1 = get_field( "homepage_mission_title_1", $page_id );
										$homepage_mission_main_text_1 = get_field( "homepage_mission_main_text_1", $page_id );
										$mission_button_text_1= get_field( "mission_button_text_1", $page_id );
										$mission_button_link_1 = get_field( "mission_button_link_1", $page_id );
										$mission_button_to_enquiry_form_1 = get_field( "mission_button_to_enquiry_form_1", $page_id );
										$css_1 = "";
										if(!empty($mission_button_to_enquiry_form_1)){
											if($mission_button_to_enquiry_form_1[0]=='yes'){
												 $mission_button_link_1="#";
												 $css_1="pop-up-trigger";
											}
										}
								
									
									?>
                                    <div class="mission-card white-bg ">
                                        <div class="mission-card-image">
                                            <img src="<?php echo $mission_image_url; ?>" alt="mission" class="mission-image">
                                        </div>
                                        <div class="mission-card-content">
                                            <div class="mission-card-text">
                                                <h4 class="mission-card-title primary"><?php echo $homepage_mission_title_1 ?></h4>
                                                <div class="mission-text">
												<?php echo $homepage_mission_main_text_1; ?>
												</div>
                                            </div>
                                            <a href="<?php echo $mission_button_link_1 ?>" class="button primary <?php echo $css_1 ?>">
											<?php echo $mission_button_text_1 ?>
											</a>                                    
                                        </div>
                                    </div>                                                   

									<?php

										$homepage_mission_image_2 = get_field( "homepage_mission_image_2", $page_id );
										if(!empty($homepage_mission_image_2['sizes']['2048x2048'])){
											$mission_image_url = $homepage_mission_image_2['sizes']['2048x2048'];
										} else {
											$mission_image_url = $homepage_mission_image_2['url'];	
										}
									  $homepage_mission_title_2 = get_field( "homepage_mission_title_2", $page_id );
										$homepage_mission_main_text_2 = get_field( "homepage_mission_main_text_2", $page_id );
										$mission_button_text_2= get_field( "mission_button_text_2", $page_id );
										$mission_button_link_2 = get_field( "mission_button_link_2", $page_id );
										$mission_button_to_enquiry_form_2 = get_field( "mission_button_to_enquiry_form_2", $page_id );
										$css_1 = "";
										if(!empty($mission_button_to_enquiry_form_2)){
											if($mission_button_to_enquiry_form_2[0]=='yes'){
												 $mission_button_link_2="#";
												 $css_1="pop-up-trigger";
											}
										}
									?>
                                    <div class="mission-card primary-bg">
                                        <div class="mission-card-image">
                                            <img src="<?php echo $mission_image_url; ?>" alt="Vision" class="mission-image">
                                        </div>
                                        <div class="mission-card-content">
                                            <div class="mission-card-text">
                                                <h4 class="mission-card-title"><?php echo $homepage_mission_title_2; ?></h4>
                                                <div class="mission-text"><?php echo $homepage_mission_main_text_2; ?></div>
                                            </div>
                                            <a href="<?php echo $mission_button_link_2; ?>" class="button white <?php echo $css_1; ?>"><?php echo $mission_button_text_2; ?></a>                                    
                                        </div>                                    
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>  
            
            
			 <!-- generic-hero-half section -->
			<?php	
				include "section/generic-hero-half.php";	
			?>




            <!-- standard section -->
			<?php
			
				$Standard = 2;
				
				include "section/standard-section.php";
			?>
			


			<!-- blockquote -->
			<?php
				include "section/blockquote.php";
			?>



            <!-- contact -->
			<?php
				include "section/contact.php";
			?>




        </main><!-- end of main -->
		
		
		
		
<!-- include the footer -->
<?php
get_footer();
