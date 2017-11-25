$(function(){
/* BASE */
	/* MENU SUPERIO ACTIVO CAJERO TOUCH */
	$('<span class="borde-before" /><span class="borde-after" /><span class="drop-shadow" />')
		.appendTo('.menu-navegacion .item-menu .bt.active');
	/******************************/

	/* FECHA FOOTER */
	var fecha = new Date();
	var ano =fecha.getFullYear();
	$('#id_year').text(ano)

	/* MENU RESPONSIVE */
	//se clona el navlist para poder tener mas flexibilidad y control
	$('.menu-nav').clone().appendTo('body').insertAfter('footer').addClass('menu-responsive').removeClass('menu-nav');


	$('.menu-mobile').click(function(e){
		e.preventDefault();
		$(this).addClass('active-menu-mobile');
		$('.menu-mobile-close').addClass('active-menu-mobile-close');
		$('.menu-responsive').addClass('active-menu');
		$('.r-overlay').addClass('active-overlay');
		$('.cnt-wrapper').addClass('active-cnt-wrapper');
		$('.footer').addClass('active-footer');
		$('body').addClass('body-active');
	});

		// js submenu 2do nivel
		function cerrar_submenu(){
			$('.menu-responsive .menu-sub-list').stop(false).slideUp();
		}
		$('.menu-responsive .menu-sub').click(function(e) {
			e.preventDefault();
	  		$('.menu-responsive .menu-sub').removeClass('active');
	  		$(this).addClass('active');
	  		cerrar_submenu();
	  		$(this).parent().find('.menu-sub-list').stop(false).slideToggle();
		});
		// fin js submenu 2do nivel


	// funcion  para cerrar menu responsive
	function cerrar_nav() {
		$('.menu-responsive').removeClass('active-menu');
		$('.r-overlay').removeClass('active-overlay');
		$('.menu-mobile-close').removeClass('active-menu-mobile-close');
		$('.menu-mobile').removeClass('active-menu-mobile');
		$('.cnt-wrapper').removeClass('active-cnt-wrapper');
		$('.footer').removeClass('active-footer');
		$('body').removeClass('body-active');
	};

	//click en boton cerrar y overlay
	$('.w-nav').on('click', '.menu-mobile-close', function(event) {
		event.preventDefault();
		cerrar_nav();
		cerrar_submenu();
	});
	$('.r-overlay').click(function() {
		cerrar_nav();
		cerrar_submenu();
	});


	//para cerrar el menu responsive en caso hagan resize, o giren la tablet o celular con el menu responsive abierto
		//detectando moviendo de ipad y tablet
	function readDeviceOrientation() {
	    switch (window.orientation) {
	    case 0:
	        break;
	    case 180:
	        break;
	    case -90:
	        break;
	    case 90:
	        break;
	    }
	}
	//detectando tablet, celular o ipad
	dispositivo_movil = $.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()))

	if ( dispositivo_movil ) {
			function readDeviceOrientation() {
			    if (Math.abs(window.orientation) === 90) {
			        // Landscape
			      	cerrar_nav();
			      	cerrar_submenu();
			    } else {
			    	// Portrait
			    	cerrar_nav();
			    	cerrar_submenu();
			    }
			}
			window.onorientationchange = readDeviceOrientation;
	}else{
		$(window).resize(function(event) {
			var estadomenu = $('.menu-responsive').width();
			if(estadomenu != 0){
				cerrar_nav();
			}
			cerrar_submenu();
		});
	};

	
	$('.text-fancy').fancybox({
		'centerOnScroll' :true,
		'titlePosition'	 : 'inside',
		'transitionIn'	 : 'none',
		'transitionOut'	 : 'none',
		'showCloseButton'    : false,
		'padding': 0, 
		'margin': 0,
		overlayColor:'#000'
	});	
/* --- FIN BASE --- */

	//------------------------------
 	// Tabs
 	//------------------------------

	$('.wrap-tabs .header-tab .item-header-tab, .wrap-tabs .check-tab').click(function(e){
    	e.preventDefault();
    	var $this = $(this);
    	if( !$this.hasClass('check-tab') ){
    		e.preventDefault();
    	}
   	    $(this).closest('.wrap-tabs').find('.header-tab:first .item-header-tab').removeClass('active');
	    $(this).closest('.item-header-tab').addClass('active');
		var buscaidtab = $(this).attr('data-id');
		//console.log(buscaidtab);

	    $(this).closest('.wrap-tabs').find('.content-tab:first .item-tab').removeClass('active');
	    $('.content-tab .item-tab[id="'+buscaidtab+'"] ').addClass('active');
	});

 	//------------------------------

 	//margin rigth teclado touch
 	var margin = ['','','mr0'];
	$('.bt-teclado .item-bt').each(function(i,e){
	  // $(e).css('background',colors[i%colors.length]);
	  $(e).addClass(margin[i%margin.length]);
	});

});
