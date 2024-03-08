<?php

// Sidebar register function 

function masud_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'MasudRana'),
        'id'   => 'sideber-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'MasudRana'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'masud_widgets_register');