<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});

function load_styles(){
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0', 'all');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0', 'all' );    
}

add_action('wp_enqueue_scripts', 'load_styles');