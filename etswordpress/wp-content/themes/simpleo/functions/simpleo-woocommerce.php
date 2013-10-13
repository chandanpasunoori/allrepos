<?php
/**
 * Simpleo functions and definitions
 *
 * Enabling support for WooCommerce
 *
 * @package Simpleo
 */

// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page' );
}
?>
<?php
global $woo_options;

/*-----------------------------------------------------------------------------------*/
/* This theme supports WooCommerce													 */
/*-----------------------------------------------------------------------------------*/

add_action( 'after_setup_theme', 'simpleo_woocommerce_support' );
function simpleo_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_before_main_content', 'simpleo_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'simpleo_theme_wrapper_end', 10);
 
/**
 * Load start of theme wrapper function	
 * @since 1.0
*/
function simpleo_theme_wrapper_start() {
?>
	<div id="main" class="boxed">
		<div id="post-area">
		<?php if ( of_get_option('display_sidebar') == 'Enable' ) { ?>
			<div id="post-frame" class="left">
				<div id="post-article" class="one-column">
		<?php }else{ ?>
			<div id="post-frame-full">
				<div id="post-article" class="one-column">
		<?php } ?>
<?php }
 
/**
 * Load the end of theme wrapper function	
 * @since 1.0
*/
function simpleo_theme_wrapper_end() { 
?>
  				</div>	
			</div><!-- #post-frame -->
			<?php if ( of_get_option('display_sidebar') == 'Enable' ) { ?>
			<div id="sidebar-frame" class="right">
				<?php get_sidebar(); ?>
			</div>	
		<?php }; ?>
		</div><!-- #post-area -->
	</div><!-- #Main -->
<?php }