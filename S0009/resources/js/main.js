$(function(){
    var helper = new Helper();
    helper.initMenu();
    helper.bannerslide();
    helper.itemslide('.itemslide1',4,4,3,2,1);
    helper.itemslide('.itemslide2',1,1,1,2,1);
    helper.itemslide('.newslist',4,4,3,2,1);
    helper.itemslide('.relatelist',3,3,2,2,1);
    helper.itemslide('.relateitem',4,4,3,2,1);
    helper.partnerslide();
    helper.categoryshow();
    helper.priceslider();
    helper.nextstep();
	helper.smoothscrool();
	helper.totop();
    helper.showsidebar("sidemenu");
    helper.cartshow();
});


function Helper(){
    var methods = this;
    methods.initMenu = function(){
		var open = false;
		$('#btn-toggle').on('click' , function(){
			if( open){
				$('#menu').removeClass('open');
				$('#btn-toggle').removeClass('active');
				$('body').removeClass('menu-open');
			}else{
				$('#menu').addClass('open');
				$('#btn-toggle').addClass('active');
				$('body').addClass('menu-open');
			}
			open = !open;
		});
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#menu , #menu * ,#btn-toggle ,#btn-toggle *')){
				$('#menu').removeClass('open');
				$('#btn-toggle').removeClass('active');
				$('body').removeClass('menu-open');
				open = false;
			}
		});
		$('#menu .has-submenu .icon-first-submenu').on('click' , function(event){
			event.preventDefault();
			var parent = $(this).parents('.has-submenu');
			$('#menu .has-submenu').not(parent).removeClass('open').find('.submenu').slideUp()
			$('#menu .has-submenu').not(parent).find('.has-second-submenu').removeClass('open');
			$('#menu .has-submenu').not(parent).find('.second-submenu').slideUp();
			parent.toggleClass('open').find('.submenu').slideToggle();
		});
		$('#menu .has-second-submenu .icon-second-submenu').on('click' , function(event){
			event.preventDefault();
			var parent = $(this).parents('.has-second-submenu');
			$('#menu .has-second-submenu').not(parent).removeClass('open').find('.second-submenu').slideUp();
			parent.toggleClass('open').find('.second-submenu').slideToggle();
		});
	}
    methods.bannerslide = function(){
        var owl = $('.banner');
			owl.owlCarousel({
				items:3,
				loop:true,
				nav:false,
				navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
				margin:15,
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
				responsive:{
				320:{
					items:1,
				},
				600:{
					items:1,
				},
				768:{
					items:1,
				},
				1024:{
					items:1,
				}
			}
			});
    }
    methods.partnerslide = function(){
        var owl1 = $('.listpartner');
			owl1.owlCarousel({
				items:5,
				loop:true,
				nav:false,
				navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
				margin:30,
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
				responsive:{
				320:{
					items:2,
				},
				600:{
					items:3,
				},
				768:{
					items:5,
				},
				1024:{
					items:8,
				}
			}
			});
    }
    methods.itemslide = function(el,n1,n2,n3,n4,n5){
        var owl = $(el);
			owl.owlCarousel({
				items:n1,
				loop:true,
				nav:true,
				navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
				margin:20,
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
				responsive:{
				320:{
					items:n5,
				},
				600:{
					items:n4,
				},
				992:{
					items:n3,
				},
				1024:{
					items:n2,
				}
			}
			});
    }
	methods.smoothscrool = function (){
		$("html").easeScroll({
			frameRate: 60,
			animationTime: 1000,
			stepSize: 120,
			pulseAlgorithm: 1,
			pulseScale: 8,
			pulseNormalize: 1,
			accelerationDelta: 20,
			accelerationMax: 1,
			keyboardSupport: true,
			arrowScroll: 50,
			touchpadSupport: true,
			fixedBackground: true
		});
	}
    methods.categoryshow = function(){
        $('.category').click(function() {
			$('.listdm').toggleClass("show");
		});
		window.onclick = function(e) {
		if (!e.target.matches('.category, .category *, .listdm, .listdm *')) {
				$('.listdm').removeClass('show');
		}
		}
    }
    methods.showsidebar = function(el){
        $( "."+el+" ul li i" ).click(function() {
			$(this).parent().siblings().removeClass("smenu");
			$(this).parent().toggleClass("smenu");
		});
    }
    methods.showlogopt = function(){
        var curr = $("#cont1");
		$("input[type='radio']").on('change', function() {
			curr = $("input[type='radio']:checked").val();
			$(curr).siblings().removeClass("showlogopt");
			$(curr).addClass("showlogopt")
		});
    }
    methods.itemimggalery = function(){
        $('.thumblist .thumbnail').click(function() {
        $('.thumblist .thumbnail').removeClass('current');
        $(this).addClass('current');
        var path = $(this).find('img').attr('src');
        $('#big-photo img').attr('src', path);
        });
    }
    methods.colornsizepick = function(){
        $( ".sizepick a" ).click(function() {
			$(this).siblings().removeClass("choosed");
			$(this).addClass("choosed");
		});
		$( ".colorpick a" ).click(function() {
			$(this).siblings().removeClass("choosed");
			$(this).addClass("choosed");
		});
    }
    methods.relateitem =function(){
        var owlsplq = $('.splienquan');
        owlsplq.owlCarousel({
                items:4,
                loop:true,
                nav:false,
                navText: [
                    "<i class='fa fa-angle-double-left' aria-hidden='true'></i>",
                    "<i class='fa fa-angle-double-right' aria-hidden='true'></i>"
                    ],
                margin:25,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsive:{
                320:{
                    items:1,
                },
                568:{
                    items:2,
                },
                
                768:{
                    items:3,
                },
                1024:{
                    items:4,
                }
            }
            });
    }
    methods.showitem = function(){
        $( ".giohang table tr .rmfc .iconshow" ).click(function() {
			$(this).parents('tr').siblings().removeClass('appear');			
			$(this).parents('tr').toggleClass('appear');		
		});
        
	}
	methods.totop = function(){
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 200) {
				$('.totop').css({"opacity":"1","visibility":"visible","transform":"translateY(0%)"});
			} else {
				$('.totop').css({"opacity":"0","visibility":"hidden","transform":"translateY(100%)"});
			}
		});
		$('.totop').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('html,body').animate({scrollTop: 0}, 400);
		});
	}
	methods.fixmenu = function(){
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 70) {
				$('header').addClass('fixed');
			} else {
				$('header').removeClass('fixed');
			}
		});
	}
	methods.addactive =function(){
		$('.sppage .filterview a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		});
		$('.pagination li').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		});
	}
	methods.cartshow = function(){
		var open = false;
		$('#opcart').on('click' , function(){
			if( open){
				$('.shortcart').removeClass('showcart');
			}else{
				$('.shortcart').addClass('showcart');
			}
			open = !open;
		});
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#opcart,#opcart *,.scart,.scart *,.shortcart,.shortcart *')){
				$('.shortcart').removeClass('showcart');
				open = false;
			}
		});

	}
	methods.inputctrl = function(){
		$(".nictrl").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		} else {
		// Don't allow decrementing below zero
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 0;
		}
		}
		$button.parent().find("input").val(newVal);
		});
	}
	methods.priceslider = function(){
		$( "#slider-range" ).slider({
			range: true,
			min: 10000,
			max: 50000000,
			values: [ 10000, 20000000 ],
			slide: function( event, ui ) {
			  	$( "#amount" ).val(ui.values[ 0 ] + "đ - " + ui.values[ 1 ]+ "đ" );
			}
			});
				$( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +"đ - " + $( "#slider-range" ).slider( "values", 1 )+ "đ" );
	}
	methods.nextstep = function(){
		$(".checkoutoption .panel .panel-collapse .panel-body .continue").on("click", function(){
			$('.panel-title a').addClass('collapsed');
			$('.panel-collapse').collapse('hide');
			$(this).parents('.panel').next().find('.panel-title a').removeClass('collapsed');
			$(this).parents('.panel').next().find('.panel-collapse').collapse('show');
		})
		$('.checkoutoption .panel-title a').on("click", function(){
			$(this).parents('.panel').siblings().find('.panel-title a').addClass('collapsed');
			$(this).parents('.panel').siblings().find('.panel-collapse').collapse('hide');
		})
	}



   


    return methods;
}
