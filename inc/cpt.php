<?php

/*
=====================================
Register Properties CPT
=====================================
*/

function flex_property_register_cpt() {

    $labels = array(

        'name'               => 'Properties',
        'singular_name'      => 'Property',
        'menu_name'          => 'Properties',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Property',
        'edit_item'          => 'Edit Property',
        'new_item'           => 'New Property',
        'view_item'          => 'View Property',
        'search_items'       => 'Search Properties',
        'not_found'          => 'No Properties Found',
        'not_found_in_trash' => 'No Properties Found in Trash',

    );

    $args = array(

        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-building',
        'has_archive'        => true,
        'rewrite'            => array(
            'slug' => 'properties'
        ),
        'supports'           => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'show_in_rest'       => true,

    );

    register_post_type('properties', $args);

}

add_action('init', 'flex_property_register_cpt');