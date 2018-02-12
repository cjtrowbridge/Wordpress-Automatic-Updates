<?php
/*
* Plugin Name: Wordpress Automatic  Updates
* Description: 
* Version: 1.0
* Author: CJ Trowbridge
* Author URI: https://github.com/cjtrowbridge/Wordpress-Automatic-Updates
*/

define( 'WP_AUTO_UPDATE_CORE', true );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
