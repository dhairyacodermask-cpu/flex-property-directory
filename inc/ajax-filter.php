<?php

/*
=====================================
AJAX Property Filter
=====================================
*/

function flex_property_ajax_filter() {

    /*
    ========================
    Filter Values
    ========================
    */

    $location = isset($_POST['location'])
        ? sanitize_text_field($_POST['location'])
        : '';

    $property_type = isset($_POST['property_type'])
        ? sanitize_text_field($_POST['property_type'])
        : '';

    /*
    ========================
    Meta Query
    ========================
    */

    $meta_query = array(
        'relation' => 'AND'
    );

    /*
    ========================
    Location Filter
    ========================
    */

    if(!empty($location)) {

        $meta_query[] = array(

            'key'     => 'location',

            'value'   => $location,

            'compare' => '='

        );

    }

    /*
    ========================
    Property Type Filter
    ========================
    */

    if(!empty($property_type)) {

        $meta_query[] = array(

            'key'     => 'property_type',

            'value'   => $property_type,

            'compare' => '='

        );

    }

    /*
    ========================
    Query Args
    ========================
    */

    $args = array(

        'post_type'      => 'properties',

        'posts_per_page' => -1,

        'meta_query'     => $meta_query

    );

    $query = new WP_Query($args);

    /*
    ========================
    Loop
    ========================
    */

    if($query->have_posts()) :

        while($query->have_posts()) :

            $query->the_post();

            ?>

            <div class="col-lg-4 col-md-6">

                <?php

                get_template_part(
                    'template-parts/property-card'
                );

                ?>

            </div>

            <?php

        endwhile;

    else :

        ?>

        <div class="col-12">

            <p>
                No Properties Found
            </p>

        </div>

        <?php

    endif;

    wp_reset_postdata();

    wp_die();

}

/*
=====================================
AJAX Hooks
=====================================
*/

add_action(
    'wp_ajax_filter_properties',
    'flex_property_ajax_filter'
);

add_action(
    'wp_ajax_nopriv_filter_properties',
    'flex_property_ajax_filter'
);