<?php

class MainWalker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth=0, $args=null) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n";
	}

	function end_lvl(&$output, $depth=0, $args=null) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n";
	}

	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
	}

	function end_el(&$output, $item, $depth=0, $args=null) {
		$output .= '';
	}
}


class SocialWalker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth=0, $args=null) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n";
	}

	function end_lvl(&$output, $depth=0, $args=null) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n";
	}

	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= '<a href="' . $item->url . '" aria-label="' . $item->title . '" title="Suivez-moi sur ' . $item->title . '">';
		$output .= file_get_contents(get_template_directory_uri() . '/assets/images/icons/' . $item->post_name . '.svg');
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth=0, $args=null) {
		$output .= '';
	}
}
