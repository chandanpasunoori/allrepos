<?php
/**
 * Template file used to render a Tag Archive Index page.
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<div id="page-title-wrap">
			<?php if ( is_tag() ) { ?>
				<h4><?php esc_html_e('Posts Tagged &quot;','simpleo') ?><?php single_tag_title(); echo('&quot;'); ?></h4>	 
			<?php } ?>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
	</div><!--main-->
<?php get_footer(); ?>
