<?php
/*
Plugin Name: Quick Tag Demo
Plugin URI:
Description:Demonstration of quick tag
Version: 1.0
Author: Arif Islam
Author URI: arifislam.techviewing.com
License: GPLv2 or later
Text Domain: qt-demo
Domain Path: /languages/
*/

function qtd_load_textdomain() {
	load_plugin_textdomain( 'qt-demo', false, plugin_dir_url( __FILE__ ) . '/languages' );
}

add_action( 'plugin_loaded', 'qtd_load_textdomain' );

function qtd_assets( $screen ) {
	if ( 'post.php' == $screen ) {
		wp_enqueue_script( 'qtd-main-js', plugin_dir_url( __FILE__ ) . '/assets/admin/js/main.js', array(
			'quicktags',
			'thickbox'
		) );
		wp_localize_script( 'qtd-main-js', 'qtd', array( 'preview' => plugin_dir_url( __FILE__ ) . '/fap.php' ) );
	}
}

add_action( 'admin_enqueue_scripts', 'qtd_assets' );