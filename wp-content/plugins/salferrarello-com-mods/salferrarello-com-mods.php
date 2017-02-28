<?php
/*
 * Plugin Name: salferrarello.com modifications
 * Plugin URI: http://salferrarello.com/
 * Description: Since I'm using the default Bootstrap Genesis Theme, I'm putting my customizations in this plugin
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */

 // Loads my favicon from this plugin
add_filter( 'genesis_pre_load_favicon', 'sf_genesis_pre_load_favicon' );
function sf_genesis_pre_load_favicon( $favicon_url ) {
	$plugin_dir_path = plugin_dir_url(__FILE__);
    return $plugin_dir_path . 'images/favicon.ico';
}
