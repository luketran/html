$(document).ready(function() {
	$('.menutren ul li:nth-child(1) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.chapter1').offset().top}, 400);
	});
	$('.menutren ul li:nth-child(2) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.chapter2').offset().top}, 400);
	});
	$('.menutren ul li:nth-child(3) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.chapter3').offset().top}, 400);
	});
	$('.menutren ul li:nth-child(4) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.chapter4').offset().top}, 400);
	});
});