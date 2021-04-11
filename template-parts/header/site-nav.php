<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

?>

<?php if (has_nav_menu('primary')) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="Menu principal">
		<?php wp_nav_menu([
			'theme_location' => 'primary',
			'menu_class' => 'menu-wrapper',
			'container_class' => 'primary-menu-container',
			'items_wrap' => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
			'fallback_cb' => false,
		]); ?>
	</nav>
<?php endif; ?>
