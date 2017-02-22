$(document).ready(function(){
	
	// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
	$('.dropdown').on('show.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').first().stop(false, true).slideDown();
	});

	// ADD SLIDEUP ANIMATION TO DROPDOWN //
	$('.dropdown').on('hide.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').hide();
	});
	
	$('div.texto').hide();
	
	hash = $("div#menu-lateral").find("a").first().attr('id');
	
	$('div#' + hash).show();
	
	if (location.hash) {
		
		$('div.texto').hide();
		
		$('div' + location.hash).show();
	}
});

function comoAjudar (botao){
	
	id = $(botao).attr('id');
	
	$('div.texto').hide();
	
	$('div#' + id).show();
}

function oQueFazemos (botao){
	
	id = $(botao).attr('id');
	
	$('div.texto').hide();
	
	$('div#' + id).show();
}

function institucional (botao){
	
	id = $(botao).attr('id');
	
	$('div.texto').hide();
	
	$('div#' + id).show();
}

function deficiencia (botao){

	id = $(botao).attr('id');
	
	$('div.texto').hide();
	
	$('div#' + id).show();
}