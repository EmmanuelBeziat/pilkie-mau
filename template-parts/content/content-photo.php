<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $picture = get_field('photo'); ?>
	<figure class="picture" id="picture-<?= $picture['ID'] ?>">
		<picture>
			<!-- <source srcset="<?= $picture['sizes']['home-image-size'] ?>.webp" type="image/webp"> -->
			<img src="<?= $picture['sizes']['home-image-size'] ?>" alt="<?= $picture->alt ?>" width="<?= $picture['sizes']['home-image-size-width'] ?>" height="<?= $picture['sizes']['home-image-size-height'] ?>" loading="lazy">
		</picture>
		<figcaption class="picture-description">
			<h2 class="picture-title"><?= get_the_title() ?></h2>
		</figcaption>
	</figure>

	<?php if (get_edit_post_link()) : ?>
		<div class="entry-footer default-max-width">
			<?php edit_post_link(
				sprintf('Modifier %s', '<span class="screen-reader-text">' . get_the_title() . '</span>'),
				'<span class="edit-link">', '</span>'
			); ?>
		</div>
	<?php endif; ?>
</article>
