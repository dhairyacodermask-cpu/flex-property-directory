<?php

/*
=====================================
Hero Variables
=====================================
*/

$hero_title = isset($args['title']) ? $args['title'] : '';

$hero_text = isset($args['text']) ? $args['text'] : '';

$hero_button = isset($args['button']) ? $args['button'] : '';

$hero_link = isset($args['link']) ? $args['link'] : '';

$hero_image = isset($args['image']) ? $args['image'] : '';

?>

<section class="hero-section"
    style="background-image: url('<?php echo esc_url($hero_image); ?>');">

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content text-center">

            <h1 class="hero-title">

                <?php echo esc_html($hero_title); ?>

            </h1>

            <div class="hero-text hero-breadcrumb">
            
                <?php echo wp_kses_post($hero_text); ?>
            
            </div>

            <?php if(!empty($hero_button)) : ?>
            
                <a href="<?php echo esc_url($hero_link); ?>"
                    class="hero-btn">
            
                    <?php echo esc_html($hero_button); ?>
            
                </a>
            
            <?php endif; ?>

        </div>

    </div>

</section>