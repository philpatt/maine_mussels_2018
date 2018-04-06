<?php

    function mainemussels_script_enqueue() {
        wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/mainemussels.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/mainemussels.js', array(), '1.0.0', 'true' );
        
    }

    add_action( 'wp_enqueue_scripts', 'mainemussels_script_enqueue' )


?>