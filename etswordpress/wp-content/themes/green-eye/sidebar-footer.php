<?php
/* 	GREEN EYE Theme's Footer Sidebar Area
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since GREEN 1.0
*/
	
	
	
	if (   ! is_active_sidebar( 'sidebar-3'  )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5'  )
		&& ! is_active_sidebar( 'sidebar-6'  )
	)
		return;
		
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-sidebar">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="footer-widget" class="first-widget">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="footer-widget" class="widgets">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="footer-widget" class="widgets">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>
    
    <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
	<div id="footer-widget" class="widgets">
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
	</div><!-- #fourth .widget-area -->
	<?php endif; ?>
</div><!-- #footerwidget -->

