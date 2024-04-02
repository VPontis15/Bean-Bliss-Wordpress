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
    'supports'=> array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('category'),
    'labels' => array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'menu_name'=> 'Events',
        'add_new' => "Add new Event",
        'add_new_item' => "Add new Event",
        'edit_item'=> "Edit Event",
        "view_item"=> "View Event",
        "search_items"=> "Search events",
        "not_found"=> "No events found"

       
    ), 'public'=> true,
    'menu_icon'=> 'dashicons-calendar-alt',
    'has_archive'=> true,
    'paged' => true,
    'show_in_rest' => true));
    

}

function bean_bliss_adjusted_queries($query){
    if(!is_admin() AND is_post_type_archive( 'events' ) AND $query->is_main_query()){
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query',array(
            array(
                'key'=> 'event_date',
                'compare'=> '>=',
                'value'=> $today,
                'type'=> 'numeric'
            )
        ));
    }

}

add_action('pre_get_posts','bean_bliss_adjusted_queries');




add_image_size( "event-thumbnail", 600, 400, true );
add_image_size( "event-full", 1080, 1920, true );




add_action('init', 'events_post_type');

add_action('after_setup_theme', 'bean_bliss_features');

add_action('wp_enqueue_scripts', 'bean_bliss_files');