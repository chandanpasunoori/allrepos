<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
			<?php if ( have_posts() ) : while (have_posts() ) : the_post(); /* Queue posts */?>
					<div <?php post_class("post-article"); ?>>
						<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-edit"></i><?php the_title(); ?></h3></a>	
						<?php the_content();?>
						<?php get_template_part('title-meta'); ?>
					</div><!--post-article-->	
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'simpleo' ), 'after' => '</div>' ) ); ?>		
				<?php if (of_get_option('enable_comments') == 'Enable' ) { comments_template( '', true );};?>
			<?php endwhile; else: ?>
			<div class="post-article">
				<br>
				<h1><?php _e('Search', 'simpleo'); ?></h1>
				<div class="sorry"><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'simpleo'); ?></div>
			</div><!--post-article-->
			<?php endif; ?>
			<div class="clear"></div>
		</div><!--post-frame-->
		<?php if ( of_get_option('display_sidebar') == 'Enable' ) { get_template_part('main-sidebar'); }; ?>
	</div><!--post-area-->
</div><!--main-->
<?php get_footer(); ?>
