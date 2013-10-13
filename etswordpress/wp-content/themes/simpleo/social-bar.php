<?php
/**
 * @package Simpleo
 */
?>			
<div id="social-bar">
	<ul>
		<?php if(of_get_option('facebook_link')): ?>
		<li>
			<a href="<?php echo of_get_option('facebook_link'); ?>" target="_blank" title="Facebook"><i class="icon-facebook-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('flickr_link')): ?>
		<li>
			<a href="<?php echo of_get_option('flickr_link'); ?>" target="_blank" title="Flickr"><i class="icon-flickr"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('rss_link')): ?>
		<li>
			<a href="<?php echo of_get_option('rss_link'); ?>" target="_blank" title="RSS"><i class="icon-rss"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('twitter_link')): ?>
		<li>
			<a href="<?php echo of_get_option('twitter_link'); ?>" target="_blank" title="Twitter"><i class="icon-twitter-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('youtube_link')): ?>
		<li>
			<a href="<?php echo of_get_option('youtube_link'); ?>" target="_blank" title="YouTube"><i class="icon-youtube-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('pinterest_link')): ?>
		<li>
			<a href="<?php echo of_get_option('pinterest_link'); ?>" target="_blank" title="Pinterest"><i class="icon-pinterest-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('tumblr_link')): ?>
		<li>
			<a href="<?php echo of_get_option('tumblr_link'); ?>" target="_blank" title="Tumblr"><i class="icon-tumblr-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('google_link')): ?>
		<li>
			<a href="<?php echo of_get_option('google_link'); ?>" target="_blank" title="Google+"><i class="icon-google-plus-sign"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('dribbble_link')): ?>
		<li>
			<a href="<?php echo of_get_option('dribbble_link'); ?>" target="_blank" title="Dribbble"><i class="icon-dribbble"></i></a>
		</li>
		<?php endif; ?>
		<?php if(of_get_option('linkedin_link')): ?>
		<li>
			<a href="<?php echo of_get_option('linkedin_link'); ?>" target="_blank" title="LinkedIn"><i class="icon-linkedin-sign"></i></a>
		</li>
		<?php endif; ?>
	</ul>
</div><!--social-bar-->
