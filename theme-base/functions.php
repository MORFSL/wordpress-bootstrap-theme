<?php

/**
 * Theme Base functions and definitions
 *
 * @package CustomTheme
 * @link https://developer.wordpress.org/themes/basics/theme-functions
 */

/* --------------------------- THEME CONSTANTS --------------------------- */

define(
    'THEME_SITE_URL',
    home_url()
);
define(
    'THEME_THEMEROOT',
    get_stylesheet_directory_uri()
);
define(
    'THEME_THEMEROOT_PATH',
    get_template_directory()
);
define(
    'THEME_TEMPLATE_PATH',
    get_template_directory_uri()
);
define(
    'THEME_INCLUDES',
    get_stylesheet_directory() .
    '/includes/'
);
define(
    'THEME_FUNCTIONS_PATH',
    get_stylesheet_directory() .
    '/includes/theme-functions/'
);
define(
    'CUSTOM_POST_TYPES',
    get_stylesheet_directory() .
    'includes/admin/post-types'
);
define(
    'CUSTOM_TAXONOMIES',
    get_stylesheet_directory() .
    'includes/admin/post-taxonomies'
);
define(
    'THEME_PLUGIN_ACTIVATION_PLUGINS',
    get_stylesheet_directory() .
    '/includes/plugin-activation/plugins/'
);

/* --------------------------- ASSETS IMPORT --------------------------- */

// Required Includes
require_once THEME_INCLUDES . 'plugin-activation/index.php';

// Custom Post Types
include_once CUSTOM_POST_TYPES;

// Custom Taxonomies
include_once CUSTOM_TAXONOMIES;

// Define required functions to include
$includes = [
    'enqueue',
    'theme-support',
    'plugins-register',
    'acf-local-json',
    'acf-options-page',
    'admin-login-logo',
    'admin-favicon',
    'svg',
];

foreach ($includes as $file) {
    include_once THEME_FUNCTIONS_PATH . $file . '.php';
}
unset($file, $filepath);
