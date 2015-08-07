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
defined('ABSPATH') or die('No direct script access allowed');

add_action('jptt_load_modules', function() {
	require_once JPTT_PLUGIN_PATH . 'core/class-input.php';
	//require_once JPTT_PLUGIN_PATH . 'core/class-user.php';
	require_once JPTT_PLUGIN_PATH . 'core/class-error.php';
});

require_once __DIR__ . '/includes/class-user.php';

add_action('wp_ajax_nopriv_user_register', function() {
	jptt\modules\User::user_register();
});
