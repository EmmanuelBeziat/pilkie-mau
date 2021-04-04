<?php $picture = get_field('photo'); ?>
<a href="<?= get_the_permalink() ?>" id="post-<?= get_the_ID() ?>" class="picture">
	<picture id="picture-<?= $picture['ID'] ?>">
		<!-- <source srcset="<?= $picture['sizes']['home-image-size'] ?>.webp" type="image/webp"> -->
		<img src="<?= $picture['sizes']['home-image-size'] ?>" alt="<?= $picture->alt ?>" width="<?= $picture['sizes']['home-image-size-width'] ?>" height="<?= $picture['sizes']['home-image-size-height'] ?>" loading="lazy">
	</picture>
	<div class="picture-description">
		<h2 class="picture-title"><?= get_the_title() ?></h2>
	</div>
</a>
