<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if (has_nav_menu('footer')) : ?>
			<div class="container">
				<nav aria-label="Menu du Pied de page" class="footer-navigation">
						<?php wp_nav_menu([
								'theme_location' => 'footer',
								'items_wrap' => '%3$s',
								'container' => false,
								'depth' => 1,
								'fallback_cb' => false,
								'walker' => new MainWalker()
						]); ?>
				</nav>
			</div>
		<?php endif; ?>

		<div class="site-info">
			<div class="site-name">
				<a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> © <?= date('Y') ?>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
