$(document).ready(function(){
	$(".playButton").click(function(){
		var staticImg = $(this);
		var parentDiv = $(this).parent();
		var animatedImg = $(this).next();
		
		//staticImg.addClass("playButtonHide");
		//animatedImg.addClass("imageShow");
		staticImg.css('display', 'none');
		animatedImg.css('display', 'inline');
	});
	
	$(".playButton").hover(function(){
		$(this).css('cursor', 'pointer');
	});
			
});