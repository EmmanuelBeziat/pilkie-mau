<?php
/**
 * Displays the site social links.
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

?>

<?php if (has_nav_menu('social')) : ?>
	<nav id="site-social-top" class="social-navigation" aria-label="Réseaux sociaux">
		<?php wp_nav_menu([
			'theme_location' => 'social',
			'menu_class' => 'menu-wrapper',
			'container_class' => 'social-menu-container',
			'items_wrap' => '<ul id="social-menu-list" class="%2$s">%3$s</ul>',
			'depth' => 1,
			'fallback_cb' => false,
		]); ?>
	</nav>
<?php endif; ?>
