<?php
/**
 * Simpleo functions and definitions
 *
 * @package Simpleo
 */

/**
 * Load Flex slider function	
 * @since 1.0
*/
function simpleo_flex_slider()
{
$slider_animation = of_get_option('slider_animation');
$animation_speed = of_get_option('animation_speed');
$slideshow_speed = of_get_option('slideshow_speed');
$slider_cat = of_get_option('slider_cat');
$num_of_slides = of_get_option('slider_num');?>
	<div class="clear"></div>
	<div class="flexslider" >
		<ul class="slides">
		<?php query_posts("showposts=$num_of_slides"."&cat=$slider_cat");
		while (have_posts()) : the_post(); ?>
			<li>
				<?php the_post_thumbnail('full'); ?>
				<?php if (of_get_option('captions') == 'Enable') { ?>
					<div class="rs-caption rs-bottom slide-caption">
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php }; ?>	
			</li>
		<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
	<div class="clear"></div>
  <script type="text/javascript">
    var flex=jQuery.noConflict();
    flex(window).load(function(){
      flex('.flexslider').flexslider({
		slideshowSpeed: <?php echo $slideshow_speed ?> , 
		animationSpeed: <?php echo $animation_speed ?>,
		animation: "fade",
        start: function(slider){
          flex('body').removeClass('loading');
        }
      });
    });
  </script>
<?php }
/**
 * Load Refine slider function	
 * @since 1.0
*/
function simpleo_refine_slide()
{
$slider_animation = of_get_option('slider_animation');
$animation_speed = of_get_option('animation_speed');
$slideshow_speed = of_get_option('slideshow_speed');
$slider_cat = of_get_option('slider_cat');
$num_of_slides = of_get_option('slider_num');
?>
	<div class="clear"></div>
	<div class="slider-wrap">
		<ul class="rs-slider">
		<?php query_posts("showposts=$num_of_slides"."&cat=$slider_cat");
		while (have_posts()) : the_post();
		?>			    
			<li>
				<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail('full'); ?>
				<?php } else { ?>
					<img class="attachment-full wp-post-image rs-slide-image" width="1024" height="500" alt="slide" src="<?php echo get_template_directory_uri() ?>/images/assets/slide.jpg">
				<?php } ?>	
				<?php if (of_get_option('captions') == 'Enable') { ?>
					<div class="rs-caption rs-bottom slide-caption">
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php }; ?>	
			</li>
		<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
	<script type="text/javascript">
    	var refine=jQuery.noConflict();
		refine(function () {
        	refine('.rs-slider').refineSlide({
            	useThumbs             : false,
				useArrows             : true,
				autoPlay              : true,
				keyNav                : true,
				transition         	  : '<?php echo $slider_animation ?>',
				maxWidth              : 1024,
				delay                 : <?php echo $slideshow_speed ?>, 
				transitionDuration    : <?php echo $animation_speed ?>,
				fallback3d            : 'sliceV',
        	});
    	});
	</script>
<?php }