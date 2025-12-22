<?php

require_once __DIR__ . '/vendor/autoload.php';

function mytheme_enqueue_styles() {

    $theme_uri  = get_template_directory_uri();
    $theme_dir  = get_template_directory();
    $theme_slug = 'learning';

    $files = array(
        'line-awesome.min.css',
        'bootstrap.min.css',
        'owl.carousel.css',
        'magnific-popup.css',
        'jquery.countdown.css',
        'style.css',
        'skin-demo-4.css',
        'demo-4.css',
    );

    foreach ( $files as $file ) {

        $handle = $theme_slug . '-' . pathinfo( $file, PATHINFO_FILENAME );
        $path   = '/assets/css/' . $file;

        wp_enqueue_style(
            $handle,
            $theme_uri . $path,
            array(),
            filemtime( $theme_dir . $path ),
            'all'
        );
    }
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

function mytheme_enqueue_scripts() {

    $theme_uri  = get_template_directory_uri();
    $theme_dir  = get_template_directory();
    $theme_slug = 'mytheme';

    $files = array(
        'jquery.min.js',
        'bootstrap.bundle.min.js',
        'jquery.hoverIntent.min.js',
        'jquery.waypoints.min.js',
        'superfish.min.js',
        'owl.carousel.min.js',
        'bootstrap-input-spinner.js',
        'jquery.plugin.min.js',
        'jquery.magnific-popup.min.js',
        'jquery.countdown.min.js',
        'main.js',
        'demo-4.js',
    );

    foreach ( $files as $file ) {

        $handle = $theme_slug . '-' . pathinfo( $file, PATHINFO_FILENAME );
        $path   = '/assets/js/' . $file;

        wp_enqueue_script(
            $handle,
            $theme_uri . $path,
            array( 'jquery' ),
            file_exists( $theme_dir . $path ) ? filemtime( $theme_dir . $path ) : null,
            true
        );
    }
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );

