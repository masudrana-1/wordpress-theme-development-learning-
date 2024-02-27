<?php 
    

    // Theme title 
    add_theme_support( 'title-tag' );


    // Thumbnail Image area 
    add_theme_support( 'post-thumbnails', array('page', 'post') );  //array er moddhe je je page ami show korte chai se se page er name dibo
    add_image_size('post-thumbnails', 970, 350, true);   // size add