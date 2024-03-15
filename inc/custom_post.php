<?php

function custom_service(){
    register_post_type( 'service', 
        array(
            'levels' => array(
                'name'=> ('Service'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'new_item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ('Sorry, we could\'n find the service you are looking for.'),
            ),
            
        )
    )
}