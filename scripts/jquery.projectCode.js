$(document).ready(function(){
	// Parallax effect
	$('#nav').localScroll(900);
	
	//$('.intro_f(loat').parallax("50%", 0.1);
	//$('.intro_glass').parallax("50%", 0.2);
	//$('#tr3').parallax("50%", 0.1);
	//$('#tr4').parallax("50%", 0.1);
	
	$('#intro .container').parallax("50%", 0.1);
	$('.intro_glass').parallax("60%", 0.4);
	$('#tr1').parallax("50%", 0.3);
	
	$('#tr2').parallax("50%", 0.3);
	
	//$('.brewe_sticker').parallax("0%", 0.3);
	//$('#tr3').parallax("50%", 0.3);
	//$('#tr4').parallax("50%", 0.3);
	
	
	// Slider effect
	$('#slides').slides({
		preload: true,
		generateNextPrev: false,
		generatePagination: false,
		paginationClass: 'slides_beers'
	});
	
	// Externals slider links
	$('.intro_beers a').click(function(){ 
		var num_link = $(this).data('link');
		$('#' + num_link).click();
		$.scrollTo('#slides',900);
		return false;
	});
	
});
