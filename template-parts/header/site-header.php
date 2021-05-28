<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

$wrapper_classes = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">
	<?php get_template_part('template-parts/header/site-branding'); ?>

	<div class="header-navigation">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false" aria-label="Menu">
				<svg viewBox="0 0 100 100">
					<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
					<path class="line line2" d="M 20,50 H 80" />
					<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
				</svg>
			</button>
		</div>

		<?php get_template_part('template-parts/header/site-nav'); ?>
		<?php get_template_part('template-parts/header/site-social'); ?>
	</div>
</header>
