<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Employment Services template
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;
	
	$page_id = get_the_ID(); // or whatever context you're in
		
	$categories = get_terms([
		'taxonomy'   => 'jobs_category',
		'hide_empty' => false,
	]);
	
	$selected_cat = isset($_GET['category']) ? intval($_GET['category']) : '';


	$search_term  = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
	$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);	

	get_header(); ?>

		<main>
			<?php
			
				include "section/split-hero.php";
				?>
            <section class="section biog-horiz-section ">
                <div class="container">
					<div class="row">
                        <div class="column">

                        </div>
                        <div class="column">
                            <div class="section-filter">
								<?php
									$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
									$current_url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
									$base_url = strtok($current_url, '?'); // Removes query string
								
								?>
								<form method="get" action="<?php echo $current_url ?>">
									<select id="filter-select" class="custom-select " name="category" onchange="this.form.submit()">
											<option value="">All Categories</option>
											<?php

												if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
													foreach ( $categories as $cat ) {
														echo '<option value="' . esc_attr($cat->term_id) . '" ' . selected($selected_cat, $cat->term_id, false) . '>' . esc_html($cat->name) . '</option>';
													}
												}

											?>
									</select>
                                    <!-- search -->
                                    <div class="search-field">
                                        <!-- <input type="text" id="search" placeholder="Search..."> -->
										<input type="text" name="search" value="<?php echo esc_attr($search_term); ?>"  class="search-input"  placeholder="Search..." />
                                        <button type="submit" class="search-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                                                <path fill="#121212" d="m14.96 13.54-3.09-3.09c.71-1.09 1.14-2.42 1.14-3.95 0-3.73-2.77-6.5-6.5-6.5S0 2.77 0 6.5 2.77 13 6.5 13c1.53 0 2.86-.42 3.95-1.14l3.09 3.09c.2.2.45.29.71.29.26 0 .51-.1.71-.29a.996.996 0 0 0 0-1.41ZM6.5 10.75c-2.43 0-4.25-1.82-4.25-4.25 0-2.43 1.82-4.25 4.25-4.25 2.43 0 4.25 1.82 4.25 4.25 0 2.43-1.82 4.25-4.25 4.25Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>  
			</section>
				<?php
				
				$BioType = "jobs";
				include "section/biog-horiz.php";
				include "section/upcoming-program.php";
				include "section/contact.php";
				
			?>
        </main>

<?php
get_footer();
