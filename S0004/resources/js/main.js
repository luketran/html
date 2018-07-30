$(function(){
    var helper = new Helper();
    helper.initMenu();
    helper.totop();
    helper.itemslide('.splienquan',5,5,3,2,1);
    helper.opencart();
    helper.openwl();
    helper.openlogin();
    helper.openreg();
    helper.showsearch();
   
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
	methods.totop = function(){
		$('.totop').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('html,body').animate({scrollTop: 0}, 400);
		});
	}
	methods.opencart = function (){
		$('#open-cart').on('click', function(){
			$('#cart').addClass('open');
		})
		$('.closebtn').on('click', function(){
			$(this).parent().removeClass('open');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#open-cart, #open-cart *,.cart ,.cart *')){
				$('#cart').removeClass('open');
			}
		});
	}
	methods.openwl = function (){
		$('#open-wl').on('click', function(){
			$('#wishlist').addClass('open');
		})
		$('.closebtn').on('click', function(){
			$(this).parent().removeClass('open');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#open-wl, #open-wl *,.wishlist ,.wishlist *')){
				$('#wishlist').removeClass('open');
			}
		});
	}
	methods.openlogin = function (){
		$('#open-login').on('click', function(e){
			e.preventDefault();
			$('#login').addClass('open');
		})
		$('.closebtn').on('click', function(){
			$(this).parent().removeClass('open');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#open-login, #open-login *,.login ,.login *')){
				$('#login').removeClass('open');
			}
		});
	}
	methods.openreg = function (){
		$('#open-reg').on('click', function(e){
			e.preventDefault();
			$('#reg').addClass('open');
		})
		$('.closebtn').on('click', function(){
			$(this).parent().removeClass('open');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#open-reg, #open-reg *,.reg ,.reg *')){
				$('#reg').removeClass('open');
			}
		});
	}
	methods.showsearch = function(){
		$('#showsearch').on('click', function(e){
			e.preventDefault();
			$('.searchinput').toggleClass('showinput');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('#showsearch, #showsearch *,.searchinput, .searchinput *')){
				$('.searchinput').removeClass('showinput');
			}
		});
	}




   


    return methods;
}
