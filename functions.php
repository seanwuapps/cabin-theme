<?php
/**
 * cabin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cabin
 */

//  theme supports
function cabin_setup() {
	
	add_theme_support( 'custom-logo', [
		'height'      => 400,
		'width'       => 400,
		'flex-width' => true,
   ]);

}
add_action( 'after_setup_theme', 'cabin_setup' );
/**
 * Enqueue scripts and styles.
 */
function cabin_scripts() {
	wp_enqueue_style( 'cabin-style', get_template_directory_uri(). '/dist/app.css', array() );

	wp_enqueue_script( 'cabin-js', get_template_directory_uri() . '/dist/app.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'cabin_scripts' );
