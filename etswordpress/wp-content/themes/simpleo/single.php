<?php
/**
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
				<?php  /*
 						* Pull in a different sub-template, depending on the Post Format.
						*/ ?>
				<?php if(get_post_format()) { ?>
					<div <?php post_class("post-article"); ?>>
						<?php get_template_part('post-formats-single'); ?>
						<?php the_content();?>
						<?php get_template_part('title-meta'); ?>
					</div><!--post-article-->		
				<?php }else{?>
					<div <?php post_class("post-article"); ?>>
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="meta-section" href="<?php the_permalink() ?>">
								<?php if(is_sticky()) { echo '<div class="sticky"></div>'; } ?>
								<?php the_post_thumbnail('full'); ?>
								<aside class="blog-date">
									<div>
										<span><?php the_time('j'); ?></span>
										<span><?php the_time('F'); ?></span>
									</div>
								</aside>
							</a>
						<?php }?>
						<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-edit"></i><?php the_title(); ?></h3></a>	
						<?php get_template_part('meta'); ?>
						<?php the_content();?>
						<?php get_template_part('title-meta'); ?>
					</div><!--post-article-->			
				<?php } ?>
				<?php simpleo_post_nav(); ?>
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
