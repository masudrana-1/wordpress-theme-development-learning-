<?php 
    /*
        my theme function 
    */

    // Theme title 
    add_theme_support( 'title-tag' );

    // Theme CSS and jQuery File calling 
    function masud_css_js_file_calling(){
        wp_enqueue_style( 'masud-style', get_stylesheet_uri(  ) ); //unique style name , style uri
    }
    add_action( 'wp_enqueue_scripts','masud_css_js_file_calling' );  //first working purpose and 2nd function name


