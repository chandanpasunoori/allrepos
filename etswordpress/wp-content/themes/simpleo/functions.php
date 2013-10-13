<?php
/**
 * Simpleo functions and definitions
 *
 * @package Simpleo
 */
// The path to Themes Functions
define("path", get_template_directory() . "/functions");
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/' );
require_once path . "/simpleo-functions.php"; 			// Theme Custom Functions
require_once ('admin/options-framework.php');			// Loads the Options Panel
require_once path . "/simpleo-image-sliders.php"; 		// Theme Custom Functions
require_once path . "/simpleo-metaboxes.php";			// Theme Custom Metaboxes
require_once path . "/simpleo-woocommerce.php";			// WooCommerce
