jQuery(document).ready(function ($) {

    /*
    ========================
    Filter Change Event
    ========================
    */

    $('#location-filter, #type-filter').on('change', function () {

        let location = $('#location-filter').val();

        let propertyType = $('#type-filter').val();

        /*
        ========================
        AJAX Request
        ========================
        */

        $.ajax({

            url: ajax_object.ajax_url,

            type: 'POST',

            data: {

                action: 'filter_properties',

                location: location,

                property_type: propertyType

            },

            beforeSend: function () {

                $('#property-results').fadeTo(200, 0.5);

            },

            success: function (response) {

                $('#property-results').html(response);

                $('#property-results').fadeTo(200, 1);

                /*
                ========================
                Re-Trigger GSAP
                ========================
                */

                if(document.querySelector(".property-card")){

                    gsap.from(".property-card", {

                        y: 80,
                        opacity: 0,
                        duration: 1,
                        stagger: 0.2,
                        ease: "power3.out"

                    });

                }

            },

            error: function () {

                $('#property-results').html(

                    '<p>Something went wrong. Please try again.</p>'

                );

            }

        });

    });

});