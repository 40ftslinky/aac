document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('contactPopup');
  if (!modal) return;

  const triggers = document.querySelectorAll('.pop-up-trigger');
  const overlay = modal.querySelector('.popup-overlay');
  const closeBtns = modal.querySelectorAll('[data-popup-close]');
  let lastFocus = null;

  const focusableSel = [
    'a[href]',
    'area[href]',
    'input:not([disabled])',
    'select:not([disabled])',
    'textarea:not([disabled])',
    'button:not([disabled])',
    '[tabindex]:not([tabindex="-1"])'
  ].join(',');

  function openModal() {
    lastFocus = document.activeElement;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('no_scroll');
    const first = modal.querySelector(focusableSel);
    if (first) first.focus();
    document.addEventListener('keydown', onKeydown);
  }

  function closeModal() {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('no_scroll');
    document.removeEventListener('keydown', onKeydown);
    if (lastFocus) lastFocus.focus();
  }

  function onKeydown(e) {
    if (e.key === 'Escape') closeModal();
    if (e.key === 'Tab') trapFocus(e);
  }

  function trapFocus(e) {
    const focusables = modal.querySelectorAll(focusableSel);
    if (!focusables.length) return;
    const first = focusables[0];
    const last = focusables[focusables.length - 1];
    if (e.shiftKey && document.activeElement === first) {
      e.preventDefault(); last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
      e.preventDefault(); first.focus();
    }
  }

	/*
	  triggers.forEach(t => t.addEventListener('click', e => {
		e.preventDefault();
		openModal();
	  }));

	  */
  
	  triggers.forEach(t => t.addEventListener('click', e => {
	  e.preventDefault();
	  openModal();

	  // Check if the clicked trigger has the "job-enquiry" class
	  const isJobEnquiry = e.currentTarget.classList.contains('job-enquiry');
	    // Check if the clicked trigger has the "pop-up-subscribe" class
	  const isSubscribe = e.currentTarget.classList.contains('pop-up-subscribe');
			  
		if (isSubscribe) {
		  const $dropdown = jQuery('select[name="Enquiry_Type"]');
		  const $subscribeOption = $dropdown.find('option').filter(function () {
			return jQuery(this).text().trim().toLowerCase() === 'subscribe';
		  });

		  if ($subscribeOption.length) {
			$dropdown.val($subscribeOption.val()).trigger('change');
			console.log('Enquiry_Type set to Subscribe');
		  } else {
			console.warn('Subscribe option not found in Enquiry_Type dropdown');
		  }
		}
		
		const emailValue = jQuery('#subscribe_email').val().trim();
		
		console.log("emailValue =" + emailValue);
		

		if (emailValue) {
		  const $targetEmailInput = jQuery('.wpcf7-form-control-wrap[data-name="email"] input[type="email"]');
		  $targetEmailInput.val(emailValue).trigger('change');
		  console.log('Email transferred to Contact Form 7 field:', emailValue);
		} else {
		  console.warn('No email entered in #subscribe_email');
		}
		

	  // Target the file input and its label
	  const uploadRow = document.querySelector('.form-row label[for="popupUpload"]')?.parentElement;

	  if (uploadRow) {
		if (isJobEnquiry) {
		  uploadRow.style.display = 'block';
		} else {
		  uploadRow.style.display = 'none';
		}
	  }
	}));
	  overlay.addEventListener('click', closeModal);
	  closeBtns.forEach(btn => btn.addEventListener('click', closeModal));	  
  
});