<?php

function mss_add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/helpers/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_icons', get_template_directory_uri() . '/helpers/bootstrap-icons-1.11.3/font/bootstrap-icons.css');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/helpers/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'mss_add_theme_scripts');

function mss_register_my_menu(){
    register_nav_menu('primary', __('Menu de la capçelera') ) ;
}

add_action('init','mss_register_my_menu');


function get_theme_image($filename) {
    return get_template_directory_uri() . '/img/' . $filename;
}
