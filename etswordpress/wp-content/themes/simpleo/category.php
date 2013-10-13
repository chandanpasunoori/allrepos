<?php
/**
 * Template file used to render a Category Archive Index page.
 *
 * @package Simpleo
 */
get_header(); ?>
	<div id="main" class="boxed">
		<div id="page-title-wrap">
			<?php if ( is_category() ) { ?>
				<h4><?php single_cat_title(); ?></h4>	 
			<?php } ?>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
	</div><!--main-->
<?php get_footer(); ?>
