<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (!is_front_page()) : ?>
		<header class="entry-header alignwide">
			<?php // get_template_part('template-parts/header/entry-header'); ?>
			<?php // pilkie_post_thumbnail(); ?>
		</header>
	<?php elseif (has_post_thumbnail()) : ?>
		<header class="entry-header alignwide">
			<?php // pilkie_post_thumbnail(); ?>
		</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="Page">',
				'after'    => '</nav>',
				'pagelink' => 'Page %',
			)
		);
		?>
	</div>

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer default-max-width">
			<?php edit_post_link(
				sprintf('Modifier %s', '<span class="screen-reader-text">' . get_the_title() . '</span>'),
				'<span class="edit-link">', '</span>'
			); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
