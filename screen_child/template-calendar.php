<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Calendar Template (AAC)
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	global $post;

	$page_id = $post->ID;	
	
	get_header(); 
	
	
	
	?>

        <main>


		<?php
						
				include "section/generic-hero.php";	
				
				
					$standard_title_primary = get_field( "standard_title_primary", $page_id );
					$standard_sub_title = get_field( "standard_sub_title", $page_id );
					$standard_text_1 = get_field( "standard_text_1", $page_id );
				
				if(!empty($standard_title_primary) || !empty($standard_sub_title) || !empty($standard_text_1)){
					include "section/standard-section.php";
				}

				include "section/calendar-program.php";

				include "section/contact.php";


		?>

        </main>


<?php
get_footer();
