  $(document).ready(function () {

  	$("#imenu").click(function(e) {
        e.preventDefault();
        console.log('123');
        $(".menu").toggleClass("toggled");
    });

  	$(window).on("load, resize", function() {
    var viewportWidth = $(window).width();
    if (viewportWidth < 600) {
            $(".danhmucsp h6").addClass('collapsed');
    }
	});

  	var owlpro1 = $('#pro1');
	owlpro1.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});

	var owlpro2 = $('#pro2');
	owlpro2.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});

	var owlpro3 = $('#pro3');
	owlpro3.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});
	var owlpro4 = $('#pro4');
	owlpro4.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});
	var owlpro5 = $('#newpro');
	owlpro5.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});
	var owlpro6 = $('#topsell');
	owlpro6.owlCarousel({
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
            items:2,
        },
        1024:{
            items:3,
        }
    }
	});




	$('li').on('click', function () {  //  here $(this) is refering to document
        $(this).addClass('aaa');
    });
  		
	$('.totop').on('click', function(event) {
	event.preventDefault();
	/* Act on the event */
	$('html,body').animate({scrollTop: 0}, 400);
	});

  });