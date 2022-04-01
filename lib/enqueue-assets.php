<?php

/**************************************************************************
 * Enqueue Styles and Scripts
 ***********************************************************************/
function _themename_assets() {
    wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/bundle.css', [], filemtime( get_template_directory().'/dist/assets/css/bundle.css' ) ,  'all' );
    wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/main.js',[] , filemtime( get_template_directory().'/dist/assets/js/main.js' ) ,   true );
}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

/**************************************************************************
 * Remove Block editor and co
 ***********************************************************************/
add_action( 'wp_enqueue_scripts', 'wp_juice_cleanse', 200 );
function wp_juice_cleanse() {

    wp_dequeue_style('wp-block-library');

    // This also removes some inline CSS variables for colors since 5.9 - global-styles-inline-css
    wp_dequeue_style('global-styles');

    // WooCommerce - you can remove the following if you don't use Woocommerce
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style');

}

function unqueue_af_css() {
    wp_deregister_style('acf-input');
}
add_action( 'wp_enqueue_scripts', 'unqueue_af_css', 9999 );
