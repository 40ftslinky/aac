document.addEventListener('DOMContentLoaded', function () {
	jQuery(document).ready(function ($) {

		// Helper function to initialize Flickity after images load
		function initCarouselAfterImagesLoad(selector) {
			var carousels = document.querySelectorAll(selector);

			carousels.forEach(function (carousel) {
				imagesLoaded(carousel, function () {
					new Flickity(carousel, {
						cellAlign: 'left',
						contain: true,
						prevNextButtons: true,
						pageDots: true,
						arrowShape: 'M60.5689 0.5L66 6L21.363 50.2884L66 94.5L60.6455 100L10.6348 50.2884L60.5689 0.5Z'
					});
				});
			});
		}

		// Initialize both carousels after images load
		initCarouselAfterImagesLoad('.current-program-section .carousel');
		initCarouselAfterImagesLoad('.upcoming-program-section .carousel');

		// Resize handler
		window.addEventListener('resize', function () {
			var carousels = document.querySelectorAll('.program_carousel');
			carousels.forEach(function (carousel) {
				var flkty = Flickity.data(carousel);
				if (flkty) {
					flkty.resize();
				}
			});
		});
	});
});