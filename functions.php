<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
	// Child theme styles
	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/dist/css/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
	// Child theme scripts
	wp_enqueue_script('astra-child-theme-js', get_stylesheet_directory_uri() . '/dist/js/scripts.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
