<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

get_header(); ?>

	<header class="page-header alignwide">
		<h1 class="page-title">Rien à voir ici…</h1>
	</header>

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p>La page que vous recherchiez n’a pas pu être trouvée. Voulez-vous effectuer une nouvelle recherche ?</p>

			<?php get_search_form(); ?>
		</div>
	</div>

<?php get_footer();
