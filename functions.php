<?php
/**
 * project2501 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package project2501
 */
function engage_script_enqueue() {
	wp_enqueue_style('1', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('2', get_template_directory_uri() . '/assets/css/modern-business.css');	
	wp_enqueue_style('3', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.7', true);
	
}

add_action( 'wp_enqueue_scripts', 'engage_script_enqueue');