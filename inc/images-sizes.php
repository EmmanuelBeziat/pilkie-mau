<?php

add_image_size('home-image-size', 540, 480, array('center', 'center'));

function my_custom_sizes ($sizes) {
	return array_merge($sizes, ['home-image-size' => __('Présentation en page d’accueil')]);
}
add_filter('image_size_names_choose', 'home-image-size');
