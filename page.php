<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

get_header();

while (have_posts()) :
	the_post();
	if (is_home() || is_front_page()) :
		get_template_part('template-parts/content/content-home');
	else :
		get_template_part('template-parts/content/content-page');
	endif;
endwhile;

get_footer();
