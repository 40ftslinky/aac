<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<?php

$child_theme_dir = basename(get_stylesheet_directory());
$Title1=get_the_title();
if($Title1=='Home'){
	$Title1 = get_bloginfo('description');

}
?>
<html lang="en">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AAC - <?php echo $Title1 ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
        <meta name="description" content="">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:image:alt" content="">
        <link rel="icon" href="favicon/favicon.ico" sizes="any">
        <link rel="apple-touch-icon" href="favicon/favicon.png">
        <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
        <link rel="manifest" href="favicon/site.webmanifest">
        <meta name="theme-color" content="#fafafa">
		<?php wp_head(); ?>		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<style>
			#header {
				opacity: 0;
				transition: opacity 0.3s ease;
				}
				#header.visible {
				  opacity: 1;
				}
		</style>

</head>

<body <?php body_class(); ?>>

		
        <!-- header -->             
        <header id="header">
            <div class="nav-group">

                <!-- top nav -->
                <div class="top_nav-container">
                    <div class="nav-wrapper">
                        
                        <!-- wrapper -->
                        <div class="logo-wrapper">
                            
                            <!-- logo -->

                            <a class="site-link" href="<?php echo esc_url(home_url()); ?>">
                                <div class="site-title">
                                    <h1 hidden>Australian Agricultural Centre</h1>
                                </div>
                            </a>
                            <a class="site-logo-link" href="<?php echo esc_url(home_url()); ?>">
                                <div class="logo" aria-label="Australian Agricultural Centre">
                                    <!-- <img src="/wp-content/themes/<?php echo $child_theme_dir; ?>/assets/praemium_logo.svg" alt="logo"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="163" height="50" fill="none">
                                        <path fill="#212121" d="m67.391 15.74-.593-1.62h-3.5l-.65 1.62H60l3.703-9.649h2.734l3.63 9.648h-2.675Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.124ZM71.18 6.091h2.503v5.714c0 .405.015 1.027.492 1.49.29.275.752.463 1.186.463.434 0 .882-.174 1.157-.42.579-.506.564-1.215.564-1.75V6.091h2.503v5.54c0 1.013-.044 2.069-1.085 3.125-.81.824-1.823 1.2-3.182 1.2-1.52 0-2.604-.52-3.197-1.157-.839-.911-.94-2.14-.94-3.167v-5.54ZM81.172 14.872l1.07-2.025c.535.506 1.345.983 2.213.983.506 0 .81-.159.97-.332a.863.863 0 0 0 .245-.608.754.754 0 0 0-.275-.579c-.246-.217-.622-.318-1.244-.506l-.65-.202c-.406-.13-.999-.348-1.39-.781-.491-.536-.549-1.216-.549-1.707 0-1.186.463-1.91.883-2.33.491-.491 1.301-.91 2.473-.91.955 0 2.068.303 2.98.78L86.9 8.609c-.753-.593-1.317-.65-1.65-.65-.245 0-.578.057-.824.289-.145.144-.246.303-.246.52 0 .174.03.304.13.434.073.087.246.26.84.434l.766.232c.608.188 1.244.405 1.75.954.492.521.622 1.056.622 1.722 0 .882-.217 1.736-.911 2.43-.825.824-1.823.983-2.85.983-.607 0-1.186-.057-1.895-.318a6.734 6.734 0 0 1-1.46-.766ZM95.568 8.218h-2.054v7.521h-2.502V8.218h-2.054V6.09h6.61v2.127ZM96.678 6.091h3.905c.723 0 1.649.116 2.358.854.55.564.824 1.403.824 2.17 0 .824-.289 1.547-.766 2.01-.376.362-.883.579-1.331.666l3.023 3.948h-3.11l-2.4-3.703v3.704h-2.503V6.09ZM99.18 8.03v2.386h.477c.377 0 .912-.1 1.216-.39.188-.188.318-.506.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.651-.376-1.2-.376h-.478ZM112.227 15.74l-.593-1.62h-3.501l-.651 1.62h-2.647l3.703-9.649h2.734l3.631 9.648h-2.676Zm-3.4-3.53h2.141l-1.085-3.124-1.056 3.124ZM116.016 6.091h2.502v7.522h3.009v2.127h-5.511V6.09ZM122.81 6.091h2.503v9.648h-2.503V6.091ZM133.825 15.74l-.593-1.62h-3.501l-.65 1.62h-2.647l3.702-9.649h2.734l3.631 9.648h-2.676Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.124ZM140.117 15.74h-2.503V6.09h2.503l4.614 5.902V6.091h2.502v9.648h-2.502l-4.614-5.901v5.902ZM67.391 29.824l-.593-1.62h-3.5l-.65 1.62H60l3.703-9.648h2.734l3.63 9.648h-2.675Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.125ZM75.527 26.31v-1.954h4.976c0 1.91-.39 3.27-1.548 4.34-1.012.94-2.17 1.215-3.4 1.215-1.735 0-2.921-.637-3.702-1.432-.723-.723-1.389-1.895-1.389-3.486 0-1.534.608-2.792 1.447-3.616.795-.796 2.04-1.418 3.746-1.418.897 0 1.866.203 2.604.65.752.464 1.374 1.23 1.721 1.983l-2.387.983a2.36 2.36 0 0 0-.694-.969 2.023 2.023 0 0 0-1.345-.477c-.593 0-1.2.217-1.65.665-.563.564-.838 1.461-.838 2.213 0 .883.318 1.606.767 2.083.462.492 1.027.738 1.764.738.434 0 .94-.072 1.389-.448.231-.189.506-.536.593-1.07h-2.054ZM82.1 20.176h3.905c.724 0 1.65.116 2.358.853.55.564.825 1.404.825 2.17 0 .825-.29 1.548-.767 2.01-.376.362-.882.58-1.33.666l3.022 3.949h-3.11l-2.4-3.703v3.703H82.1v-9.648Zm2.502 1.938v2.387h.478c.376 0 .911-.101 1.215-.39.188-.189.318-.507.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.65-.377-1.2-.377h-.478ZM91.169 20.176h2.502v9.648H91.17v-9.648ZM102.632 26.598v2.966c-.998.361-1.548.477-2.17.477-1.678 0-2.936-.665-3.732-1.447a5.061 5.061 0 0 1-1.46-3.514c0-1.375.592-2.676 1.46-3.559a5.118 5.118 0 0 1 3.645-1.504c.463 0 1.215.072 2.257.492v2.994c-.81-.998-1.765-1.056-2.184-1.056-.724 0-1.273.217-1.736.636-.593.55-.84 1.302-.84 1.982 0 .665.276 1.403.782 1.88.42.391 1.085.666 1.794.666.376 0 1.301-.044 2.184-1.013ZM104.221 20.176h2.502v5.714c0 .405.015 1.027.492 1.49.289.274.752.462 1.186.462.434 0 .883-.173 1.157-.42.579-.505.565-1.214.565-1.75v-5.496h2.502v5.54c0 1.012-.043 2.069-1.085 3.124-.81.825-1.822 1.201-3.182 1.201-1.519 0-2.604-.52-3.197-1.157-.839-.912-.94-2.141-.94-3.168v-5.54ZM114.646 20.176h2.502v7.522h3.009v2.126h-5.511v-9.648ZM126.249 22.302h-2.054v7.522h-2.502v-7.522h-2.054v-2.126h6.61v2.126ZM127.359 20.176h2.502v5.714c0 .405.015 1.027.492 1.49.289.274.752.462 1.186.462.434 0 .883-.173 1.157-.42.579-.505.565-1.214.565-1.75v-5.496h2.502v5.54c0 1.012-.043 2.069-1.085 3.124-.81.825-1.822 1.201-3.182 1.201-1.519 0-2.604-.52-3.197-1.157-.839-.912-.94-2.141-.94-3.168v-5.54ZM137.784 20.176h3.905c.723 0 1.649.116 2.358.853.55.564.824 1.404.824 2.17 0 .825-.289 1.548-.766 2.01-.376.362-.883.58-1.331.666l3.023 3.949h-3.11l-2.401-3.703v3.703h-2.502v-9.648Zm2.502 1.938v2.387h.477c.377 0 .912-.101 1.216-.39.188-.189.318-.507.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.651-.377-1.201-.377h-.477ZM153.333 29.824l-.593-1.62h-3.501l-.651 1.62h-2.647l3.703-9.648h2.734l3.631 9.648h-2.676Zm-3.4-3.53h2.141l-1.085-3.124-1.056 3.125ZM157.122 20.176h2.502v7.522h3.009v2.126h-5.511v-9.648ZM67.84 40.683v2.965c-.998.362-1.548.477-2.17.477-1.678 0-2.936-.665-3.732-1.446a5.062 5.062 0 0 1-1.46-3.515c0-1.374.592-2.676 1.46-3.558a5.119 5.119 0 0 1 3.645-1.505c.463 0 1.216.073 2.257.492v2.994c-.81-.998-1.765-1.056-2.184-1.056-.724 0-1.273.217-1.736.637-.593.55-.839 1.302-.839 1.982 0 .665.275 1.403.781 1.88.42.39 1.085.665 1.794.665.376 0 1.302-.043 2.184-1.012ZM74.911 34.26v2.127h-2.98v1.605h2.821v2.127h-2.82v1.663h2.98v2.127h-5.483V34.26h5.482ZM79.008 43.908h-2.502V34.26h2.502l4.615 5.902v-5.901h2.502v9.647h-2.502l-4.615-5.901v5.901ZM93.845 36.387H91.79v7.521h-2.502v-7.521h-2.055V34.26h6.61v2.127ZM94.954 34.26h3.906c.723 0 1.649.116 2.358.854.549.564.824 1.403.824 2.17 0 .824-.289 1.547-.766 2.01-.377.362-.883.579-1.331.666l3.023 3.948h-3.11l-2.401-3.703v3.703h-2.503V34.26Zm2.503 1.939v2.387h.477c.376 0 .911-.102 1.215-.391.188-.188.318-.506.318-.81 0-.29-.115-.608-.332-.81-.232-.232-.651-.376-1.2-.376h-.478ZM109.505 34.26v2.127h-2.979v1.605h2.82v2.127h-2.82v1.663h2.979v2.127h-5.482V34.26h5.482Z"/>

                                        <rect width="50" height="50" fill="#00C857" rx="7.042"/>
                                        <path fill="#fff" d="M42.606 18.387h.373a11.937 11.937 0 0 0-9.606-5.676 11.943 11.943 0 0 0-10.437 4.71l-.02-.013-.163.267c-.302.423-.577.86-.823 1.317l-1.352 2.169v-.014l-.022.014-5.288-8.478-6.733 10.794H8.5v.057l-2.866 4.598h9.24l2.9-4.655h-5.14l2.627-4.217 3.232 5.189-4.67 7.492h-.034v.056l-2.867 4.598h9.24l2.901-4.654h-5.14l2.62-4.204.246.388h.014l.5.81.042.112 2.282 3.647.063.064 2.387 3.83h6.712c.183-.014.366-.021.549-.035 4.099-.183 7.655-2.436 9.662-5.732h-.366a10.11 10.11 0 0 1-8.014 3.936c-5.592 0-10.127-4.534-10.127-10.125 0-5.59 4.535-10.125 10.127-10.125 3.24 0 6.12 1.52 7.972 3.886M39.387 32.66l1.303-1.091.12-.979-1.95-.042-.078 1.162.598.95h.007Zm-4.676-6.576a.41.41 0 0 0 .134.02c.078 0 .148 0 .225-.02-.169-.873-.19-1.697-.07-2.394-.324.535-.437 1.415-.282 2.394m2.747-6.204c0-.401.324-.732.732-.732.409 0 .733.324.733.732a.727.727 0 0 1-.733.732.727.727 0 0 1-.732-.732Zm-4.775 0a.732.732 0 0 1-.732.732.727.727 0 0 1-.733-.732c0-.408.324-.732.733-.732.408 0 .732.324.732.732Zm3.62-.007c.887.416 1.612 1.021 2.105 1.753.36-1.006 1.134-1.872 2.163-2.464l-.261-.774L38.9 16.21l-.359.056-.458 1.535-.697 1.415-1.852-.83-.317-1.296-2.549.317-.711.901-1.535.134-.472.943c.852.578 1.486 1.352 1.802 2.24.486-.733 1.212-1.338 2.106-1.754-1.063 1.183-1.62 2.69-1.458 4.31.099.978.458 1.894 1 2.717l1.888.93a5.76 5.76 0 0 1-.458-1.218 7.952 7.952 0 0 1-.106-.535c-.64-.17-1.077-1.233-.993-2.486.092-1.33 1.465-2.324 1.465-2.324s1.218 1.17 1.127 2.507c-.085 1.19-.613 2.148-1.24 2.303a8.39 8.39 0 0 0 .64 1.965l.065.027.507-.535c.824-.972 1.366-2.112 1.493-3.359.162-1.62-.402-3.126-1.458-4.309m-10.676 6.042 1.55 1.837-.163 1.141.98.38 2.71-.753 2-1.289c-.683-.598-1.204-1.323-1.464-2.14-.543.802-1.38 1.464-2.388 1.88 1.141-1.106 1.824-2.528 1.824-4.077 0-1.289-.479-2.486-1.288-3.486l-1.832 2.303-2.168 1.634.246 2.57h-.007Zm18.338-.831v-1.733l-1.563-1.478-1.508-1.634-.253-.753c-.775.986-1.225 2.147-1.225 3.4 0 1.55.683 2.972 1.824 4.078-1.008-.416-1.846-1.078-2.388-1.88-.359 1.112-1.19 2.063-2.281 2.732l.88 1.506L39 29.97l.514-.598.423.683 1.267-.592 2.789-4.386Z"/>
                                    </svg>

                                        
                                </div>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="nav-container">

                    <div class="nav-wrapper">

                        <!-- nav -->
                        <nav class="nav">
                            <!-- desktop -->
                            <div class="desktop-menu">
                                <div class="desktop">
                            
                                    <ul class="menu">
                                        
                                        <li class="menu-item"><span class="menu-link has-submenu " data-submenu="About" >About</span></li>
                                        <!-- <li class="menu-item"><a class="menu-link " href="/training">Training</a></li> -->
                                        <li class="menu-item"><span class="menu-link has-submenu" data-submenu="Programs" >Programs</span></li>
                                        <!-- <li class="menu-item"><span class="menu-link has-submenu" data-submenu="Calendar" >Calendar</span></li>                                 -->
                                        <li class="menu-item"><a class="menu-link" href="/calendar">Calendar</a></li>
                                        <li class="menu-item"><a class="menu-link" href="/glamping">Glamping</a></li>
                                        <li class="menu-item"><span class="menu-link has-submenu" data-submenu="Resources" >Resources</span></li>
                                        <li class="menu-item"><a class="menu-link " href="/contact">Contact</a></li>
                                                                        
                                    </ul>

                                    

                                    <!-- secondary nav -->
                                    <ul class="secondary-menu">
                                        <!-- <li class="menu-item"><a class="menu-link" href="#favourites" aria-label="Click here to see your favourites">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18C9.35502 17.428 8.62602 16.833 7.85502 16.2H7.84502C5.13002 13.98 2.05302 11.468 0.694023 8.458C0.24754 7.49972 0.0109268 6.45712 1.1406e-05 5.4C-0.00297039 3.94948 0.578794 2.55898 1.61383 1.54276C2.64887 0.526544 4.04981 -0.0296104 5.50002 -4.87245e-06C6.68065 0.00185993 7.83586 0.343076 8.82802 0.982995C9.26399 1.26596 9.65844 1.60825 10 2C10.3435 1.60979 10.7381 1.2677 11.173 0.982995C12.1648 0.34295 13.3197 0.00171368 14.5 -4.87245e-06C15.9502 -0.0296104 17.3512 0.526544 18.3862 1.54276C19.4213 2.55898 20.003 3.94948 20 5.4C19.9898 6.45881 19.7532 7.50319 19.306 8.463C17.947 11.473 14.871 13.984 12.156 16.2L12.146 16.208C11.374 16.837 10.646 17.432 10.001 18.008L10 18ZM5.50002 2C4.56853 1.98834 3.67009 2.34484 3.00002 2.992C2.35441 3.62616 1.99358 4.49504 1.99994 5.4C2.01135 6.1705 2.18585 6.92985 2.51202 7.628C3.15353 8.9267 4.01913 10.102 5.06902 11.1C6.06002 12.1 7.20002 13.068 8.18602 13.882C8.45902 14.107 8.73702 14.334 9.01502 14.561L9.19002 14.704C9.45702 14.922 9.73302 15.148 10 15.37L10.013 15.358L10.019 15.353H10.025L10.034 15.346H10.039H10.044L10.062 15.331L10.103 15.298L10.11 15.292L10.121 15.284H10.127L10.136 15.276L10.8 14.731L10.974 14.588C11.255 14.359 11.533 14.132 11.806 13.907C12.792 13.093 13.933 12.126 14.924 11.121C15.9741 10.1236 16.8397 8.94851 17.481 7.65C17.8131 6.9458 17.9901 6.1785 18.0001 5.4C18.0042 4.49783 17.6435 3.63229 17 3C16.3312 2.34992 15.4326 1.99048 14.5 2C13.3619 1.99032 12.274 2.46736 11.51 3.311L10 5.051L8.49002 3.311C7.72609 2.46736 6.6381 1.99032 5.50002 2Z" fill="#121212"/>
                                            </svg>
                                        </a></li>
										-->
										
                                       <!-- <li class="menu-item"><a class="menu-link" href="/my-account/" aria-label="Click here to login">
                                            <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 5C3 2.23858 5.23858 0 8 0C10.7614 0 13 2.23858 13 5C13 7.76142 10.7614 10 8 10C5.23858 10 3 7.76142 3 5ZM8 8C9.65685 8 11 6.65685 11 5C11 3.34315 9.65685 2 8 2C6.34315 2 5 3.34315 5 5C5 6.65685 6.34315 8 8 8Z" fill="#2E3A59"/>
                                                <path d="M2.34315 13.3431C0.842855 14.8434 0 16.8783 0 19H2C2 17.4087 2.63214 15.8826 3.75736 14.7574C4.88258 13.6321 6.4087 13 8 13C9.5913 13 11.1174 13.6321 12.2426 14.7574C13.3679 15.8826 14 17.4087 14 19H16C16 16.8783 15.1571 14.8434 13.6569 13.3431C12.1566 11.8429 10.1217 11 8 11C5.87827 11 3.84344 11.8429 2.34315 13.3431Z" fill="#2E3A59"/>
                                            </svg>

                                        </a></li>-->
										<?php
										$COUNTDIV ="";	
										$ATTR="";
										if (WC()->cart && !WC()->cart->is_empty()) {
											$item_count = WC()->cart->get_cart_contents_count();
											if(!empty($item_count)){
												$ATTR='data-attr="'.$item_count.'"';
												$COUNTDIV ="<div class='item_count'>$item_count</div>";
											}
										} 
										?>
                                        <li class="menu-item"><a class="menu-link" <?php echo $ATTR; ?>  href="/cart" aria-label="Cart">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.875 1.375H5.375L7.72 13.0913C7.80001 13.4941 8.01917 13.856 8.3391 14.1135C8.65904 14.3711 9.05936 14.5079 9.47 14.5H17.975C18.3856 14.5079 18.786 14.3711 19.1059 14.1135C19.4258 13.856 19.645 13.4941 19.725 13.0913L21.125 5.75H6.25M9.75 18.875C9.75 19.3582 9.35825 19.75 8.875 19.75C8.39175 19.75 8 19.3582 8 18.875C8 18.3917 8.39175 18 8.875 18C9.35825 18 9.75 18.3917 9.75 18.875ZM19.375 18.875C19.375 19.3582 18.9833 19.75 18.5 19.75C18.0168 19.75 17.625 19.3582 17.625 18.875C17.625 18.3917 18.0168 18 18.5 18C18.9833 18 19.375 18.3917 19.375 18.875Z" stroke="#2E3A59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg><?php echo $COUNTDIV ?>
                                        </a></li> 
                                    </ul>

                                </div>
                            </div>
                            <!-- / end desktop -->

                            <!-- mobile -->

                            <div class="fullscreen-menu">
                                <div class="fullscreen">
                            
                                    <ul class="menu">
                                        
                                        <li class="menu-item"><a class="menu-link has-submenu" >About</a></li>
                                        <!-- <li class="menu-item"><a class="menu-link" href="/training">Training</a></li> -->
                                        <li class="menu-item"><span class="menu-link has-submenu" >Programs</span></li>
                                        <li class="menu-item"><a class="menu-link" href="/calendar">Calendar</a></li>
                                        <li class="menu-item"><a class="menu-link" href="/glamping">Glamping</a></li>
                                        <!-- <li class="menu-item"><span class="menu-link has-submenu" href="#calendar">Calendar</span></li>                                 -->
                                        <li class="menu-item"><span class="menu-link has-submenu" >Resources</span></li>
                                        <li class="menu-item"><a class="menu-link " href="#contact">Contact</a></li>
                                                                        
                                    </ul>


                                    <!-- secondary nav -->
                                    <ul class="secondary-menu">
                                        
                                        <li class="menu-item"><a class="menu-link" href="#favourites" aria-label="Click here to see your favourites">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18C9.35502 17.428 8.62602 16.833 7.85502 16.2H7.84502C5.13002 13.98 2.05302 11.468 0.694023 8.458C0.24754 7.49972 0.0109268 6.45712 1.1406e-05 5.4C-0.00297039 3.94948 0.578794 2.55898 1.61383 1.54276C2.64887 0.526544 4.04981 -0.0296104 5.50002 -4.87245e-06C6.68065 0.00185993 7.83586 0.343076 8.82802 0.982995C9.26399 1.26596 9.65844 1.60825 10 2C10.3435 1.60979 10.7381 1.2677 11.173 0.982995C12.1648 0.34295 13.3197 0.00171368 14.5 -4.87245e-06C15.9502 -0.0296104 17.3512 0.526544 18.3862 1.54276C19.4213 2.55898 20.003 3.94948 20 5.4C19.9898 6.45881 19.7532 7.50319 19.306 8.463C17.947 11.473 14.871 13.984 12.156 16.2L12.146 16.208C11.374 16.837 10.646 17.432 10.001 18.008L10 18ZM5.50002 2C4.56853 1.98834 3.67009 2.34484 3.00002 2.992C2.35441 3.62616 1.99358 4.49504 1.99994 5.4C2.01135 6.1705 2.18585 6.92985 2.51202 7.628C3.15353 8.9267 4.01913 10.102 5.06902 11.1C6.06002 12.1 7.20002 13.068 8.18602 13.882C8.45902 14.107 8.73702 14.334 9.01502 14.561L9.19002 14.704C9.45702 14.922 9.73302 15.148 10 15.37L10.013 15.358L10.019 15.353H10.025L10.034 15.346H10.039H10.044L10.062 15.331L10.103 15.298L10.11 15.292L10.121 15.284H10.127L10.136 15.276L10.8 14.731L10.974 14.588C11.255 14.359 11.533 14.132 11.806 13.907C12.792 13.093 13.933 12.126 14.924 11.121C15.9741 10.1236 16.8397 8.94851 17.481 7.65C17.8131 6.9458 17.9901 6.1785 18.0001 5.4C18.0042 4.49783 17.6435 3.63229 17 3C16.3312 2.34992 15.4326 1.99048 14.5 2C13.3619 1.99032 12.274 2.46736 11.51 3.311L10 5.051L8.49002 3.311C7.72609 2.46736 6.6381 1.99032 5.50002 2Z" fill="#121212"/>
                                            </svg>
                                        </a></li>
                                        <li class="menu-item"><a class="menu-link"  href="#login"  <?php echo $ATTR; ?>  aria-label="Click here to login">
                                            <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 5C3 2.23858 5.23858 0 8 0C10.7614 0 13 2.23858 13 5C13 7.76142 10.7614 10 8 10C5.23858 10 3 7.76142 3 5ZM8 8C9.65685 8 11 6.65685 11 5C11 3.34315 9.65685 2 8 2C6.34315 2 5 3.34315 5 5C5 6.65685 6.34315 8 8 8Z" fill="#2E3A59"/>
                                                <path d="M2.34315 13.3431C0.842855 14.8434 0 16.8783 0 19H2C2 17.4087 2.63214 15.8826 3.75736 14.7574C4.88258 13.6321 6.4087 13 8 13C9.5913 13 11.1174 13.6321 12.2426 14.7574C13.3679 15.8826 14 17.4087 14 19H16C16 16.8783 15.1571 14.8434 13.6569 13.3431C12.1566 11.8429 10.1217 11 8 11C5.87827 11 3.84344 11.8429 2.34315 13.3431Z" fill="#2E3A59"/>
                                            </svg>

                                        </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/cart" aria-label="Cart">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.875 1.375H5.375L7.72 13.0913C7.80001 13.4941 8.01917 13.856 8.3391 14.1135C8.65904 14.3711 9.05936 14.5079 9.47 14.5H17.975C18.3856 14.5079 18.786 14.3711 19.1059 14.1135C19.4258 13.856 19.645 13.4941 19.725 13.0913L21.125 5.75H6.25M9.75 18.875C9.75 19.3582 9.35825 19.75 8.875 19.75C8.39175 19.75 8 19.3582 8 18.875C8 18.3917 8.39175 18 8.875 18C9.35825 18 9.75 18.3917 9.75 18.875ZM19.375 18.875C19.375 19.3582 18.9833 19.75 18.5 19.75C18.0168 19.75 17.625 19.3582 17.625 18.875C17.625 18.3917 18.0168 18 18.5 18C18.9833 18 19.375 18.3917 19.375 18.875Z" stroke="#2E3A59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg><?php echo $COUNTDIV ?>
                                        </a>
										
										</li>  
                                    
                                    </ul>

                                </div>
                            </div>

                            <!-- / end mobile -->

                            
                        <!-- / nav -->

                        <!-- hamburger -->
                        <div id="menu-button" class="hamburger">
                            <span></span>
                        </div>

                        

                        </nav>  
                    </div>
                    
                </div>
            </div>

            <div class="mega-menu submenu">
                <div class="mega-menu-wrapper">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column" data-submenu="About">
                            <h3 class="submenu-title">About</h3>
                            <ul class="mega-menu-submenu">
                                <li class="submenu-item"><a class="submenu-link" href="/our-story">Our Story</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/our-team">Our Team</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/sustainability">Sustainability Principles</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/partners">Partners & Supporters</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/agritourism">Agritourism</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-column" data-submenu="Programs">
                            <h3 class="submenu-title">Programs</h3>
                            <ul class="mega-menu-submenu">
                                <li class="submenu-item"><a class="submenu-link" href="/training">For Adults</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/primary-schools">For Primary Schools</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/high-schools">For High Schools</a></li>
                                <!-- <li class="submenu-item"><a class="submenu-link" href="/excursions/practical-details">Practical Details</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/excursions/booking-forms">Booking Forms</a></li> -->
                            </ul>
                        </div>
                        <!-- <div class="mega-menu-column" data-submenu="Calendar">
                            <h3 class="submenu-title">Offers</h3>
                            <ul class="mega-menu-submenu">
                                <li class="submenu-item"><a class="submenu-link" href="/calendar">Calendar</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/glamping">Glamping</a></li>
                            </ul>
                        </div> -->
                        <div class="mega-menu-column" data-submenu="Resources">
                            <h3 class="submenu-title">Resources</h3>
                            <ul class="mega-menu-submenu">
								<!--  <li class="submenu-item"><a class="submenu-link active" href="/employment-services">Employment Services</a></li> -->
                                <!-- <li class="submenu-item"><a class="submenu-link" href="/resources/media">Media</a></li> -->
                                <li class="submenu-item"><a class="submenu-link" href="/resources/blog">Blog</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="/resources/virtual-campus">Virtual Campus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            

        </header>
		
		

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */

	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
