// initialise plugins
jQuery(document).ready(function($){ 
	//alert('toggle is running');
	
	jQuery('#servicebox1').height(Math.max(jQuery('#servicebox1').height(),jQuery('#servicebox2').height(),jQuery('#servicebox3').height()));
	jQuery('#servicebox2').height(Math.max(jQuery('#servicebox1').height(),jQuery('#servicebox2').height(),jQuery('#servicebox3').height()));
	jQuery('#servicebox3').height(Math.max(jQuery('#servicebox1').height(),jQuery('#servicebox2').height(),jQuery('#servicebox3').height()));
	
    jQuery('ul.sf-menu').superfish();
    
	jQuery(window).unload(function(){
		jQuery('ul.sf-menu li.current').hideSuperfishUl();
	});
	
	jQuery(function(){
    	jQuery('#full-slider').nivoSlider({
    		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 1, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 700, // Slide transition speed
	        pauseTime: 5000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: true, // Next & Prev navigation
	        controlNav: true, // 1,2,3... navigation
	        controlNavThumbs: false, // Use thumbnails for Control Nav
	        pauseOnHover: true, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        randomStart: false, // Start on a random slide
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded
    	});
	});
	
	jQuery(function(){
    	jQuery('#full-slider-thumb').nivoSlider({
	    	effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 1, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 700, // Slide transition speed
	        pauseTime: 5000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: true, // Next & Prev navigation
	        controlNav: true, // 1,2,3... navigation
	        controlNavThumbs: true, // Use thumbnails for Control Nav
	        pauseOnHover: true, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        randomStart: false, // Start on a random slide
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded
	    });
	});
  	
  	jQuery(function(){
    	jQuery('#half-slider').nivoSlider({
    		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 1, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 700, // Slide transition speed
	        pauseTime: 5000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: true, // Next & Prev navigation
	        controlNav: true, // 1,2,3... navigation
	        controlNavThumbs: false, // Use thumbnails for Control Nav
	        pauseOnHover: true, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        randomStart: false, // Start on a random slide
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded
    	});
	});
  	
  	jQuery(function(){
    	jQuery('#half-slider-thumb').nivoSlider({
	        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 1, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 700, // Slide transition speed
	        pauseTime: 5000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: true, // Next & Prev navigation
	        controlNav: true, // 1,2,3... navigation
	        controlNavThumbs: true, // Use thumbnails for Control Nav
	        pauseOnHover: true, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        randomStart: false, // Start on a random slide
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded
	    });
	});
});