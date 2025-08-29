<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Calendar Template (AAC)
 *
 * @package storefront
 */

	$child_theme_dir = basename(get_stylesheet_directory());
	global $post;

	$page_id = $post->ID;	
	
	get_header(); 
	
	
	
	?>

        <main>

            
            <?php
			

				
			?>
            <!-- 01 home hero 
            <section class="section generic-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="generic-hero full-width has-image">
                                <div class="generic-hero-image image-wrap">
                                    <img src="assets/images/placeholder.png" alt="Excursion_hero Image" class="sample-image">
                                </div>
                                <div class="generic-hero-content has-gradient">
                                    <div class="generic-hero-content-item">
                                        <div class="generic-hero-content-inner">

                                                <h4 class="standard-subtitle white">Programs & Excursions</h4>
                                                <h1 class="generic-hero-title">Calendar</h1>
                                                <h2 class="generic-hero-subtitle">Every day is perfect, for something.</h2>
       
                                        </div>
                                        <a href="#" class="button primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>
-->

            <!-- 02 legacy / standard section (img left ) 
            <section class="section standard-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-image-wrap image-wrap standard-image-wrap">
                                <img src="assets/images/placeholder.png" alt="Calendar" class="sample-image">
                            </div>
                                
                        </div>

                        <div class="column">

                           <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <div class="standard-heading">                                                
                                                <h4 class="standard-subtitle primary">Wharekarori</h4>
                                                <h2 class="standard-title ">Rain hail or shine</h2>
                                            </div>
                                            <div class="standard-text">
                                                <p>Rain hail or shine, we’re always busy at Wharekarori.</p>
                                                <p>Whether it’s an agricultural training program or a school excursion, here’s our schedule for the coming months.</p>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>
			-->
            

        
		<?php
						
				include "section/generic-hero.php";	

				include "section/standard-section.php";

				include "section/calendar-program.php";

				include "section/contact.php";


		?>

        </main>


<?php
get_footer();
