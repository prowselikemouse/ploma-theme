//GLOBAL OBJECT FOR SHITS AND GIGGLES
var app = {};

//VARIABLES FOR THE STICKY NAV
//stores height of nav
app.navheight = $('nav').height(); 
console.log(app.navheight);
//store height of header hero image section
app.headerheight = $('header').height();
console.log(app.headerheight);

$(document).ready(function() {
	var stickyNavTop = $('.main-nav').offset().top + 300;

	var stickyNav = function(){
		var scrollTop = $(window).scrollTop();		      
			console.log(scrollTop)
		if (scrollTop > stickyNavTop) { 
		    $('.main-nav').addClass('sticky');
			$('.footer-button-container').fadeIn();
		} else if (scrollTop === 0) {
		    $('.main-nav').removeClass('sticky'); 
			$('.footer-button-container').fadeOut();
		}
	};

	$(window).scroll(function() {
	    stickyNav();
	});

	$('.main-nav .menu-item').hover(function() {

		$(this).prev().children().addClass('no-border-right')},
		function() {
		$(this).prev().children().removeClass('no-border-right')
	});
});
// app.sectionheight = $('.sticky-top').height(); 
// console.log(app.sectionheight);


//INIT FUNCTION WITH EVENT TRIGGERS
app.init = function() {

//EVENT LISTENER FOR HAMBURGER NAV & CHANGING BG


	$('.menu-btn').on('click', function(event) {
		event.preventDefault;
		$('.bar').toggleClass('animate');
		$('.mobile-nav-container').slideToggle();
		$('.mobile-nav').toggleClass('mobile-bg');
	});
//GET RID OF INLINE STYLES IN TAG-CLOUD WIDGET
	$('.tagcloud a').attr('style', '');
};

//DOC READY AND INIT FUNCTION
$(function(){
	app.init();
});