<?php
/**
* Plugin Name: Product Badges For Woocommerce
* Description: This plugin allows create Product Badges For Woocommerce plugin.
* Version: 1.0
* Copyright: 2023
* Text Domain: product-badges-for-woocommerce
* Domain Path: /languages 
*/


if (!defined('ABSPATH')) {
	die('-1');
}

// Define plugin file
define('PBFW_PLUGIN_FILE', __FILE__);

// Define plugin dir
define('PBFW_PLUGIN_DIR', plugins_url('', PBFW_PLUGIN_FILE));

// Define plugin base name
define('PBFW_BASE_NAME', plugin_basename(PBFW_PLUGIN_FILE));

// Include Plugins File
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Include All Files
include_once('main/backend/pbfw_backend.php');
include_once('main/frontend/pbfw_frontend.php');
include_once('main/resources/pbfw-installation-require.php');
include_once('main/resources/pbfw-language.php');
include_once('main/resources/pbfw-load-js-css.php');

function PBFW_support_and_rating_links( $links_array, $plugin_file_name, $plugin_data, $status ) {
    if ($plugin_file_name !== plugin_basename(__FILE__)) {
      return $links_array;
    }

    $links_array[] = '<a href="https://www.plugin999.com/support/">'. __('Support', 'product-badges-for-woocommerce') .'</a>';
    $links_array[] = '<a href="https://wordpress.org/support/plugin/product-badges-for-woocommerce/reviews/?filter=5">'. __('Rate the plugin ★★★★★', 'product-badges-for-woocommerce') .'</a>';

    return $links_array;

}
add_filter( 'plugin_row_meta', 'PBFW_support_and_rating_links', 10, 4 );