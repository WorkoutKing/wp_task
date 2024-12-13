<?php
function tmp_theme_support()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1000, 9999);
    add_image_size('300x400', 300, 400, true);
    load_theme_textdomain('tmp');
}
add_action('after_setup_theme', 'tmp_theme_support');

/**
 * Register and Enqueue Styles.
 */
function tmp_register_styles()
{
    $theme_version = time(); /*wp_get_theme()->get('Version');*/

    wp_enqueue_style('tmp-style', get_stylesheet_uri(), array(), $theme_version);
    wp_style_add_data('tmp-style', 'rtl', 'replace');

    $css_path = get_template_directory_uri() . '/assets/css/';

    wp_enqueue_style('tmp-slick', $css_path . 'slick.css', array('tmp-style'), $theme_version);
    wp_enqueue_style('tmp-content', $css_path . 'content.css', array('tmp-style'), $theme_version);
    wp_enqueue_style('tmp-fonts', $css_path . 'fonts.css', array('tmp-style'), $theme_version);
    wp_enqueue_style('tmp-header', $css_path . 'header.css', array('tmp-style'), $theme_version);
    wp_enqueue_style('tmp-variables', $css_path . 'variables.css', array('tmp-style'), $theme_version);
    wp_enqueue_style('tmp-responsive', $css_path . 'responsive.css', array('tmp-style'), $theme_version);
}
add_action('wp_enqueue_scripts', 'tmp_register_styles');


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function tmp_menus()
{

    $locations = array(
        'primary' => __('Main Menu', 'tmp'),
        'sidebar_nav' => __('Sidebar Menu', 'tmp'),
    );

    register_nav_menus($locations);
}

add_action('init', 'tmp_menus');

/**
 * ACF option page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Options',
            'menu_title' => 'Options',
            'menu_slug' => 'theme-general-options',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}
function my_scripts()
{
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.3.1', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.8.1', true);
}
add_action('wp_enqueue_scripts', 'my_scripts');


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';
