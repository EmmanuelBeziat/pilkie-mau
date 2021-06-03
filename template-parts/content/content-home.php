<?php
/**
 * Template part for displaying page content in home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

$home = (object) [
	'picture' => get_field('hero')['main-picture'],
	'color' => get_field('hero')['color'],
	'title' => get_the_content(),
	'pictures' => get_field('front-pictures'),
]; ?>

<section class="hero hero-color-<?= $home->color ?>">
	<div class="hero-picture">
		<img src="<?= $home->picture['url']; ?>" alt="<?= $home->picture['url']; ?>">
	</div>

	<div class="hero-title">
		<?= $home->title; ?>
	</div>

	<div class="hero-navigation">
		<?php if (has_nav_menu('categories')) : ?>
			<nav id="categories-navigation" class="categories-navigation">
				<?php wp_nav_menu([
					'theme_location' => 'categories',
					'menu_class' => 'menu-wrapper',
					'container' => false,
					'container_class' => 'category-menu-container',
					'items_wrap' => '%3$s',
					'fallback_cb' => false,
					'walker' => new MainWalker()
				]); ?>
			</nav>
		<?php endif; ?>
	</div>
</section>
