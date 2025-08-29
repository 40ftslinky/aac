<?php


function child_enqueue_styles() {
	$parent_style = 'storefront';

	wp_dequeue_style( $parent_style );
	
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'wp-block-library' );	
	wp_register_style( 'wp-block-library', '' );	
	wp_dequeue_style( 'wp-block-navigation' );	
	wp_register_style( 'wp-block-navigation', '' );
    
	// Theme stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 );

function sf_child_theme_dequeue_styles() {
    // Remove Storefront core styles
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
    wp_dequeue_style( 'storefront-icons' );
}
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_styles', 999 );


function sf_child_theme_enqueue_custom_styles() {
    wp_enqueue_style( 'storefront-child-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version') );
}
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_enqueue_custom_styles', 1000 );


add_filter( 'body_class', 'custom_body_class' );
/**
 * Add custom field body class(es) to the body classes.
 *
 * It accepts values from a per-page custom field, and only outputs when viewing a singular static Page.
 *
 * @param array $classes Existing body classes.
 * @return array Amended body classes.
 */
function custom_body_class( array $classes ) {
	$new_class = is_page() ? get_post_meta( get_the_ID(), 'body_class', true ) : null;

	if ( $new_class ) {
		$classes[] = $new_class;
	}
	// if 404 page add "red"class 
	if ( is_404() ) {
		$classes[] = "red";
		$classes[] = "404";
	}

	return $classes;
}





// remove empty paragraphs from content?
add_filter('the_content', 'remove_empty_p', 11);
function remove_empty_p($content){
    $content = force_balance_tags($content);
	$content = str_replace("<p> </p>", "", $content);
	$content = str_replace("<p>&nbsp</p>", "", $content);
	$content = str_replace("<p>&nbsp;</p>", "", $content);
	$content = str_replace("<p>&nbsp;</p>", "", $content);
	$content = preg_replace('/(<p>&nbsp;<\/p>)+$/', '', $content);
	$content = str_ireplace('<p>&nbsp;</p>', '', $content);
	$content = preg_replace('#<p></p>#i', '', $content);
	$y= date("y-m-d");
	$h= date("h-i-s");


    return $content;
}




// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );

// Prevent CF7 from adding <p> tags on all forms
add_filter('wpcf7_autop_or_not', '__return_false');

/*------------------------------------------------------------------------------- */
/*------------------------------------------------------------------------------- */




/*-----------------------------ALLOW SVG--------------------------- */
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
/*------------------------------------------------------------------------------- */




	function acf_image($field, $size="", $post_id=0,  $alt='', $class='image'){
		if(empty($post_id)){
			global $wp_query;
			if(!empty($wp_query)){
				if(!empty($wp_query->post)){
					$post_id= $wp_query->post->ID;	
				}
			}
		}
		$image = get_field($field, $post_id);
		if(empty($size)){
			$url = $image['url'];
		} else {
			$url = $image['sizes'][$size];
		}
		print "<img src='$url' alt='TODO' class='$class'>";
	}




	function hero_acf_image($field, $class=''){
		
		print "<div class='hero $class'>";
		
		acf_image($field);
		
		print '</div>';
		
	}
	
	




function getFeaturedImage($postId) {
    // Ensure that WordPress functions are available
    if (function_exists('get_the_post_thumbnail_url')) {
        $imageUrl = get_the_post_thumbnail_url($postId);
        if(empty($imageUrl)){
			return 0;
		} else {
			return $imageUrl;
		}
    } else {
        return 0;
    }

}


	
	
function format_date($date_string) {
    $date = DateTime::createFromFormat('d/m/Y', $date_string);
    return $date ? strtoupper($date->format('M d')) : false;
}
	
	
	function photo_credit($Credit){
		$r = rand(10000,99999);
		
		print "<div class='credit'>
		<span class='credit_icon' onclick='toggle_credit($r)'>></span>
		<span id='credit_$r' class='hidden credit_text'>".$Credit."</span><span style='clear: both'></span>
		</div>";
	}
	
	/*
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');
	function custom_tinymce_settings($settings) {
		$settings['forced_root_block'] = 'p'; // Ensures paragraphs are kept
		return $settings;
	}
	add_filter('tiny_mce_before_init', 'custom_tinymce_settings');
	*/



	/*
	add_filter( 'pre_get_posts', 'exclude_pages_search_when_logged_in' );
	function exclude_pages_search_when_logged_in($query) {
		if ( $query->is_search )
			$query->set( 'post__not_in', array( 98, 170, 89, 93, 91,97,99, 122,  95, 127, 168, 45, 146 , 39 ) ); 

		return $query;
	}
		
	*/
	
	


 function get_custom_excerpt($post_id) {
    // Get the post object
    $post = get_post($post_id);
    
    // Check if the post has an excerpt
    if (has_excerpt($post_id)) {
        // Return the existing excerpt
		print "<!-- excerpt=post_excerpt -->";
        return $post->post_excerpt;
    } else {
        // Get the post content
        $content = $post->post_content;
        
        // Strip all HTML tags and shortcodes
        $content = wp_strip_all_tags(strip_shortcodes($content));
        
        // Split the content into sentences
        $sentences = preg_split('/(\.|\?|\!)(\s)/', $content, -1, PREG_SPLIT_DELIM_CAPTURE);
        
        // Check if there are enough sentences
        if (count($sentences) > 1) {
            // Combine the first 2 sentences
            $excerpt = $sentences[0] . $sentences[1] . $sentences[2] . $sentences[3];

        } else {
            // Use the first 1 sentence if there are fewer than two
            $excerpt = $sentences[0] . $sentences[1];

			
        }
        
        // Trim the excerpt to remove any extra spaces
        $excerpt = trim($excerpt);
        
        return $excerpt;
    }
}



	
/*
function exclude_specific_post_types($query) {
    if ($query->is_search() && !is_admin()) {
        $excluded_types = array('creatives', 'slides', 'creative', 'slide', 'team', 'teams');
        $query->set('post_type', array_diff(get_post_types(['public' => true]), $excluded_types));
    }
}
add_action('pre_get_posts', 'exclude_specific_post_types');
	*/
	
function getHomepagePostId() {
    // Check if WordPress functions are available
    if (function_exists('get_option')) {
        $pageOnFront = get_option('page_on_front'); // Get the ID of the front page
        return $pageOnFront;
    } else {
        return 'WordPress functions are not available.';
    }
}

	







// CUSTOM POST type
function create_post_types() {


	add_action('init', 'set_default_post_type', 1);


	
	register_post_type(
		'team-members',
		array(
			'labels' => array(
				'name' => __('Team Members'),
				'singular_name' => __('Team Member')
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9,
			'menu_icon'   => 'dashicons-art',
			'rewrite' => array('slug' => 'team-members', 'with_front' => true),
			'has_archive' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'),
			'taxonomies' => array('post_tag'),
			'rewrite' => array('slug' => 'team-members', 'with_front' => false),
		)
	);
	
	
	
}
add_action('init', 'create_post_types');
function create_member_taxonomy() {
    register_taxonomy(
        'events_category',
        'events',
        array(
            'label'        => __( 'Team Member Categories' ),
            'rewrite'      => array( 'slug' => 'team-member-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_member_taxonomy' );


// CUSTOM POST type
function create_post_types2() {
	add_action('init', 'set_default_post_type', 1);
	register_post_type(
		'jobs',
		array(
			'labels' => array(
				'name' => __('Jobs'),
				'singular_name' => __('Job')
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9,
			'menu_icon'   => 'dashicons-art',
			'rewrite' => array('slug' => 'jobs', 'with_front' => true),
			'has_archive' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'),
			'taxonomies' => array('jobs_category', 'post_tag'),
			'rewrite' => array('slug' => 'jobs', 'with_front' => false),
		)
	);
}
add_action('init', 'create_post_types2');
function create_member_taxonomy2() {
    register_taxonomy(
        'events_category',
        'events',
        array(
            'label'        => __( 'Jobs Categories' ),
            'rewrite'      => array( 'slug' => 'jobs-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_member_taxonomy2' );
function create_jobs_taxonomy() {
    register_taxonomy(
        'jobs_category', // Unique taxonomy slug
        'jobs',          // Attach to 'jobs' post type
        array(
            'label'        => __( 'Jobs Categories' ),
            'rewrite'      => array( 'slug' => 'jobs-category' ),
            'hierarchical' => true, // Makes it behave like categories
            'show_ui'      => true,
            'show_in_rest' => true, // Enables Gutenberg + REST API support
        )
    );
}
add_action( 'init', 'create_jobs_taxonomy' );










// Add meta box for Order value
function tm_add_order_meta_box() {
    $post_types = array('team-members', 'jobs'); // Add more post types here if needed
    foreach ($post_types as $post_type) {
        add_meta_box(
            'tm_order_meta_box',
            'Display Order',
            'tm_order_meta_box_callback',
            $post_type,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'tm_add_order_meta_box');
function tm_order_meta_box_callback($post) {
    $value = get_post_meta($post->ID, '_tm_order_value', true);
    echo '<label for="tm_order_value">Order:</label>';
    echo '<input type="number" name="tm_order_value" id="tm_order_value" value="' . esc_attr($value) . '" style="width:100%;">';
}
// Save meta value
function tm_save_order_meta($post_id) {
    if (isset($_POST['tm_order_value'])) {
        update_post_meta($post_id, '_tm_order_value', intval($_POST['tm_order_value']));
    }
}
add_action('save_post', 'tm_save_order_meta');












// Add meta box for Order value
function product_add_order_meta_box() {
    add_meta_box(
        'product_order_meta_box',
        'Display Order',
        'product_order_meta_box_callback',
        'product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'product_add_order_meta_box');

function product_order_meta_box_callback($post) {
    $value = get_post_meta($post->ID, '_product_order_value', true);
    echo '<label for="product_order_value">Order:</label>';
    echo '<input type="number" name="product_order_value" id="product_order_value" value="' . esc_attr($value) . '" style="width:100%;">';
}

// Save meta value
function product_save_order_meta($post_id) {
    if (isset($_POST['product_order_value'])) {
        update_post_meta($post_id, '_product_order_value', intval($_POST['product_order_value']));
    }
}
add_action('save_post', 'product_save_order_meta');


wp_enqueue_script( 'wc-add-to-cart-variation' );


/*
add_filter( 'woocommerce_register_post_type_product', 'custom_product_slug_removal' );
function custom_product_slug_removal( $args ) {
    $args['rewrite']['slug'] = ''; // Remove 'product' base
    return $args;
}

add_action( 'init', 'custom_flush_rewrite_rules', 99 );
function custom_flush_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
*/



/*

add_action('pre_get_posts', function($query) {
	if (!is_admin() && $query->is_main_query()) {
		error_log('PRE_GET_POSTS triggered by: ' . print_r($query->query_vars, true));
	}
});



*/


function get_booking_availability($product_id) {
    $product = wc_get_product($product_id);
	$is_wc_bookable     = $product->is_type( 'booking' );
    if ($product && $is_wc_bookable) {

		if (method_exists($product, 'get_availability')) {
			return $product->get_availability();
        } 
		$R = get_post_meta($product_id, '_wc_booking_availability', true);
        return $R;
    }
    return [];
}




function get_next_available_date($availability_rules) {
    $today = date('Y-m-d');
    $next = null;

    foreach ($availability_rules as $rule) {
        if ($rule['bookable'] === 'yes' && $rule['type'] === 'custom') {
            $date = $rule['from'];
            if ($date >= $today && (!$next || $date < $next)) {
                $next = $date;
            }
        }
    }

    return $next;
}





/*
Globally Disable Shipping via Code

*/
add_filter( 'woocommerce_cart_needs_shipping', '__return_false' );


// custom Cart Empty page
function ross_custom_cart_empty_content() {
    if ( WC()->cart && WC()->cart->is_empty() ) {
		print "<h3 class='standard-title'>Your cart is currently empty</h3>";
		$child_theme_dir = basename(get_stylesheet_directory());
		$ChildthemePath = $_SERVER['DOCUMENT_ROOT']."/wp-content/themes/".$child_theme_dir;
		include $ChildthemePath."/section/upcoming-program.php";

		get_footer();
		exit();
    }
    return ''; // Return nothing if cart has items
}
add_shortcode('ross_cart_empty_hook', 'ross_custom_cart_empty_content');


?>
