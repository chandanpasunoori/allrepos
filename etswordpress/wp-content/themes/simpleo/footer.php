<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Simpleo
 */ ?>
	<div class="clear"></div>
	<div id="footer" class="boxed">
		<div id="footer-box">
			<?php if ( of_get_option('pre_footer_enable') == 'Enable' ) { get_template_part( 'pre-footer' ); }; ?>
			<div class="clear"></div>
			<?php if ( of_get_option('footer_social_enable') == 'Enable' ) { get_template_part( 'social-bar-footer' ); }; ?>
			<div class="clear"></div>
			<?php  get_sidebar('footer'); ?>
			<div class="clear"></div>
		</div><!--footer-box-->
	</div><!--footer-->
	<?php get_template_part( 'copyright' ); ?>
</div><!--grid-container-->
<?php wp_footer(); ?>
</body>
</html>