<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Default Template (AAC)
 *
 * @package storefront
 */


	$child_theme_dir = basename(get_stylesheet_directory());
	global $post;

	$page_id = $post->ID;	
	
	get_header(); 
	
	
	$hero_image = get_field( "split_hero_image", $page_id );
	$hero_heading = get_field( "split_hero_heading", $page_id );
	$hero_subheading = get_field( "split_hero_subheading", $page_id );

	if(!empty($hero_heading) || !empty($hero_subheading) || !empty($hero_image))
	{
	include "section/split-hero.php";
	}
	
	?>

		<main>
		
		
			<?php
				while ( have_posts() ) :
					the_post();

					do_action( 'storefront_page_before' );

					get_template_part( 'content', 'page' );

					/**
					 * Functions hooked in to storefront_page_after action
					 *
					 * @hooked storefront_display_comments - 10
					 */
					do_action( 'storefront_page_after' );

				endwhile; // End of the loop.

			 
				$checkbox_to_hide_the_product_carousel  = get_field('checkbox_to_hide_the_product_carousel', $page_id);
				
				if(!isset($checkbox_to_hide_the_product_carousel[0])){
					$checkbox_to_hide_the_product_carousel[0] = "no";
					
				}				
				$checkbox_to_hide_the_contact_form  = get_field('checkbox_to_hide_the_contact_form', $page_id);			
				
				if(!isset($checkbox_to_hide_the_contact_form[0])){
					$checkbox_to_hide_the_contact_form[0] = "no";
					
				}
				

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
