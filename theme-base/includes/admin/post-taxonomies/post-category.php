<?php

/**
 * Register Taxonomy function.
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy
 */
function post_category_taxonomy()
{
    $labels = [
        'name' => _x('Post Categories', 'Taxonomy General Name'),
        'singular_name' => _x('Post Category', 'Taxonomy Singular Name'),
        'menu_name' => __('Post Categories'),
        'all_items' => __('All Items'),
        'parent_item' => __('Parent Item'),
        'parent_item_colon' => __('Parent Item:'),
        'new_item_name' => __('New Item Name'),
        'add_new_item' => __('Add New Item'),
        'edit_item' => __('Edit Item'),
        'update_item' => __('Update Item'),
        'view_item' => __('View Item'),
        'separate_items_with_commas' => __('Separate items with commas'),
        'add_or_remove_items' => __('Add or remove items'),
        'choose_from_most_used' => __('Choose from the most used'),
        'popular_items' => __('Popular Items'),
        'search_items' => __('Search Items'),
        'not_found' => __('Not Found'),
        'no_terms' => __('No items'),
        'items_list' => __('Items list'),
        'items_list_navigation' => __('Items list navigation'),
    ];

    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'post-category'],
    ];
    register_taxonomy('post_cat', ['projects'], $args);
}
add_action('init', 'post_category_taxonomy', 0);

?>