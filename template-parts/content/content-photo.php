<?php

$picture = get_field('photo');
$modeles = get_field('modeles');
$lieu = get_field('lieu');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<figure class="picture" id="picture-<?= $picture['ID'] ?>">
			<picture>
				<!-- <source srcset="<?= $picture['url'] ?>.webp" type="image/webp"> -->
				<img src="<?= $picture['url'] ?>" alt="<?= $picture->alt ?>" width="<?= $picture['width'] ?>" height="<?= $picture['height'] ?>" loading="lazy">
			</picture>
		</figure>

		<header>
			<h1 class="picture-title"><?= get_the_title() ?></h1>
		</header>

		<div class="picture-infos">
			<?php if (isset($modeles) && $modeles['modele']) : ?>
			<div class="modeles">
				<h2><?= count($modeles) <= 1 ? 'Modèle' : 'Modèles' ?></h2>
				<?php foreach ($modeles as $modele) : ?>
				<div class="modele">
					<?= $modele[0]['nom'] ?>
					<a href="<?= $modele[0]['lien'] ?>">
						<span class="screen-reader-text"><?= $modele[0]['lien'] ?></span>
					</a>
				</div>
				<?php endforeach ?>
			</div>
			<?php endif ?>

			<?php if (isset($lieu) && $lieu !== '') : ?>
			<div class="lieu">
				<h2>Lieu</h2>
				<?= $lieu ?>
			</div>
			<?php endif ?>
		</div>

		<?php if (get_edit_post_link()) : ?>
			<footer class="entry-footer default-max-width">
				<?php edit_post_link(
					sprintf('Modifier %s', '<span class="screen-reader-text">' . get_the_title() . '</span>'),
					'<span class="edit-link">', '</span>'
				); ?>
			</footer>
		<?php endif; ?>
	</div>
</article>
