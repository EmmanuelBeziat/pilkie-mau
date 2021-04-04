<?php

/**
 * Register and enqueue styles
 */
function pilkie_register_styles () {
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style('pilkie', get_template_directory_uri() . '/assets/css/main.min.css', [], $theme_version);
}
add_action('wp_enqueue_scripts', 'pilkie_register_styles');

/**
 * Register and enqueue scripts
 */
function pilkie_register_scripts () {
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style('pilkie', get_template_directory_uri() . '/assets/js/main.min.js', [], $theme_version);
}
add_action('wp_enqueue_scripts', 'pilkie_register_scripts');