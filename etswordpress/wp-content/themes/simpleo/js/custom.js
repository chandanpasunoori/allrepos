jQuery(document).ready(function($) {
	function onAfter(curr, next, opts, fwd) {
		 var $ht = $(this).height();

		  //set the container's height to that of the current slide
		 $(this).parent().animate({height: $ht});
	} 
	
	$('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

						

	$('.reviews').cycle({
			fx: 'fade',
			after: onAfter,
			timeout: 15000
		});
	
	// Tabs
	//When page loads...
	$('.tabs-wrapper').each(function() {
		$(this).find(".tab_content").hide(); //Hide all content
		$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(this).find(".tab_content:first").show(); //Show first tab content
	});
	
	// Mobile Nav
	$('#menu-main-navigation').tinyNav({
  		active: 'selected', // String: Set the "active" class
  		header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
  		label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
	});

	//On Click Event
	$("ul.tabs li").click(function(e) {
		$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(this).parents('.tabs-wrapper').find(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
		
		e.preventDefault();
	});
	
	$("ul.tabs li a").click(function(e) {
		e.preventDefault();
	})

	$('.toggle-content').each(function() {
		if(!$(this).hasClass('default-open')){
			$(this).hide();
		}
	});

	$("h5.toggle").click(function(){
		if($(this).parents('.accordian').length >=1){
			var accordian = $(this).parents('.accordian');

			if($(this).hasClass('active')){
				$(accordian).find('h5.toggle').removeClass('active');
				$(accordian).find(".toggle-content").slideUp();
			} else {
				$(accordian).find('h5.toggle').removeClass('active');
				$(accordian).find(".toggle-content").slideUp();

				$(this).addClass('active');
				$(this).next(".toggle-content").slideToggle();
			}
		} else {
			if($(this).hasClass('active')){
				$(this).removeClass("active");
			}else{
				$(this).addClass("active");
			}
		}

		return false;
	});

	$("h5.toggle").click(function(){
		if(!$(this).parents('.accordian').length >=1){
			$(this).next(".toggle-content").slideToggle();
		}
	});

	function isScrolledIntoView(elem)
	{
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();

	    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	$('.toggle-alert').click(function(e) {
		e.preventDefault();

		$(this).parent().slideUp();
	});

	// Create the dropdown base
	$('<select />').appendTo('.nav-holder');


	$('.tabset').each(function() {
		var menuWidth = $(this).width();
	    var menuItems = $(this).find('li').size();
	    var itemWidth = (menuWidth/menuItems)-2;

	    $(this).css({'width': menuWidth +'px'});
	    $(this).find('li').css({'width': itemWidth +'px'});
	});

	$('.content-boxes').each(function() {
		var cols = $(this).find('.col').length;
		$(this).addClass('columns-'+cols);
	});

	$('.columns-3 .col:nth-child(3n), .columns-4 .col:nth-child(4n)').css('padding-right', '0px');
});