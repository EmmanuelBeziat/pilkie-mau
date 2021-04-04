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
	<div class="container">
		<?php get_template_part('template-parts/header/site-branding'); ?>
		<?php get_template_part('template-parts/header/site-nav'); ?>
		<?php get_template_part('template-parts/header/site-social'); ?>
	</div>
</header>
