<?php
/**
 * The template for displaying all single event.
 *
 * @package storefront
 */
 
 
	$pageType = 'posts';
 
 
	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;
	
	$content = $post->post_content;

	$page_id = $post->ID;	
	
	get_header(); 

 ?>
 
         <main>
			<?php
			
				include "section/split-hero-post.php";
			
			?>
           
            <!-- half hero img right-->
            <!-- <section class="section split-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                

                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
                                                <h1 class="split-hero-title">Single Post</h1>
                                                <h2 class="split-hero-subtitle">No Image</h2>

                                            </div>
                                            <a href="#" class="button mono">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>
			-->



            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        

                        <div class="column">

                           <div class="content-item">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <div class="standard-heading"> 
												<?php
														$categories = get_the_category();
														if ( ! empty( $categories ) ) {
															$cat_names = wp_list_pluck( $categories, 'name' );
															$output = count( $cat_names ) > 1 ? implode( ' | ', $cat_names ) : $cat_names[0];
															echo '<h4 class="standard-subtitle primary">' . esc_html( $output ) . '</h4>';
														}
												
														$standard_section_subheading = get_field('standard_section_subheading', $page_id);
														
												?>
                                                <!-- <h4>Description</h4> -->
												<?php
												if(!empty($standard_section_subheading)){
													?>
													<h2 class="standard-title "><?php echo $standard_section_subheading ?></h2>
													<?php
												}
												?>
                                            </div>
											
											<div class="standard-text">
												<?php

													
													echo wpautop($content);

													
												?>
											</div>
                                            <!--
											
                                                <p class="body-1">Body 1</p>
                                                <p class="body-1">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-1">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            

                                            <div class="standard-text">
                                                <p class="body-2">Body 2</p>
                                                <p class="body-2">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <p class="body-2">Ultricies elementum sit vel dignissim vestibulum faucibus blandit diam. Vulputate id tincidunt viverra vitae magna. Nunc aliquet praesent ornare mus sit cras turpis sodales. Ac ultrices turpis pharetra neque elementum faucibus pellentesque sem suscipit. Id at dignissim vestibulum nulla cras volutpat nulla. Vitae ac lacus at tristique sed eu euismod in felis. Blandit ut cras tortor.</p>                                                
                                            </div>

                                            <div class="standard-text">
                                                <p class="body-2">Inline image exmaple</p>
                                                <p class="body-2">Lorem ipsum dolor sit amet consectetur. Amet aliquet elit morbi pellentesque. Habitasse hendrerit egestas aliquam cras id. Aliquet mauris tellus diam magna ullamcorper duis. Eleifend in in nisi ultricies pellentesque gravida at faucibus massa. Sem nulla aliquam volutpat sit est. Id vitae volutpat mi ultrices id tincidunt ante suscipit interdum. Odio justo urna quam vitae venenatis enim purus laoreet.</p>
                                                <figure class="inline-image-wrap">
                                                    <img src="assets/images/placeholder_horiz.png" alt="inline image" class="inline-image" />
                                                    <figcaption class="inline-image-caption">Inline image caption</figcaption>   
                                                </figure>
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

