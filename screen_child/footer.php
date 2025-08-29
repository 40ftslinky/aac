<?php
	
	$child_theme_dir = basename(get_stylesheet_directory());





/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */



?>

		</div><!-- .col-full -->
	</div><!-- #content -->


		<?php


			include "section/popup.php";

		?>


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                    <div class="row">
                        <div class="column">
                            <a class="footer_logo" href="./">
                                <div class="logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="163" height="50" fill="none">
                                        <rect width="50" height="50" fill="#fff" rx="7.042"/>
                                        <path fill="#00C857" d="M42.606 18.387h.373a11.937 11.937 0 0 0-9.606-5.676 11.943 11.943 0 0 0-10.437 4.71l-.02-.013-.163.267c-.302.423-.577.86-.823 1.317l-1.352 2.169v-.014l-.022.014-5.288-8.478-6.733 10.794H8.5v.057l-2.866 4.598h9.24l2.9-4.655h-5.14l2.627-4.217 3.232 5.189-4.67 7.492h-.034v.056l-2.867 4.598h9.24l2.901-4.654h-5.14l2.62-4.204.246.388h.014l.5.81.042.112 2.282 3.647.063.064 2.387 3.83h6.712c.183-.014.366-.02.549-.035 4.099-.183 7.655-2.436 9.662-5.732h-.366a10.11 10.11 0 0 1-8.014 3.936c-5.592 0-10.127-4.534-10.127-10.125 0-5.59 4.535-10.125 10.127-10.125 3.24 0 6.12 1.52 7.972 3.887m-3.205 14.265 1.303-1.091.12-.979-1.95-.042-.078 1.162.598.95h.007Zm-4.676-6.576a.41.41 0 0 0 .134.02c.078 0 .148 0 .225-.02-.169-.873-.19-1.697-.07-2.394-.324.535-.437 1.415-.282 2.394m2.747-6.204c0-.401.324-.732.732-.732.409 0 .733.324.733.732a.727.727 0 0 1-.733.733.727.727 0 0 1-.732-.733Zm-4.775 0a.732.732 0 0 1-.732.733.727.727 0 0 1-.733-.733c0-.408.324-.732.733-.732.408 0 .732.324.732.732Zm3.62-.007c.887.416 1.612 1.021 2.105 1.753.36-1.006 1.134-1.872 2.163-2.464l-.261-.774L38.9 16.21l-.359.056-.458 1.535-.697 1.415-1.852-.83-.317-1.296-2.549.317-.711.901-1.535.134-.472.943c.852.578 1.486 1.352 1.802 2.24.486-.733 1.212-1.338 2.106-1.754-1.063 1.183-1.62 2.69-1.458 4.31.099.978.458 1.894 1 2.717l1.888.93a5.76 5.76 0 0 1-.458-1.218 7.962 7.962 0 0 1-.106-.535c-.64-.17-1.077-1.233-.993-2.486.092-1.33 1.465-2.324 1.465-2.324s1.218 1.17 1.127 2.507c-.085 1.19-.613 2.148-1.24 2.303a8.391 8.391 0 0 0 .64 1.964l.065.028.507-.535c.824-.972 1.366-2.112 1.493-3.359.162-1.62-.402-3.126-1.458-4.309m-10.676 6.042 1.55 1.837-.163 1.141.98.38 2.71-.753 2-1.289c-.683-.598-1.204-1.323-1.464-2.14-.543.803-1.38 1.464-2.388 1.88 1.141-1.106 1.824-2.528 1.824-4.077 0-1.289-.479-2.486-1.288-3.485l-1.832 2.302-2.168 1.634.246 2.57h-.007Zm18.338-.831v-1.732l-1.563-1.48-1.508-1.633-.253-.753c-.775.986-1.225 2.147-1.225 3.4 0 1.55.683 2.972 1.824 4.078-1.008-.416-1.846-1.078-2.388-1.88-.359 1.112-1.19 2.063-2.281 2.732l.88 1.507 1.521.654.514-.598.423.683 1.267-.592 2.789-4.386Z"/>
                                        <path fill="#fff" d="m67.391 15.74-.593-1.62h-3.5l-.65 1.62H60l3.703-9.649h2.734l3.63 9.648h-2.675Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.124ZM71.18 6.091h2.503v5.714c0 .405.015 1.027.492 1.49.29.275.752.463 1.186.463.434 0 .882-.174 1.157-.42.579-.506.564-1.215.564-1.75V6.091h2.503v5.54c0 1.013-.044 2.069-1.085 3.125-.81.824-1.823 1.2-3.182 1.2-1.52 0-2.604-.52-3.197-1.157-.839-.911-.94-2.14-.94-3.167v-5.54ZM81.172 14.872l1.07-2.025c.535.506 1.345.983 2.213.983.506 0 .81-.159.97-.332a.863.863 0 0 0 .245-.608.754.754 0 0 0-.275-.579c-.246-.217-.622-.318-1.244-.506l-.65-.202c-.406-.13-.999-.348-1.39-.781-.491-.536-.549-1.216-.549-1.707 0-1.186.463-1.91.883-2.33.491-.491 1.301-.91 2.473-.91.955 0 2.068.303 2.98.78L86.9 8.609c-.753-.593-1.317-.65-1.65-.65-.245 0-.578.057-.824.289-.145.144-.246.303-.246.52 0 .174.03.304.13.434.073.087.246.26.84.434l.766.232c.608.188 1.244.405 1.75.954.492.521.622 1.056.622 1.722 0 .882-.217 1.736-.911 2.43-.825.824-1.823.983-2.85.983-.607 0-1.186-.057-1.895-.318a6.734 6.734 0 0 1-1.46-.766ZM95.568 8.218h-2.054v7.521h-2.502V8.218h-2.054V6.09h6.61v2.127ZM96.678 6.091h3.905c.723 0 1.649.116 2.358.854.55.564.824 1.403.824 2.17 0 .824-.289 1.547-.766 2.01-.376.362-.883.579-1.331.666l3.023 3.948h-3.11l-2.4-3.703v3.704h-2.503V6.09ZM99.18 8.03v2.386h.477c.377 0 .912-.1 1.216-.39.188-.188.318-.506.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.651-.376-1.2-.376h-.478ZM112.227 15.74l-.593-1.62h-3.501l-.651 1.62h-2.647l3.703-9.649h2.734l3.631 9.648h-2.676Zm-3.4-3.53h2.141l-1.085-3.124-1.056 3.124ZM116.016 6.091h2.502v7.522h3.009v2.127h-5.511V6.09ZM122.81 6.091h2.503v9.648h-2.503V6.091ZM133.825 15.74l-.593-1.62h-3.501l-.65 1.62h-2.647l3.702-9.649h2.734l3.631 9.648h-2.676Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.124ZM140.117 15.74h-2.503V6.09h2.503l4.614 5.902V6.091h2.502v9.648h-2.502l-4.614-5.901v5.902ZM67.391 29.824l-.593-1.62h-3.5l-.65 1.62H60l3.703-9.648h2.734l3.63 9.648h-2.675Zm-3.399-3.53h2.141l-1.085-3.124-1.056 3.125ZM75.527 26.31v-1.954h4.976c0 1.91-.39 3.27-1.548 4.34-1.012.94-2.17 1.215-3.4 1.215-1.735 0-2.921-.637-3.702-1.432-.723-.723-1.389-1.895-1.389-3.486 0-1.534.608-2.792 1.447-3.616.795-.796 2.04-1.418 3.746-1.418.897 0 1.866.203 2.604.65.752.464 1.374 1.23 1.721 1.983l-2.387.983a2.36 2.36 0 0 0-.694-.969 2.023 2.023 0 0 0-1.345-.477c-.593 0-1.2.217-1.65.665-.563.564-.838 1.461-.838 2.213 0 .883.318 1.606.767 2.083.462.492 1.027.738 1.764.738.434 0 .94-.072 1.389-.448.231-.189.506-.536.593-1.07h-2.054ZM82.1 20.176h3.905c.724 0 1.65.116 2.358.853.55.564.825 1.404.825 2.17 0 .825-.29 1.548-.767 2.01-.376.362-.882.58-1.33.666l3.022 3.949h-3.11l-2.4-3.703v3.703H82.1v-9.648Zm2.502 1.938v2.387h.478c.376 0 .911-.101 1.215-.39.188-.189.318-.507.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.65-.377-1.2-.377h-.478ZM91.169 20.176h2.502v9.648H91.17v-9.648ZM102.632 26.598v2.966c-.998.361-1.548.477-2.17.477-1.678 0-2.936-.665-3.732-1.447a5.061 5.061 0 0 1-1.46-3.514c0-1.375.592-2.676 1.46-3.559a5.118 5.118 0 0 1 3.645-1.504c.463 0 1.215.072 2.257.492v2.994c-.81-.998-1.765-1.056-2.184-1.056-.724 0-1.273.217-1.736.636-.593.55-.84 1.302-.84 1.982 0 .665.276 1.403.782 1.88.42.391 1.085.666 1.794.666.376 0 1.301-.044 2.184-1.013ZM104.221 20.176h2.502v5.714c0 .405.015 1.027.492 1.49.289.274.752.462 1.186.462.434 0 .883-.173 1.157-.42.579-.505.565-1.214.565-1.75v-5.496h2.502v5.54c0 1.012-.043 2.069-1.085 3.124-.81.825-1.822 1.201-3.182 1.201-1.519 0-2.604-.52-3.197-1.157-.839-.912-.94-2.141-.94-3.168v-5.54ZM114.646 20.176h2.502v7.522h3.009v2.126h-5.511v-9.648ZM126.249 22.302h-2.054v7.522h-2.502v-7.522h-2.054v-2.126h6.61v2.126ZM127.359 20.176h2.502v5.714c0 .405.015 1.027.492 1.49.289.274.752.462 1.186.462.434 0 .883-.173 1.157-.42.579-.505.565-1.214.565-1.75v-5.496h2.502v5.54c0 1.012-.043 2.069-1.085 3.124-.81.825-1.822 1.201-3.182 1.201-1.519 0-2.604-.52-3.197-1.157-.839-.912-.94-2.141-.94-3.168v-5.54ZM137.784 20.176h3.905c.723 0 1.649.116 2.358.853.55.564.824 1.404.824 2.17 0 .825-.289 1.548-.766 2.01-.376.362-.883.58-1.331.666l3.023 3.949h-3.11l-2.401-3.703v3.703h-2.502v-9.648Zm2.502 1.938v2.387h.477c.377 0 .912-.101 1.216-.39.188-.189.318-.507.318-.81 0-.29-.116-.608-.333-.81-.231-.232-.651-.377-1.201-.377h-.477ZM153.333 29.824l-.593-1.62h-3.501l-.651 1.62h-2.647l3.703-9.648h2.734l3.631 9.648h-2.676Zm-3.4-3.53h2.141l-1.085-3.124-1.056 3.125ZM157.122 20.176h2.502v7.522h3.009v2.126h-5.511v-9.648ZM67.84 40.683v2.965c-.998.362-1.548.477-2.17.477-1.678 0-2.936-.665-3.732-1.446a5.062 5.062 0 0 1-1.46-3.515c0-1.374.592-2.676 1.46-3.558a5.119 5.119 0 0 1 3.645-1.505c.463 0 1.216.073 2.257.492v2.994c-.81-.998-1.765-1.056-2.184-1.056-.724 0-1.273.217-1.736.637-.593.55-.839 1.302-.839 1.982 0 .665.275 1.403.781 1.88.42.39 1.085.665 1.794.665.376 0 1.302-.043 2.184-1.012ZM74.911 34.26v2.127h-2.98v1.605h2.821v2.127h-2.82v1.663h2.98v2.127h-5.483V34.26h5.482ZM79.008 43.908h-2.502V34.26h2.502l4.615 5.902v-5.901h2.502v9.647h-2.502l-4.615-5.901v5.901ZM93.845 36.387H91.79v7.521h-2.502v-7.521h-2.055V34.26h6.61v2.127ZM94.954 34.26h3.906c.723 0 1.649.116 2.358.854.549.564.824 1.403.824 2.17 0 .824-.289 1.547-.766 2.01-.377.362-.883.579-1.331.666l3.023 3.948h-3.11l-2.401-3.703v3.703h-2.503V34.26Zm2.503 1.939v2.387h.477c.376 0 .911-.102 1.215-.391.188-.188.318-.506.318-.81 0-.29-.115-.608-.332-.81-.232-.232-.651-.376-1.2-.376h-.478ZM109.505 34.26v2.127h-2.979v1.605h2.82v2.127h-2.82v1.663h2.979v2.127h-5.482V34.26h5.482Z"/>
                                    </svg>




                                    <span class="logo-text visually-hidden">AAC</span>
                                </div>
                            </a>
                        </div>
                        <div class="column">
                            <p class="footer_description">The Australian Agricultural Centre (AAC) is dedicated to providing quality education and training in agriculture, agribusiness, and rural industries.</p>
                        </div>
                    </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="column">
                        <div class="footer_form">
                            <form class="dark-form inline" action="#" method="post">
                                                                
                                <div class="form-group">
                                    <!-- <label for="email">Email:</label> -->
                                    <input type="email" id="email" name="email" placeholder="To stay updated" required>
                                    <div id="error" class="error-msg visually-hidden">Error Message visible.</div>
                                </div>                                

                                <button type="submit" class="button-medium outline">Subscribe</button>
                            </form>
                        </div>

                        <div class="footer_address">
                            <p class="footer_address">Australian Agricultural Centre<br>
                            Crookwell, NSW</p>
                            <p class="footer_phone">Phone: 0408 976 070</p>
                            <p class="footer_email">Email: <a href="mailto:info@australianagriculturalcentre.com" class="footer_email_link">info@australianagriculturalcentre.com</a>
                                </p>
                        </div>

                        <div class="footer_social">
                            <a class="footer_link" href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                                <svg id="facebook_icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.00689C0 10.2533 2.35832 12.953 5.44271 13.5004V8.78414H3.80989V6.97043H5.44271V5.51914C5.44271 3.88664 6.49479 2.98006 7.98282 2.98006C8.45416 2.98006 8.96255 3.05243 9.43383 3.1248V4.79377H8.59948C7.80104 4.79377 7.61979 5.19264 7.61979 5.70089V6.97043H9.36143L9.07135 8.78414H7.61979V13.5004C10.7042 12.953 13.0625 10.2539 13.0625 7.00689C13.0625 3.39525 10.1234 0.44043 6.53125 0.44043C2.93906 0.44043 0 3.39525 0 7.00689Z" fill="white" fill-opacity="0.9"/>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                            <a class="footer_link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                <svg id="instagram_icon" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.06062 5.17617C5.77527 5.17617 4.72633 6.22513 4.72633 7.5105C4.72633 8.79586 5.77527 9.84482 7.06062 9.84482C8.34596 9.84482 9.3949 8.79586 9.3949 7.5105C9.3949 6.22513 8.34596 5.17617 7.06062 5.17617ZM14.0617 7.5105C14.0617 6.54384 14.0704 5.58595 14.0162 4.62105C13.9619 3.50029 13.7062 2.50561 12.8867 1.68607C12.0654 0.864758 11.0725 0.610836 9.95177 0.55655C8.98513 0.502263 8.02725 0.511019 7.06237 0.511019C6.09573 0.511019 5.13785 0.502263 4.17297 0.55655C3.05224 0.610836 2.05758 0.866509 1.23804 1.68607C0.416754 2.50736 0.162836 3.50029 0.108551 4.62105C0.0542651 5.5877 0.0630209 6.54559 0.0630209 7.5105C0.0630209 8.4754 0.0542651 9.43504 0.108551 10.3999C0.162836 11.5207 0.418505 12.5154 1.23804 13.335C2.05933 14.1562 3.05224 14.4102 4.17297 14.4644C5.13961 14.5188 6.09748 14.51 7.06237 14.51C8.029 14.51 8.98688 14.5188 9.95177 14.4644C11.0725 14.4102 12.0671 14.1544 12.8867 13.335C13.7079 12.5136 13.9619 11.5207 14.0162 10.3999C14.0722 9.43504 14.0617 8.47715 14.0617 7.5105ZM7.06062 11.1022C5.07307 11.1022 3.469 9.49809 3.469 7.5105C3.469 5.52291 5.07307 3.91882 7.06062 3.91882C9.04818 3.91882 10.6522 5.52291 10.6522 7.5105C10.6522 9.49809 9.04818 11.1022 7.06062 11.1022ZM10.7993 4.61054C10.3353 4.61054 9.96052 4.23578 9.96052 3.77172C9.96052 3.30766 10.3353 2.93291 10.7993 2.93291C11.2634 2.93291 11.6381 3.30766 11.6381 3.77172C11.6383 3.88192 11.6167 3.99105 11.5746 4.09289C11.5325 4.19471 11.4707 4.28724 11.3928 4.36516C11.3148 4.44309 11.2223 4.50486 11.1205 4.54697C11.0187 4.58907 10.9095 4.61068 10.7993 4.61054Z" fill="white" fill-opacity="0.9"/>
                                </svg>
                                <span class="visually-hidden">Instagram</span>                                    
                            </a>
                            <a class="footer_link" href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">
                                <svg id="linkedin_icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0625002 1.63052C0.0625002 1.33347 0.180503 1.04859 0.390549 0.838548C0.600595 0.628502 0.885478 0.5105 1.18253 0.5105H12.3475C12.4947 0.510259 12.6405 0.539057 12.7766 0.595243C12.9126 0.65143 13.0363 0.733902 13.1404 0.837938C13.2446 0.941974 13.3272 1.06553 13.3835 1.20153C13.4398 1.33753 13.4688 1.48331 13.4687 1.63052V12.7954C13.4689 12.9427 13.44 13.0885 13.3837 13.2246C13.3275 13.3606 13.245 13.4843 13.1409 13.5884C13.0368 13.6926 12.9132 13.7752 12.7772 13.8315C12.6411 13.8878 12.4953 13.9168 12.3481 13.9167H1.18253C1.03539 13.9167 0.889699 13.8877 0.753771 13.8314C0.617844 13.775 0.494346 13.6925 0.390333 13.5884C0.286321 13.4843 0.203833 13.3608 0.147582 13.2248C0.0913314 13.0889 0.0624201 12.9432 0.0625002 12.796V1.63052ZM5.36892 5.62192H7.18425V6.53354C7.44628 6.00948 8.11659 5.53783 9.12388 5.53783C11.055 5.53783 11.5126 6.58168 11.5126 8.49694V12.0447H9.55837V8.93325C9.55837 7.84248 9.29634 7.22701 8.6309 7.22701C7.7077 7.22701 7.32379 7.89062 7.32379 8.93325V12.0447H5.36892V5.62192ZM2.01737 11.9612H3.97224V5.53783H2.01737V11.9612ZM4.25194 3.4428C4.25563 3.61018 4.22584 3.77661 4.16434 3.93232C4.10283 4.08803 4.01084 4.22989 3.89377 4.34957C3.7767 4.46925 3.6369 4.56434 3.48258 4.62925C3.32826 4.69417 3.16253 4.72761 2.99511 4.72761C2.82769 4.72761 2.66196 4.69417 2.50764 4.62925C2.35332 4.56434 2.21352 4.46925 2.09645 4.34957C1.97937 4.22989 1.88739 4.08803 1.82588 3.93232C1.76438 3.77661 1.73459 3.61018 1.73828 3.4428C1.74551 3.11426 1.8811 2.80161 2.11602 2.57181C2.35093 2.34202 2.66649 2.21334 2.99511 2.21334C3.32373 2.21334 3.63929 2.34202 3.8742 2.57181C4.10911 2.80161 4.24471 3.11426 4.25194 3.4428Z" fill="white" fill-opacity="0.9"/>
                                </svg>
                                <span class="visually-hidden">LinkedIn</span>
                            </a>
                        </div>
                    </div>
                    <div class="column ">
                        <div class="footer_menu_group">                            
                        
                            <ul class="footer_menu">
                                <h3 class="footer_menu-title">About</h3>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/our-story/">Our Story</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/our-team/">Our Team</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/sustainability/">Sustainability Principles</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/partners/">Partners & Supporters</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/agritourism/">Agritourism</a></li>
                            </ul>                            
                            
                            <ul class="footer_menu">
                                <!-- <li class="footer_menu-item"><a class="footer_menu-link" href="/training/"><h3 class="footer_menu-title">Training</h3></a></li> -->
                                <h3 class="footer_menu-title">Programs</h3>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/training">For Adults</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/primary-schools">For Primary Schools</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/high-schools">For High Schools</a></li>
                                <!-- <li class="footer_menu-item"><a class="footer_menu-link" href="/excursions/practical-details">Practical Details</a></li>
                                <li class="footer_menu-item"><a class="footer_menu-link" href="/excursions/booking-forms">Booking Forms</a></li> -->
                            </ul>

                            <div class="footer_group">
                        
                                <ul class="footer_menu">
                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/calendar/"><h3 class="footer_menu-title">Calendar</h3></a></li>
                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/glamping/"><h3 class="footer_menu-title">glamping</h3></a></li>
                                    <!-- <li class="footer_menu-item"><a class="footer_menu-link" href="/calendar">Calendar</a></li>
                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/glamping">Glamping</a></li> -->
                                </ul>

                                <ul class="footer_menu">
                                    <h3 class="footer_menu-title">Resources</h3>
                                    <!-- <li class="footer_menu-item"><a class="footer_menu-link" href="/resources/media">Media</a></li> -->
                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/resources/blog">Blog</a></li>
                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/resources/virtual-campus">Virtual Campus</a></li>

                                    <li class="footer_menu-item"><a class="footer_menu-link" href="/contact"><h3 class="footer_menu-title">Contact</h3></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="container footer-bottom">
                <div class="row">
                    <div class="column">
                        <div class="footer_bottom_content">
                            <div class="footer_bottom_left">
                        
                                <p class="footer_credit">&copy; 2025 AAC. All rights reserved.</p>
                                <p class="footer_disclaimer">* disclaimer.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer_bottom_content">
                            <div class="footer_bottom_right">
                                <p class="footer_links">
                                    <a class="footer_link" href="/privacy-policy">Privacy Policy</a> | 
                                    <a class="footer_link" href="/terms-of-service">Terms of Service</a> | 
                                    <a class="footer_link" href="/sitemap">Sitemap</a>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>

        <!-- JS -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        <script src="/wp-content/themes/<?php echo $child_theme_dir; ?>/js/custom.js"></script>
        <script src="/wp-content/themes/<?php echo $child_theme_dir; ?>/js/scrolled.js"></script>
        <script src="/wp-content/themes/<?php echo $child_theme_dir; ?>/js/menu-active.js"></script>
		<script src="/wp-content/themes/<?php echo $child_theme_dir; ?>/js/pop-up.js"></script>
        <script src="/wp-content/themes/<?php echo $child_theme_dir; ?>/js/flickity_custom.js"></script>

<?php wp_footer(); ?>

	 <link rel="stylesheet" href="https://40ftslinky.github.io/aac/css/style.css">

	<link rel="stylesheet" href="/wp-content/themes/<?php echo $child_theme_dir; ?>/css/developer_custom.css">

	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


	<script>
		window.addEventListener('load', function() {
		  const header = document.getElementById('header');
		  if (header) {
			  
				//header.style.display = 'block'; // or use a fade-in with CSS

				header.classList.add('visible');
		  }
		});
	</script>

    </body>
</html>