 <?php
		
		global $page_id;
		
		if(empty($page_id )){
		
			global $post;
			$post_id = $post->ID;		
		} else {
			$post_id = $page_id;
			
		}
		
		if(empty($category)){
			$category = 'upcoming';
		}

		if(empty($program_type)){
			
			$program_type="upcoming";
			
		}


		if($program_type=="current"){
			
			$css = "current-program-section  white_gradient-bg";
			
		} else {
			
			$css = "upcoming-program-section white-bg";
			
		}
		
				
				$categories = get_terms([
				  'taxonomy'   => 'product_cat',
				  'hide_empty' => false,
				]);				


			

				//////////////////////////////////////////////////////////////////////////////
				//
				//								QUERY.						//
				//
				//////////////////////////////////////////////////////////////////////				
					$selected_cat = isset($_GET['category']) ? intval($_GET['category']) : 0;
					$search_term  = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
					$paged        = get_query_var('paged') ?: (get_query_var('page') ?: 1);

					$args = [
						'post_type'         => 'product',
						's'                 => $search_term,
						'suppress_filters'  => true,
						'tax_query'         => [],
					];

					// Get glamping category safely
					$glamping_cat = get_term_by('slug', 'glamping', 'product_cat');
					$glamping_cat_id = $glamping_cat ? $glamping_cat->term_id : 0;

					if ($selected_cat) {
						$args['tax_query'][] = [
							'taxonomy' => 'product_cat',
							'field'    => 'term_id',
							'terms'    => [$selected_cat],
						];

						if ($glamping_cat_id && $selected_cat !== $glamping_cat_id) {
							$args['tax_query'][] = [
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => [$glamping_cat_id],
								'operator' => 'NOT IN',
							];
						}
					} elseif ($glamping_cat_id) {
						$args['tax_query'][] = [
							'taxonomy' => 'product_cat',
							'field'    => 'term_id',
							'terms'    => [$glamping_cat_id],
							'operator' => 'NOT IN',
						];
					}

					// Optional: refine search to 'product' post_type only
					add_filter('posts_where', function($where, $query) {
						global $wpdb;
						if ($query->get('s')) {
							$where .= " AND {$wpdb->posts}.post_type = 'product'";
						}
						return $where;
					}, 10, 2);

					$query = new WP_Query($args);


			?>
        
            <!-- calendar / upcoming -->
             <section class="section standard-section grid-program-section white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text">Upcoming Events</h4>
                            </div>
                            <div class="standard-text">
                                <p>Lorem Ipsum do</p>
                            </div>
                                
                        </div>

                        <div class="column">
					
                            <div class="section-filter">
								<form method="get" action="/calendar">
                                <select id="filter-select" class="custom-select "  name="category" onchange="this.form.submit()" >
                                    <option value="" >Filter</option>
									<?php
										foreach ($categories as $cat) {
											if(($cat->slug!="uncategorized") && ($cat->slug!="glamping")){
											echo '<option value="' . esc_attr($cat->term_id) . '" ' . selected($selected_cat, $cat->term_id, false) . '>' . esc_html($cat->name) . '</option>';
											}
										}
									?>


                                </select>
                                
                                    <!-- search -->
                                    <div class="search-field">
                                        <input type="text" id="search" name="search"  placeholder="Search..." class="search-input">
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
						<?php

					if ($query->have_posts()) :
					$Data = array();
					$X = 0;
					$today = new DateTime(); // Current date for comparison

					while ($query->have_posts()) : $query->the_post();

						$excerpt = wp_strip_all_tags(get_the_excerpt());
						$postId = get_the_ID();
						$featured_image = get_the_post_thumbnail_url($postId, 'medium');
						$Title = get_the_title($postId);
						$product = wc_get_product($postId);
						$price = $product ? $product->get_price() : null;
						$product_overview = get_field('product_overview', $postId);
						$BA = get_booking_availability($postId);
						$product_features = get_field('product_features', $postId);
						$product_duration = get_field('product_duration', $postId);
						$product_who = get_field('product_who', $postId);
						$perma_link = get_permalink($postId);

						foreach ($BA as $Booking) {
							if (!empty($Booking['from'])) {
								$From = $Booking['from'];
								$To = $Booking['to'];
								$from_date = new DateTime($From);

								// Skip if the booking has already started
								if ($from_date < $today) {
									continue;
								}

								$from_to = new DateTime($To);
								$formatted_from = $from_date->format('F j, Y');
								$day = $from_date->format('j');
								$month = $from_date->format('F');

								$Data[$X] = array(
									'id' => $postId,
									'title' => $Title,
									'excerpt' => $excerpt,
									'featured_image' => $featured_image,
									'price' => $price,
									'product_overview' => $product_overview,
									'product_features' => $product_features,
									'product_duration' => $product_duration,
									'product_who' => $product_who,
									'perma_link' => $perma_link,
									'formatted_from' => $formatted_from,
									'from' => $From,
									'to' => $To,
									'day' => $day,
									'month' => $month
								);
								$X++;
							}
						}

					endwhile;

				else :
					?><p>No posts found.</p><?php

				endif;

				if ($Data) {
					usort($Data, function ($a, $b) {
						return strcmp($a['from'], $b['from']);
					});
				}							
							
							

										$RangeEnd = ($paged * 8);
										$RangeStart = $RangeEnd - 7;	
										$Z=1;
										if($Data){
											foreach($Data as $Prod){
											if($Z<=$RangeEnd && $Z>=$RangeStart){	
												
											$product_cats = get_the_terms( $Prod['id'], 'product_cat' );
											?>
											<div class="card calendar-card grid-product-card">
												<?php
												if(!empty($Prod['featured_image'])){
												?>
												<div class="card-image">
													<div class="floating-date">
														<div class="date-number"><?php echo $Prod['day']; ?></div>
														<div class="date-month"><?php echo strtoupper(substr($Prod['month'], 0, 3)); ?></div>
													</div>
													<img src="<?php echo $Prod['featured_image'] ?>" alt="Card Image" class="sample-image">
												</div>
												<?php
												}
												?>
												<div class="card-content">
													
													<h3 class="product-card-title"><?php echo $Prod['title']; ?></h3>
													<div class="product-card-text">
														<div class="product-category">Category: </div>
																	
																<?php if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) : ?>
																  <?php foreach ( $product_cats as $cat ) : ?>
																	<div class="pd-category"><?php echo esc_html( $cat->name ); ?></div>
																  <?php endforeach; ?>
																<?php else : ?>
																  <div class="pd-category">Uncategorized</div>
																<?php endif; ?>
														
														
														<div class="product-overview">Overview: <?php echo $Prod['product_overview']; ?></div>
														<div class="product-cost">$<?php echo $Prod['price']; ?></div>
													</div>
													<?php
													$formatted_from = $Prod['formatted_from']; 
													?>
													<a href="<?php echo $Prod['perma_link']; ?>?date=<?php echo $formatted_from; ?>" class="link-only">Book Now</a>
												</div>                                    
											</div>
											<?php
											
											}
											$Z++;
											}
										}
										?>

                            </div>

                        </div>
                    </div> 

                    <div class="row">
                        <div class="column">
							<?php
							$paged=$_GET['paged'];
							if(empty($paged)){$paged=1;}
							$Current = $paged;
							$pagePrev = $paged -1;
							if($paged==1){
								$pagePrev = 1;
							} else {
								$pagePrev = $paged -1;
							}
							if($paged==1){$D=" disabled";} else {$D='';}
							$MaxPages = ceil(is_array($Data) ? count($Data) / 8 : 0);
							
							// category
							if(!empty($_GET['category'])){
									$Cat=$_GET['category'];
									$QString = "&category=".$Cat;
								} else {
									$Cat="";
									$QString ="";
								}
							
							if(!empty($_GET['search'])){
									$search=$_GET['search'];
									$QString.="&search=".$search;
							} 
							
							
							///print "MaxPages=".$MaxPages;
							?>
                            <div class="pagination">
                                <ul class="pagination-list">
                                    <li class="pagination-item"><a class="pagination-link previous <?php echo $D ?>" href="/calendar?paged=<?php echo $pagePrev ?><?php echo $QString; ?>">&lang;</a></li>								
								<?php
									for($p=1; $p<=$MaxPages; $p++){
										if($p==$paged){
											$D = "disabled";
										} else {
											$D="";
										}
								
									?>

                                    <li class="pagination-item"><a class="pagination-link <?php echo $D ?>" href="/calendar?paged=<?php echo $p ?><?php echo $QString; ?>"><?php echo $p ?></a></li>
									<?php
									}
									
									if($paged==$MaxPages){$D=" disabled";} else {$D='';}
									?>
                                    <li class="pagination-item"><a class="pagination-link next <?php echo $D ?>" href="<?php echo $MaxPages ?><?php echo $QString; ?>">&rang;</a></li>
                                </ul>
                            </div>      
                        </div>
                    </div>
                </div>
            </section>