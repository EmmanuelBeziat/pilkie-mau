<?php

/*
 * Custom Post Types declaration
 */

function pilkie_create_post_type () {
	register_post_type('photo', [
		'labels' => [
			'name' => 'Photographies',
			'singular_name' => 'Photographie',
			'all_items' => 'Toutes les photos',
			'add_new_item' => 'Ajouter une photo',
			'edit_item' => 'Modifier la photo',
			'view_item' => 'Voir la photo',
			'search_items'=> 'Rechercher une photo'
		],
		'taxonomies' => ['photos'],
		'supports' => ['title'],
		'description' => 'Gestion des photos',
		'public' => true,
		'menu_icon' => 'dashicons-camera',
		'menu_position' => 6,
		'show_in_nav_menus' => true
	]);

	register_taxonomy('photos', 'photo', [
		'labels' => [
			'name' => 'Catégories',
			'singular_name' => 'Catégorie',
			'all_items' => 'Toutes les catégories',
			'search_items' => 'Rechercher une catégorie',
			'add_item' => 'Ajouter une nouvelle catégorie',
			'edit_item' => 'Modifier la catégorie',
			'update_item' => 'Mettre à jour la catégorie',
			'parent_item' => 'Catégorie parente',
			'not_found' => 'Catégorie introuvable',
			'popular_items' => 'Catégories récurrentes',
			'new_item_name' => 'Nom de la nouvelle catégorie'
		],
		'hierarchical' => true
	]);
}
add_action('init', 'pilkie_create_post_type');

function pilkie_custom_rss ($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type'])) {
		$qv['post_type'] = ['photo'];
	}

	return $qv;
}
add_filter('request', 'pilkie_custom_rss');
