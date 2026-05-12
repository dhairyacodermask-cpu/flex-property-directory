<?php

function flex_property_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'flex_property_theme_setup');

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/cpt.php';
require get_template_directory() . '/inc/taxonomy.php';
require get_template_directory() . '/inc/ajax-filter.php';
require get_template_directory() . '/inc/woocommerce.php';