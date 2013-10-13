<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 *
 * @package Simpleo
 *   
 */
get_header(); ?>
<div id="main" class="boxed">
	<div id="post-area">
	<?php if ( of_get_option('display_sidebar') == 'Enable' ) { ?>
		<div id="post-frame" class="left">
	<?php }else{ ?>
		<div id="post-frame-full">
	<?php } ?>
			<div class="post-article">
				<br>
				<h1><?php _e('Error 404 - Page not found!', 'simpleo'); ?></h1>
				<div class="sorry"><?php _e('Sorry! It seems that the page you are looking for is not here.', 'simpleo'); ?></div>
			</div><!--post-article-->
			<div class="clear"></div>
		</div><!--post-frame-->
		<?php if ( of_get_option('display_sidebar') == 'Enable' ) { get_template_part('main-sidebar'); }; ?>
	</div><!--post-area-->
</div><!--main-->
<?php get_footer(); ?>
