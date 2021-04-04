<?php
/**
 * The template for displaying all single photos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content/content-photo');

	the_post_navigation([
		'next_text' => '<p class="meta-nav">Précédent</p><p class="post-title">%title</p>',
		'prev_text' => '<p class="meta-nav">Suivant</p><p class="post-title">%title</p>',
	]);
endwhile; // End of the loop.

get_footer();
