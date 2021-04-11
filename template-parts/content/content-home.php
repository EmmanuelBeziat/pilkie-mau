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

<section class="hero">
	<div class="hero-picture">
		<img src="<?= $home->picture['url']; ?>" alt="<?= $home->picture['url']; ?>">
	</div>
	<div class="hero-title hero-color-<?= $home->color ?>">
		<?= $home->title; ?>
	</div>
</section>

<?php if (has_nav_menu('categories')) : ?>
	<nav id="categories-navigation" class="categories-navigation">
		<div class="container">
			<?php wp_nav_menu([
				'theme_location'  => 'categories',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			]); ?>
		</div>
	</nav><!-- #site-navigation -->
<?php endif; ?>

<?php if (is_array($home->pictures) && count($home->pictures) > 0) : ?>
<section class="pictures">
	<div class="container">
		<div class="pictures-grid">
			<?php foreach ($home->pictures as $item) : ?>
				<?php $picture = get_field('photo', $item->ID); ?>
				<figure class="picture" id="picture-<?= $item->ID ?>">
					<picture>
						<!-- <source srcset="<?= $picture['sizes']['home-image-size'] ?>.webp" type="image/webp"> -->
						<img src="<?= $picture['sizes']['home-image-size'] ?>" alt="<?= $picture->alt ?>" width="<?= $picture['sizes']['home-image-size-width'] ?>" height="<?= $picture['sizes']['home-image-size-height'] ?>" loading="lazy">
					</picture>
					<figcaption class="picture-description">
						<h2 class="picture-title"><?= $item->post_title ?></h2>
					</figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif ?>
