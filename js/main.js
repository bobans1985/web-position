$(document).ready(function() {
	$("span.viewsrc").click(function(){$(this).parent().find("div.src").slideToggle()});
	$("span.viewsrc").hover(function(){$(this).css("cursor","pointer");},function(){$(this).css("cursor","default");});
});
