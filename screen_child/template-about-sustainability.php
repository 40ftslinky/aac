<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: About Sustainability
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

			?>

            <!-- vision -->
            <section class="section vision-section white_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-heading-wrap">
							<?php
							$sustainability_vision_title = get_field('sustainability_vision_title', $page_id);
							$inspire_the_farmers_of_tomorrow = get_field('sustainability_vision_title', $page_id);
							
							$vision_main_body_text = get_field('vision_main_body_text', $page_id);

							
							?>
                                <h4 class="primary-text"><?php echo $sustainability_vision_title ?></h4>                            
                                <h2><?php echo $inspire_the_farmers_of_tomorrow ?></h2>
							</div> 
							<div class="standard-text">
							<p class="body-2"><?php echo $vision_main_body_text ?></p>
							</div>
							                       
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
                                    <?php
									
										$vision_card_title_1 = get_field('vision_card_title_1', $page_id);
										$vision_card_text_1 = get_field('vision_card_text_1', $page_id);
										$vision_card_image_1  = get_field('vision_card_image_1', $page_id);
									?>
                                    <div class="vision-card ">
                                        <div class="vision-card-image">
                                            <img src="<?php echo $vision_card_image_1; ?>" alt="<?php echo $vision_card_title_1; ?>" class="vision-image">
                                        </div>
                                        <div class="vision-card-content">
                                            <h4 class="vision-card-title"><?php echo $vision_card_title_1; ?></h4>
                                            <div class="vision-card-text">
                                                <div class="vision-text"><?php echo $vision_card_text_1; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
									<?php
										$vision_card_title_2 = get_field('vision_card_title_2', $page_id);
										$vision_card_text_2 = get_field('vision_card_text_2', $page_id);
										$vision_card_image_2  = get_field('vision_card_image_2', $page_id);
									?>
                                    <div class="vision-card ">
                                        <div class="vision-card-image">
                                            <img src="<?php echo $vision_card_image_2; ?>" alt="<?php echo $vision_card_title_2; ?>" class="vision-image">
                                        </div>
                                        <div class="vision-card-content">
                                            <h4 class="vision-card-title"><?php echo $vision_card_title_2; ?></h4>
                                            <div class="vision-card-text">
                                                <div class="vision-text"><?php echo $vision_card_text_2; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
									<?php
										$vision_card_title_3 = get_field('vision_card_title_3', $page_id);
										$vision_card_text_3 = get_field('vision_card_text_3', $page_id);
										$vision_card_image_3  = get_field('vision_card_image_3', $page_id);
									?>
                                    <div class="vision-card ">
                                        <div class="vision-card-image">
                                            <img src="<?php echo $vision_card_image_3; ?>" alt="<?php echo $vision_card_title_3; ?>" class="vision-image">
                                        </div>
                                        <div class="vision-card-content">
                                            <h4 class="vision-card-title"><?php echo $vision_card_title_3; ?></h4>
                                            <div class="vision-card-text">
                                                <div class="vision-text"><?php echo $vision_card_text_3; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
                                   

                                    

                                    
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>


            <!-- sustainability --><!-- TODO ACF -->
            <section class="section sustainability-section">
                <div class="container">
                    <div class="row">
                        <div class="column">
								<?php
								$exchange_card_title_1 = get_field('exchange_card_title', $page_id);
								$exchange_card_title_2 = get_field('exchange_card_title_2', $page_id);
								$exchange_main_text = get_field('exchange_main_text', $page_id);
								?>
								<div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo $exchange_card_title_1 ?></h4>                            
                                <h2><?php echo $exchange_card_title_2 ?></h2>
								</div>   
								<div class="standard-heading">
                                <p class="body-2"><?php echo $exchange_main_text; ?></p>
                            </div>                        
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">
                           <div class="column_inner">

								<?php
									$vision_card_title_4 = get_field('vision_card_title_4', $page_id);
									$vision_card_text_4 = get_field('vision_card_text_4', $page_id);
									$vision_card_image_4  = get_field('vision_card_image_4', $page_id);
								?>
                                    <div class="sustainability-card ">
                                        <div class="sustainability-card-image">
                                            <img src="<?php echo $vision_card_image_4 ?>" alt="Sustainability: Research" class="vision-image">
                                        </div>
                                        <div class="sustainability-card-content">
                                            <h4 class="sustainability-card-title"><?php echo $vision_card_title_4 ?></h4>
                                            <div class="sustainability-card-text">
                                                <div class="sustainability-text"><?php echo $vision_card_text_4 ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
								<?php
									$vision_card_title_5 = get_field('vision_card_title_5', $page_id);
									$vision_card_text_5 = get_field('vision_card_text_5', $page_id);
									$vision_card_image_5  = get_field('vision_card_image_5', $page_id);
								?>
                                    <div class="sustainability-card ">
                                        <div class="sustainability-card-image">
                                            <img src="<?php echo $vision_card_image_5 ?>" alt="Sustainability: Export" class="vision-image">
                                        </div>
                                        <div class="sustainability-card-content">
                                            <h4 class="sustainability-card-title"><?php echo $vision_card_title_5 ?></h4>
                                            <div class="sustainability-card-text">
                                                <div class="sustainability-text"><?php echo $vision_card_text_5 ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
								<?php
									$vision_card_title_6 = get_field('vision_card_title_6', $page_id);
									$vision_card_text_6 = get_field('vision_card_text_6', $page_id);
									$vision_card_image_6  = get_field('vision_card_image_6', $page_id);
								?>
                                    <div class="sustainability-card ">
                                        <div class="sustainability-card-image">
                                            <img src="<?php echo $vision_card_image_6 ?>" alt="Sustainability: Gross" class="vision-image">
                                        </div>
                                        <div class="sustainability-card-content">
                                            <h4 class="sustainability-card-title"><?php echo $vision_card_title_6 ?></h4>
                                            <div class="sustainability-card-text">
                                                <div class="sustainability-text"><?php echo $vision_card_text_6 ?></div>
                                            </div>
                                        </div>                                    
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>



            <!-- blockquote -->
			<?php
				include "section/blockquote.php";
			?>
			
			



            <!-- Production / icon --><!-- TODO ACF -->
            <section class="section standard-section white-gradient-bg icon-card-section">
                <div class="container">
                    <div class="row">
                        <div class="column">

                            <div class="column_inner">

                                <div class="section-heading-wrap">
                                    <h4 class="primary-text">Lasting Production</h4>                            
                                    <h2>Producers at the heart of a healthy Australia</h2>
								</div>   
								<div class="standard-text">		
                                    <p class="body-2">Help Australian farmers produce more food and fibre, leaving the land in a healthier state, delivering a healthier product, putting producers at the heart of a healthy Australia.</p>
                                </div>   
                            
                            </div>
                                
                        </div>                    

                        <div class="column">

                           <div class="column_inner icon-card-grid">
                                    
                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/svg/default.svg" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title">Good Health and Well Being</h3>
                                            <p class="icon-card-text">Ensure healthy lives and promote well-being for all at all ages.</p>
                                        </div>                                    
                                    </div>

                                    <div class="card icon-card">
                                        <div class="icon-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/svg/default.svg" alt="icon: default" class="vision-image">
                                        </div>
                                        <div class="icon-card-content">
                                            <h3 class="icon-card-title">Climate Action</h3>
                                            <p class="icon-card-text">Take urgent action to combat climate change and its impacts.</p>
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
