$(function(){
    var helper = new Helper();
    helper.initMenu();
    helper.bannerslide();
    helper.itemslide('.flowerlist',4,2,2,2,2);
    helper.itemslide('.newslist',3,2,2,1,1);
    helper.itemslide('.relatenewslist',3,2,2,1,1);
    helper.itemslide('.sameitemlist',5,4,3,2,1);
    
	helper.totop();
	helper.showsearch();
	helper.itemslick();
	helper.showlogopt();
	helper.fixtop();
	helper.showcart();
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
				nav:true,
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
				margin:25,
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
				1200:{
					items:n2,
				}
			}
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
    methods.showsearch = function(el){
        $('#open-search').click(function() {
			$('#headsearch').toggleClass("ssearch");
		});
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#headsearch , #headsearch * ,#open-search ,#open-search *')){
				$('#headsearch').removeClass('ssearch');
			}
		});
    }
    methods.showlogopt = function(){
        var curr = $("#cont1");
		$(".logopts input[type='radio']").on('change', function() {
			curr = $("input[type='radio']:checked").val();
			$(curr).siblings().removeClass("showlogopt");
			$(curr).addClass("showlogopt")
		});
    }
   
	methods.fixtop = function(){
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('body').addClass('fixed');
			} else {
				$('body').removeClass('fixed');
			}
		});
	}
	
	methods.itemslick = function(){
		$('.thumblist').slick({
			dots: false,
			nextArrow: '<i class="fa fa-angle-right"></i>',
			prevArrow: '<i class="fa fa-angle-left"></i>',
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			  focusOnSelect: true,
			asNavFor: '.big-photo'
		});
		$('.big-photo').slick({
			dots: false,
			arrows: false,
			mobileFirst:true,
			fade:true,
			slidesToShow: 1,
			slidesToScroll: 1,
			verticalSwiping: false,
			asNavFor: '.thumblist'
		});
		$('#modalqview').on('shown.bs.modal', function(){
			$('#modalqview').find('.slick-slider').slick('setPosition',0);
		})
	}
	methods.showcart = function (){
		$('#open-cart').on('click', function(e){
			e.preventDefault();
			$('#cart').addClass('active');
			$('body').addClass('open-cart');
		})
		$('.cart .btn-close').on('click', function(){
			$('#cart').removeClass('active');
			$('body').removeClass('open-cart');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#cart , #cart * ,#open-cart,#open-cart *')){
				$('#cart').removeClass('active');
				$('body').removeClass('open-cart');
			}
		});
	}

	



   


    return methods;
}
