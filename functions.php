<?php
/**
 * Theme functions.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

function startup_website_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'startup-website'),
        )
    );
}
add_action('after_setup_theme', 'startup_website_setup');

function startup_website_enqueue_assets() {
    wp_enqueue_style('startup-website-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('startup-website-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    wp_enqueue_style('startup-website-theme', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('startup-website-main', get_template_directory_uri() . '/css/style.css', array('startup-website-theme'), '1.0.0');

    wp_enqueue_script('startup-website-main', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'startup_website_enqueue_assets');
