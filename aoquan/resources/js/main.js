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
    methods.menumobile = function(){
        $( ".mbmenuicon" ).click(function() {
			$(".menu").toggleClass("active");
		});
		$( ".mbcover" ).click(function() {
			$(".menu").removeClass("active");
		});
    }
    methods.categoryshow = function(){
        $( ".showicon" ).click(function() {
			$(".listdm").toggleClass("show");
		});
		window.onclick = function(e) {
		if (!e.target.matches('.showicon')) {
			if ($(".listdm").hasClass('show')) {
				$(".listdm").removeClass('show');
			}
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
		// slide image
		var width = $(window).width(); 
		var thumbs = 0;
		if (width >= 768) {
			thumbs=-210;
		}
		else {
			thumbs=-110;
		}
		var counter = 0;
		$(".thumbdown").click(function () {
			if(counter == 2){return}
			else{
				$(".thumblist").css({"top": thumbs * ++counter});
				}
		})
		$(".thumbup").click(function () {
			if(counter == 0){return}
			else{
				$(".thumblist").css({"top": thumbs * --counter,});
				}
		})		
		$( window ).resize(function() {
			$(".thumblist").css({"top": 0});
			var width = $(window).width(); 
			var thumbs = 0;
			if (width >= 768) {
				thumbs=-210;
			}
			else {
				thumbs=-110;
			}
			var counter = 0;
			$(".thumbdown").click(function () {
				if(counter == 2){return}
				else{
					$(".thumblist").css({"top": thumbs * ++counter});
					}
			})
			$(".thumbup").click(function () {
				if(counter == 0){return}
				else{
					$(".thumblist").css({"top": thumbs * --counter,});
					}
			})		
		});
        // var width = $(window).width(); 
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
		$('.totop').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('html,body').animate({scrollTop: 0}, 400);
		});
	}
	methods.fixmenu = function(){
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('.header').addClass('fixed');
			} else {
				$('.header').removeClass('fixed');
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
		$('.short a.fa-shopping-bag').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(this).parents('li').toggleClass('showcart');
		});
		$('body, html').on('click', function(event){
			var target = $(event.target);
			if( !target.is('.showcart *')){
				$('.short a.fa-shopping-bag').parents('li').removeClass('showcart');
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



   





    return methods;
}
$(function(){
    var helper = new Helper();
    helper.initMenu();
    helper.totop();
    helper.fixmenu();
    helper.bannerslide();
    helper.partnerslide();
    helper.menumobile();
    helper.categoryshow();
    helper.showsidebar("leftmenu");
    helper.showlogopt();
    helper.itemimggalery();
    helper.colornsizepick();
    helper.relateitem();
    helper.showsidebar("menutin");
    helper.showitem();
    helper.addactive();
    helper.cartshow();
    helper.inputctrl();
    // helper.initMap();
});