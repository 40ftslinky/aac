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
	
	get_header(); ?>

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
				?>

        
        </main>
		


<?php
get_footer();
