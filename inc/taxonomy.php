<?php

/*
=====================================
Register Amenities Taxonomy
=====================================
*/

function flex_property_register_taxonomy() {

    $labels = array(

        'name'              => 'Amenities',
        'singular_name'     => 'Amenity',
        'search_items'      => 'Search Amenities',
        'all_items'         => 'All Amenities',
        'edit_item'         => 'Edit Amenity',
        'update_item'       => 'Update Amenity',
        'add_new_item'      => 'Add New Amenity',
        'new_item_name'     => 'New Amenity Name',
        'menu_name'         => 'Amenities',

    );

    $args = array(

        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug' => 'amenities'
        ),

    );

    register_taxonomy(
        'amenities',
        'properties',
        $args
    );

}

add_action('init', 'flex_property_register_taxonomy');