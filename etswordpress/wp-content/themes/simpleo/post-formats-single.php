<?php
/**
 * @package Simpleo
 *
 *//* Image post format */ ?>
<?php if (has_post_format( 'image' )): ?>
	<a class="meta-section" href="<?php the_permalink() ?>">
		<?php if(is_sticky()) { echo '<div class="sticky"></div>'; } ?>
		<?php the_post_thumbnail('full'); ?>
	</a>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-camera"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Gallery post format */ ?>
<?php 
$animation_speed = of_get_option('animation_speed');
$slideshow_speed = of_get_option('slideshow_speed');
?>

<?php if(has_post_format( 'gallery' )): ?>
	<div class="flexslider">
		<ul class="slides">	
		<?php
			//Pull gallery images from custom meta
			$gallery_image = get_post_meta($post->ID,'fw_gl_',true);
			if($gallery_image !=  ''){
				foreach ($gallery_image as $arr){
					echo '<li><img src="'.$arr['fw_gallery_post_image']['src'].'" alt="'.$arr['fw_gallery_post_image_title'].'" /></li>';
				}
			}
		?>		
		</ul>
	</div>	
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-picture"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
  <script type="text/javascript">
    var flex=jQuery.noConflict();
    flex(window).load(function(){
      flex('.flexslider').flexslider({
        animation: 'slide',
        start: function(slider){
          flex('body').removeClass('loading');
        }
      });
    });
  </script>
<?php endif; ?>

<?php /* Video post format */ ?>
<?php if (has_post_format( 'video' )): ?>
<?php 
$postid = $post->ID;
$embed = get_post_meta($post->ID, 'fw_video_post_embed', $single = true);
?>
<a class="meta-section" href="<?php the_permalink() ?>">
	<?php if(is_sticky()) { echo '<div class="sticky"></div>'; } ?>
	<?php
        if( !empty( $embed ) ) {
        	$embed = get_post_meta($post->ID, 'fw_video_post_embed', $single = true);
            echo stripslashes(htmlspecialchars_decode($embed)); ?>
			<aside class="blog-date">
				<div>
					<span><?php the_time('j'); ?></span>
					<span><?php the_time('F'); ?></span>
				</div>
			</aside>

    <?php   } ?>
</a>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-film"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Quote post format */ ?>
<?php if (has_post_format( 'quote' )): ?>
		<a class="meta-section" href="<?php the_permalink() ?>">
		<?php if(is_sticky()) { echo '<div class="sticky"></div>'; } ?>
		<h2 class="quote-text"><?php echo get_post_meta($post->ID, 'fw_quote_post', true); ?></h2>
		<span class="quote-author"><?php echo get_post_meta($post->ID, 'fw_quote_author', true); ?></span>
	</a>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-quote-right"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Link post format */ ?>
<?php if (has_post_format( 'link' )): ?>
	<h2 class="link-box"><a href="<?php echo get_post_meta($post->ID, 'fw_link_post_url', true); ?>"><?php echo get_post_meta($post->ID, 'fw_link_post_description', true); ?></a></h2>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-link"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Audio post format */ ?>
<?php if (has_post_format( 'audio' )): ?>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><i class="icon-music"></i><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Aside post format */ ?>
<?php if (has_post_format( 'aside' )): ?>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Status post format */ ?>
<?php if (has_post_format( 'status' )): ?>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>

<?php /* Chat post format */ ?>
<?php if (has_post_format( 'chat' )): ?>
	<a class="blog-title" href="<?php the_permalink() ?>"><h3 <?php post_class(); ?>><?php the_title(); ?></h3></a>	
	<?php get_template_part('meta'); ?>
<?php endif; ?>