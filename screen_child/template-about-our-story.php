<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: About Our Story
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
				
				$Standard = 1;

				include "section/standard-section.php";
				
				include "section/standard-section-primary.php";

				$Standard = 2;
				
				include "section/standard-section.php";
				
				$category = 'upcoming';
				include "section/upcoming-program.php";
			 

				include "section/contact.php";
				
			?>

        </main>

<?php
get_footer();
