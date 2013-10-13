<?php
/**
 * @package Simpleo
 */
 ?>
<footer class="footer-area">
		<div class="footer-block">
			<?php if ( ! dynamic_sidebar( 'footer-widget-1' ) ) : ?>
				<div id="meta" class="footer-widget-col widget_meta">
					<h4><?php _e( 'Meta', 'simpleo' ); ?></h4>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
							<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
							<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
					</ul>
				</div>
			<?php endif; ?>
		</div>
		<div class="footer-block">
			<?php dynamic_sidebar('footer-widget-2'); ?>
		</div>
		<div class="footer-block">
			<?php dynamic_sidebar('footer-widget-3'); ?>
		</div>
		<div class="footer-block last-block">
			<?php dynamic_sidebar('footer-widget-4'); ?>
		</div>
</footer>
