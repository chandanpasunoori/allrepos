<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<div id="page-title-wrap">
			<?php if ( is_day() ) { ?>
				<h4><?php esc_html_e('Daily Archives: ','simpleo') ?> <?php the_time('F jS, Y'); ?></h4>	 
			<?php } ?>
			<?php if ( is_month() ) { ?>
				<h4><?php esc_html_e('Monthly Archives: ','simpleo') ?> <?php the_time('F, Y'); ?></h4>	 
			<?php } ?>
			<?php if ( is_year() ) { ?>
				<h4><?php esc_html_e('Yearly Archives: ','simpleo') ?> <?php the_time('Y'); ?></h4>	 
			<?php } ?>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
	</div><!--main-->
<?php get_footer(); ?>
