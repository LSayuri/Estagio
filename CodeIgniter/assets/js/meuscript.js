$(document).ready(function(){
	
	// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
	$('.dropdown').on('show.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').first().stop(false, true).slideDown();
	});

	// ADD SLIDEUP ANIMATION TO DROPDOWN //
	$('.dropdown').on('hide.bs.dropdown', function(e){
		
		$(this).find('.dropdown-menu').hide();
	});
});