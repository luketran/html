$(document).ready(function(){
  	$(".owl-carousel").owlCarousel();
  	$(".doitac").owlCarousel();
  	$('.totop').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('html,body').animate({scrollTop: 0}, 400);
	});
  	
	$('.navbar ul li:nth-child(2) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('html,body').animate({scrollTop: $('.intro').offset().top}, 1000);
	});
	$('.navbar ul li:nth-child(3) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.service').offset().top}, 1000);
	});
	$('.navbar ul li:nth-child(4) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.sample').offset().top}, 1000);
	});
	$('.navbar ul li:nth-child(5) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('.coor').offset().top}, 1000);
	});
	$('.navbar ul li:nth-child(9) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		
		$('html,body').animate({scrollTop: $('footer').offset().top}, 1000);
	});

});