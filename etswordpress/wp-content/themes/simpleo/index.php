<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<?php if ( of_get_option('front_page_display_boxes') == 'Enable' ) { /* Check if static home page is enable */ ?>
			<?php if (is_home() && ! is_paged()) { ?>
				<?php if ( of_get_option('image_slider_home') == 'Enable' ) { ?>
					<?php  if ( of_get_option('slider_select') == "flex" ) { simpleo_flex_slider(); /* Load theme Flex slider function */ }; ?>
					<?php  if ( of_get_option('slider_select') == "refine") { simpleo_refine_slide(); /* Load theme Refine slider function */}; ?>			
				<?php } ?>
				<?php if ( of_get_option('tagline_home') == 'Enable' ) { /* Load Tagline Section if Enabled */?>
					<?php simpleo_tag_line(); ?>
				<?php } ?>
				<?php if ( of_get_option('content_box_home') == 'Enable' ) { /* Load Content Boxes if Enabled */?>
					<?php simpleo_content_boxes(); ?>
				<?php } ?>
			<?php } else { ?>
				<?php get_template_part( 'loop', 'index' ); ?>
			<?php } ?>
		<?php } else { ?>
			<?php get_template_part( 'loop', 'index' ); ?>
		<?php } ?>
	</div><!--main-->
<?php get_footer(); ?>
