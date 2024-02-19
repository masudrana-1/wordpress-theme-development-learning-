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


        //! jQuery calling 
        // just enqueue korle wordpress default vabe jquery load korbe 
        wp_enqueue_script( 'jquery' );

        // js file er jonno register dorkar hoy na. ekhane js file gulo k footer a niye asar jonno true
        wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ).'js/bootstrap.js', array(), '5.0.2', true );
        wp_enqueue_script( 'main', get_template_directory_uri(  ).'js/main.js', array(), '1.0.0', true );
        

    }
    //first working purpose and 2nd function name
    add_action( 'wp_enqueue_scripts','masud_css_js_file_calling' );


    //! Google Fonts
    // ekhane google font link
    function masud_add_google_fonts(){
        wp_enqueue_style( 'masud_google_font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', $var=false );
    }

    add_action( 'wp_enqueue_scripts','masud_add_google_fonts' );




    //! Theme function 
    // logo k wordpress teke control korar jonno 
    // -> ata k object operator bole
    // => ata k dubble arrow operator
    function masud_customizar_register($wp_customize){

        //! Header Area Function 
        $wp_customize->add_section('masud_header_area', array(
            'title' =>__('Header Area', 'masudRana'), // 1st section name, text domain
            'description' => 'If you interested to update header area, you can do it here.'
        ));

        // setting add 
        $wp_customize->add_setting('masud_logo', array(
            'default' => get_bloginfo( 'template_directory' ). '/img/logo.png', 
        ));

        // controller 
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'masud_logo', array(
            'label' => 'Logo Upload',
            'description' => 'If you interested to change your logo, you can do it here.',
            'setting' => 'masud_logo',
            'section' => 'masud_header_area',
        )));


        //! Menu Position Function 
        $wp_customize->add_section('masud_menu_option', array(
            'title' =>__('Menu Position Option', 'masudRana'), // 1st section name, text domain
            'description' => 'If you interested to update menu position, you can do it here.'
        ));

        $wp_customize->add_setting('masud_menu_position', array(
            'default' => 'right_menu', 
        ));

        $wp_customize->add_control( 'masud_menu_position', array(
            'label' => 'Menu Position Option',
            'description' => 'If you interested to change Menu position, you can do it here.',
            'setting' => 'masud_menu_position',
            'section' => 'masud_menu_option',
            'type' => 'radio',
            'choices' => array(
                'left_menu' => 'Left Menu',
                'right_menu' => 'Right Menu',
                'center_menu' => 'Center Menu',
            ),
        ));


    }

    add_action( 'customize_register', 'masud_customizar_register' );

    //! Menu register
    // jekono ekta name and text domain
    register_nav_menu( 'main_menu', __('Main_menu', 'masudRana') );