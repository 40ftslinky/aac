/* -- vanilla js -- */



var currentCarousels = document.querySelectorAll('.current-program-section .carousel');

if (currentCarousels !== null){
	
	currentCarousels.forEach(function(currentCarousel) {
		new Flickity(currentCarousel, {
			cellAlign: 'left',
			contain: true,
			prevNextButtons: true,
			pageDots: true,
			arrowShape: 'M60.5689 0.5L66 6L21.363 50.2884L66 94.5L60.6455 100L10.6348 50.2884L60.5689 0.5Z'
		});
	});
	
}

//

var upcomingCarousels = document.querySelectorAll('.upcoming-program-section .carousel');

if (upcomingCarousels !== null){
	
	upcomingCarousels.forEach(function(upcomingCarousel) {
		new Flickity(upcomingCarousel, {
			cellAlign: 'left',
			contain: true,
			prevNextButtons: true,
			pageDots: true,
			arrowShape: 'M60.5689 0.5L66 6L21.363 50.2884L66 94.5L60.6455 100L10.6348 50.2884L60.5689 0.5Z'
		});
	});
	
}


// 

// external js: flickity.pkgd.js

var utils = window.fizzyUIUtils;



document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('resize', function() {
        // trigger resize method after showing
        var carousel = document.querySelectorAll('.program_carousel');
        if (carousel && typeof Flickity !== 'undefined') {
            var flkty = Flickity.data(carousel);
            if (flkty) {
                flkty.resize();
            }
        }
    });
    // 
});