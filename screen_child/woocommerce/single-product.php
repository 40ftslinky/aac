<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//get_header( 'shop' ); 

get_header(); 

?>
		<main>
		
		<?php
		
			global $post;

			$page_id = $post->ID;	
			

			$Page_Title=get_the_title($page_id);	
			
			$featured_image_url = get_the_post_thumbnail_url($page_id, 'full'); // 'full', 'medium', 'thumbnail', etc.
			
			$The_content = get_the_content();			
			



		?>

            
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
                                                <h1 class="split-hero-title"><?php echo $Page_Title ?></h1>
                                                <h2 class="split-hero-subtitle">Product Description</h2>

                                            </div>
                                            <a href="#" class="button mono">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-image image-wrap">
                                        <img src="<?php echo $featured_image_url ?>" alt="product placeholder" class="sample-image">
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>


            <!-- legacy / standard section (img left )-->
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <div class="standard-heading"> 
                                                <h4 class="standard-subtitle primary">Description</h4>
                                                <h2 class="standard-title ">Lorem ipsum dolor sit amet</h2>
                                            </div>
											
                                            <div class="standard-text">
											<?php 
												//echo $The_content 
												echo wpautop($The_content);

											?>
											<?php
											
											//	echo do_shortcode('[wpbs id="1" title="yes" legend="yes" language="auto" form_id="0"]');
											
											
											?>
                                                <!-- <p class="body-1">Body 1</p>
                                                <p class="body-1">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-1">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
												-->
											</div>
												<!--
                                            <div class="standard-text">
                                                <p class="body-2">Body 2</p>
                                                <p class="body-2">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-2">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>

                                            <div class="standard-text">
                                                <p class="body-3">Body 3</p>
                                                <p class="body-3">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-3">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>

                                            <div class="standard-text">
                                                <p class="body-4">Body 4</p>
                                                <p class="body-4">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-4">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>

                                            <div class="standard-text">
                                                <p class="body-5">Body 5</p>
                                                <p class="body-5">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-5">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>

                                            <div class="standard-text">
                                                <p class="body-6">Body 6</p>
                                                <p class="body-6">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-6">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>
											-->
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>

                        
						
<?php		



global $post;
$product_id = $post->ID;	
$BA = get_booking_availability($product_id);


?>
						
						
						
						
						
						
						<div class="column __align-end">
                            
                            <div class="product-description-card">
                                <div class="product-description-card-content">
                                    <div class="product-description-card-heading">
									<?php
									global $post;
									$product_id = $post->ID;
									$product = wc_get_product( $product_id );
									$price = $product ? $product->get_price() : null;

									
									?>
                                        <h3 class="product-description-card-title">Details</h3>
                                        <div class="product-description-cost"><?php echo '$' . number_format( $price, 2 ); ?></div>
                                    </div>
									<?php
									//product_overview
									$product_overview = get_field('product_overview', $product_id);
									?>
									<?php
										if(!empty($product_overview)){
											?>									
											<div class="product-description-card-text">                                        
												<div class="product-description-overview"><div class="pd-title">Overview:</div>
												<div class="pd-content"><?php echo $product_overview ?></div>
											</div></div>
										<?php
										}
									?>
                                    <div class="product-description-card-text">
										<?php
										
										$product_features = get_field('product_features', $product_id);
										$product_duration =  get_field('product_duration', $product_id);
										
										$product_who =  get_field('product_who', $product_id);
										
										?>
										<?php
										if(!empty($product_features)){
											?>
											<div class="product-description-features">
											<div class="pd-title">Features:</div>
											<div class="pd-content"><?php echo $product_features ?></div></div>
											<?php
										}
										?>
										<?php
										if(!empty($product_duration)){
											?>										
                                        <div class="product-description-duration">
										<div class="pd-title">Duration:</div>
										<div class="pd-content"><?php echo $product_duration ?></div></div>
											<?php
										}
										?>
                                        <div class="product-description-date"><div class="pd-title">Date of Event/Booking:</div>
										<div class="pd-content">
										<?php
											$Z=0;
											foreach($BA as $Booking){
												if(!empty($Booking['from'])){
													$From = $Booking['from'];
													$To = $Booking['to'];
													$from_date = new DateTime($From);
													$from_to = new DateTime($To);
													$formatted_from = $from_date->format('F j, Y'); // Outputs: October 5, 2025
													$formatted_to = $from_to->format('F j, Y'); // Outputs: October 5, 2025
													if($Z>0){
														print "<span>;</span>";
													}
													
													if($From==$To){
														print "<div class='date_from'>$formatted_from</div>";
														
													} else {
														print "<div class='date_from'>$formatted_from - $formatted_to</div>";
														
													}
												}
												$Z++;
												
											}
										
										?>
										</div></div>
										<?php
										if(!empty($product_who)){
											?>		
                                        <div class="product-description-who"><div class="pd-title">Who it's for:</div>
										<div class="pd-content"><?php echo $product_who ?></div></div>
											<?php
										}
										?>
										
										
										<?php
										///////////////////////////////////////
										// Category 
										//////////////////////////////////////////
										$product_cats = get_the_terms( $product_id, 'product_cat' );
										?>
										<div class="product-description-category">
										  <div class="pd-title">Category:</div>
										  <div class="pd-content">
											<?php if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) : ?>
											  <?php 
														$Z=0;
														
														foreach ( $product_cats as $cat ) : 
															if($Z>0){
																print "<span>;</span>";
															}
															$Z++;
											  ?>
												<div class="pd-category"><?php echo esc_html( $cat->name ); ?></div>
											  <?php endforeach; ?>
											<?php else : ?>
											  <div class="pd-category">Uncategorized</div>
											<?php endif; ?>
										  </div>
										</div>
										<?php
										///////////////////////////////////////
										// End Category 
										//////////////////////////////////////////
										?>
                                    </div>
                                    
		<?php
		
		global $post;
		$page_id = $post->ID;	
		if(!empty($page_id)){
			$product = wc_get_product( $page_id );
		} 


		if ( $product->is_type( 'variable' ) ) {
			$available_variations = $product->get_available_variations();
			// Proceed with variation logic
			$is_variable_product =1;
		} else {
			// Handle simple product logic
			$is_variable_product =0;
			
		}
				
		$is_secure_bookable = get_post_meta( $product->get_id(), '_secure_booking_enabled', true );
		$is_wc_bookable     = $product->is_type( 'booking' );


		if ( $is_secure_bookable || $is_wc_bookable ) {
			$is_booking_product = 1;
			
		} else {
			$is_booking_product = 0;
		}



		
		if(!empty($available_variations)){
			
		$attributes = $product->get_attributes();	
		$attribute_keys = array_keys($attributes);	
		$variations_json = wp_json_encode( $available_variations );

		$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
		
		?>

		<form class="variations_form cart" method="post" enctype="multipart/form-data"
			  data-product_id="<?php echo absint( $product->get_id() ); ?>"
			  data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $available_variations ) ); ?>">

			  <table class="variations" cellspacing="0" role="presentation">
				<tbody>
				  <?php foreach ( $attributes as $attribute_name => $attribute_obj ) : ?>
					<tr>
					  <th class="label">
						<label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>">
						  <?php echo wc_attribute_label( $attribute_name ); ?>
						</label>
					  </th>
					  <td class="value">
						<?php
						  wc_dropdown_variation_attribute_options([
							'options'   => $attribute_obj->get_options(),
							'attribute' => $attribute_name,
							'product'   => $product,
						  ]);
						  if ( end( $attribute_keys ) === $attribute_name ) {
							echo wp_kses_post( apply_filters( 'woocommerce_reset_variations_link',
							  '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) );
						  }
						?>
					  </td>
					</tr>
				  <?php endforeach; ?>
				</tbody>
			  </table>

			  <div class="single_variation_wrap">
				<?php
				  /**
				   * This hook outputs variation price, availability, and hidden inputs.
				   */
				  do_action( 'woocommerce_before_single_variation' );
				  do_action( 'woocommerce_single_variation' );
				  do_action( 'woocommerce_after_single_variation' );
				?>
			  </div>
		</form>
											
											
									
		<?php
		} elseif($is_booking_product==1) {
			
					print "<div>";

					wc_get_template( 'single-product/add-to-cart/booking.php', array( 'product' => $product ) );

					print "</div>";	
		
		} else {
			
				 if ( $product->is_type( 'simple' ) ) : ?>
				  <div class="single_simple_wrap">

					<?php
					  /**
					   * Outputs price and availability for simple products.
					   */
					  do_action( 'woocommerce_single_product_summary' );
					  /**
					   * Outputs the add to cart form for simple products.
					   */
					//  do_action( 'woocommerce_simple_add_to_cart' );
					?>
				  </div>
				<?php endif;
		}

?>		
									
									<!-- <a href="<?php echo esc_url( add_query_arg( 'add-to-cart', get_the_ID(), wc_get_cart_url() ) ); ?>" class="button button-medium primary">Book Now</a> -->
                                    <!-- <a href="#" class="button button-medium primary">Book Now</a> -->
                                </div>  
                                
                            </div>
                                
                        </div>


                    </div>                                    
                </div>
            </section>
			
			
			


<?php




$nextDate = get_next_available_date($BA);

echo '<input type="hidden" id="next-booking-date" value="' . esc_attr($nextDate) . '">';

//			print "<p>nextDate = $nextDate</p>";



?>
<script>

jQuery(function () {
  const nextDate = jQuery('#next-booking-date').val();
  console.log("*nextDate = " + nextDate);

  // Wait for the calendar to be initialized
  const trySetDate = function () {
    const $calendar = jQuery('.wc-bookings-date-picker .picker.hasDatepicker');

    if (
      nextDate &&
      $calendar.length &&
      typeof $calendar.datepicker === 'function' &&
      typeof jQuery.datepicker.parseDate === 'function'
    ) {
      const parsedDate = jQuery.datepicker.parseDate('yy-mm-dd', nextDate);
	  console.log("parsedDate=" + parsedDate);
      $calendar.datepicker('setDate', parsedDate);
      console.log("Date set to: " + nextDate);
    } else {
      console.warn('Calendar not ready, retrying...');
      setTimeout(trySetDate, 100); // Retry until ready
    }
  };

  trySetDate();
});


//Convert .date_from into clickable links:
jQuery(function () {
  jQuery('.date_from').each(function () {
    const dateText = jQuery(this).text().trim();
    jQuery(this).wrapInner(`<a href="#" class="date-link" data-date="${dateText}"></a>`);
  });
});


//Handle click and set the calendar date:

/*
// When the Calendar link is clicked it needs to add the class ="bookable-range selection-start-date ui-datepicker-current-day" to the parent <td> and remove from other <td>s
jQuery(document).on('click', '.date-link', function (e) {
  e.preventDefault();

  const rawDate = jQuery(this).data('date'); // e.g., "October 5, 2025"
  const parsedDate = jQuery.datepicker.parseDate('MM d, yy', rawDate);

  const $calendar = jQuery('.wc-bookings-date-picker .picker.hasDatepicker');
  if ($calendar.length && typeof $calendar.datepicker === 'function') {
    $calendar.datepicker('setDate', parsedDate);
    console.log("Calendar set to: " + rawDate);

    // Extract day/month/year from parsedDate
    const day = parsedDate.getDate();
    const month = parsedDate.getMonth() + 1; // Months are 0-indexed
    const year = parsedDate.getFullYear();

    // Populate visible fields
    jQuery('.booking_date_day').val(day).trigger('change');
    jQuery('.booking_date_month').val(month).trigger('change');
    jQuery('.booking_date_year').val(year).trigger('change');

    // Optional: trigger WooBookings availability check
    jQuery(document.body).trigger('wc_bookings_date_picker_change');
  } else {
    console.warn('Calendar not ready');
  }
});
*/





function highlightDateCell(day, month, year) {
  jQuery('.ui-datepicker td').each(function () {
    const $td = jQuery(this);
    const tdText = $td.text().trim();
    const tdMonth = $td.data('month'); // 0-indexed
    const tdYear = $td.data('year');

    const isSameDay = parseInt(tdText, 10) === day;
    const isSameMonth = tdMonth === (month - 1);
    const isSameYear = tdYear === year;

    if (isSameDay && isSameMonth && isSameYear) {
      // Remove selection classes from all <td>s
      jQuery('.ui-datepicker td').removeClass('bookable-range selection-start-date ui-datepicker-current-day');

      // Restore .bookable to all <td>s that lost it
      jQuery('.ui-datepicker td').each(function () {
        const $cell = jQuery(this);
        if (
          !$cell.hasClass('bookable-range') &&
          !$cell.hasClass('selection-start-date') &&
          !$cell.hasClass('ui-datepicker-current-day')
        ) {
          $cell.addClass('bookable');
        }
      });

      // Apply selection classes to the target <td>
      $td.addClass('bookable-range selection-start-date ui-datepicker-current-day');

      // Remove .bookable from the selected <td>
      $td.removeClass('bookable');
    }
  });
}







jQuery(document).on('click', '.date-link', function (e) {
  e.preventDefault();

  const rawDate = jQuery(this).data('date'); // e.g., "October 5, 2025"
  const parsedDate = jQuery.datepicker.parseDate('MM d, yy', rawDate);

  const $calendar = jQuery('.wc-bookings-date-picker .picker.hasDatepicker');
  if ($calendar.length && typeof $calendar.datepicker === 'function') {
    $calendar.datepicker('setDate', parsedDate);

    const day = parsedDate.getDate();
    const month = parsedDate.getMonth() + 1;
    const year = parsedDate.getFullYear();

    jQuery('.booking_date_day').val(day).trigger('change');
    jQuery('.booking_date_month').val(month).trigger('change');
    jQuery('.booking_date_year').val(year).trigger('change');

    jQuery(document.body).trigger('wc_bookings_date_picker_change');

    // Wait briefly for calendar to render, then highlight
    setTimeout(() => {
      highlightDateCell(day, month, year);
    }, 100);
  } else {
    console.warn('Calendar not ready');
  }
});








</script>

			
			
			
			
			

            <!-- upcoming -->
			<?php
			
			$child_theme_dir = basename(get_stylesheet_directory());
			
			$FileRoot = $_SERVER['DOCUMENT_ROOT']; 	// root path 
			
			$filePath = $FileRoot."/wp-content/themes/".$child_theme_dir."/section/upcoming-program.php";
			
			if(is_file($filePath)){
				include $filePath;
			} else {
				//	print "file not exist : $filePath ";
			}
			




			
			$filePath2 = $FileRoot."/wp-content/themes/".$child_theme_dir."/section/contact.php";
			
			if(is_file($filePath2)){
				include $filePath2;
			} else {
				//	print "file not exist : $filePath2 ";
			}
			
			
			
			?>
		






	
	</main>
	
	
<style>

	.storefront-product-pagination{
		display: none !important;
	}
	
	.single_simple_wrap .product_title{
		display: none !important;
	}

</style>
<?php

get_footer();

