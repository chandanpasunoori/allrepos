<?php
/* 	GREEN EYE Theme's General Page to display all Pages
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since GREEN 1.0
*/

 get_header(); ?>
	<div id="container">
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-container">
		<div id="post-<?php the_ID(); ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="content-ver-sep"> </div>
            <div class="entrytext">
 <?php if (of_get_option('tpage', '') != '1' ): the_post_thumbnail('thumbnail'); endif; ?>
 <?php green_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; ?><div class="clear"> </div>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
<?php if (of_get_option ('cpage', '' ) != '1' ): if (comments_open( $post->ID ) == true ): comments_template('', true); endif; endif;?>
	<?php else: ?>
		<p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>
	</div></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>