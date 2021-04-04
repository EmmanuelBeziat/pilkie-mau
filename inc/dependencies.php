<?php

// 1. customize ACF path
function custom_acf_settings_path ($path) {
	// update path
	$path = get_stylesheet_directory() . '/inc/plugins/acf/';
	return $path;
}
add_filter('acf/settings/path', 'custom_acf_settings_path');

// 2. customize ACF dir
function custom_acf_settings_dir( $dir ) {
	// update path
	$dir = get_stylesheet_directory_uri() . '/inc/plugins/acf/';
	return $dir;
}
add_filter('acf/settings/dir', 'custom_acf_settings_dir');

// 3. Include ACF
include_once(get_stylesheet_directory() . '/inc/plugins/acf/acf.php');
