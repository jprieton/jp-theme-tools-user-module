<?php

/**
 * Plugin Name: JP Theme Tools User Module
 * Plugin URI: https://github.com/jprieton/jp-theme-tools-user-module/
 * Description: User module for JP Theme Tools
 * Version: 0.1.0
 * Author: Javier Prieto
 * Text Domain: jptt
 * Domain Path: /languages
 * Author URI: https://github.com/jprieton/
 * License: GPL2
 */
defined( 'ABSPATH' ) or die( 'No direct script access allowed' );

/**
 *  Load plugin textdomain.
 */
add_action( 'plugins_loaded', function () {
	load_plugin_textdomain( 'jptt', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
} );

add_action( 'jptt_load_modules', function() {
	require_once JPTT_PLUGIN_PATH . 'core/class-input.php';
	//require_once JPTT_PLUGIN_PATH . 'core/class-user.php';
	require_once JPTT_PLUGIN_PATH . 'core/class-error.php';
} );

require_once __DIR__ . '/includes/class-user.php';

add_action( 'wp_ajax_nopriv_user_register', function() {
	jptt\modules\User::user_register();
} );

add_action( 'wp_ajax_nopriv_user_login', function () {
	$user = new \jptt\modules\User();
	$user->user_login();
} );
