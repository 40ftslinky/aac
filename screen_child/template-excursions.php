<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Excursions Template (AAC)
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
				
				$Standard = 1;
				
				include "section/standard-section.php";
				
				include "section/blockquote.php";
				
				$Standard = 2;
				
				include "section/standard-section.php";


				$checkbox_to_hide_the_product_carousel  = get_field('checkbox_to_hide_the_product_carousel', $page_id);
				
				$checkbox_to_hide_the_contact_form  = get_field('checkbox_to_hide_the_contact_form', $page_id);				
			 
				if($checkbox_to_hide_the_product_carousel[0]!="yes"){
					
					$carousel_product_category = get_field('carousel_product_category', $page_id);	
					
					$term = get_term($carousel_product_category[0], 'product_cat');
					


					if ($term && !is_wp_error($term)) {
						$category = $term->slug;
						
					}

					
					include "section/upcoming-program.php";
				}
				if($checkbox_to_hide_the_contact_form[0]!="yes"){
					include "section/contact.php";
				}
				
				
			?>
        </main>

<?php
get_footer();
