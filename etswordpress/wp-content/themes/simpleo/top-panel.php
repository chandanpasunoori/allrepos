<?php
/**
 * @package Simpleo
 */
?>
<div id="top-panel" class="boxed">
	<div id="info-box">
		<?php if ( of_get_option('top_contact_enable') == 'Enable' ) { get_template_part( 'contact-bar' ); }; ?>
		<?php if(class_exists('Woocommerce')) { ?>
			<?php if ( of_get_option('header_social_enable') == 'Enable' && of_get_option('shopping_cart_enable') == 'Disable' ) { get_template_part( 'social-bar' ); }; ?>
			<?php if ( of_get_option('shopping_cart_enable') == 'Enable' ) { get_template_part( 'shopping-cart' ); } ;?>
		<?php } else { ?>
			<?php if ( of_get_option('header_social_enable') == 'Enable' ) { get_template_part( 'social-bar' ); }; ?>
		<?php } ?>
	</div><!-- #info-box -->
</div><!-- #top-panel -->
