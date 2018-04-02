 $(function(){
 	$('.menutren ul li').on('click', function(event) {
 		event.preventDefault();
 		/* Act on the event */
 		console.log('123123');
 		$('html,body').animate({scrollTop:500}, 1000);
 	});
})  
 