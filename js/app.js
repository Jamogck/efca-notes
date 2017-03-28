jQuery(document).ready(function($) {

	$(function() {
    	$('#main').removeClass('fade-out');
	});

	$('.home #masthead').css({'left': '-270px'}).animate({'left':'0px'}, "slow");

	$('.participants_single').hover(function(){
		$(this).find('.participant_name').toggle('fast');
	});

});