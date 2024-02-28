<?php 
    

    // Theme title 
    add_theme_support( 'title-tag' );


    // Thumbnail Image area 
    add_theme_support( 'post-thumbnails', array('page', 'post') );  //array er moddhe je je page ami show korte chai se se page er name dibo
    add_image_size('post-thumbnails', 970, 350, true);   // size add


    // Except to 40 Word
    // text elipsis

    function masud_excerpt_more($more){
        return '<br> <br> <a class="readmore" href="'.get_permalink(get_the_ID()) . '">' . 'Read More' . '</a>';
    }
    add_filter('excerpt_more', 'masud_excerpt_more');

    function masud_excerpt_length($length){
        return 40;
    }
    add_filter('excerpt_length', 'masud_excerpt_length', 999);
