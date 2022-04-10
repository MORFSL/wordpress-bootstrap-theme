<?php

/**
 * Enqueue scripts and styles.
 */

function enqueue_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('page-home', get_template_directory_uri() . '/css/page-home.css', false, '1.1', 'all');
	wp_enqueue_style('theme-base-style', get_template_directory_uri() . '/assets/dist/css/style.min.css');

	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

	wp_enqueue_style('swiper_css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
	wp_enqueue_script('swiper_js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '3.3.1', true);

	wp_enqueue_style('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

	wp_enqueue_script('theme-base-scripts', get_template_directory_uri() . '/assets/dist/js/main.bundle.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
