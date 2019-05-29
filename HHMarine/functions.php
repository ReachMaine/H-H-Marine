<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );


//you can add custom functions below this line:

//* Add custom body class to the head
add_filter( 'body_class', 'reach_body_class' );
function reach_body_class( $classes ) {

  if ( is_front_page( ) ) {
		$classes[] = 'home';
  }
		return $classes;
}


//require_once(get_stylesheet_directory().'/custom/reach-CTAs.php');
require_once(get_stylesheet_directory().'/custom/language.php');
require_once(get_stylesheet_directory().'/custom/divi.php');
