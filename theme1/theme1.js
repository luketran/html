$(function() {
	$('.menutren ul li:nth-child(1) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		console.log('1');
		$('body').animate({scrollTop:900}, 1000);
	});
});