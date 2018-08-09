$(document).ready(function() {
     $(".owl-clientes").owlCarousel({
          	items: 4, 
          	autoplay: true,
          	nav: true,
          	loop: true,

			responsive : {
			    // breakpoint from 0 up
			    0 : {
			        items: 1
			    },
			    // breakpoint from 480 up
			    480 : {
			        items: 2
			       
			    },
			    // breakpoint from 768 up
			    768 : {
			        items: 5
			        
			    }
			}
          });

     
     $('.btn-toggle').click(function () {
	     	$('.sidebar').slideToggle();
	     });


     //Menú header

     $('.item-toggle').click(function() {
     	$(this).next().slideToggle();
     	
     })


     $('.sidebar li a').click(function() {
     	$('.sidebar').hide();
     })

     $('.btn-info').click(function(e) {
     	e.preventDefault();
     	$('.modal-window').show();
     })

     $('.card .fa-times-circle').click(function() {
     	$('.modal-window').hide();
     })


     //Menú Categorías

		//CLASE ACTIVA PRIMER ENLACE 
	$('.btn-category[data-name="publicomercial"]').addClass('link-active');
	$('.btn-category[data-name="e-commerce"]').addClass('link-active');
	$('.btn-category[data-name="todo"]').addClass('link-active');

	$('.btn-category').click(function(e) {
		e.preventDefault();
		var category = $(this).attr('data-category');
		var name = $(this).attr('data-name');

		//CLASE ACTIVA ENLACE SELECCIONADO
		$('.btn-category').removeClass('link-active');
		$(this).addClass('link-active');

		//OCULTANDO PRODUCTOS
		$('.mockups[data-category="'+category+'"]').css('transform', 'scale(0)');
		
		function hideProduct() {
			$('.mockups[data-category="'+category+'"]').hide();

		} setTimeout(hideProduct,500);		

		

		//MOSTRANDO PRODUCTOS
		
		function showProduct() {
			$('.mockups[id="'+name+'"]').show().css('display','flex');
			$('.mockups[id="'+name+'"]').css('transform','scale(1)');
			
		} setTimeout(showProduct,500);	

		//MOSTRANDO TODOS LOS PRODUCTOS
	$('.btn-category[data-name="todo"]').click(function() {
		function showAll() {
			$('.mockups').show();
			$('.mockups').css('transform','scale(1)');
		} setTimeout(showAll,400);
	
	});

		

	});

	//Menu sticky 



	$(window).on('scroll', function(){
		 // aca se pregunta si el scroll se movio de pa bajo.
		    if ($(this).scrollTop() > 150) {
		      // esta parte cambia el atributo "src" de la etiqueta "img" 
		      $('.header').addClass('header-fixed');
		      $('.logo img').attr('src','img/logo-univercity.png');
		      $('.back-to-top').css('opacity','1');
		     
		    }
		    if ($(this).scrollTop() < 150) {
		       $('.header').removeClass('header-fixed');
		       $('.logo img').attr('src','img/logo-univercity-blanco.png');
		       $('.back-to-top').css('opacity','0');

		    }
	});

	//CAROUSEL TEAM

	$(".owl-team").owlCarousel({
          	items: 1, 
          	autoplay: false,
          	nav: true,
          	loop: true,
          });

	//CAROUSEL BLOG
	$(".owl-blog-home").owlCarousel({
          	items: 1, 
          	autoplay: false,
          	nav: true,
          	loop: true,
          	
          });

	//CAROUSEL RECIENTE
	$(".owl-reciente").owlCarousel({
          	autoplay: true,
          	nav: true,
          	loop: true,

          	responsive : {
			    // breakpoint from 0 up
			    0 : {
			        items: 1
			    },
			    // breakpoint from 480 up
			    480 : {
			        items: 2
			       
			    },
			    // breakpoint from 768 up
			    768 : {
			        items: 4
			   
			    }
			}
          	
          });

	$('.owl-prev').html('<i class="fas fa-angle-left"></i>');
     $('.owl-next').html('<i class="fas fa-angle-right"></i>');

     //COMMENTS
     $('.num-comentarios').click(function() {
     	$(this).next().slideToggle();
     })

     //LINK ANSWER
     $('.link-card').click(function(e) {
     	e.preventDefault();
     	$(this).next().slideToggle();
     })

     //Smoothscroll
     $('html').smoothScroll();


     //PORTAFOLIO-MASONRY

	var myArray = $('.grid-home .grid-item');


	   $(myArray[0]).addClass('large');
	   $(myArray[1]).addClass('large');
	   $(myArray[2]).addClass('medium');
	   $(myArray[3]).addClass('medium');
	   $(myArray[4]).addClass('medium');


	var portafolio = $('.grid-portafolio .grid-item');

	   $(portafolio[0]).addClass('large');
	   $(portafolio[1]).addClass('medium');
	   $(portafolio[2]).addClass('wide');
	   $(portafolio[3]).addClass('medium');
	   $(portafolio[4]).addClass('wide');
	   $(portafolio[5]).addClass('medium');
	   $(portafolio[6]).addClass('small');
	   $(portafolio[7]).addClass('medium');


     	//CLASE ACTIVA PRIMER ENLACE 
	$('.btn-item[data-category="todo"]').addClass('link-active');

	$('.btn-item').click(function() {
		var category = $(this).attr('data-category');

		//CLASE ACTIVA ENLACE SELECCIONADO
		$('.btn-item').removeClass('link-active');
		$(this).addClass('link-active');

		//OCULTANDO PRODUCTOS
		$('.col-mr').css('transform', 'scale(0)');
		
		function hideProduct() {
			$('.col-mr').hide();

		} setTimeout(hideProduct,400);		

		

		//MOSTRANDO PRODUCTOS
		
		function showProduct() {
			$('.col-mr[data-category="'+category+'"]').show();
			$('.col-mr[data-category="'+category+'"]').css('transform','scale(1)');
			 var myArray = $('.col-mr');

			
		} setTimeout(showProduct,400);	

		

	});

	//MOSTRANDO TODOS LOS PRODUCTOS
	$('.btn-item[data-category="todo"]').click(function() {
		function showAll() {
			$('.col-mr').show();
			$('.col-mr').css('transform','scale(1)');
		} setTimeout(showAll,400);
	
	});

	//WOW

	new WOW().init();

	//POPUP
	function pop_up() {
		$('#pop-up').show();
	} setTimeout(pop_up, 3000);
	

	
   
});

