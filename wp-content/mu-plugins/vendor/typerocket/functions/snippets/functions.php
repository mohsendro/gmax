<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

function remove_body_classes( $classes ) { 
    $remove_classes = ['blog', 'home'];
    $classes = array_diff($classes, $remove_classes);
    return $classes;    
}
add_filter('body_class', 'remove_body_classes', 999);

function custom_wpkses_post_tags( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );


// Register Navigation Menus
function gamx_navigation_menus() {

	$locations = array(
		'main_menu' => 'فهرست اصلی',
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'gamx_navigation_menus' );

function gmax_add_classes_on_li($classes, $item, $args) {

    $classes[] = 'drop-left';
    return $classes;

}
add_filter('nav_menu_css_class', 'gmax_add_classes_on_li', 1, 3);