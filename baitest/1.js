$(document).ready(function() {
	$('.scroll img').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		// console.log('123123');
		$('html,body').animate({scrollTop: $('.content2').offset().top}, 500);
	});
	$('.airun').animateRotate(90, {
	  duration: 1337,
	  easing: 'linear',
	  complete: function () {},
	  step: function () {}
	});
	
});