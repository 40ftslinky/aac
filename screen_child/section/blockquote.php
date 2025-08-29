<?php


		
global $page_id;

if(empty($page_id )){

	global $post;

	$post_id = $post->ID;		
} else {
	
	$post_id = $page_id;
	
}



global $BlockQuote;
if(empty($BlockQuote)){
	$BlockQuote = 1;
}
//blockquote_subtitle
if( $BlockQuote == 2 ){
	$blockquote_subtitle = get_field( "blockquote_subtitle_2", $page_id );
	$blockquote_title = get_field( "blockquote_title_2", $page_id );
	$blockquote_main = get_field( "blockquote_main_2b", $page_id );
	$blockquote_cite = get_field( "blockquote_cite_2b", $page_id );
	$blockquote_section_class =  get_field( "blockquote_section_class_2", $page_id );
	$blockquote_button_link =  get_field( "blockquote_button_link_2", $page_id );
	$blockquote_button_text =  get_field( "blockquote_button_text_2", $page_id );
} else {
	$blockquote_subtitle = get_field( "blockquote_subtitle", $page_id );
	$blockquote_title = get_field( "blockquote_title", $page_id );
	$blockquote_main = get_field( "blockquote_main", $page_id );
	$blockquote_cite = get_field( "blockquote_cite", $page_id );
	$blockquote_main_2 = get_field( "blockquote_main_2", $page_id );
	$blockquote_cite_2= get_field( "blockquote_cite_2", $page_id );
	$blockquote_section_class =  get_field( "blockquote_section_class", $page_id );
	$blockquote_button_link =  get_field( "blockquote_button_link", $page_id );
	$blockquote_button_text =  get_field( "blockquote_button_text", $page_id );
}


if(empty($blockquote_section_class )){
	$blockquote_section_class  = "white_gradient-bg";	// if no value for BG is set default to white 
}

if(strstr($blockquote_section_class, "white")){

	$Class2="primary";	// alternat colour for subheadings 
	
} else {
	$Class2="white";	// alternat colour for subheadings 
}




?>
            <!-- blockquote -->			
            <section class="section blockquote-section <?php echo $blockquote_section_class ?>">
                <div class="container">
                    <div class="row">
						<?php
						if(!empty($blockquote_subtitle) || !empty($blockquote_title)){
						?>
                        <div class="column">
                            <div class="section-heading-wrap">
                                <h4 class="standard-subtitle <?php echo $Class2 ?>"><?php echo $blockquote_subtitle ?><!-- Learn  --></h4>
                                <h2 class="standard-title "><?php echo $blockquote_title ?><!-- Welcome to Dalman Yalbalinya Gudarra. --></h2>
                            </div>                        
                        </div>
						<?php
						}
						?>
						<!-- -->
                        <div class="column">
                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote"><?php echo $blockquote_main ?>”</p>
                                   						<?php
															if(!empty($blockquote_cite)){
																?>
																<cite><?php echo $blockquote_cite ?></cite><!-- -->
																<?php
															}
														?>
											</blockquote>			
													<?php
														if(!empty($blockquote_main_2)){
															print '<blockquote>';
															?>
															<p class="blockquote"><?php echo $blockquote_main_2 ?>”</p>
															<?php
															if(!empty($blockquote_cite_2)){
																?>
																<cite><?php echo $blockquote_cite_2 ?></cite>
																<?php
															}														
															print "</blockquote>	";
														}
													?>

                                
                            </div>                        
                        </div>       

						<?php
						if(!empty($blockquote_button_text) && !empty($blockquote_button_link)){
						?>
                        <div class="column __justify-around">

                            <div class="column_inner">
                                <a href="<?php echo $blockquote_button_link ?>" class="button ghost"><?php echo $blockquote_button_text ?></a>
                            </div>
                        </div>
						<?php
						}
						?>

						<?php
						$blockquote_card_1 =  get_field( "blockquote_card_1", $page_id );
						$blockquote_card_2 =  get_field( "blockquote_card_2", $page_id );
						$blockquote_card_img =  get_field( "blockquote_card_img", $page_id );
						
						
						
						if(!empty($blockquote_card_1)){
						?>

                        <div class="column">
                           <div class="column_inner">
                                    <div class="breakout-card ">
										<?php
										if(!empty($blockquote_card_img)){
										?>
                                        <div class="breakout-card-image">
                                            <img src="<?php echo $blockquote_card_img; ?>" alt="breakout: Emissions" class="vision-image">
                                        </div>
										<?php
										}
										?>										
                                        <div class="breakout-card-content">
                                            <h1 class="breakout-card-title"><?php echo $blockquote_card_1; ?><!-- <span>↓</span>63<span>%</span> --></h1>
											<?php
											if(!empty($blockquote_card_2)){
												?>
												<div class="breakout-card-text">
													<div class="breakout-text"><?php echo $blockquote_card_2; ?><!-- Greenhouse gas emission reduction --></div>
												</div>
												<?php
											}
											?>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						}
						?>

                    </div>                                    
                </div>
            </section>
<!--

            <section class="section blockquote-section white_gradient-bg">****
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-heading-wrap">
                                <h4 class="standard-subtitle primary">Learn </h4>
                                <h2 class="standard-title ">Welcome to Dalman Yalbalinya Gudarra.</h2>
                            </div>                        
                        </div>
                        <div class="column">
                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote">Our goal is to build a stunning, welcoming space where anyone can stop by to learn about the land, and take in the view.<br>
                                                        An interface between agricultural and consumers, bringing the industry to life and agritourism to the community, for the lasting benefit of all.”</p>
                                </blockquote>
                            </div>  

                        </div>
                    

                        
                    </div>                                    
                </div>
            </section>








            <section class="section blockquote-section primary_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">

                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote">We’re building an atrium of agriculture, a temple of turbines, a place of great wind and education. A centre of sustainability, and the circular economy, and a great place to grab a coffee too.”</p>
                                    <cite>Jo Marshall, CEO, <em>Australian Agriculture Centre</em></cite>
                                </blockquote>
                            </div>                        
                                
                        </div>                    

                        
                    </div>                                    
                </div>
            </section>





			<section class="section blockquote-section white_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column stretch-width-30">
                            <div class="column-content-inner">
                                <h4 class="standard-subtitle primary">Value</h4>
                                <h2 class="standard-title ">Facts</h2>
                            </div>
                        </div>
                        <div class="column">

                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote">Australian Agriculture attracted $2.98 billion R&D funding in 2024, delivering $63.8 billion in gross value to the Australian economy - and with 70% of our produce exported overseas, it pays to stay ahead of the game.”</p>
                                    <cite>Citation Credit, <em>Farmer & Author</em></cite>
                                </blockquote>
                            </div>                        
                        </div>                    
                    </div>                                    
                </div>
            </section>













            <section class="section blockquote-section primary_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">

                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote">We’re always on the lookout for additional support, so if you feel you have some expertise or skills that simply have to be passed on, then please get in touch.”</p>
                                </blockquote>
                            </div>                        
                                
                        </div>
                        <div class="column __justify-around">

                            <div class="column_inner">
                                <a href="#" class="button ghost">Support Us</a>
                            </div>
                        </div>
                    

                        
                    </div>                                    
                </div>
            </section>
			
			
			
			            			
            <section class="section blockquote-section primary_gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="section-heading-wrap">
                                <blockquote>
                                    <p class="blockquote">Australia’s agriculture industry has led the way in climate action, reducing greenhouse gas emissions by 63% from 1996 and 2013.”</p>
                                    <cite>no citation</cite>
                                </blockquote>
                            </div>                        
                        </div>                    
						

						
						
						
                    </div>                                    
                </div>
            </section>













-->