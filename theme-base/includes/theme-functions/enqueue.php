<?php

/**
 * Enqueue scripts and styles.
 */

function enqueue_scripts()
{
	wp_enqueue_style('theme-base-style', get_template_directory_uri() . '/assets/dist/css/style.min.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_script('theme-base-scripts', get_template_directory_uri() . '/assets/dist/js/main.bundle.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
