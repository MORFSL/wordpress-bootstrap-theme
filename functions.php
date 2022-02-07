<?php

/**
 * Custom Bootstrap Theme
 *
 * @since       OCT 2021
 * @version     1.0.0
 */


/* --------------------------- THEME CONSTANTS --------------------------- */

define('THEME_SITE_URL', home_url());
define('THEME_THEMEROOT', get_stylesheet_directory_uri());
define('THEME_THEMEROOT_PATH', get_template_directory());
define('THEME_TEMPLATE_PATH', get_template_directory_uri());
define('CUSTOM_POST_TYPE_PATH', 'inc/admin/post-types/');
define('CUSTOM_TAXONOMIES_PATH', 'inc/admin/post-taxonomies/');


/* --------------------------- THEME SUPPORT --------------------------- */

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
}


/* --------------------------- ASSETS IMPORT --------------------------- */

// Required Plugins Activation
require_once('inc/admin/tgm-plugin-activation/class-tgm-plugin-activation.php');

// Custom Post Types
//require_once(CUSTOM_POST_TYPE_PATH . 'post-name.php');

// Custom Taxonomies
//require_once(CUSTOM_TAXONOMIES_PATH . 'tax-name.php');


/* --------------------------- REQUIRED PLUGINS DETECTION --------------------------- */

add_action('tgmpa_register', 'theme_required_plugins_register');
function theme_required_plugins_register()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */

    $plugins = array(

        array(
            'name'      => 'UpdraftPlus WordPress Backup Plugin',
            'slug'      => 'updraftplus',
            'required'  => true,
        ),
        array(
            'name'                  => 'Advanced Custom Fields Pro', // The plugin name
            'slug'                  => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name)
            'source'                => THEME_THEMEROOT . '/inc/admin/tgm-plugin-activation/plugins/advanced-custom-fields-pro.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Advanced Custom Fields: Theme Code Pro', // The plugin name
            'slug'                  => 'acf-theme-code-pro', // The plugin slug (typically the folder name)
            'source'                => THEME_THEMEROOT . '/inc/admin/tgm-plugin-activation/plugins/acf-theme-code-pro.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */

    $config = array(
        'page_title'   => __('Install Required Plugins', 'maya-creations'),
        'id'           => 'maya-creations',        // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'plugins.php',           // Parent menu slug.
        'capability'   => 'manage_options',        // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa($plugins, $config);
}

/* --------------------------- COMPILE ASSETS ---------------------------*/

/**********************************************************************************************************************/
/********************************** Compile Assets ********************************************************************/
/**********************************************************************************************************************/

function compile_less_to_css()
{

    $less = new lessc;

    $less->compileFile(THEME_THEMEROOT_PATH . '/assets/css/less/master.less', THEME_THEMEROOT_PATH . '/assets/css/master.css');
}

use MatthiasMullie\Minify;

function minify_css_func()
{

    $master = get_theme_file_path('assets/css/master.css');
    $minifier = new Minify\CSS($master);

    $minifier->add(get_theme_file_path('assets/lib/mmenu/mmenu.css'));

    $minifier->add(get_theme_file_path('assets/lib/fancybox/fancybox.min.css'));

    // save minified file to disk
    $minifiedPath = get_theme_file_path('assets/css/master.min.css');
    $minifier->minify($minifiedPath);
}

function minify_js_func()
{

    $bootstrap = get_theme_file_path('assets/js/lib/bootstrap.bundle.min.js');
    $minifier = new Minify\JS($bootstrap);

    // we can even add another file, they'll then be
    // joined in 1 output file

    $acf_map = get_theme_file_path('assets/js/lib/acf_map.js');
    $minifier->add($acf_map);

    $OwlCarousel2 = get_theme_file_path('assets/js/lib/owl.carousel.min.js');
    $minifier->add($OwlCarousel2);

    $minifier->add(get_theme_file_path('assets/lib/mmenu/mmenu.js'));

    $minifier->add(get_theme_file_path('assets/lib/fancybox/fancybox.min.js'));

    $custom = get_theme_file_path('assets/js/main.js');
    $minifier->add($custom);

    // save minified file to disk
    $minifiedPath = get_theme_file_path('assets/js/main-combined.min.js');
    $minifier->minify($minifiedPath);
}

if (function_exists('get_field')) {
    define("COMPILE_ASSETS", (get_field('compile_assets', 'option')) ?? FALSE);

    if (COMPILE_ASSETS) {
        add_action('init', 'compile_less_to_css');
        add_action('init', 'minify_css_func');
        add_action('init', 'minify_js_func');
    }
}


/* --------------------------- ADVANCED CUSTOM FIELDS SETTINGS ---------------------------*/

//Options Page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


/**
 * Local JSON Cache
 */

function my_acf_json_save_point($path)
{

    // update path
    $path = get_stylesheet_directory() . '/inc/admin/acf-json';

    // return
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');


/**
 * Load from Local JSON Cache
 */

function my_acf_json_load_point($paths)
{

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/inc/admin/acf-json';

    // return
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');


/* --------------------------- ADMIN DASHBOARD ---------------------------*/

/**
 * Custom adming login logo
 */

if (function_exists('get_field') && get_field('theme_header_logo', 'option')) {
    function custom_login_logo()
    { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url(<?php echo get_field('theme_header_logo', 'option')['url'] ?>);
                background-size: 200px;
                width: unset;
            }
        </style>

<?php }

    add_action('login_enqueue_scripts', 'custom_login_logo');
}


/**
 * Add Favicon to admin pannel
 */

function add_custom_favicon()
{
    if (function_exists('get_field') && $favicon = get_field('theme_appearance_favicon', 'option')) {
        echo '<link rel="shortcut icon" href="' . $favicon . '" />';
    } else return;
}
add_action('admin_head', 'add_custom_favicon');
