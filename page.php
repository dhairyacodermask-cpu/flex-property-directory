<?php get_header(); ?>

<?php

if(have_posts()) :

    while(have_posts()) :

        the_post();

        /*
        =====================================
        Hero Section
        =====================================
        */

        get_template_part(
            'template-parts/hero-section',
            null,
            array(

                'title' => get_the_title(),

                'text' => 'Complete your booking and continue your property journey.',

                'button' => '',

                'link' => '',

                'image' => 'https://flexproperty.ctmwork.com/wp-content/uploads/2026/05/home-banner.jpg'

            )
        );

        ?>

        <section class="default-page">

            <div class="container">

                <?php the_content(); ?>

            </div>

        </section>

        <?php

    endwhile;

endif;

?>

<?php get_footer(); ?>