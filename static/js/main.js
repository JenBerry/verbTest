$(document).ready(function() {
	//show and hide the menu on smaller screens
	$('.menu').on('click', function(){
		var $nav = $('nav')
		if ($nav.is(':hidden')){
			$('nav').slideDown("slow");
		}
		else
		{
			$('nav').slideUp("slow", function(){
				$('nav').removeAttr( 'style' );
				//make sure the menu becomes visible again
				//if the screen width is increased
			});
		}
	});
});
