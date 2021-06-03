<?php
/**
 * Pilkie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

if (!function_exists('pilkie_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Pilkie 1.0
	 *
	 * @return void
	 */
	function pilkie_setup () {
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', ['comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets']);

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');


		// Add support for editor styles.
		/* add_theme_support('editor-styles');

		$editor_stylesheet_path = './assets/css/style-editor.css';
		// Enqueue editor styles.
		add_editor_style($editor_stylesheet_path); */
	}
}
add_action('after_setup_theme', 'pilkie_setup');

/**
 * Required files
 */

/**
 * Register and enqueue styles and scripts
 */
require get_template_directory() . '/inc/assets.php';

/**
 * Custom Posts Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Pictures sizes
 */
require get_template_directory() . '/inc/images-sizes.php';

/**
 * Walkers
 */
require get_template_directory() . '/inc/walkers.php';

/**
 * Register navigation menus
 */
function pilkie_menus () {
	$locations = [
		'primary' => 'Menu principal',
		'social' => 'Réseaux sociaux',
		'categories' => 'Menu des catégories',
		'footer' => 'Menu du pied de page'
	];

	register_nav_menus($locations);
}
add_action('init', 'pilkie_menus');

/**
 * Dependencies
 */
// require get_template_directory() . '/inc/dependencies.php';

/**
 * Debug Custom
 */
function debug ($value) {
	?>
	<pre style="margin: 1rem 0; padding: 1rem; background: #e4e4e4; border: 1px solid #ccc;"><code> <?php var_dump($value) ?></code></pre>
	<?php
}

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Remove unused admin types
 */
function pilkie_remove_admin_menu () {
	remove_menu_page('edit-comments.php');
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'pilkie_remove_admin_menu');

function convert_to_webp ($string) {
	return preg_replace('/\.(jpg|png)$/', '.webp', $string);
}
