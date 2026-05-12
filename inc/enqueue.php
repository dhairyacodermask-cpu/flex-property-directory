<?php

function flex_property_enqueue_assets() {
    
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Work+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Custom CSS
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        time()
    );
    
    // Responsive CSS
    wp_enqueue_style(
        'responsive-style',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('custom-style'),
        time()
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    // GSAP
    wp_enqueue_script(
        'gsap-js',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    // Main JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        time(),
        true
    );
    
    // AJAX Filter
    wp_enqueue_script(
        'ajax-filter',
        get_template_directory_uri() . '/assets/js/ajax-filter.js',
        array('jquery'),
        time(),
        true
    );

    wp_localize_script(
        'ajax-filter',
        'ajax_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php')
        )
    );

}

add_action('wp_enqueue_scripts', 'flex_property_enqueue_assets');