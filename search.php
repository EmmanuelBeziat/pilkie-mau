<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

get_header();

if (have_posts()) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php printf('Resultats pour "%s"',	'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'); ?>
		</h1>
	</header>

	<div class="search-result-count default-max-width">
		<?php printf(
			_n(
				'%d resultat pour votre recherche.',
				'%d resultats pour votre recherche.',
				(int) $wp_query->found_posts,
			),
			(int) $wp_query->found_posts
		);
		?>
	</div>

	<?php
	// Start the Loop.
	while (have_posts()) :
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part('template-parts/content/content-excerpt', get_post_format());
	endwhile; // End the loop.

	// Previous/next page navigation.
	// pilkie_the_posts_navigation();

else :
	// If no content, include the "No posts found" template.
	get_template_part('template-parts/content/content-none');
endif;

get_footer();
