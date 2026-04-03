<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: About Partners
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	
	global $post;

	$page_id = $post->ID;	
	
	
	get_header(); ?>

		<main>
		
		
		

            
            
            <!-- half hero img right-->
			<?php
			
				include "section/split-hero.php";
				

				include "section/standard-section.php";
				
				
				$PartnerType = "ourpartner";
				
				
				include "section/biog-partners.php";
				
				

				
				
				include "section/standard-section-primary.php";
				
				
				
			?>
            
          

			
			


            <!-- partners x12  TODO ACF   -->
            <section class="section standard-section notwhite-bg partner-logo-grid-section">
                <div class="container">
                    <div class="row">
                        <div class="column">

                            <div class="column_inner">
								<?php
								$mission_partners_title_1=get_field('mission_partners_title_1', $page_id);
								$supporting_the_mission_and_vision =get_field('supporting_the_mission_and_vision', $page_id);
								$mission_partners_body_text =get_field('mission_partners_body_text', $page_id);

					
								
								?>
                                <div class="section-heading-wrap">
                                    <h4 class="primary-text"><?php echo $mission_partners_title_1 ?></h4>                            
                                    <h2><?php echo $supporting_the_mission_and_vision ?></h2>
                                    <p class="body-2"><?php echo $mission_partners_body_text ?></p>
                                    <p>&nbsp;</p>
									<?php
									$support_our_mission_today =get_field('support_our_mission_today', $page_id);
									$support_our_mission_link =get_field('support_our_mission_link', $page_id);
									
									$link_button_to_enquiry_form_instead_of_url = get_field('link_button_to_enquiry_form_instead_of_url', $page_id);
									$css_1 = "";
									if(!empty($link_button_to_enquiry_form_instead_of_url)){
										if($link_button_to_enquiry_form_instead_of_url[0]=='yes'){
											 $support_our_mission_link="#";
											 $css_1="pop-up-trigger";
										} 
									}
									
									
									?>
                                    <a href="<?php echo $support_our_mission_link ?>" class="button primary <?php echo $css_1 ?>"><?php echo $support_our_mission_today ?></a>
                                </div>   
                            
                            </div>
                                
                        </div>                    

                        <div class="column">

                           <div class="column_inner partner-logo-grid">

									<?php
									$PartnerType="missionpartner";
									
										$args = [
											'post_type'      => 'team-members',
											'posts_per_page' => -1,
											'post_status'    => 'publish',
											'meta_query'     => [
												[
													'key'     => 'core_team_member',
													'value'   => $PartnerType,
													'compare' => '='
												]
											],
											'meta_key'       => '_tm_order_value',
											'orderby'        => 'meta_value_num',
											'order'          => 'ASC'
										];

									$query = new WP_Query($args);
									
									
									
									
									  $x=0;
									  
									if ($query->have_posts()) {
										while ($query->have_posts()) {
											$query->the_post();
											
											$Pid = get_the_ID();
											
											
											$post_title =get_the_title($Pid);
											$The_content = get_the_content($Pid);
											$featured_image_url = get_the_post_thumbnail_url($Pid, 'full'); // 'full', 'medium', 'thumbnail', etc.
											
										//	$team_member_card_position = get_field( "team_member_card_position", $Pid );
											
										//	$team_member_card_position_2 = get_field( "team_member_card_position_2", $Pid );
											
											$core_team_member = get_field( "core_team_member", $Pid );
											
										//	$team_members_linked_in_url = get_field( "team_members_linked_in_url", $Pid );
											
											$x++;
									
									
									
									
									?>
                                    <div class="card partner-logo-card">
                                        <div class="partner-logo-card-image">
                                            <img src="<?php echo $featured_image_url; ?>" alt="partner: <?php echo $post_title; ?>" class="partner-logo-image">
                                        </div>
                                        <div class="partner-logo-card-content">
                                            <h3 class="partner-logo-card-title"><?php echo $post_title; ?></h3>
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



             <?php
			 
				$checkbox_to_hide_the_product_carousel  = get_field('checkbox_to_hide_the_product_carousel', $page_id);
				
				$checkbox_to_hide_the_contact_form  = get_field('checkbox_to_hide_the_contact_form', $page_id);				
			 
				if($checkbox_to_hide_the_product_carousel[0]!="yes"){
					include "section/upcoming-program.php";
				}
				if($checkbox_to_hide_the_contact_form[0]!="yes"){
					include "section/contact.php";
				}
				
			?>



		
        
        </main>
		


<?php
get_footer();
