<?php
/**
 * @package Simpleo
 */
?>
<div class="meta-wrap">
	<span><i class="icon-calendar"></i><a class="p-date" title="<?php the_time(); ?>" href="<?php the_permalink() ?>"><?php the_time('F j, Y') ?></a></span>
	<span class="margin10"></span>
	<span><i class="icon-user"></i>by <?php the_author_posts_link() ?></span>
	<span class="margin10"></span>
	<span><i class="icon-book"></i><?php the_category(', '); ?></span>
	<span class="margin10"></span>
	<span><i class="icon-comments-alt"></i><?php comments_number( 'No Comments', '1 Comment ', '% Comments' ); ?></span>

</div>	
