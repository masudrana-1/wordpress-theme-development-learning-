<?php 
    /*
        my theme function 
    */

    // Theme title 
    add_theme_support( 'title-tag' );

    // Theme CSS and jQuery File calling 
    function masud_css_js_file_calling(){

    };
    add_action( 'wp_enqueue_script','masud_css_js_file_calling' )


