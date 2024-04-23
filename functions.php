<?php

// Enqueue styles and scripts
function theme_enqueue_styles_and_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

    // Enqueue custom stylesheet
    wp_enqueue_style( 'theme-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all' );

    // Enqueue script
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts' );

// Load header.php
function theme_get_header() {
    get_template_part( 'parts/header' );
}
add_action( 'theme_header', 'theme_get_header' );

// Load footer.php
function theme_get_footer() {
    get_template_part( 'parts/footer' );
}
add_action( 'theme_footer', 'theme_get_footer' );

// Load index.php
function theme_get_index() {
    get_template_part( 'templates/index' );
}

add_action( 'init', 'theme_get_index' );

// Custom filter
// Đăng ký filter để thay đổi nội dung của tiêu đề bài viết
function add_custom_content_to_title($title) {
    $custom_content = ' - Custom Title';
    $title .= $custom_content;
    return $title;
}
add_filter('the_title', 'add_custom_content_to_title');