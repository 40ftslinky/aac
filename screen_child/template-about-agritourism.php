<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: About Agritourism
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	global $post;

	$page_id = $post->ID;	
	
	get_header(); ?>

		<main>
		

            
            <!-- half hero img right-->
			<?php
			
			
				include "section/split-hero.php";
				
				include "section/standard-section.php";
				
				$BlockQuote=1;
				
				include "section/blockquote.php";
				
				
			?>	


            <!-- Production / icon  TODO ACF    -->
            <section class="section standard-section white-gradient-bg icon-card-section">
                <div class="container">
                    <div class="row">
                        <div class="column">

                            <div class="column_inner">
								<?php
								$agritourism_future_title =get_field('agritourism_future_title', $page_id);
								$planning_subtitle_1 =get_field('planning_subtitle_1', $page_id);
								$future_planning_main_text =get_field('future_planning_main_text', $page_id);
								
								?>
                                <div class="section-heading-wrap">
                                    <h4 class="primary-text"><?php echo $agritourism_future_title; ?></h4>                            
                                    <h2><?php echo $planning_subtitle_1; ?></h2>
									<?php echo $future_planning_main_text; ?>
									</div>   
                            
                            </div>
                                
                        </div> 
                    </div>                   
                    <div class="row">
                        
                        <div class="column">

                           <div class="column_inner icon-card-grid">
                                    <?php
									$agritourism_card_image =get_field('agritourism_card_image_1', $page_id);
									$agritourism_card_title = get_field('agritourism_card_title_1',  $page_id);
									$agritourism_card_body  = get_field('agritourism_card_body_1',  $page_id);
									?>
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="<?php echo $agritourism_card_image; ?>" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title "><?php echo $agritourism_card_title ?></h3>
                                            <div><?php echo $agritourism_card_body ?></div>
                                        </div>                                    
                                    </div>
                                    <?php
									$agritourism_card_image =get_field('agritourism_card_image_2', $page_id);
									$agritourism_card_title = get_field('agritourism_card_title_2',  $page_id);
									$agritourism_card_body  = get_field('agritourism_card_body_2',  $page_id);
									?>
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="<?php echo $agritourism_card_image; ?>" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title "><?php echo $agritourism_card_title ?></h3>
                                            <div><?php echo $agritourism_card_body ?></div>
                                        </div>                                    
                                    </div>
                                    <?php
									$agritourism_card_image =get_field('agritourism_card_image_3', $page_id);
									$agritourism_card_title = get_field('agritourism_card_title_3',  $page_id);
									$agritourism_card_body  = get_field('agritourism_card_body_3',  $page_id);
									?>
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="<?php echo $agritourism_card_image; ?>" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title "><?php echo $agritourism_card_title ?></h3>
                                            <div><?php echo $agritourism_card_body ?></div>
                                        </div>                                    
                                    </div>

                                    <?php
									$agritourism_card_image =get_field('agritourism_card_image_4', $page_id);
									$agritourism_card_title = get_field('agritourism_card_title_4',  $page_id);
									$agritourism_card_body  = get_field('agritourism_card_body_4',  $page_id);
									?>
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="<?php echo $agritourism_card_image; ?>" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title "><?php echo $agritourism_card_title ?></h3>
                                            <div><?php echo $agritourism_card_body ?></div>
                                        </div>                                    
                                    </div>
                                    <?php
									$agritourism_card_image =get_field('agritourism_card_image_5', $page_id);
									$agritourism_card_title = get_field('agritourism_card_title_5',  $page_id);
									$agritourism_card_body  = get_field('agritourism_card_body_5',  $page_id);
									print "<!--  agritourism_card_image = $agritourism_card_image               -->";
									print "<!--  agritourism_card_title = $agritourism_card_title               -->";
									print "<!--  agritourism_card_body = $agritourism_card_body               -->";
									?>
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="<?php echo $agritourism_card_image; ?>" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title "><?php echo $agritourism_card_title ?></h3>
                                            <div><?php echo $agritourism_card_body ?></div>
                                        </div>                                    
                                    </div>
                                    

                                </div>
                            </div>

                        </div>
                    </div>                                    

            </section>



			<?php
			
				$BlockQuote=2;
				
				include "section/blockquote.php";
				

				include "section/upcoming-program.php";

				include "section/contact.php";
			?>


        </main>
		


<?php
get_footer();
