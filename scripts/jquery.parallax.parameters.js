$(document).ready(function(){
	$('#nav').localScroll(900);
	
/*	RepositionNav();
	
	$(window).resize(function(){
		RepositionNav();
	});	
*/
	
	//.parallax(xPosition, adjuster, inertia, outerHeight) options:
	//xPosition - Horizontal position of the element
	//adjuster - y position to start from
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#transition').parallax("50%", 0.1);
	
	$('#intro_bg').parallax("50%", 0.1);
	$('#beers_bg').parallax("50%", 0.1);
	$('#brewe_bg').parallax("50%", 0.1);
	$('#resel_bg').parallax("50%", 0.1);
	$('#conta_bg').parallax("50%", 0.1);
	
	$('.intro_glass').parallax("50%", 0.15);
})
