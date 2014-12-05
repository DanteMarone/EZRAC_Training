//Created by Dante Marone
//Requires: JQUERY

$(document).ready(function(){
	$(".category").addClass("inactive");
	
	$(".category").click(function(){
		var open;
		if($(this).hasClass("active")){
			open = 1;
		}
		//remove active from all other categories and add to this one
		$("*").removeClass("active");
		$(this).toggleClass("active");
		if(open === 1){
			$(this).toggleClass("active");
		}
	});

});