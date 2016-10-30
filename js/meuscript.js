$(document).ready(function(){
	
	// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
	$('.dropdown').on('show.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').first().stop(false, true).slideDown();
	});

	// ADD SLIDEUP ANIMATION TO DROPDOWN //
	$('.dropdown').on('hide.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').hide();
	});
	
	if (location.hash){
		
		$('div#imposto_renda').hide();
		$('div#pessoa_juridica').hide();
		$('div#pessoa_fisica').hide();
		
		$('div' + location.hash).show();
	}
});

function comoAjudar (botao){
	
	id = $(botao).attr('id');
	
	$('div#imposto_renda').hide();
	$('div#pessoa_juridica').hide();
	$('div#pessoa_fisica').hide();
	
	$('div#' + id).show();
}