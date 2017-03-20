jQuery(document).ready(function($) {

	$('.participants_single').hover(function(){
		$(this).find('.participant_name').toggle('fast');
	});

});