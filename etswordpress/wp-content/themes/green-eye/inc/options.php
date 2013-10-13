<?php
/**
 * GREEN Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'green';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}
function optionsframework_options() {
		
	$options[] = array(
		'name' => 'General Options', 
		'type' => 'heading');
		
	$options[] = array(
		'desc' => '<div class="infohead"><span class="donation">If you like this FREEE Theme You can consider for a small Donation to us. Your Donation will be spent for the Disadvantaged Children and Students. You can visit our <a href="http://d5creation.com/donate/" target="_blank"><strong>DONATION PAGE</strong></a> and Take your decision.</span><br /><br /><span class="donation"> Need More Features and Options including Exciting  Slide and 100+ Advanced Features? Try <a href="http://d5creation.com/theme/green-eye/" target="_blank"><strong>GREEN EYE Extend</strong></a>.</span><br /> <br /><span class="donation"> You can Visit the GREEN EYE Extend Demo <a href="http://demo.d5creation.com/wp/themes/green-eye/" target="_blank"><strong>Here</strong></a>.</span> </div>',
		'type' => 'info');

	
	$options[] = array(
		'name' => 'Front Page Heading', 
		'desc' => 'Input your heading text here.  Please limit it within 30 Letters.', 
		'id' => 'heading_text',
		'std' => 'Welcome to the World of Creativity!',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Front Page Heading Description', 
		'desc' => 'Input your heading description here. Please limit it within 100 Letters.', 
		'id' => 'heading_des',
		'std' => 'You can use GREEN Extend Theme for more options, more functions and more visual elements. Extend Version has come with simple color customization option.',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => 'Use Responsive Layout', 
		'desc' => 'Check the Box if you want the Responsive Layout of your Website', 
		'id' => 'responsive',
		'std' => '0',
		'type' => 'checkbox');
	
	$fbsin=array("1","2","3","4","5","6","7","8");
	foreach ($fbsin as $fbsinumber) {
	
	$options[] = array(
		'desc' => '<b>FEATURED BOX: ' . $fbsinumber . '</b>',
		'type' => 'info');
		
	$options[] = array(
		'desc' => 'Uncheck this if you do not want to show This Featured Box',
		'id' => 'fbox-show' . $fbsinumber,
		'std' => '1',
		'type' => 'checkbox' );	
	
	$options[] = array(
		'name' => 'Image', 
		'desc' => 'Upload an image for the Featured Box. 200px X 100px image is recommended.  If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-image' . $fbsinumber,
		'std' => get_template_directory_uri() . '/images/featured-image.png',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => 'Title', 
		'desc' => 'Input your Featured Title here. Please limit it within 30 Letters. If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-title' . $fbsinumber,
		'std' => 'GREEN Environment',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Description', 
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.', 
		'id' => 'featured-description' . $fbsinumber,
		'std' => 'The Color changing options of GREEN will give the WordPress Driven Site an attractive look. GREEN is super elegant and Professional Responsive Theme which will create the business widely expressed.',
		'type' => 'textarea');


	}
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">IMAGE AND TEXT SLIDE</span>.',
		'type' => 'info');
	
		
	$options[] = array(
		'desc' => '<span class="featured-area-title">Sliding Image</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Sliding Image', 
		'desc' => 'Upload an Sliding Image. 930px X 350px image is recommended. Please upload an optimized image for smooth running of the slides.', 
		'id' => 'slide-image1',
		'std' => get_template_directory_uri() . '/images/slide-image/1' . '.png',
		'type' => 'upload');
	
	$options[] = array(
		'name' => 'Image Title', 
		'desc' => 'Input the Caption of the Image. Please limit the words within 50 so that the layout should be clean and attractive.', 
		'id' => 'slide-image1' . '-title',
		'std' => 'This is a Test Image Title',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Image Caption', 
		'desc' => 'Input the Caption of the Image. Please limit the words within 50 so that the layout should be clean and attractive.', 
		'id' => 'slide-image1' . '-caption',
		'std' => 'This is a Test Slide for GREEN EYE Theme. If you feel any problem please contact with D5 Creation.',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Image Link', 
		'desc' => 'Input the URL where the image will redirect the visitors.', 
		'id' => 'slide-image1' . '-link',
		'std' => '#',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Quote Text',
		'desc' => 'Input your Front Page Bottom Quotation here. Plese limit it within 150 Letters.',
		'id' => 'bottom-quotation',
		'std' => 'Quote : All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => 'Google Plus Link', 
		'desc' => 'Input your Google Plus URL here.', 
		'id' => 'gplus-link',
		'std' => 'https://plus.google.com',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Linked In Link', 
		'desc' => 'Input your Linked In URL here.', 
		'id' => 'li-link',
		'std' => 'http://lnkd.in/waY9_A',
		'type' => 'text');

	$options[] = array(
		'name' => 'Feed or Blog Link', 
		'desc' => 'Input your Feed or Blog URL here.', 
		'id' => 'feed-link',
		'std' => 'http://d5creation.com/news/',
		'type' => 'text');
		

	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>


<?php
}
