<?php 
    /*
        my theme function 
    */

    // Theme title 
    add_theme_support( 'title-tag' );

    // Theme CSS and jQuery File calling 
    function masud_css_js_file_calling(){

        // css calling 
        wp_enqueue_style( 'masud-style', get_stylesheet_uri(  ) ); //unique style name , style uri

        // je file gulo wordpress chene na sugulo k age register korte hobe erpor enqueue kore use korte hobe 
        // register 
        wp_register_style( 'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.css', array(), '5.0.2', 'all' );
        wp_register_style( 'custom', get_template_directory_uri(  ).'/css/custom.css', array(), '1.0.0', 'all' );

        // enqueue 
        wp_enqueue_style( 'bootstrap');
        wp_enqueue_style( 'custom');


        // jQuery calling 
        // just enqueue korle wordpress default vabe jquery load korbe 
        wp_enqueue_script( 'jquery' );

        // js file er jonno register dorkar hoy na. ekhane js file gulo k footer a niye asar jonno true
        wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ).'js/bootstrap.js', array(), '5.0.2', true );
        wp_enqueue_script( 'main', get_template_directory_uri(  ).'js/main.js', array(), '1.0.0', true );
        

    }
    //first working purpose and 2nd function name
    add_action( 'wp_enqueue_scripts','masud_css_js_file_calling' );

