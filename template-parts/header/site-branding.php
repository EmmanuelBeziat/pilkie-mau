<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Pilkie
 * @since Pilkie 1.0
 */

$blog_info = get_bloginfo('name');
$show_title = (true === get_theme_mod('display_title_and_tagline', true));
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>

<div class="site-branding">
	<?php if (has_custom_logo() && ! $show_title ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>

	<?php if ($blog_info) : ?>
		<a class="<?php echo esc_attr( $header_class ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a>
	<?php endif; ?>
</div>
