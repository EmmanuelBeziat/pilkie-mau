<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

?>

<section class="no-results not-found">
	<header class="page-header alignwide">
		<?php if (is_search()) : ?>

			<h1 class="page-title">
				<?php printf('Résultats pour "%s"',
					'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
				); ?>
			</h1>
		<?php else : ?>
			<h1 class="page-title">Rien à voir…</h1>
		<?php endif; ?>
	</header>

	<div class="page-content default-max-width">
			<p>La page que vous recherchiez n’a pas pu être trouvée. Voulez-vous effectuer une nouvelle recherche ?</p>

			<?php get_search_form(); ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
