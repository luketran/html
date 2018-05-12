$(document).ready(function() {     
    $('.menu .tg').click( function(e) {
        $('.collapse').collapse('hide');
        if ($('i.fa.fa-angle-down', this).hasClass('xoay')) {
        	$('i.fa.fa-angle-down').removeClass('xoay')
        }else{
	    $('i.fa.fa-angle-down').removeClass('xoay')
	 	$('i.fa.fa-angle-down', this).toggleClass('xoay')}
});
    $('.khoinoidung.sit').hover(function() {
    	$('.khoiden', this).css('display','block')
    	$('.khoiden', this).addClass('lentren')
    	$('.morong', this).css('display','block')
    	$('.morong', this).addClass('lentren')
    	$('.bocitem', this).addClass('lentren')
    	$('.wraptype', this).css('padding-left','0px')
    	$('.k_text', this).css('color','white')
    }, function() {
    	$('.khoiden', this).css('display','none')
    	$('.khoiden', this).removeClass('lentren')
    	$('.morong', this).css('display','none')
    	$('.morong', this).removeClass('lentren')
    	$('.bocitem', this).removeClass('lentren')
    	$('.wraptype', this).css('padding-left','10px')
    	$('.k_text', this).css('color','black')
    });

    $("#imenu").click(function(e) {
        e.preventDefault();
        console.log('123');
        $(".leftmenu").toggleClass("toggled");
    });
});  