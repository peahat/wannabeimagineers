<?php

function theme_styles() {

	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//enable script
function theme_name_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '1.11.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Enable custom menus
add_theme_support( 'menus' );

?>