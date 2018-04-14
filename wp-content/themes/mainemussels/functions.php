<?php

/*
    ====================
    include scripts
    ====================
*/

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function mainemussels_script_enqueue() {
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/mainemussels.css', array(), 'all' );
    wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/mainemussels.js', array(), '1.0.0', 'true' );
    
}

add_action( 'wp_enqueue_scripts', 'mainemussels_script_enqueue' );


/*
    ====================
    Activate menus
    ====================
*/

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Header Navigation' ),
) );


function mainemussels_theme_setup() {

    add_theme_support('menus');
    
    register_nav_menu('primary', 'Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    
}
add_action('init', 'mainemussels_theme_setup');

/*
    ====================
    Theme Support
    ====================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');