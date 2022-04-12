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

	wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
	wp_enqueue_script('boot1', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('boot2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);

	wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js', array(), '1.0', true);
	wp_enqueue_script('scrolltrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js', array(), '1.0', true);

	wp_enqueue_script('theme-base-scripts', get_template_directory_uri() . '/assets/dist/js/main.bundle.js', array(), '1.0', true);
	wp_enqueue_script('theme-base-scripts1', get_template_directory_uri() . '/assets/src/scripts/core/gsapscripts.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
