<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/inc/functions/scripts.php';

if ( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Theme Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));

}

function theme_register_menus() {
    register_nav_menus( array(
        'primary_menu' => 'Primary Menu',
    ) );
}
add_action( 'after_setup_theme', 'theme_register_menus' );

