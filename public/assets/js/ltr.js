(function ($) {

	"use strict";

	// Testimonial Carousel
	$('.testimonial-carousel').owlCarousel({
	   	loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 1500,
		smartSpeed: 700,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		margin: 30,
		nav: false,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
	});

	// Blog Carousel
	$('.blog-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 1500,
		smartSpeed: 700,
		margin: 30,
		mouseDrag: false,
		nav: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});

	// Partner Carousel
	$('.partner-carousel').owlCarousel({
    	loop: true,
	    autoplay: true,
	    margin: 30,
	    dots: false,
	    nav: false,
	    animateIn: true,
	    responsiveClass: true,
	    navText: [
	    '<i class="fa fa-angle-left"></i>',
	    '<i class="fa fa-angle-right"></i>'
	    ],
    	responsive: {
	        0: {
	            items: 1,
	            nav:false
	        },
	        600: {
	            items: 2,
	            nav:false
	        },
	        992: {
	            items: 4,
	            nav:false,
	            loop:true
	        }
	    }
  	});


})(jQuery);