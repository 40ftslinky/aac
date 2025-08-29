<?php
			
			
			global $page_id;
			
			if(empty($page_id )){
			
				global $post;
			
				$post_id = $post->ID;		
			} else {
				
				$post_id = $page_id;
				
			}
			
					
					
				
				
				//we_believe_in_title
				
				$we_believe_in_title = get_field("we_believe_in_title", $post_id);
			
			?>
			<section class="section standard-section belief-section white_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-heading-wrap">                                
                                <h4 class="primary-text"><?php echo $we_believe_in_title ?></h4> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                           <div class="column_inner">

										<?php
										for( $k = 1; $k <=4; $k++) {
										
											$card_K = get_field('card_'.$k, $post_id);
											


											$card_title_1 = $card_K['card_title_1']; // Access the nested value
											
											$card_text_1 = $card_K['card_text_1']; // Access the nested value
											
											$card_icon_image_K = $card_K['card_icon_image_1'];
											$card_icon_image_1 = $card_icon_image_K['url'];
											

											
											?>

										<div class="belief-card ">
											<div class="belief-card-image">
												<img src="<?php echo $card_icon_image_1; ?>" alt="<?php echo $card_title_1 ?>" class="belief-image">
											</div>											
											
											
											<div class="belief-card-content">
												<h4 class="belief-card-title"><?php echo $card_title_1 ?></h4>
												<div class="belief-card-text">
													<div class="belief-text"><?php echo $card_text_1 ?></div>
												</div>
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
			
			