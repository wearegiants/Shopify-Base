$('.wallpaper').background();
$('.carousel').carousel();
$('.swap').swap();

function shopHover(){
	$(".swap").hover(function(){
		$(".swap").swap("activate");
	});
	$("#content, #header--main .btn:not(.swap)").hover(function(){
		$(".swap").swap("deactivate");
	});
}

shopHover();