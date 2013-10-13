<?php
/**
 * Simpleo functions and definitions
 *
 * @package Simpleo
 * @since 1.0
 */

/** 
 * Makes theme available for translation
 * @since 1.0
 */
load_theme_textdomain( 'simpleo', get_template_directory() . '/languages' );

/** 
 * This theme styles the visual editor with editor-style.css to match the theme style.
 */
add_editor_style();

/** 
 * Default RSS feed links
 */
add_theme_support('automatic-feed-links');

/**
 * Register Navigation
 */
register_nav_menu('main_navigation', __('Primary Menu', 'simpleo') );

/** 
 * Support a variety of post formats.
 */
add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'link', 'quote' ) );

/** 
 * Custom image size for featured images, displayed on "standard" posts.
 */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 2500, 9999 ); // Unlimited height, soft crop

/** 
 * Sets up the content width.
 */
if ( ! isset( $content_width ) )
	$content_width = 1024;

/**
 * Adds JavaScript to pages with the comment form to support sites with threaded comments (when in use).
 * @since 1.0
 */
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );

/**
 * Sets up theme custom backgrounds
 * @since 1.0
 */

$custombg = array(
	'default-color' => '323948',
	);	
add_theme_support( 'custom-background', $custombg );


/**
 * Sets up theme defaults CSS rules
 * @since 1.0
 */
function simpleo_custom_styling() {
	/**
	 * General Settings 
	 */		
	$google_font_logo = of_get_option('google_font_logo');
	$text_logo_color = of_get_option('text_logo_color');
	$logo_font_size = of_get_option('logo_font_size');
	$google_font_body = of_get_option('google_font_body');
	$body_font_size = of_get_option('body_font_size');
	$body_font_color = of_get_option('body_font_color');
	$widget_title_bg_color = of_get_option('widget_title_bg_color');
	$widget_title_color = of_get_option('widget_title_color');

	/**
	 * Header Settings 
	 */		
	$top_panel_height = of_get_option('top_panel_height');	
	$top_contact_top_margin = of_get_option('top_contact_top_margin');
	$logo_top_margin = of_get_option('logo_top_margin');
	$logo_left_margin = of_get_option('logo_left_margin');
	$header_height = of_get_option('header_height');
	$top_social_color  = of_get_option('top_social_color');
	$contact_text_color  = of_get_option('contact_text_color');
	
	/**
	 * Home Page Settings
	 */	
	$tagline_bg_color = of_get_option('tagline_bg_color');
	$tagline_text_color = of_get_option('tagline_text_color');
	$content_box_bg_color = of_get_option('content_box_bg_color');
	$column_header_color = of_get_option('column_header_color');
	
	/**
	 * Navigation Menu 
	 */	
	$nav_top_margin = of_get_option('nav_top_margin');
	$google_font_menu = of_get_option('google_font_menu');
	$nav_font_size = of_get_option('nav_font_size');
	$nav_font_color = of_get_option('nav_font_color');
	$nav_bg_color  = of_get_option('nav_bg_color');
	$nav_hover_font_color  = of_get_option('nav_hover_font_color');
	$nav_bg_hover_color = of_get_option('nav_bg_hover_color');

	/**
	 * Footer Settings
	 */	
	$footer_bg_color = of_get_option('footer_bg_color');	
	$copyright_bg_color = of_get_option('copyright_bg_color');
	$footer_widget_title_color = of_get_option('footer_widget_title_color');
	$footer_social_color  = of_get_option('footer_social_color');

	$output = '';
	
	/**
	 * Footer Settings
	 */
	if ( $footer_bg_color )
	$output .= '#footer { background-color:' . $footer_bg_color . ' !important}' . "\n";

	if ( $copyright_bg_color )
	$output .= '#copyright { background-color:' . $copyright_bg_color . ' !important}' . "\n";
	
	if ( $footer_widget_title_color )
	$output .= '.footer-area h4 { color:' . $footer_widget_title_color . ' !important}' . "\n";
	
	if ( $footer_social_color )
	$output .= '#social-bar-footer ul li a i { color:' . $footer_social_color . ' !important}' . "\n"; 
	/**
	 * Navigation Menu 
	 */	
	if ( $nav_top_margin )
	$output .= '#site-navigation { margin-top:' . $nav_top_margin . 'px !important}' . "\n";
	
	if ( $google_font_menu )
	$output .= '#site-navigation ul li a {font-family:' . $google_font_menu . '!important}' . "\n";	

	if ( $nav_font_size )
	$output .= '#site-navigation ul li a {font-size:' . $nav_font_size . 'px !important}' . "\n";
	
	if ( $nav_font_color )
	$output .= '#site-navigation ul li a {color:' . $nav_font_color . '!important}' . "\n";

	if ( $nav_bg_color )
	$output .= '#site-navigation {background-color:' . $nav_bg_color . '!important}' . "\n";

	if ( $nav_hover_font_color )
	$output .= '#site-navigation ul li a:hover {color:' . $nav_hover_font_color . '!important}' . "\n";

	if ( $nav_bg_hover_color )
	$output .= '#menu-main-navigation li a:hover, #menu-main-navigation li:hover a, #menu-main-navigation li ul.sub-menu { background:' . $nav_bg_hover_color . '!important}' . "\n";	
	/**
	 * Home Page Settings
	 */
	if ( $tagline_bg_color )
	$output .= '#content-holder1 { background-color:' . $tagline_bg_color . ' !important}' . "\n";
	
	if ( $tagline_text_color )
	$output .= '#content-holder1 { color:' . $tagline_text_color . ' !important}' . "\n";
	
	if ( $content_box_bg_color )
	$output .= '#content-wrap { background-color:' . $content_box_bg_color . ' !important}' . "\n";
	
	if ( $column_header_color )
	$output .= '#content-wrap h4 { color:' . $column_header_color . ' !important}' . "\n";
	/**
	 * Header Settings 
	 */	
	if ( $header_height )
	$output .= '#branding {height:' . $header_height . 'px !important}' . "\n";
	
	if ( $top_panel_height )
	$output .= '#top-panel {height:' . $top_panel_height . 'px !important}' . "\n";
	
	if ( $top_contact_top_margin )
	$output .= '#contact-bar { margin-top:' . $top_contact_top_margin . 'px !important}' . "\n";
	
	if ( $logo_top_margin )
	$output .= '#logo { margin-top:' . $logo_top_margin . 'px !important}' . "\n";
	
	if ( $logo_left_margin )
	$output .= '#logo { margin-left:' . $logo_left_margin . 'px !important}' . "\n";	
	
	if ( $top_social_color )
	$output .= '#info-box #social-bar ul li a i {color:' . $top_social_color . '!important}' . "\n";
	
	if ( $contact_text_color )
	$output .= '#info-box #account-set a, #info-box #shopping-cart i, #info-box #shopping-cart a, #contact-bar, #contact-bar a i, #contact-bar a {color:' . $contact_text_color . '!important}' . "\n";
	
	/**
	 * General Settings 
	 */		
	if ( $google_font_logo )
	$output .= '#logo {font-family:' . $google_font_logo . '!important}' . "\n";

	if ( $text_logo_color )
	$output .= '#logo a, #logo .site-description {color:' . $text_logo_color . '!important}' . "\n";
	
	if ( $logo_font_size )
	$output .= '#logo {font-size:' . $logo_font_size . 'px !important}' . "\n";

	if ( $google_font_body != 'None' )
	$output .= 'body {font-family:' . $google_font_body . '!important}' . "\n";	
	
	if ( $body_font_size )
	$output .= 'body {font-size:' . $body_font_size . 'px !important}' . "\n";
	
	if ( $body_font_color )
	$output .= 'body {color:' . $body_font_color . '!important}' . "\n";

	if ( $widget_title_bg_color )
	$output .= '.widget-title {background-color:' . $widget_title_bg_color . '!important}' . "\n";
	
	if ( $widget_title_color )
	$output .= '.widget-title {color:' . $widget_title_color . '!important}' . "\n";
			
	// Output styles
	if ( isset( $output ) && $output != '' ) {
		$output = strip_tags( $output );
		$output = "<!--Custom Styling-->\n<style media=\"screen\" type=\"text/css\">\n" . $output . "</style>\n";
		echo $output;
	}

}

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 * @since 1.0
 *
 */
function simpleo_wp_title( $title, $sep ) {
	global $paged, $page;
	
	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'simpleo' ), max( $paged, $page ) );

	return $title;
}

add_filter( 'wp_title', 'simpleo_wp_title', 10, 2 );

/** 
 * Add scripts function
 * @since 1.0
 */
add_action('wp_enqueue_scripts','simpleo_add_script_function');

function simpleo_add_script_function() {

/** 
 * Load Styles
 * @since 1.0
 */
wp_enqueue_style('simpleo', get_stylesheet_uri());
wp_enqueue_style ('reset', get_stylesheet_directory_uri() . '/css/reset.css');
if (of_get_option('responsive_design') == 'Enable'):
	wp_enqueue_style ('responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
endif;
wp_enqueue_style ('basic', get_stylesheet_directory_uri() . '/css/basic.css');
wp_enqueue_style ('top-panel', get_stylesheet_directory_uri() . '/css/top-panel.css');
wp_enqueue_style ('menu', get_stylesheet_directory_uri() . '/css/menu.css');
wp_enqueue_style ('layout', get_stylesheet_directory_uri() . '/css/layout.css');
wp_enqueue_style ('blog', get_stylesheet_directory_uri() . '/css/blog.css');
wp_enqueue_style ('footer', get_stylesheet_directory_uri() . '/css/footer.css');
wp_enqueue_style ('image-sliders', get_stylesheet_directory_uri() . '/css/image-sliders.css');
wp_enqueue_style ('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
wp_enqueue_style ('elements', get_stylesheet_directory_uri() . '/css/elements.css');
wp_enqueue_style ('sidebar', get_stylesheet_directory_uri() . '/css/sidebar.css');
wp_enqueue_style ('comments', get_stylesheet_directory_uri() . '/css/comments.css');
wp_enqueue_style ('woocommerce', get_stylesheet_directory_uri() . '/css/woocommerce.css');
if( of_get_option('google_font_body') != 0):
	wp_enqueue_style ('body-font', '//fonts.googleapis.com/css?family='. urlencode(of_get_option('google_font_body')) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
endif;
if( of_get_option('google_font_menu') != 0):
	wp_enqueue_style ('menu-font', '//fonts.googleapis.com/css?family='. urlencode(of_get_option('google_font_menu')) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
endif;
if( of_get_option('google_font_logo') != 0):
	wp_enqueue_style ('logo-font', '//fonts.googleapis.com/css?family='. urlencode(of_get_option('google_font_logo')) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
endif;
/** 
 * Load Scripts
 * @since 1.0
 */
wp_enqueue_script('jquery');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/js/superfish.js');
wp_enqueue_script('supersubs', get_stylesheet_directory_uri() . '/js/supersubs.js');
wp_enqueue_script('flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js');
wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js');
wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/js/jquery.easing.js');
wp_enqueue_script('hoverintent', get_stylesheet_directory_uri() . '/js/jquery.hoverIntent.js');
wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
wp_enqueue_script('smoothscroll', get_stylesheet_directory_uri() . '/js/jquery.smooth-scroll.min.js');
wp_enqueue_script('cycle', get_stylesheet_directory_uri() . '/js/jquery.cycle.lite.js');
wp_enqueue_script('tinynav', get_stylesheet_directory_uri() . '/js/tinynav.min.js');
wp_enqueue_script('refineslide', get_stylesheet_directory_uri() . '/js/jquery.refineslide.js');
wp_enqueue_script('respond', get_stylesheet_directory_uri() . '/js/respond.min.js');
}

/** 
 * Register widgetized locations
 * @since 1.0
 */
register_sidebar(array(
	'name' => __( 'Main Sidebar', 'simpleo' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<div class="widget-title"><h4>',
	'after_title' => '</h4></div>',
));

register_sidebar(array(
	'name' =>  __( 'Footer Widget 1', 'simpleo' ),
	'id' => 'footer-widget-1',
	'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

register_sidebar(array(
	'name' => __( 'Footer Widget 2', 'simpleo' ),
	'id' => 'footer-widget-2',
	'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

register_sidebar(array(
	'name' => __( 'Footer Widget 3', 'simpleo' ),
	'id' => 'footer-widget-3',
	'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

register_sidebar(array(
	'name' => __( 'Footer Widget 4', 'simpleo' ),
	'id' => 'footer-widget-4',
	'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

/** 
 * Load function to check if primary menu is set.
 * @since 1.0
 */
function simpleo_selectmenu() {
	 	if ( current_user_can('edit_theme_options') ) {
				echo '	<ul id="menu-main-navigation" class="sf-menu sf-js-enabled sf-shadow">
							<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
								<a href="'.get_admin_url().'nav-menus.php">'.__("Select a Menu to appear here in Dashboard->Appearance->Menus ", "simpleo").'</a>
							</li>
		
						</ul>	';
		} else {
				echo '	<ul id="menu-main-navigation" class="sf-menu sf-js-enabled sf-shadow">
							<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
								<a href="'.esc_url( get_home_url() ).'">'.__("Home", "simpleo").'</a>
							</li>
		
						</ul>	';			
		}
}
/** 
 * Load function to change excerpt length
 * @since 1.0
 */
function simpleo_excerpt_length( $length ) {
	
	if(of_get_option('blog_excerpt') !="") {
		$excrpt = of_get_option('blog_excerpt');
		return $excrpt;
	} else {
		$excrpt = '80';
		return $excrpt;
	}
}
add_filter('excerpt_length', 'simpleo_excerpt_length', 999);

/**
 * Displays navigation to next/previous post when applicable.
 * @since 1.0
 */
function simpleo_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'simpleo' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'simpleo' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'simpleo' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

/** 
 * Displays navigation to next/previous pages
 * @since 1.0
 */
function simpleo_pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

/**
 * Load Comments Support
 * @since 1.0	
*/
function simpleo_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'simpleo' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'simpleo' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<?php echo get_avatar($comment, 35); ?>
				</div><!--comment-author .vcard-->
				<div class="comment-date">
					<span>on</span>	 <?php comment_date('F j, Y'); ?>
				</div>
				<div class="comment-author-name">
					<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
					<?php edit_comment_link( __( 'Edit', 'simpleo' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'simpleo' ); ?></em>
					<br>
				<?php endif; ?>

			</div>

			<div class="comment-content"><?php comment_text(); ?>
			<div>
				<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'simpleo' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!--reply-->
			</div>
			</div>

		</div><!--comment-->

	<?php
			break;
	endswitch;
}

/**
 * Load Tagline function	
*/
function simpleo_tag_line() { ?>
<div id ="tagline-wrap">	
	<div id="content-holder1">	
		<section class="reading-box">
			<h2 class="margin-bottom-10"><?php echo of_get_option('tagline_header'); ?></h2>
			<p class="read-desc"><?php echo of_get_option('tagline_text'); ?></p>
			<a class="continue button large <?php echo of_get_option('tagline_button_color'); ?>" href="<?php echo of_get_option('tagline_button_url'); ?>"><?php echo of_get_option('tagline_button_text'); ?></a>
		</section>
	</div>
</div>
<?php }

/**
 * Load content boxes function	
 * @since 1.0
*/
function simpleo_content_boxes() { ?>
<div id="content-wrap">
	<div id="content-holder2">
		<div class="content-box-wrap">
			<section class="columns content-boxes columns-3 center-align">
				<article class="col">
					<div class="heading heading-and-icon">
						<?php if (of_get_option('first_column_image')!="") {?>
							<img width="28" height="28" alt="1col" src="<?php echo of_get_option('first_column_image'); ?>">
						<?php } ?>
						<h4><?php echo of_get_option('first_column_header'); ?></h4>
					</div>
						<?php echo of_get_option('first_column_text'); ?>
					<div class="clear"></div>
					<div class="margin-top-20"></div>
					<span class="more">
						<a class="button small <?php echo of_get_option('boxes_button_color'); ?>"  href="<?php echo of_get_option('first_column_url'); ?>"><?php echo of_get_option('first_column_button');?></a>
					</span>
				</article>
				<article class="col">
					<div class="heading heading-and-icon">
						<?php if (of_get_option('second_column_image')!="") {?>
							<img width="28" height="28" alt="1col" src="<?php echo of_get_option('second_column_image'); ?>">
						<?php } ?>
						<h4><?php echo of_get_option('second_column_header'); ?></h4>
					</div>
						<?php echo of_get_option('second_column_text'); ?>
					<div class="clear"></div>
					<div class="margin-top-20"></div>
					<span class="more">
						<a class="button small <?php echo of_get_option('boxes_button_color'); ?>"  href="<?php echo of_get_option('second_column_url'); ?>"><?php echo of_get_option('second_column_button');?></a>
					</span>
				</article>
				<article class="col">
					<div class="heading heading-and-icon">
						<?php if (of_get_option('third_column_image')!="") {?>
							<img width="28" height="28" alt="1col" src="<?php echo of_get_option('third_column_image'); ?>">
						<?php } ?>
						<h4><?php echo of_get_option('third_column_header'); ?></h4>
					</div>
						<?php echo of_get_option('third_column_text'); ?>
					<div class="clear"></div>
					<div class="margin-top-20"></div>
					<span class="more">
						<a class="button small <?php echo of_get_option('boxes_button_color'); ?>" href="<?php echo of_get_option('third_column_url'); ?>"><?php echo of_get_option('third_column_button');?></a>
					</span>
				</article>
			</section>
		</div>
	</div>
</div>
<?php }

// Theme Options sidebar
add_action( 'optionsframework_before','simpleo_options_support' );

function simpleo_options_support() { ?>
	<div id="optionsframework-support">
		<div class="metabox-holder">
			<div class="postbox">
				<h3><?php _e('Support','simpleo') ?></h3>
					<div class="inside">
                        <p><b><a target="_blank" href="http://www.vpthemes.com/simpleo-theme-documentation/"><?php _e('Simpleo Documentation','simpleo'); ?></b></a><?php _e(' For theme support and general questions please fill the contact form in the following link: ','simpleo') ?> <a target="_blank" href="http://www.vpthemes.com/support/"><?php _e('Contact Form','simpleo') ?></a></p>
                        <p><?php _e('Want to add additional features? ','simpleo') ?><a target="_blank" href="http://www.vpthemes.com/simpleo/#theme-pricing"><?php _e(' Upgrade to Pro version.','simpleo') ?></a></p>
					</div>
			</div>
		</div>
	</div>
<?php }
