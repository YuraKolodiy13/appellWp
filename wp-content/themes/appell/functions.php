<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_styles(){
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}

function theme_scripts(){
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick-min.js', ['jquery'], null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true );
}