function modal(idmodal){
	$('#'+idmodal).toggle();
	$('.flotante').fadeToggle(100);
	if (idmodal=='modal-img'){
		$('.flotante').removeAttr('style');
	}
}

function menumas(idmenumas){
	$('#'+idmenumas).slideToggle(500);
}

$('.menu-boton').click(function() {
	idmenu=$(this).attr('id');
	$('.menu-lista#'+idmenu).slideToggle();
});

$(window).scroll(function(){
   if ($(this).scrollTop() > 500) {
        $('.subir').fadeIn();
   } else {
        $('.subir').fadeOut();
   }
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $('.subir').fadeOut();
    }, 2000));
});

$('.subir').click(function(event) {
	$("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});

$('.flotante-fondo').click(function() {
	idmodal=$(this).attr('id');
	$('#'+idmodal).toggle();
	$('.flotante').fadeToggle(100);
	if (idmodal=='modal-img'){
		$('.flotante').removeAttr('style');
	}
});

$('.flotante span.flotante-cerrar').click(function() {
	idmodal=$(this).attr('id');
	$('#'+idmodal).toggle();
	$('.flotante').fadeToggle(100);
	if (idmodal=='modal-img'){
		$('.flotante').removeAttr('style');
	}
});

$('label').click(function() {
	idlabel = $(this).attr('for');
      $(idlabel).focus();
});

$('.panel-acordeon .panel-encabezado').click(function() {	
	$('.panel-acordeon .panel-contenido').slideUp();
	var elemento=$(this).next();
	var estado =elemento.attr('style');

	if (!estado || estado=='display: none;') {
		elemento.slideDown();
	}
	else {
		elemento.slideUp();
	}			
});

$('body').click(function(event) {
	//Cerrar menu desplegable
	if(!$(event.target).is('.desplegable a') && $('.desplegable ul').attr('style'))
{
	$('.desplegable ul').hide();
}
});

$('.enlace-retraso').click(function() {
     var www = this.href;
     setTimeout(function(){
     	location.href=www;
     },500);
    return false;
});