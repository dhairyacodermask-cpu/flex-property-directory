<?php get_header(); ?>

<?php

/*
=====================================
Property Fields
=====================================
*/

$price = get_field('price');

$location = get_field('location');

$property_type = get_field('property_type');

$gallery_image_1 = get_field('gallery_image_1');

$gallery_image_2 = get_field('gallery_image_2');

$gallery_image_3 = get_field('gallery_image_3');

?>

<?php

get_template_part(
    'template-parts/hero-section',
    null,
    array(

        'title' => get_the_title(),

        'text' => '
            <a href="' . esc_url(home_url()) . '">
                Home
            </a>

            <span>/</span>

            <a href="' . esc_url(
                get_post_type_archive_link('properties')
            ) . '">
                Properties
            </a>

            <span>/</span>

            <span>
                ' . esc_html(get_the_title()) . '
            </span>
        ',

        'button' => '',

        'link' => '',

        'image' => get_the_post_thumbnail_url(
            get_the_ID(),
            'full'
        )

    )
);

?>

<section class="single-property">

    <div class="container">

        <div class="row">

            <!-- Left Content -->

            <div class="col-lg-8">

                <!-- Main Image -->

                <div class="single-property-image">

                    <?php if(has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail(
                            'full',
                            array(
                                'class' => 'img-fluid'
                            )
                        ); ?>

                    <?php endif; ?>

                </div>

                <!-- Gallery -->
                
                <!--=====================================-->
                <!--ACF Free Gallery Workaround-->
                <!--=====================================-->
                
                <!--ACF Pro Gallery field was replaced with multiple image fields because the assignment was completed using ACF Free version.-->

                <div class="property-gallery">

                    <div class="row g-4">

                        <?php
                        
                        $gallery_images = array(
                            $gallery_image_1,
                            $gallery_image_2,
                            $gallery_image_3
                        );

                        foreach($gallery_images as $image) :

                            if($image) :
                        
                        ?>

                            <div class="col-md-4">

                                <div class="gallery-item">

                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr(get_the_title()); ?>"
                                        class="img-fluid" loading="lazy">

                                </div>

                            </div>

                        <?php

                            endif;

                        endforeach;

                        ?>

                    </div>

                </div>

                <!-- Content -->

                <div class="single-property-content">

                    <div class="property-meta">

                        <span>

                            <?php echo esc_html(ucfirst($location)); ?>

                        </span>

                        <span>

                            <?php echo esc_html(ucfirst($property_type)); ?>

                        </span>

                    </div>

                    <h1>

                        <?php the_title(); ?>

                    </h1>

                    <div class="single-property-price">

                        $<?php echo number_format($price); ?>

                    </div>

                    <div class="property-description">

                        <?php the_content(); ?>

                    </div>

                </div>

            </div>

            <!-- Sidebar -->

            <div class="col-lg-4">

                <div class="property-sidebar">

                    <h3>
                        Property Amenities
                    </h3>

                    <ul class="amenities-list">

                        <?php

                        $terms = get_the_terms(
                            get_the_ID(),
                            'amenities'
                        );

                        if($terms && !is_wp_error($terms)) :

                            foreach($terms as $term) :
                        
                        ?>

                            <li>

                                <?php echo esc_html($term->name); ?>

                            </li>

                        <?php

                            endforeach;

                        endif;

                        ?>

                    </ul>

                    <a href="<?php echo esc_url(
                        wc_get_checkout_url() . '?add-to-cart=25'
                    ); ?>"
                    class="property-btn w-100">
                    
                        Pay Site Visit Fee
                    
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>