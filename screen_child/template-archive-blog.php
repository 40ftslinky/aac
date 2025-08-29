<?php
/**

 * Template name: Blog Archive Template (AAC)
 *
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;

	$page_id = $post->ID;	
	
	
	
	get_header(); 
	
?>




   <main>

            
            
            <!-- half hero img right-->
            <section class="section split-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                
                                <!--  -->
                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
											<?php
											$blog_archive_heading=get_field('blog_archive_heading',$page_id);
											$blog_archive_subheading=get_field('blog_archive_subheading',$page_id);
											?>
                                                <h1 class="split-hero-title"><?php echo $blog_archive_heading ?></h1>
                                                <h2 class="split-hero-subtitle"><?php echo $blog_archive_subheading ?></h2>

                                            </div>
                                            <!-- <a href="#" class="button mono">Learn More</a> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>


			<?php
				$categories = get_categories(['hide_empty' => false]);
				$selected_cat = isset($_GET['category']) ? intval($_GET['category']) : '';
				$search_term  = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
				$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

				$args = [
					'posts_per_page' => 10,
					'paged'          => $paged,
					's'              => $search_term,
					'ignore_sticky_posts' => true,
					'post_status'    => 'publish',
				];

				if ($selected_cat) {
					$args['cat'] = $selected_cat;
				}
				
				$args['post_type'] = ['post'];
				$args['suppress_filters'] = true;
				
				add_filter('posts_where', function($where, $query) {
					global $wpdb;
					if ($query->get('s')) {
						$where .= " AND {$wpdb->posts}.post_type = 'post'";
					}
					return $where;
				}, 10, 2);
				
				$query = new WP_Query($args);
				
				?>

            <section class="section biog-horiz-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <?php
							$page_id = get_the_ID(); // or whatever context you're in

							$blog_archives_subheading_2=get_field('blog_archives_subheading_2',$page_id);

							$blog_archives_subheading_3=get_field('blog_archives_subheading_3',$page_id);
							
							$blog_archives_subheading_4=get_field('blog_archives_subheading_4',$page_id);
							
							?>
                            <div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo $blog_archives_subheading_2 ?></h4>                            
                                <h2><?php echo $blog_archives_subheading_3 ?></h2>
                            </div>
                                
                        </div>
                        <div class="column">

							
                            <div class="section-filter">
							
								<form method="get" action="/blog">

									<select id="filter-select" class="custom-select " name="category" onchange="this.form.submit()">
											
											<option value=""><?php echo $blog_archives_subheading_4 ?></option>
											
											<?php
												foreach ($categories as $cat) {
													echo '<option value="' . esc_attr($cat->term_id) . '" ' . selected($selected_cat, $cat->term_id, false) . '>' . esc_html($cat->name) . '</option>';
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
                    <div class="row">
                        <div class="column">
                           <div class="column_inner">
					
										<?php if ($query->have_posts()) : ?>
		
												<?php 

													while ($query->have_posts()) : $query->the_post(); ?>

													<?php
													$excerpt = wp_strip_all_tags(get_the_excerpt());
													$postId = get_the_ID();
													$featured_image = get_the_post_thumbnail_url($postId, 'thumbnail');
													$hero_subheading = get_field( "split_hero_subheading", $postId );
													?>
													
													<div class="blog-card ">
													
														<?php if (has_post_thumbnail()) : ?>
															<div class="blog-card-image">
																<img src="<?php echo $featured_image ?>" alt="blog: Name" class="blog-image">
																<?php 
																//the_post_thumbnail('medium'); 
																?>
															</div>
														<?php endif; ?>
														
														<div class="blog-card-content">
															<div class="blog-card-heading">
																<h4 class="blog-card-title"><?php the_title(); ?></h4>
																<?php
																if(!empty($hero_subheading)){
																?>
																<div class="blog-card-org"><?php echo $hero_subheading ?></div>
																<?php
																}
																
																?>
															</div>
															<div class="blog-card-text">
																<div class="blog-text">
																<?php
																	
																	echo wp_trim_words($excerpt, 200, '...');
																	
																?>
																</div>
															
															<a class="button mono" href="<?php the_permalink(); ?>">Read More</a>
															</div>
														</div>                                    
													</div>															
													
													
												<?php endwhile; ?>
				

											
										<?php else : ?>
											<p>No posts found.</p>
										<?php endif; wp_reset_postdata(); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">

								<?php
								$s = $_GET['search'];
								$category = $_GET['category'];

								$MaxPages = $query->max_num_pages;
								$Current = $paged;
								
								
								$pagePrev = $paged -1;
								
								if($paged==1){
									$pagePrev = 1;
								} else {
									$pagePrev = $paged -1;
								}
								
								if($paged==1){$D=" disabled";} else {$D='';}
							?>

                            <div class="pagination">
                                <ul class="pagination-list">
                                    <li class="pagination-item"><a class="pagination-link previous<?php echo $D ?>" href="/blog/?paged=<?php echo $pagePrev; ?>&category=<?php echo $category; ?>&s=<?php echo $s; ?>">&lang;</a></li>
									<?php

									for($p=1; $p<=$MaxPages; $p++){
										if($p==$paged){
											$D = "disabled";
										} else {
											$D="";
										}
												?>
												<li class="pagination-item">
													<a class="pagination-link <?php echo $D ?>" href="/blog/?paged=<?php echo $pagePrev; ?>&category=<?php echo $category; ?>&s=<?php echo $s; ?>">
														<?php echo $p; ?>
													</a>
												</li>
											<?php

									}
									$pageNext = $paged+1;
									if($paged==$MaxPages)
									{
										$D = "disabled";
										$pageNext = $paged;
									} else {
										$D = "";
									}

									?>
                                    <li class="pagination-item"><a class="pagination-link next <?php echo $D ?>" href="/blog/?paged=<?php echo $pagePrev; ?>&category=<?php echo $category; ?>&s=<?php echo $s; ?>">&rang;</a></li>
                                </ul>
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
