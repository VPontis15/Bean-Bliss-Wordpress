<?php

function bean_bliss_files(){
wp_enqueue_style('bliss_styles', get_theme_file_uri() . '/assets/css/generic.css', array(), 'Version 1','all');
wp_enqueue_style('bliss_styles-main', get_theme_file_uri() . '/assets/css/homepage.css', array(), 'Version 1','all');
wp_enqueue_script('bliss_carousel', get_theme_file_uri( ) . '/assets/js/carousel.js', array(), 'Version 1', 'all',false, true);
wp_enqueue_script('bliss_main-js', get_theme_file_uri( ) . '/assets/js/main.js', array(), 'Version 1', 'all',false, true);
}

function bean_bliss_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
}

function events_post_type() {
register_post_type( 'Events', array(
    'supports'=> array('title', 'editor', 'thumbnail', 'excerpt'),
    'labels' => array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'menu_name'=> 'Events',
        'add_new' => "Add new Event",
        'add_new_item' => "Add new Event",
        'edit_item'=> "Edit Event",
        "view_item"=> "View Event",
        "search_items"=> "Search Events",
        "not_found"=> "No events found"

       
    ), 'public'=> true,
    'menu_icon'=> 'dashicons-calendar-alt',
    'has_archive'=> true,
    'show_in_rest' => true));

}

add_action('init', 'events_post_type');

add_action('after_setup_theme', 'bean_bliss_features');

add_action('wp_enqueue_scripts', 'bean_bliss_files');