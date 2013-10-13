<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';
	
	// Google Fonts
	$google_fonts = array(
						"0" => "None",
						"PT Sans" => "PT Sans",
						"PT Sans Caption" => "PT Sans Caption",
						"PT Sans Narrow" => "PT Sans Narrow",
						"Roboto Slab" => "Roboto Slab",
					);

	// Options Enable/Disable
	$options_enable = array(
						"Enable" => "Enable",
						"Disable" => "Disable",	
					);
					
	// Excerpt or Full Blog Content
	$options_content = array(
						"Excerpt" => "Excerpt",
						"Full Content" => "Full Content",	
					);
					
	// Image Sliders
	$slider_select = array("flex" => "Flex Slider", "refine" => "Refine Slider");
	
	// Animation Effecta
	$animation_effects = array("fade" => "fade", "random" => "random", "slideV" => "slideV", "slideH" => "slideH", "sliceV" => "sliceV", "sliceH" => "sliceH", "cubeV" => "cubeV", "cubeH" => "cubeH", "scale" => "scale", "kaleidoscope" => "kaleidoscope", "fan" => "fan", "blindV" => "blindV", "blindH" => "blindH");

	// Font Sizes
	$font_sizes = array(
		'10' => '10',
		'11' => '11',
		'12' => '12',
		'13' => '13',
		'14' => '14',
		'15' => '15',
		'16' => '16',
		'17' => '17',
		'18' => '18',
		'19' => '19',
		'20' => '20',
		'21' => '21',
		'22' => '22',
		'23' => '23',
		'24' => '24',
		'25' => '25',
		'26' => '26',
		'27' => '27',
		'28' => '28',
		'29' => '29',
		'30' => '30',
		'31' => '31',
		'32' => '32',
		'33' => '33',
		'34' => '34',
		'35' => '35',
		'36' => '36',
		'37' => '37',
		'38' => '38',
		'39' => '39',
		'40' => '40',
		'41' => '41',
		'42' => '42',
	);
	
	// Button Colors
	$button_colors = array("green" => "green","darkgreen" => "darkgreen","orange" => "orange", "blue" => "blue", "red" => "red" ,"pink" => "pink", "darkgray" => "darkgray","lightgray" => "lightgray");

	$options = array();

	// General Settings
	$options[] = array(
		"name" => __("General", "options_framework_theme"),
		"type" => "heading");

	$options[] = array( "name" => "Image Logo",
		"desc" => "You can upload a logo for your theme, or specify an image URL directly",
		"id" => "logo",
		"mod" => "min",
		"type" => "upload");

	$options[] = array( "name" => "Logo ALT Text",
		"desc" => "Specifies an alternate text for the logo",
		"id" => "logo_alt_text",
		"std" => "Logo",
		"type" => "text");

	$options[] = array( "name" => "Select Logo Font Family",
		"desc" => "Select logo font family",
		"id" => "google_font_logo",
		"std" => "PT Sans",
		"type" => "select",
		"options" => $google_fonts); 

	$options[] = array( "name" => "Logo Font Size (px)",
		"desc" => "Default is 38",
		"id" => "logo_font_size",
		"std" => "38",
		"class" => "mini",
		"type" => "text");
		
	$options[] = array( "name" => "Logo Color",
		"desc" => "Pick logo color (default is #ffffff)",
		"id" => "text_logo_color",
		"std" => "#ffffff",
		"type" => "color");

	$options[] = array( "name" 	=> "Custom Favicon",
		"desc" => "Enable/Disable custom favicon",
		"id" => "enable_favicon",
		"std" => "Disable",
		"options" => $options_enable,
		"type" => "select");

	$options[] = array( "name" => "Custom Favicon",
		"desc" => "You can upload a favicon for your theme, or specify a favicon image URL directly. Image size should be (16px x 16px)",
		"id" => "favicon",
		"mod" => "min",
		"type" => "upload");

	$options[] = array( "name" 	=> "Sidebar",
		"desc" => "Enable/Disable the sidebar",
		"id" => "display_sidebar",
		"std" => "Enable",
		"options" => $options_enable,
		"type" => "select");
		
	$options[] = array( "name" => "Select Body Font Family",
		"desc" => "Select a font family for body text",
		"id" => "google_font_body",
		"std" => "PT Sans",
		"type" => "select",
		"options" => $google_fonts); 

	$options[] = array( "name" => "Body Font Size (px)",
		"desc" => "Default is 14",
		"id" => "body_font_size",
		"std" => "14",
		"type" => "select",
		"options" => $font_sizes);

	$options[] = array( "name" =>  "Body Font Color",
		"desc" => "Pick body font color. ( Default: #444444 )",
		"id" => "body_font_color",
		"std" => "#444444",
		"type" => "color");
		
	$options[] = array( "name" =>  "Widget Title Background Color",
		"desc" => "Pick body font color. ( Default: #8db529 )",
		"id" => "widget_title_bg_color",
		"std" => "#8db529",
		"type" => "color");
		
	$options[] = array( "name" =>  "Widget Title Font Color",
		"desc" => "Pick body font color. ( Default: #ffffff )",
		"id" => "widget_title_color",
		"std" => "#ffffff",
		"type" => "color");

	$options[] = array( "name" 	=> "Comments",
		"desc" => "Enable/Disable comments",
		"id" => "enable_comments",
		"std" => "Enable",
		"options" => $options_enable,
		"type" => "select");
		
	$options[] = array( "name" 	=> "Excerpt or Full Blog Content",
		"desc" => "Show excerpt or full blog content on archive / blog pages",
		"id" => "blog_content",
		"std" => "Excerpt",
		"options" => $options_content,
		"type" => "select");
		
	$options[] = array( "name"	=> "Blog Excerpt Length",
		"desc" => "Default: 80",
		"id" => "blog_excerpt",
		"std" => "80",
		"type" => "text");
		
	$options[] = array( "name" 	=> "Simple Pagination",
		"desc" => "Enable/Disable simple pagination",
		"id" => "simple_paginaton",
		"std" => "Disable",
		"options" => $options_enable,
		"type" => "select");
	
	$options[] = array( "name" 	=> "Responsive Design",
		"desc" => "Enable/Disable responsive design features",
		"id" => "responsive_design",
		"std" => "Enable",
		"options" => $options_enable,
		"type" => "select");

	// Header Settings
	$options[] = array(
		"name" => __("Header", "options_framework_theme"),
		"type" => "heading");
		
	$options[] = array( "name" => "Top Panel",
		"desc" => "Enable or Disable panel above the logo",
		"id" => "top_panel_enable",
		"std" => "Enable",
		"options" => $options_enable,
		"type" => "select");

	$options[] = array( "name" => "Top Panel Social Links",
		"desc" => "Enable or Disable social links inside the top panel",
		"id" => "header_social_enable",
		"std" => "Enable",
		"options" => $options_enable,
		"type" => "select");
		
	$options[] = array( "name" =>  "Top Panel Social Links Color",
		"desc" => "Pick top panel social links icons color. ( Default: #ffffff )",
		"id" => "top_social_color",
		"std" => "#ffffff",
		"type" => "color");
	
	if(class_exists('Woocommerce')) {
		$options[] = array( "name" => "Top Panel Shopping Cart",
			"desc" => "Enable or Disable shopping cart inside the top panel. When enabled, top panel social links section will be disabled",
			"id" => "shopping_cart_enable",
			"std" => "Enable",
			"options" => $options_enable,
			"type" => "select");
	}

		
	$options[] = array( "name"	=> "Top Panel Height (px)",
		"desc" => "Default is 40",
		"id" => "top_panel_height",
		"std" 		=> "40",
		"class" => "mini",
		"type" => "text");

	$options[] = array( "name" => "Top Panel Contact Us Section Top Margin (px)",
		"desc" => "Default is 12",
		"id" => "top_contact_top_margin",
		"std" => "12",
		"class" => "mini",
		"type" => "text");
		
	$options[] = array( "name" => "Top Panel Contact Us Section",
		"desc" => "Enable or Disable contact section",
		"id" => "top_contact_enable",
		"std" => "Enable",
		"options" => $options_enable,
		"type" 		=> "select");

	$options[] = array( "name"	=> "Contact Us Section Text",
		"desc" => "Enter text to display on the top panel",
		"id" => "top_panel_contact_text",
		"std" => "Have any questions? Contact us",
		"type" => "text");

	$options[] = array( "name"	=> "Contact Email Address",
		"desc" => "Enter email address to display on the top panel",
		"id" => "top_panel_email",
		"std" => "info@yourdomain.com",
		"type" => "text");
		
	$options[] = array( "name"	=> "Contact Phone Number",
		"desc" => "Enter phone number to display on the top panel",
		"id" => "top_panel_phone",
		"std" => "888-888-8888",
		"type" => "text");

	$options[] = array( "name" =>  "Contact Us Section Font Color",
		"desc" => "Pick contact us section font color. ( Default: #ffffff )",
		"id" => "contact_text_color",
		"std" => "#ffffff",
		"type" => "color");

	$options[] = array( "name"	=> "Header Height (px)",
		"desc" => "Default is 85",
		"id" => "header_height",
		"std" 		=> "85",
		"class" => "mini",
		"type" => "text");

	$options[] = array( "name" => "Logo Top Margin (px)",
		"desc" => "Default is 20",
		"id" => "logo_top_margin",
		"std" => "20",
		"class" => "mini",
		"type" => "text");

	$options[] = array( "name" => "Logo Left Margin (px)",
		"desc" => "Default is 0",
		"id" => "logo_left_margin",
		"std" => "0",
		"class" => "mini",
		"type" => "text");

										
	// Home Page Settings
	$options[] = array(
		"name" => __("Home Page", "options_framework_theme"),
		"type" => "heading");

	$options[] = array( "name" => "Display Image Slider, Tagline and Content Boxes on the Home Page",
		"desc" => "Enable - will display image slider, tagline and content boxes on the home page / Disable - will set the home page as blog posts index",
		"id" => "front_page_display_boxes",
		"std" => "Disable",
		"options" => $options_enable,
		"type" 		=> "select");
		
	$options[] = array( "name" => "Image Slider",
		"desc" => "Enable / Disable Image Slider on Home Page",
		"id" => "image_slider_home",
		"std" => "Enable",
		"options" => $options_enable,
		"type" 	=> "select");

	$options[] = array( "name" => "Tagline Section",
		"desc" => "Enable / Disable Tagline Section on Home Page",
		"id" => "tagline_home",
		"std" => "Enable",
		"options" => $options_enable,
		"type" 	=> "select");
		
	$options[] = array( "name" => "Content Boxes",
		"desc" => "Enable / Disable Content Boxes Section on Home Page",
		"id" => "content_box_home",
		"std" => "Enable",
		"options" => $options_enable,
		"type" 	=> "select"); 

	// Tagline
	$options[] = array( "name" => "Tagline Section",
		"desc" => "",
		"type" => "info");

	$options[] = array( "name" => "Tagline Section Header",
		"desc" => "Enter text to display in the header of the section",
		"id" => "tagline_header",
		"std" => "Simpleo is a modern, clean and fully responsive WordPress theme",
		"type" => "text");
		
	$options[] = array( "name" => "Tagline Section Text",
		"desc" => "Enter text to display in the section",
		"id" => "tagline_text",
		"std" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
		"type" => "textarea");	

	$options[] = array( "name" => "Tagline Button Text",
		"desc" => "Enter text to display in the button",
		"id" => "tagline_button_text",
		"std" => "Learn More",
		"type" => "text");
		
	$options[] = array( "name" => "Tagline Button URL",
		"desc" => "Enter URL. e.g. http://www.yoursite.com",
		"id" => "tagline_button_url",
		"std" => "#",
		"type" => "text");
		
	$options[] = array( "name" => "Select Button Color",
		"desc" => "",
		"id" => "tagline_button_color",
		"std" => "blue",
		"options" => $button_colors,
		"type" 	=> "select");
		
	$options[] = array( "name" => "Tagline Background Color",
		"desc" => "Pick a background color for tagline (default #9db1ba)",
		"id" => "tagline_bg_color",
		"std" => "#9db1ba",
		"type" => "color");
		
	$options[] = array( "name" => "Tagline Text Color",
		"desc" => "Pick a text color for tagline (default #ffffff)",
		"id" => "tagline_text_color",
		"std" => "#ffffff",
		"type" => "color");

	// Content Boxes
	$options[] = array( "name" => "Content Boxes Section",
		"desc" => "",
		"type" => "info");

	$options[] = array( "name" => "First Column Header",
		"desc" => "Enter text to display in the header of the first column",
		"id" => "first_column_header",
		"std" => "Responsive Design",
		"type" => "text");	

	$options[] = array( "name" => "First Column Text",
		"desc" => "Enter text to display in the body of the first column",
		"id" => "first_column_text",
		"std" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
		"type" => "textarea");	

	$options[] = array( "name" => "First Column Image",
		"desc" => "Please choose an image or insert an image url to use in the column",
		"id" => "first_column_image",
		"std" => "",
		"type" => "upload");

	$options[] = array( "name" => "First Button Text",
		"desc" => "Enter text to display in the button in the first column",
		"id" => "first_column_button",
		"std" => "Read More",
		"type" => "text");	
		
	$options[] = array( "name" => "First Column URL",
		"desc" => "Enter URL. e.g. http://www.yoursite.com",
		"id" => "first_column_url",
		"std" => "#",
		"type" => "text");
		
	$options[] = array( "name" => "Second Column Header",
		"desc" => "Enter text to display in the header of the second column",
		"id" => "second_column_header",
		"std" => "High Quality",
		"type" => "text");	

	$options[] = array( "name" => "Second Column Text",
		"desc" => "Enter text to display in the body of the second column",
		"id" => "second_column_text",
		"std" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
		"type" => "textarea");	

	$options[] = array( "name" => "Second Column Image",
		"desc" => "Please choose an image or insert an image url to use in the column",
		"id" => "second_column_image",
		"std" => "",
		"type" => "upload");

	$options[] = array( "name" => "Second Button Text",
		"desc" => "Enter text to display in the button in the second column",
		"id" => "second_column_button",
		"std" => "Read More",
		"type" => "text");	
		
	$options[] = array( "name" => "Second Column URL",
		"desc" => "Enter URL. e.g. http://www.yoursite.com",
		"id" => "second_column_url",
		"std" => "#",
		"type" => "text");	
		
	$options[] = array( "name" => "Third Column Header",
		"desc" => "Enter text to display in the header of the third column",
		"id" => "third_column_header",
		"std" => "eCommerce Ready",
		"type" => "text");	

	$options[] = array( "name" => "Third Column Text",
		"desc" => "Enter text to display in the body of the third column",
		"id" => "third_column_text",
		"std" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
		"type" => "textarea");	

	$options[] = array( "name" => "Third Column Image",
		"desc" => "Please choose an image or insert an image url to use in the column",
		"id" => "third_column_image",
		"std" => "",
		"type" => "upload");

	$options[] = array( "name" => "Third Button Text",
		"desc" => "Enter text to display in the button in the third column",
		"id" => "third_column_button",
		"std" => "Read More",
		"type" => "text");	
		
	$options[] = array( "name" => "Third Column URL",
		"desc" => "Enter URL. e.g. http://www.yoursite.com",
		"id" => "third_column_url",
		"std" => "#",
		"type" => "text");
		
	$options[] = array( "name" => "Column Header Color",
		"desc" => "Pick a text color for column header (default #323b44)",
		"id" => "column_header_color",
		"std" => "#323b44",
		"type" => "color");
					
	$options[] = array( "name" => "Section Background Color",
		"desc" => "Pick a background color for the section (default #ffffff)",
		"id" => "content_box_bg_color",
		"std" => "#ffffff",
		"type" => "color");
				
	$options[] = array( "name" => "Select Button Color",
		"desc" => "",
		"id" => "boxes_button_color",
		"std" => "blue",
		"type" => "select",
		"options" => $button_colors);
										
	// Navigation Menu
	$options[] = array(
		"name" => __("Navigation", "options_framework_theme"),
		"type" => "heading");

	$options[] = array( "name"	=> "Main Navigation  Menu Top Margin (px)",
		"desc" => "Select the top margin , default value: 25",
		"id" => "nav_top_margin",
		"std" => "25",
		"class" => "mini",
		"type" => "text");

	$options[] = array( "name" => "Select Main Navigation Menu Font Family",
		"desc" => "Select a font family for the main navigation menu",
		"id" => "google_font_menu",
		"std" => "PT Sans",
		"type" => "select",
		"options" => $google_fonts); 
		
	$options[] = array( "name" 	=> "Main Navigation Menu Font Size (px)",
		"desc" => "Select the font size, default value: 14",
		"id" => "nav_font_size",
		"std" => "14",
		"class" => "mini",
		"type" => "text");

	$options[] = array( "name" => "Main Navigation Menu Font Color",
		"desc" => "Pick a main navigation menu font color (default is #ffffff)",
		"id" => "nav_font_color",
		"std" => "#ffffff",
		"type" => "color");
					
	$options[] = array( "name" => "Main Navigation Menu Background Color",
		"desc" => "Pick a background color for the main navigation menu ",
		"id" => "nav_bg_color",
		"std" => "",
		"type" => "color");

	$options[] = array( "name" => "Main Navigation Menu Hover Font Color",
		"desc" => "Pick a main navigation menu hover font color (default is #000000)",
		"id" => "nav_hover_font_color",
		"std" => "#000000",
		"type" => "color");

	$options[] = array( "name" => "Main Navigation Menu Background Hover Color",
		"desc" => "Pick a background hover color for the main navigation menu (default #8db529)",
		"id" => "nav_bg_hover_color",
		"std" => "#8db529",
		"type" => "color");

	// Footer Options
	$options[] = array(
		"name" => __("Footer", "options_framework_theme"),
		"type" => "heading");

	$options[] = array( "name" => "Footer Background Color",
		"desc" => "Pick a background color (default is #000000)",
		"id" => "footer_bg_color",
		"std" => "#000000",
		"type" => "color");

	$options[] = array( "name" => "Copyright Section Background Color",
		"desc" => "Pick a background color (default is #262C33)",
		"id" => "copyright_bg_color",
		"std" => "#262C33",
		"type" => "color");

	$options[] = array( "name" => "Footer Widget Title Color",
		"desc" => "Pick a widget title color (default is #ffffff)",
		"id" => "footer_widget_title_color",
		"std" => "#ffffff",
		"type" => "color");

	$options[] = array( 	"name" 		=> "Social Links Panel",
		"desc" 		=> "Enable/Disable social links panel",
		"id" 		=> "footer_social_enable",
		"std" 		=> "Enable",
		"options" => $options_enable,
		"type" 		=> "select");
		
	$options[] = array( "name" => "Footer Social Links Color",
		"desc" => "Pick footer social links icons color. ( Default: #ffffff )",
		"id" => "footer_social_color",
		"std" => "#ffffff",
		"type" => "color");
		
	$options[] = array( "name" => "Copyright Text",
         "desc" => "",
         "id" => "footer_copyright_text",
         "std" => 'Copyright '.date('Y').' '.get_bloginfo('site_title'),
         "type" => "textarea");

	// Slider Settings
	$options[] = array(
		'name' => __('Slider', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array( "name" => "Default Slider",
		"desc" => "Select a slider for the homepage",
		"id" => "slider_select",
		"std" => "refine",
		"type" => "select",
		"options" => $slider_select);
		
	$options[] = array( "name" => "Slider Animation Effect:",
		"desc" => "",
		"id" => "slider_animation",
		"std" => "fade",
		"type" => "select",
		"options" => $animation_effects);
		
	$options[] = array( "name" => "Slideshow Speed",
		"desc" => "Select the slideshow speed, 1000 = 1 second, default value: 5000",
		"id" => "slideshow_speed",
		"std" => "5000",
		"class" => "mini",
		"type" => "text");
					
	$options[] = array( "name" => "Animation Speed",
		"desc" => "Select the animation speed, 1000 = 1 second, default value: 800",
		"id" => "animation_speed",
		"std" => "800",
		"class" => "mini",
		"type" => "text" );

	$options[] = array( "name" => "Select Slider Category",
		"desc" => "",
		"id" => "slider_cat",
		"std" => "",
		"type" => "select",
		"options" => $options_categories);

	$options[] = array( "name" => "Number of Slides to Display",
		"desc" => "",
		"id" => "slider_num",
		"std" => "3",
		"class" => "mini",
		"type" => "text" );

	$options[] = array("name" => "Slider Captions",
		"desc" 		=> "Enable/Disable captions on a slide",
		"id" 		=> "captions",
		"std" 		=> "Disable",
		"options" => $options_enable,
		"type" 		=> "select");
	
	// Social Links
	$options[] = array(
		'name' => __('Social Links', 'options_framework_theme'),
		'type' => 'heading');
					
	$options[] = array( "name" => "Facebook",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "facebook_link",
		"std" => "#",
		"type" => "text"); 

	$options[] = array( "name" => "Flickr",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "flickr_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "RSS",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "rss_link",
		"std" => "#",
		"type" => "text"); 

	$options[] = array( "name" => "Twitter",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "twitter_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "Youtube",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "youtube_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "Pinterest",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "pinterest_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "Tumblr",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "tumblr_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "Google Plus",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "google_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "Dribbble",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "dribbble_link",
		"std" => "#",
		"type" => "text");

	$options[] = array( "name" => "LinkedIn",
		"desc" => "Enter your profile URL. To remove it, just leave it blank",
		"id" => "linkedin_link",
		"std" => "#",
		"type" => "text");


	return $options;
}