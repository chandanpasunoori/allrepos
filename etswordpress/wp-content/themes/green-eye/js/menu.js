jQuery(document).on("scroll",function(){ 
    if(jQuery(document).scrollTop()>550){
        jQuery("#header").removeClass("large").addClass("small");
		jQuery("#header-fpage img").removeClass("site-logol").addClass("site-logos");
    } else{
        jQuery("#header").removeClass("small").addClass("large");
		jQuery("#header-fpage img").removeClass("site-logos").addClass("site-logol");
    }
});

