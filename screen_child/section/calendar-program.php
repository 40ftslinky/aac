<?php
/**
 * AAC Calendar / Program listing (Products + booking availability)
 *
 * Key safety improvements vs the previous version:
 * - No invalid PHP line continuations (the old "\ \\" fragments caused parse errors)  // see old file
 * - No undefined variables ($From/$To/$postId)                                       // see old file
 * - Robust date parsing (supports timestamps and date strings)
 * - Chronological sort uses numeric timestamps (not strcmp on strings)
 * - Pagination is clamped and URLs are built safely
 * - Avoids global posts_where filters (can break other queries)
 *
 * NOTE: This file assumes your project provides get_booking_availability($product_id)
 *       which returns an array with keys: from, to, type (optional).
 */

/**
 * Safely parse a date value into DateTime.
 * Supports:
 *   - "YYYY-MM-DD" (or other DateTime-parseable strings)
 *   - Unix timestamps in seconds (numeric)
 */
function RT_safeDate($value) {
    if ($value === null || $value === '') return false;

    try {
        // If numeric, treat as Unix timestamp (seconds)
        if (is_numeric($value)) {
            $dt = new DateTime('@' . intval($value)); // '@' tells PHP it's a timestamp
            // Convert to WP timezone so comparisons/display match site settings
            $wp_tz = wp_timezone();
            $dt->setTimezone($wp_tz);
            return $dt;
        }

        // Otherwise parse as a normal date string (uses PHP parser + default TZ)
        return new DateTime($value, wp_timezone());
    } catch (Exception $e) {
        return false;
    }
}

// Determine page ID (used for ACF page fields)
global $page_id, $post;
$post_id = !empty($page_id) ? $page_id : (isset($post->ID) ? $post->ID : 0);

// Inputs
$selected_cat = isset($_GET['category']) ? intval($_GET['category']) : 0;
$search_term  = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
$paged        = max(1, intval($_GET['paged'] ?? 1));

$perPage = 8;

// Category list for filter dropdown
$categories = get_terms([
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
]);

// Build WP_Query args (fetch all products, we paginate *events* ourselves)
$args = [
    'post_type'        => 'product',
    'post_status'      => 'publish',
    'posts_per_page'   => -1,
    's'                => $search_term,
    'suppress_filters' => true, // keep stable; we are not adding custom filters
    'tax_query'        => [],
];

// Exclude "glamping" unless glamping itself is explicitly selected
$glamping_cat    = get_term_by('slug', 'glamping', 'product_cat');
$glamping_cat_id = $glamping_cat ? intval($glamping_cat->term_id) : 0;

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

// Run query
$query = new WP_Query($args);

// Collect events into $Data
$Data  = [];
$today = new DateTime('now', wp_timezone());
$X     = 0;

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        $product_id_loop = get_the_ID();
        if (!$product_id_loop) continue;

        // Ensure this is a real WooCommerce product object (prevents fatal get_price() calls)
        $product_obj = wc_get_product($product_id_loop);
        if (!$product_obj || !is_a($product_obj, 'WC_Product')) {
            continue;
        }

        $title          = get_the_title($product_id_loop);
        $excerpt        = wp_strip_all_tags(get_the_excerpt());
        $featured_image = get_the_post_thumbnail_url($product_id_loop, 'large');
        $price          = $product_obj->get_price(); // safe now

        $product_overview = get_field('product_overview', $product_id_loop);
        $product_features = get_field('product_features', $product_id_loop);
        $product_duration = get_field('product_duration', $product_id_loop);
        $product_who      = get_field('product_who', $product_id_loop);
        $perma_link       = get_permalink($product_id_loop);

        // Your custom function should provide date ranges
        $BA = function_exists('get_booking_availability') ? get_booking_availability($product_id_loop) : [];

        if (!is_array($BA)) {
            continue;
        }

        foreach ($BA as $booking) {

            // Require from/to
            if (empty($booking['from']) || empty($booking['to'])) continue;

            // If 'type' exists, only accept explicit date ranges.
            // (Woo bookings can include "days/months" rules which are not concrete dates)
            if (!empty($booking['type']) && $booking['type'] !== 'custom') continue;

            $From = $booking['from'];
            $To   = $booking['to'];

            $from_date = RT_safeDate($From);
            $to_date   = RT_safeDate($To);
            if (!$from_date || !$to_date) continue;

            // Skip events that already started
            if ($from_date < $today) continue;

            $Data[$X] = [
                'id'               => $product_id_loop,
                'title'            => $title,
                'excerpt'          => $excerpt,
                'featured_image'   => $featured_image,
                'price'            => $price,
                'product_overview' => $product_overview,
                'product_features' => $product_features,
                'product_duration' => $product_duration,
                'product_who'      => $product_who,
                'perma_link'       => $perma_link,

                // Display fields
                'formatted_from'   => $from_date->format('F j, Y'),
                'day'              => $from_date->format('j'),
                'month'            => $from_date->format('F'),

                // Raw + sortable fields
                'from'             => $From,
                'to'               => $To,
                'from_ts'          => $from_date->getTimestamp(),
                'to_ts'            => $to_date->getTimestamp(),
            ];
            $X++;
        }

    endwhile;
    wp_reset_postdata();
endif;

// Sort chronologically (numeric timestamps)
usort($Data, function ($a, $b) {
    return ($a['from_ts'] ?? 0) <=> ($b['from_ts'] ?? 0);
});

// Pagination calculations (clamp page number)
$totalEvents = count($Data);
$maxPages    = max(1, (int) ceil($totalEvents / $perPage));
$paged       = min($paged, $maxPages);

$rangeStartIndex = ($paged - 1) * $perPage; // zero-based
$rangeEndIndex   = min($rangeStartIndex + $perPage, $totalEvents);

// Build base query args for pagination links
$baseArgs = [];
if ($selected_cat) $baseArgs['category'] = $selected_cat;
if ($search_term !== '') $baseArgs['search'] = $search_term;

// ACF page headings (use $post_id - page, NOT $product_id_loop)
$program_title_upcoming_carousel = get_field('program_title_upcoming_carousel', $post_id);
$program_text_upcoming_carousel  = get_field('program_text_upcoming_carousel', $post_id);

?>
<!-- calendar / upcoming -->
<section class="section standard-section grid-program-section white-bg">
    <div class="container">

        <div class="row">
            <div class="column">
                <div class="section-heading-wrap">
                    <h4 class="primary-text"><?php echo esc_html($program_title_upcoming_carousel ?: ''); ?></h4>
                </div>
                <div class="standard-text">
					<p class="paragraph_01">
						<?php echo $program_text_upcoming_carousel; ?>
					</p>
                </div>
            </div>
			
            <div class="column">
                <div class="section-filter">
                    <form method="get" action="/calendar">
                        <select id="filter-select" class="custom-select" name="category" onchange="this.form.submit()">
                            <option value="">Filter</option>
                            <?php
                            if (is_array($categories)) {
                                foreach ($categories as $cat) {
                                    if (!isset($cat->slug, $cat->term_id, $cat->name)) continue;
                                    if ($cat->slug === 'uncategorized' || $cat->slug === 'glamping') continue;

                                    printf(
                                        '<option value="%d" %s>%s</option>',
                                        intval($cat->term_id),
                                        selected($selected_cat, intval($cat->term_id), false),
                                        esc_html($cat->name)
                                    );
                                }
                            }
                            ?>
                        </select>

                        <!-- search -->
                        <div class="search-field">
                            <input
                                type="text"
                                id="search"
                                name="search"
                                placeholder="Search..."
                                class="search-input"
                                value="<?php echo esc_attr($search_term); ?>"
                            />
                            <button type="submit" class="search-button" aria-label="Search">
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

                    <?php if ($totalEvents === 0): ?>
                        <p>No upcoming events found.</p>
                    <?php else: ?>

                        <?php
                        for ($i = $rangeStartIndex; $i < $rangeEndIndex; $i++):
                            $Prod = $Data[$i];

                            // Defensive checks (avoid notices/fatals)
                            $prod_id = intval($Prod['id'] ?? 0);
                            if (!$prod_id) continue;

                            $day   = $Prod['day'] ?? '';
                            $month = $Prod['month'] ?? '';
                            ?>
                            <div class="card calendar-card grid-product-card">

                                <?php if (!empty($Prod['featured_image'])): ?>
                                    <div class="card-image">
                                        <div class="floating-date">
                                            <div class="date-number"><?php echo esc_html($day); ?></div>
                                            <div class="date-month"><?php echo esc_html(strtoupper(substr($month, 0, 3))); ?></div>
                                        </div>

                                        <img src="<?php echo esc_url($Prod['featured_image']); ?>" alt="" class="sample-image" />

                                        <?php
                                        $text_status_alert_1 = get_field('text_status_alert_1', $prod_id);
                                        if (!empty($text_status_alert_1)) {
                                            echo "<div class='text-status-alert'>" . esc_html($text_status_alert_1) . "</div>";
                                        }
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <div class="card-content">
                                    <h3 class="product-card-title"><?php echo esc_html($Prod['title'] ?? ''); ?></h3>

                                    <div class="product-card-text">
                                        <div class="product-date-category">

                                            <div class="product-category">
                                                <?php
                                                $product_cats = get_the_terms($prod_id, 'product_cat');
                                                if (!empty($product_cats) && !is_wp_error($product_cats)) {
                                                    foreach ($product_cats as $cat) {
                                                        echo '<div class="pd-category">' . esc_html($cat->name) . '</div>';
                                                    }
                                                }
                                                ?>
                                            </div>

                                        </div>

                                        
										<div class="product-overview">
											<?php echo wp_kses_post($Prod['product_overview'] ?? ''); ?>
										</div>


                                        <?php
                                        // Price safe output
                                        $PRICE = $Prod['price'] ?? '';
                                        if ($PRICE !== '' && $PRICE !== null) {
                                            echo '<div class="product-cost">$' . esc_html($PRICE) . '</div>';
                                        }
                                        ?>
                                    </div>

                                    <?php
                                    // Build "More Information" link; keep existing behavior (?date=Formatted)
                                    $formatted_from = $Prod['formatted_from'] ?? '';
                                    $more_url = add_query_arg(
                                        ['date' => $formatted_from],
                                        $Prod['perma_link'] ?? '#'
                                    );
                                    ?>
                                    <a href="<?php echo esc_url($more_url); ?>" class="link-only">More Information</a>
                                </div>

                            </div>
                        <?php endfor; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="column">
                <?php
                $pagePrev = max(1, $paged - 1);
                $pageNext = min($maxPages, $paged + 1);

                $prevDisabled = ($paged <= 1) ? 'disabled' : '';
                $nextDisabled = ($paged >= $maxPages) ? 'disabled' : '';
                ?>
                <div class="pagination">
                    <ul class="pagination-list">

                        <li class="pagination-item">
                            <a class="pagination-link previous <?php echo esc_attr($prevDisabled); ?>"
                               href="<?php echo esc_url(add_query_arg(array_merge($baseArgs, ['paged' => $pagePrev]), '/calendar')); ?>">〈</a>
                        </li>

                        <?php for ($p = 1; $p <= $maxPages; $p++): ?>
                            <?php $activeClass = ($p === $paged) ? 'disabled' : ''; ?>
                            <li class="pagination-item">
                                <a class="pagination-link <?php echo esc_attr($activeClass); ?>"
                                   href="<?php echo esc_url(add_query_arg(array_merge($baseArgs, ['paged' => $p]), '/calendar')); ?>">
                                    <?php echo esc_html($p); ?>
                                </a>
                            </li>
                        <?php endfor; ?>

                        <li class="pagination-item">
                            <a class="pagination-link next <?php echo esc_attr($nextDisabled); ?>"
                               href="<?php echo esc_url(add_query_arg(array_merge($baseArgs, ['paged' => $pageNext]), '/calendar')); ?>">〉</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
