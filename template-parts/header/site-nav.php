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
			'container' => false,
			'container_class' => 'primary-menu-container',
			'items_wrap' => '%3$s',
			'fallback_cb' => false,
			'walker' => new MainWalker()
		]); ?>
	</nav>
<?php endif; ?>
