<?php get_header(); ?>

<?php

get_template_part(
    'template-parts/hero-section',
    null,
    array(

        'title' => 'All Properties',

        'text' => 'Explore luxury apartments, villas, and office spaces across prime locations.',

        'button' => '',
        
        'link' => '',

        'image' => 'https://flexproperty.ctmwork.com/wp-content/uploads/2026/05/home-banner.jpg'

    )
);

?>

<section class="property-archive">

    <div class="container">

        <div class="section-heading text-center">
        
            <span class="section-subtitle">
                Premium Properties
            </span>
        
            <h2>
                Explore Properties
            </h2>
        
            <p>
                Discover premium apartments, villas, and office spaces across prime locations.
            </p>
        
            <div class="section-divider"></div>
        
        </div>

        <div class="row">

            <!-- Sidebar Filters -->
    
            <div class="col-lg-3">
    
                <div class="property-filter">
    
                <h4>
                    Filter Properties
                </h4>
    
                <!-- Location -->
    
                <div class="filter-group">
    
                    <label>
                        Location
                    </label>
    
                    <select id="location-filter" class="form-select">
    
                        <option value="">
                            All Locations
                        </option>
    
                        <option value="noida">
                            Noida
                        </option>
    
                        <option value="delhi">
                            Delhi
                        </option>
    
                        <option value="gurugram">
                            Gurugram
                        </option>
    
                    </select>
    
                </div>
    
                <!-- Property Type -->
    
                <div class="filter-group">
    
                    <label>
                        Property Type
                    </label>
    
                    <select id="type-filter" class="form-select">
    
                        <option value="">
                            All Types
                        </option>
    
                        <option value="apartment">
                            Apartment
                        </option>
    
                        <option value="villa">
                            Villa
                        </option>
    
                        <option value="office">
                            Office
                        </option>
    
                    </select>
    
                </div>
    
            </div>
    
            </div>
    
            <!-- Property Grid -->
    
            <div class="col-lg-9">
    
            <div class="row g-4" id="property-results">
    
                <?php if(have_posts()) : ?>
    
                    <?php while(have_posts()) : the_post(); ?>
    
                        <div class="col-lg-4 col-md-6">
    
                            <?php
                            
                            get_template_part(
                                'template-parts/property-card'
                            );
                            
                            ?>
    
                        </div>
    
                    <?php endwhile; ?>
    
                <?php else : ?>
    
                    <p>No Properties Found</p>
    
                <?php endif; ?>
    
            </div>
    
        </div>
    
    </div>

    </div>

</section>

<?php get_footer(); ?>