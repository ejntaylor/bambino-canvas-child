<?php

// Bambino Javascript

function bambino_js() {
	wp_register_script('bambinoScripts', get_stylesheet_directory_uri().'/assets/js/min/bambino-min.js', array('jquery'), BB_VERSION, true);
    wp_enqueue_script( 'bambinoScripts' );
}

add_action('wp_enqueue_scripts', 'bambino_js');


// Bambino CSS

function bambino_css() {
		wp_register_style( 'canvasStyles', get_template_directory_uri() . '/style.css', array(), BB_VERSION, 'all' );
		wp_enqueue_style( 'canvasStyles');
}

add_action( 'wp_enqueue_scripts', 'bambino_css', 1 );


// Custom Options

/*
function print_bambino_scripts_head() {
	 wp_print_scripts('NAME');
}

function print_bambino_scripts_foot() {
	 wp_print_scripts('NAME');
}

add_action('wp_head', 'print_bambino_scripts_head');
add_action('wp_footer', 'print_bambino_scripts_foot');
*/


?>