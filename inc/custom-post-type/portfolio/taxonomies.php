<?php

// Register custom categories for portfolio post type
function pf_register_portfolio_taxonomies()
{
    // Register Custom Taxonomy for Portfolio Categories
    $category_labels = array(
        'name'              => __('Portfolio Categories', 'pureFolio'),
        'singular_name'     => __('Portfolio Category', 'pureFolio'),
        'search_items'      => __('Search Portfolio Categories', 'pureFolio'),
        'all_items'         => __('All Portfolio Categories', 'pureFolio'),
        'parent_item'       => __('Parent Portfolio Category', 'pureFolio'),
        'parent_item_colon' => __('Parent Portfolio Category:', 'pureFolio'),
        'edit_item'         => __('Edit Portfolio Category', 'pureFolio'),
        'update_item'       => __('Update Portfolio Category', 'pureFolio'),
        'add_new_item'      => __('Add New Portfolio Category', 'pureFolio'),
        'new_item_name'     => __('New Portfolio Category Name', 'pureFolio'),
        'menu_name'         => __('Portfolio Categories', 'pureFolio'),
    );
    
    $category_args = array(
        'labels'            => $category_labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
    );
    
    register_taxonomy('portfolio_category', array('portfolios'), $category_args);
    
    // Register Custom Taxonomy for Portfolio Tags
    $tag_labels = array(
        'name'                       => __('Portfolio Tags', 'pureFolio'),
        'singular_name'              => __('Portfolio Tag', 'pureFolio'),
        'search_items'               => __('Search Portfolio Tags', 'pureFolio'),
        'popular_items'              => __('Popular Portfolio Tags', 'pureFolio'),
        'all_items'                  => __('All Portfolio Tags', 'pureFolio'),
        'edit_item'                  => __('Edit Portfolio Tag', 'pureFolio'),
        'update_item'                => __('Update Portfolio Tag', 'pureFolio'),
        'add_new_item'               => __('Add New Portfolio Tag', 'pureFolio'),
        'new_item_name'              => __('New Portfolio Tag Name', 'pureFolio'),
        'separate_items_with_commas' => __('Separate portfolio tags with commas', 'pureFolio'),
        'add_or_remove_items'        => __('Add or remove portfolio tags', 'pureFolio'),
        'choose_from_most_used'      => __('Choose from the most used portfolio tags', 'pureFolio'),
        'menu_name'                  => __('Portfolio Tags', 'pureFolio'),
    );
    
    $tag_args = array(
        'labels'            => $tag_labels,
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'portfolio-tag'),
    );
    
    register_taxonomy('portfolio_tag', array('portfolios'), $tag_args);
}
add_action('init', 'pf_register_portfolio_taxonomies');
