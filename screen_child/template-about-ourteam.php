<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: About Our Team
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

			include "section/standard-belief.php";
			

			include "section/biog-horiz.php";
			

			include "section/biog-4-col.php";
			
			include "section/biog-partners.php";

			include "section/blockquote.php";
			$category = 'upcoming';
			include "section/upcoming-program.php";

			include "section/contact.php";
				
	
			?>

        </main>
		


<?php
get_footer();
