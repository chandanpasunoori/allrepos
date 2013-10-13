// colorbox doc ready script
jQuery(document).ready(function($){ 

  	$('a[href$="jpg"]').colorbox({rel:"nofollow", maxWidth:"75%",maxHeight:"75%"});
	$('a[href$="png"]').colorbox({rel:"nofollow", maxWidth:"75%",maxHeight:"75%"});
  	$(".gallery-icon a").colorbox({rel:"gallery", transition:"none", maxWidth:"75%",maxHeight:"75%"}); 
	
});
