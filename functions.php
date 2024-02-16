<?php 
    /*
        my theme function 
    */

    // Theme title 
    add_theme_support( 'title-tag' );

    // Theme CSS and jQuery File calling 
    function masud_css_js_file_calling(){
        wp_enqueue_style( 'masud-style', get_stylesheet_uri(  ) ); //unique style name , style uri

        // je file gulo wordpress chene na sugulo k age register korte hobe erpor enqueue kore use korte hobe 
        // register 
        wp_register_style( 'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.css', array(), '5.0.2', 'all' );

        // enqueue 
        wp_enqueue_style( 'bootstrap');

    }
    add_action( 'wp_enqueue_scripts','masud_css_js_file_calling' );  //first working purpose and 2nd function name


