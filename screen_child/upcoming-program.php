<?php
	global $page_id;
	if (empty($page_id)) {
		global $post;
		$post_id = $post->ID;
	} else {
		$post_id = $page_id;
	}
	if (empty($category)) {
		$category = '';
	}
	if (empty($program_type)) {
		$program_type = "";
	}
	if ($program_type == "current") {
		$css = "current-program-section white_gradient-bg";
	} else {
		$css = "upcoming-program-section";
	}
	$search_term = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';

	$args = [
		'post_type'         => 'product',
		'posts_per_page' => 100,
		's'                 => $search_term,
		'suppress_filters'  => true,
		'tax_query'         => [],
	];

	$glamping_cat = get_term_by('slug', 'glamping', 'product_cat');
	$glamping_cat_id = $glamping_cat ? $glamping_cat->term_id : 0;
	


	if ($category) {
		$args['tax_query'][] = [
			'taxonomy' => 'product_cat',
			'field'    => 'slug',
			'terms'    => [$category],
		];
		if ($category != "glamping") {
			if ($glamping_cat_id && $category !== $glamping_cat_id) {
				$args['tax_query'][] = [
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => [$glamping_cat_id],
					'operator' => 'NOT IN',
				];
			}
		}
	} elseif ($glamping_cat_id) {
		if ($category != "glamping") {
			$args['tax_query'][] = [
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => [$glamping_cat_id],
				'operator' => 'NOT IN',
			];
		}
	}

	add_filter('posts_where', function ($where, $query) {
		global $wpdb;
		if ($query->get('s')) {
			$where .= " AND {$wpdb->posts}.post_type = 'product'";
		}
		return $where;
	}, 10, 2);
	
	

	$query = new WP_Query($args);
		
	// Step 1: Build full sorted list of unique bookable products
	$today = new DateTime();
	$unique_products = [];


	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$Pid = get_the_ID();
			$product = wc_get_product($Pid);
			$post_title = get_the_title($Pid);
			
			

			if (!$product || !$product->is_type('booking')) continue;
			
			
			if (isset($unique_products[$Pid])) continue;
			

			if ($category != "glamping") {
				$BA = get_booking_availability($Pid);
				if (empty($BA)) continue;

				$earliest = null;
				foreach ($BA as $Booking) {
					if (!empty($Booking['from'])) {
						$from_date = new DateTime($Booking['from']);
						if ($from_date > $today && (!$earliest || $from_date < $earliest)) {
							$earliest = $from_date;
							$raw_booking = $Booking;
						}
					}
				}
			}

			if ($earliest || ($category == "glamping")) {
				$unique_products[$Pid] = [
					'product' => $product,
					'post_id' => $Pid,
					'from' => $earliest,
					'raw' => $raw_booking,
				];
			}
		}
	}


	// Step 2: Sort by earliest booking date
	$sorted_products = array_values($unique_products);
	if($category != "glamping"){	
		usort($sorted_products, function ($a, $b) {
			return $a['from'] <=> $b['from'];
		});
	}
	

	// Step 3: Slice based on program_type
	if($category == "glamping"){
		$filtered_products = array_slice($sorted_products, 0, 20);
	} elseif ($program_type === 'current') {
		$filtered_products = array_slice($sorted_products, 0, 6);
	} elseif($program_type == "upcoming"){
		$filtered_products = array_slice($sorted_products, 6, 8);
	} else {
		$filtered_products = array_slice($sorted_products, 0, 8);
	}
	//print "<p>category = $category</p>";
	//print "<p>program_type = $program_type</p>";

?>

<section class="section standard-section <?php echo $css ?> ">
	<div class="container">
		<div class="row">
			<div class="column">
				<div class="section-heading-wrap">
				<?php

				if ($program_type === 'current') {
					$program_title_upcoming_carousel = get_field('program_title_upcoming_carousel_current', $page_id);
					$program_title_upcoming_carousel = get_field('program_title_upcoming_carousel_current', $page_id);
						if(empty($program_title_upcoming_carousel)){
							$program_title_upcoming_carousel="Current Programs";
						}
				} else {

					$program_title_upcoming_carousel = get_field('program_title_upcoming_carousel', $page_id);
					$program_text_upcoming_carousel = get_field('program_text_upcoming_carousel', $page_id);
					if(empty($program_title_upcoming_carousel)){
						$program_title_upcoming_carousel="Upcoming Programs";
					}
				}

				if(empty($program_text_upcoming_carousel)){
					$program_text_upcoming_carousel="<a href='/calendar'>Click here</a> for a full list of programs";
				}
				?>
					<h4 class="primary-text"><?php echo $program_title_upcoming_carousel ?></h4>
					<p><?php echo $program_text_upcoming_carousel ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<div class="column_inner">
					<div class="carousel program_carousel">
						<?php
						
						foreach ($filtered_products as $entry) {
							$product = $entry['product'];
							$Pid = $entry['post_id'];
							
							$Booking = $entry['raw'];
							$post_title = get_the_title($Pid);
							$formatted_from="";
							$perma_link = get_permalink($Pid);
							$featured_image_url = get_the_post_thumbnail_url($Pid, 'large');
							$product_overview = get_field('product_overview', $Pid);
							if($entry['from']){
								$formatted_from = $entry['from']->format('F j, Y');
							}
							?>
							<div class="carousel-cell product-card upcoming-product-card">
								<div class="product-card-image">
									<img src="<?php echo $featured_image_url ?>" alt="Card Image" class="sample-image">
									<?php
										$text_status_alert_1 = get_field('text_status_alert_1', $Pid);
										
										print "<!-- :::::      Pid=$Pid :::::      text_status_alert_1=$text_status_alert_1 :::::    -->";
										if(!empty($text_status_alert_1)){
											print "<div class='text-status-alert'>$text_status_alert_1</div>";
										}	
									
									?>
								</div>
								<div class="product-card-content">
									<h3 class="product-card-title"><?php echo $post_title ?></h3>
									<div class="product-card-text">
										<div class="product-date-category">
											<div class="product-date">
												<span><?php echo $formatted_from ?></span>
											</div>
											<div class="product-category">
												<?php
												$product_cats = get_the_terms($Pid, 'product_cat');
												if (!empty($product_cats) && !is_wp_error($product_cats)) {
													foreach ($product_cats as $cat) {
														echo '<div class="pd-category">' . esc_html($cat->name) . '</div>';
													}
												}
												?>
											</div>
										</div>
										<div class="product-overview"><?php echo $product_overview ?></div>
											<?php 

												$PRICE = $product->get_price();
												if(!empty($PRICE)){
													echo '<div class="product-cost">'."$".$PRICE.'</div>';
												}
												
											?>
									</div>
									<a href="<?php echo $perma_link ?>" class="link-only">Book Now</a>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>