<?php

/*
=====================================
Redirect to Checkout
=====================================
*/

function flex_property_redirect_checkout() {

    return wc_get_checkout_url();

}

add_filter(
    'woocommerce_add_to_cart_redirect',
    'flex_property_redirect_checkout'
);