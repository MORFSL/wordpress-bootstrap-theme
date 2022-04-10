<?php

/**
 * Register Post Type function
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type
 */
function custom_post_type()
{
    $labels = [
        'name'                  => _x('Custom', 'Post Type General Name', 'www.maya.lk'),
        'singular_name'         => _x('Custom', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Customs', 'text_domain'),
        'name_admin_bar'        => __('Customs', 'text_domain'),
        'archives'              => __('Item Archives', 'text_domain'),
        'attributes'            => __('Item Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Item:', 'text_domain'),
        'all_items'             => __('All Items', 'text_domain'),
        'add_new_item'          => __('Add New Items', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'view_items'            => __('View Items', 'text_domain'),
        'search_items'          => __('Search Items', 'text_domain'),
        'not_found'             => __('Item Not found', 'text_domain'),
        'not_found_in_trash'    => __('Item Not found in Trash', 'text_domain'),
        'featured_image'        => __('Item logo', 'text_domain'),
        'set_featured_image'    => __('Set item logo', 'text_domain'),
        'remove_featured_image' => __('Remove logo', 'text_domain'),
        'use_featured_image'    => __('Use as logo', 'text_domain'),
        'insert_into_item'      => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list'            => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter Items list', 'text_domain'),
    ];
    $args = [
        'label'               => __('Custom', 'text_domain'),
        'description'         => __('Custom Post Type', 'text_domain'),
        'labels'              => $labels,
        'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    ];
    register_post_type('custom', $args);
}
add_action('init', 'custom_post_type', 0);
