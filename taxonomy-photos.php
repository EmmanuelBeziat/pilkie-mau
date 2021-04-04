<?php
/**
 * The template for displaying photos taxonomy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>

	<header class="page-header alignwide">
		<div class="container">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php if ($description) : ?>
				<div class="archive-description"><?= wp_kses_post(wpautop( $description)); ?></div>
			<?php endif; ?>
		</div>
	</header>

	<div class="container">
		<div class="pictures-grid">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content/content-photo-grid'); ?>
			<?php endwhile; ?>
		</div>
	</div>

	<?php else : ?>
		<?php get_template_part('template-parts/content/content-none'); ?>
	<?php endif; ?>

<?php get_footer(); ?>
