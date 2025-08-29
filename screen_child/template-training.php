<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Training Template (AAC)
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

				$button_group = 1;
				
				$image_alignment = "right";
			
				include "section/standard-section.php";

				include "section/blockquote.php";
				
			?>		
            <!-- 04 facts icon --><!-- TODO ACF -->
            <section class="section facts-section">
                <div class="container">
                    
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
                                    <?php
									$IMG= get_field('facts_card_image_1', $page_id);
									if(!empty($IMG['sizes']['large'])){
										$facts_card_image_1 = $IMG['sizes']['large'];
									} else {
										$facts_card_image_1 = $IMG['url'];	
									}
									
									$IMG= get_field('facts_card_image_2', $page_id);
									if(!empty($IMG['sizes']['large'])){
										$facts_card_image_2 = $IMG['sizes']['large'];
									} else {
										$facts_card_image_2 = $IMG['url'];	
									}
									
									$IMG= get_field('facts_card_image_3', $page_id);
									if(!empty($IMG['sizes']['large'])){
										$facts_card_image_3 = $IMG['sizes']['large'];
									} else {
										$facts_card_image_3 = $IMG['url'];	
									}
									
									$facts_card_title_1=get_field('facts_card_title_1', $page_id);
									$facts_card_title_2=get_field('facts_card_title_2', $page_id);
									$facts_card_title_3=get_field('facts_card_title_3', $page_id);
									
									$card_facts_text_1 =get_field('card_facts_text_1', $page_id);
									$card_facts_text_2 =get_field('card_facts_text_2', $page_id);
									$card_facts_text_3 =get_field('card_facts_text_3', $page_id);
									
									?>
                                    <!-- 01 -->
                                    <div class="facts-card ">
                                        <div class="facts-card-image">
                                            <img src="<?php echo $facts_card_image_1; ?>" alt="Fact: Research" class="vision-image">
                                        </div>
                                        <div class="facts-card-content">
                                            <h1 class="facts-card-title"><span><?php echo $facts_card_title_1; ?></span></h1>
                                            <div class="facts-card-text">
                                                <div class="facts-text"><?php echo $card_facts_text_1; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <!-- 02 -->
                                    <div class="facts-card ">
                                        <div class="facts-card-image">
                                            <img src="<?php echo $facts_card_image_2; ?>" alt="Fact: Export" class="vision-image">
                                        </div>
                                        <div class="facts-card-content">
                                            <h1 class="facts-card-title"><span><?php echo $facts_card_title_2; ?></span></h1>
                                            <div class="facts-card-text">
                                                <div class="facts-text"><?php echo $card_facts_text_2; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <!-- 03 -->
                                    <div class="facts-card ">
                                        <div class="facts-card-image">
                                            <img src="<?php echo $facts_card_image_3; ?>" alt="Fact: Gross" class="vision-image">
                                        </div>
                                        <div class="facts-card-content">
                                            <h1 class="facts-card-title"><span><?php echo $facts_card_title_3; ?></span></h1>
                                            <div class="facts-card-text">
                                                <div class="facts-text"><?php echo $card_facts_text_3; ?></div>
                                            </div>
                                        </div>                                    
                                    </div>

                                    

                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>

            <!-- 05 half cards / programs--><!-- TODO ACF -->
            <section class="section programs-section white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <?php
							$types_of_programs=get_field('types_of_programs', $page_id);
							
							
							?>
                            <div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo $types_of_programs ?></h4>                            
                                <!-- <h2>Programs</h2> -->
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
                                    
                                    <!-- 01 -->
									<?php
									$basic_skills=get_field('basic_skills', $page_id);
									$basic_skills_description =get_field('basic_skills_description', $page_id);
									$basic_skills_button_text = get_field('basic_skills_button_text', $page_id);
									$basic_skills_image= get_field('basic_skills_image', $page_id);
									
									if(!empty($basic_skills_image['sizes']['large'])){
										$basic_skills_image_url = $basic_skills_image['sizes']['large'];
									} else {
										$basic_skills_image_url = $basic_skills_image['url'];	
									}
									?>
                                    <div class="programs-card ">
                                        <div class="programs-card-image">
                                            <img src="<?php echo $basic_skills_image_url; ?>" alt="<?php echo $basic_skills ?>" class="biog-image">
                                        </div>
                                        <div class="programs-card-content">
                                            <div class="programs-card-text">
                                                <h2 class="programs-card-title"><?php echo $basic_skills ?></h2>
                                                <div class="programs-text">
                                                    <p><?php echo $basic_skills_description ?></p>
                                                </div>
                                            </div>
                                            <a href="#" class="button primary"><?php echo $basic_skills_button_text ?></a>
                                        </div>                                    
                                    </div>

                                    <?php
									
									$women_title=get_field('women_title', $page_id);
									$womens_description =get_field('womens_description', $page_id);
									$basic_skills_button_text_copy = get_field('basic_skills_button_text_copy', $page_id);
									$women_agriculture_image= get_field('women_agriculture_image', $page_id);
									
									//	print_r($women_agriculture_image);
									
									if(!empty($women_agriculture_image['sizes']['large'])){
										$women_agriculture_image_url = $women_agriculture_image['sizes']['large'];
									} else {
										$women_agriculture_image_url = $women_agriculture_image['url'];	
									}
									
									?>
                                    <div class="programs-card ">
                                        <div class="programs-card-image">
                                            <img src="<?php echo $women_agriculture_image_url; ?>" alt="<?php echo $women_title ?>" class="biog-image">
                                        </div>
                                        <div class="programs-card-content">
                                            <div class="programs-card-text">
                                                <h2 class="programs-card-title"><?php echo $women_title ?></h2>
                                                <div class="programs-text">
                                                    <p><?php echo $womens_description ?></p>
                                                </div>
                                            </div>
                                            <a href="#" class="button primary ghost"><?php echo $basic_skills_button_text_copy ?></a>
                                        </div>                                    
                                    </div>
                                    


                                    
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>

            <!-- current  --><!-- TODO ACF -->
            <!-- <section class="section standard-section current-program-section white_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text">Current Programs</h4>
							</div>
							<div class="standard-text">
                                <p>Current programs listed below, and a calendar of all programs <a href="">here</a></p>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">

                            <div class="carousel program_carousel">
                                                                        

                                    <div class="carousel-cell product-card current-product-card">
                                        <div class="product-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="#" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>
                                                                       

                                    <div class="carousel-cell product-card current-product-card">
                                        <div class="product-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="#" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>


                                    <div class="carousel-cell product-card current-product-card">
                                        <div class="product-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="#" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>


                                    <div class="carousel-cell product-card current-product-card">
                                        <div class="product-card-image">
                                            <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="#" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>

                                    
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>-->
			
             <?php
			 
			 $category = 'current';
				include "section/upcoming-program.php";
				
				
			 $category = 'upcoming';
				include "section/upcoming-program.php";
				
				include "section/contact.php";
			?>
        </main>
<?php
get_footer();