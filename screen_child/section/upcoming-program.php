 <?php
		
		global $page_id;
		
		$selected_cat ="";
		
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
			//$css = "upcoming-program-section white-bg";
			$css = "upcoming-program-section";
		}
		if(!empty($category)){
			$selected_cat = $category;
		}

?> 
             <section class="section standard-section <?php echo $css ?> ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-heading-wrap">
                                <h4 class="primary-text"><?php echo ucfirst($program_type) ?> Programs</h4><!-- TODO variable      -->
                                <p><a href="/calendar">Click here</a> for a full list of programs</p><!-- TODO variable      -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                           <div class="column_inner">
                                <div class="carousel program_carousel">
									<?php
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
											'field'    => 'slug',
											'terms'    => [$selected_cat],
										];

										if($category!="glamping"){
											if ($glamping_cat_id && $selected_cat !== $glamping_cat_id) {
												$args['tax_query'][] = [
													'taxonomy' => 'product_cat',
													'field'    => 'term_id',
													'terms'    => [$glamping_cat_id],
													'operator' => 'NOT IN',
												];
											}
										}
									} elseif ($glamping_cat_id) {
										if($category!="glamping"){
											$args['tax_query'][] = [
												'taxonomy' => 'product_cat',
												'field'    => 'term_id',
												'terms'    => [$glamping_cat_id],
												'operator' => 'NOT IN',
											];
										}
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
									if ($query->have_posts()) {
										while ($query->have_posts()) {
											$query->the_post();
											$post_title =get_the_title();
											$perma_link =get_permalink();
											$Pid = get_the_ID();
											$The_content = get_the_content();
											$featured_image_url = get_the_post_thumbnail_url($Pid, 'large'); // 'full', 'medium', 'thumbnail', etc.
											$product = wc_get_product($Pid);
											$BA = get_booking_availability($Pid);
											$product_overview = get_field('product_overview', $Pid);
									
											?>
											<div class="carousel-cell product-card upcoming-product-card">
												<div class="product-card-image">
													<img src="<?php echo $featured_image_url  ?>" alt="Card Image" class="sample-image">
												</div>
												<div class="product-card-content">
													<h3 class="product-card-title"><?php echo $post_title  ?></h3>
													<div class="product-card-text">
														<!-- <div class="product-duration">Duration: </div> -->
														<!-- Date of Event/Booking: -->
														<div class="product-date">
														<?php
																
																$Data = array();
																$A=0;
																foreach ($BA as $Booking) {
																	if (!empty($Booking['from'])) {
																		$From = $Booking['from'];
																		$To = $Booking['to'];
																		$from_date = new DateTime($From);
																		$today = new DateTime(); // Current date for comparison
																		
																		if ($from_date < $today) {
																			//continue;
																		}
																		
																		
																		$formatted_from = $from_date->format('F j, Y');
																		$Data[$A]=array(); 
																		$Data[$A]['formatted_from']=$formatted_from;
																		$Data[$A]['from'] = $From;
																		$A++;
																	}
																	
																}
																$Z=0;

																if ($Data) {
																	usort($Data, function ($a, $b) {
																		return strcmp($a['from'], $b['from']);
																	});
																}	

																foreach ($Data as $Row) {
																	print "<span>";
																	if(isset($Row['formatted_from'])){
																		if($Z>0){print ";&nbsp;";}
																		echo $Row['formatted_from'];
																	}
																	print "</span>";
																	$Z++;
																}
														?>
														</div>
														
														<!-- <div class="product-who">Who it's for: </div> -->
														<div class="product-category">
															<?php
															$product_cats = get_the_terms( $Pid, 'product_cat' );
															
															if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) : ?>
														  <?php foreach ( $product_cats as $cat ) : ?>
															<div class="pd-category"><?php echo esc_html( $cat->name ); ?></div>
														  <?php endforeach; ?>
														<?php else : ?>
														  
														<?php endif; ?>
														</div>
														<div class="product-overview"><?php echo $product_overview ?></div>
														<div class="product-cost">
															<?php
																$price = $product ? $product->get_price() : null;
																echo "$".$price;
															?>
														</div>
													</div>
													<a href="<?php echo $perma_link ?>" class="link-only">Book Now</a>
												</div>                                    
											</div>
											<?php
											}
										}
								   ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>