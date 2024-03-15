<?php 
    

    // Theme title 
    add_theme_support( 'title-tag' );


    // Thumbnail Image area 
    add_theme_support( 'post-thumbnails', array('page', 'post', 'service') );  //array er moddhe je je page ami show korte chai se se page er name dibo
    add_image_size('service', 390, 250, true); //service image size
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


    // Pagenav function 
    // Pagination 

    function masud_pagenav(){
        global $wp_query, $wp_rewrite;
        $pages ='';
        $max = $wp_query->max_num_pages;
        if(!$current = get_query_var('paged')) $current = 1;
        $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
        $args['total'] = $max;
        $args['current'] = $current;
        $total = 1;
        $args['prev_text'] = 'Prev';
        $args['next_text'] = 'Next';
        if ($max > 1) echo '</pre>
            <div class="wp_pagenav">';
            if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>' . $max . '</p>';
            echo $pages . paginate_links($args);
            if ($max > 1 ) echo '</div><pre>';
    }

