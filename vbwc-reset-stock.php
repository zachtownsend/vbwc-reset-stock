<?php
/**
 * Plugin Name:     Verb Brands Woocommerce Reset Stock
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Resets the stock of chosen products at specified time intervals
 * Author:          Zach Townsend
 * Author URI:      http://verbbrands.com/
 * Text Domain:     vbwc-reset-stock
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Vbwc_Reset_Stock
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// define( 'WCRS_PLUGIN_LOCATION', plugin_dir_path( __FILE__ ) );

// Run this function on activation
function activate_WCRS() {

}

// Run this function on deactivation
function deactivate_WCRS() {

}

// Register activation hooks
register_activation_hook( __FILE__, 'activate_WCRS' );
register_deactivation_hook( __FILE__, 'deactivate_WCRS' );

require plugin_dir_path( __FILE__ ) . 'includes/class-wcrs.php'; 

function run_WCRS() {
	$plugin = new \WCRS\WCRS();
}

add_action( 'plugins_loaded', 'run_WCRS' );