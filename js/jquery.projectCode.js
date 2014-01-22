$(document).ready(function(){

	// Add active state to menu links
	$("#nav li").click(function(){
  	$(this).addClass("menu_active").siblings().removeClass("menu_active");
	});

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
	//$('#slides').slides({
	//	preload: true,
	//	generateNextPrev: false,
	//	generatePagination: false,
	//	paginationClass: 'slides_beers'
	//});
	
	// Externals slider links	
	$('#slider_container').cycle({
    fx: 'scrollHorz',
    speed: 500, 
    height:'auto',
    timeout: 0
  });
  
  $('.slides_dots a').click(function(){
 		var desc_link = $this.data('link');
 		$('').hide;
 		$(desc_link).toggle;
  });

	$('.intro_beers a, .slides_beers a').click(function(){ 
		var num_link = parseInt($(this).data('link'));
		$('#slider_container').cycle(num_link);
		$.scrollTo('#slides',900);
		$('.slides_beers a, .intro_beers a').removeClass("active_beer");
		$(this).addClass("active_beer");
		return false;
	});

	/*
	// Go to contact form after each sending tryout
	$('button.conta_button').click(function(){
		$(document).scrollTop($("#conta").offset().top);
	});
	*/
		
});
