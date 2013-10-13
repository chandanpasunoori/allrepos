<?php
/**
 * Template file used to render an Author Archive Index page.
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<div id="page-title-wrap">
			<?php if ( is_author() ) { ?>
				<?php $curauth = $wp_query->get_queried_object(); ?>
				<h4><?php esc_html_e('All posts by ','simpleo'); echo ' ',$curauth->nickname; ?></h4>	 
			<?php } ?>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
	</div><!--main-->
<?php get_footer(); ?>
