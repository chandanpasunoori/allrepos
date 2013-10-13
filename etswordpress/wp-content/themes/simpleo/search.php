<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<div id="page-title-wrap">
			<?php if ( is_search() ) { ?>
				<h4><?php esc_html_e('Search results for','simpleo') ?> <?php the_search_query() ?></h4>	 
			<?php } ?>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
	</div><!--main-->
<?php get_footer(); ?>
