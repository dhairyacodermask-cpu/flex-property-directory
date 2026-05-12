<?php get_header(); ?>

<?php

get_template_part(
    'template-parts/hero-section',
    null,
    array(

        'title' => 'Find Your Perfect Property',

        'text' => 'Discover premium apartments, villas, and office spaces in Noida, Delhi, and Gurugram.',

        'button' => 'Explore Properties',

        'link' => home_url('/properties'),

        'image' => 'https://flexproperty.ctmwork.com/wp-content/uploads/2026/05/home-banner.jpg'

    )
);

?>

<?php get_footer(); ?>