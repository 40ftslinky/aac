        <!-- Pop-up modal -->
        <div id="contactPopup" class="popup" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="popupTitle">
            <div class="popup-overlay" data-popup-close></div>
            <div class="popup-dialog" role="document">
				<?php
				
				$homepage_id = getHomepagePostId();
				
				$popup_form_main_title = get_field("popup_form_main_title", $homepage_id);
				
				$popup_form_main_description =  get_field("popup_form_main_description", $homepage_id);
				
				?>
                <button type="button" class="popup-close" aria-label="Close" data-popup-close>&times;</button>
                <h2 id="popupTitle"><?php echo $popup_form_main_title ?></h2>
                <p><?php echo $popup_form_main_description ?></p>

               <!-- begin form -->
				<?php
				
				echo do_shortcode('[contact-form-7 id="de62a33" title="Pop-Up Enquiry/Application Form"]');
				
				?>
				<!-- end form -->
				
				
				
					<!-- 
					
					<form class="popup-form" action="#" method="post" novalidate>
                    <div class="form-row"><label for="popupName">Name</label><input id="popupName" name="name" type="text" required></div>
                    <div class="form-row"><label for="popupEmail">Email</label><input id="popupEmail" name="email" type="email" required></div>
                    <div class="form-row"><label for="popupMessage">Message</label><textarea id="popupMessage" name="message" rows="4" required></textarea></div>
                    <div class="form-row"><label for="popupUpload">Upload</label><input id="popupUpload" name="upload" type="file" ></div>
                    <button type="submit" class="button">Send</button></form>
					-->
                
            </div>
        </div>




