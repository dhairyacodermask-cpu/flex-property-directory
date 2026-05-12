<?php

/*
=====================================
Property Fields
=====================================
*/

$price          = get_field('price');

$location       = get_field('location');

$property_type  = get_field('property_type');

?>

<div class="property-card">

    <div class="property-image">

        <a href="<?php the_permalink(); ?>">

            <?php if(has_post_thumbnail()) : ?>

                <?php the_post_thumbnail(
                    'large',
                    array(
                        'class' => 'img-fluid',
                        'loading' => 'lazy'
                    )
                ); ?>

            <?php endif; ?>

        </a>

        <div class="property-badges">

            <?php if($location) : ?>

                <span class="property-location">

                    <?php echo esc_html(ucfirst($location)); ?>

                </span>

            <?php endif; ?>

            <?php if($property_type) : ?>

                <span class="property-type">

                    <?php echo esc_html(ucfirst($property_type)); ?>

                </span>

            <?php endif; ?>

        </div>

    </div>

    <div class="property-content">

        <h3 class="property-title">

            <a href="<?php the_permalink(); ?>">

                <?php the_title(); ?>

            </a>

        </h3>

        <?php if($price) : ?>

            <div class="property-price">

                ₹ <?php echo number_format($price); ?>

            </div>

        <?php endif; ?>

        <p class="property-text">

            <?php echo wp_trim_words(get_the_content(), 10); ?>

        </p>

        <a href="<?php the_permalink(); ?>" class="property-btn">

            View Details

        </a>

    </div>

</div>