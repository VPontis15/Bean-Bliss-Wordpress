<?php

function bean_bliss_files(){
wp_enqueue_style('bliss_styles', get_theme_file_uri() . '/assets/css/generic.css', array(), 'Version 1','all');
wp_enqueue_style('bliss_styles-main', get_theme_file_uri() . '/assets/css/homepage.css', array(), 'Version 1','all');
}

add_action('wp_enqueue_scripts', 'bean_bliss_files');