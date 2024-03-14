<?php

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


         //! Footer Position Function 
        $wp_customize->add_section('masud_footer_option', array(
            'title' =>__('Footer Option', 'masudRana'), // 1st section name, text domain
            'description' => 'If you interested to update footer setting, you can do it here.'
        ));

        $wp_customize->add_setting('masud_copyright_section', array(
            'default' => '&copy; Copyright 2024 | Masud Rana', 
        ));

        $wp_customize->add_control( 'masud_copyright_section', array(
            'label' => 'Copyright Text',
            'description' => 'If you interested, you can update copyright text.',
            'setting' => 'masud_copyright_section',
            'section' => 'masud_footer_option',
        ));


        // Theme Color
        $wp_customize-> add_section('masud_colors', array(
            'title' => __('Theme Color', 'MasudRana'),
            'description' => 'If need you can change your theme color.',
        ));
        $wp_customize ->add_setting('masud_bg_color', array(
            'default' => '#ffffff',
        ));
        $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'masud_bg_color', array(
            'label' => 'Background Color',
            'section' => 'masud_colors',
            'settings' => 'masud_bg_color',
        )));
        $wp_customize ->add_setting('masud_primary_color', array(
            'default' => '#ea1a70',
        ));
        $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'masud_primary_color', array(
            'label' => 'Primary Color',
            'section' => 'masud_colors',
            'settings' => 'masud_primary_color',
        )));
    }

    add_action( 'customize_register', 'masud_customizar_register' );

    