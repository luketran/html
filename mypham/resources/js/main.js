$(function(){
    var helper = new Helper();
    helper.initMenu();
    helper.bannerslide();
    helper.itemslide('tab1slide');
    helper.itemslide('tab2slide');
    helper.itemslide('tab3slide');
    helper.partnerslide();
    helper.showsidebar("ltop");
    helper.showcart();
    helper.slideitem('splq');
	helper.changemodal();
	helper.fixmenu();
	helper.totop();
	helper.showsearch();
	helper.fullpage();
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
        var owlbanner = $('.owl1');
		owlbanner.owlCarousel({
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
    methods.itemslide = function(el){
        var owlitemslider = $('.'+el);
		owlitemslider.owlCarousel({
			items:4,
			loop:true,
			nav:true,
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
			480:{
				items:1,
			},
			600:{
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
    methods.partnerslide = function(){
        var owl1 = $('.partnerlist');
			owl1.owlCarousel({
				items:5,
				loop:true,
				nav:false,
				navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
				margin:100,
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
					items:4,
				},
				1024:{
					items:5,
				}
			}
			});
    }
    methods.showsidebar = function(el){
        $( "."+el+" ul li i" ).click(function() {
			$(this).parent().siblings().removeClass("smenu");
			$(this).parent().toggleClass("smenu");
		});
    }
    methods.itemimggalery = function(){
        $('.thumblist .thumbnail').click(function() {
        $('.thumblist .thumbnail').removeClass('current');
        $(this).addClass('current');
        var path = $(this).find('thumbnail').attr('background-image');
        $('#big-photo img').attr('background-image', path);
        });
    }
  
    methods.slideitem =function(el){
        var owlsplq = $('.'+el);
        owlsplq.owlCarousel({
                items:4,
                loop:true,
                nav:true,
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
	methods.changemodal = function () { 
		// add class open to body 
		$('#modaldangki').on('hidden.bs.modal', function(){
			if( $('.modal.in').length  ){
				$('body').addClass('modal-open');
			}
		});
		$('#modaldangnhap').on('hidden.bs.modal', function(){
			if( $('.modal.in').length  ){
				$('body').addClass('modal-open');
			}
		})

		$('.tologin a').on('click', function(event){
			event.preventDefault();
			$('#modaldangki').modal("hide");
			$('#modaldangnhap').modal("show");
		})
		$('.toreg a').on('click', function(event){
			event.preventDefault();
			$('#modaldangnhap').modal("hide");
			$('#modaldangki').modal("show");
		})
	}
	methods.fixmenu = function(){
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('body').addClass('fixed');
			} else {
				$('body').removeClass('fixed');
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
	methods.showsearch = function(){
		$('.acc .fa-search').click(function(e) {
			e.preventDefault();
			$('.acc .search').toggleClass("shows");
		});
		window.onclick = function(e) {
		if (!e.target.matches('.search, .search *, .fa-search, .fa-search *')) {
				$('.acc .search').removeClass('shows');
		}
		}
	}
	methods.fullpage = function(){
		var fhheighr = $(window).height()-($('header').outerHeight()+ $('footer').outerHeight());
	    $('.wrapper').css('min-height',fhheighr);
	}
	methods.showcart = function (){
		$('#opcart').on('click', function(){
			$('.cart-wrapper').addClass('active');
			$('body').addClass('open-cart');
		})
		$('.cart .btn-close').on('click', function(){
			$('.cart-wrapper').removeClass('active');
			$('body').removeClass('open-cart');
		})
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('.cart , .cart * ,.cart-wrapper ,.cart-wrapper *,#opcart,#opcart *')){
				$('.cart-wrapper').removeClass('active');
				$('body').removeClass('open-cart');
			}
		});
	}
   





    return methods;
}
