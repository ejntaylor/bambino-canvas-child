<?php

// custom javascript
// load bigtext.js - https://github.com/zachleat/BigText/blob/master/bigtext.js

function register_my_bambino_script() {
	// wp_register_script('NAME', get_stylesheet_directory_uri().'/assets/js/XXXXX.js', array('jquery'), RO_VERSION, true);
	// wp_register_script('flexcustom', get_stylesheet_directory_uri() . '/assets/js/flexcustom.js', array('jquery'), RO_VERSION, true);
	

}

function print_my_bambino_scripts_head() {
	// wp_print_scripts('NAME');
	// wp_print_scripts('flexcustom');


}



function print_my_bambino_scripts_foot() {
	// wp_print_scripts('NAME');

}

// add_action('init', 'register_my_bambino_script');
// add_action('wp_head', 'print_my_bambino_scripts_head');
//add_action('wp_footer', 'print_my_bambino_scripts_foot');


// custom css  (remove from enqueue)

function bambino_bambino_css() {

	    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Raleway:400,900,100,200,300|Raleway+Dots|Merriweather:400,900|Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700');
		wp_enqueue_style( 'googleFonts');
}

add_action( 'wp_enqueue_scripts', 'bambino_bambino_css', 30 );


?>