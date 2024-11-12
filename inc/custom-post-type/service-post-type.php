<?php

// Register Custom Post Type for Services
if (!function_exists('custom_post_type_services')) {
    function custom_post_type_services() {
        $labels = array(
            'name'               => __( 'Services', 'pureFolio'),
            'singular_name'      => __( 'Service', 'pureFolio'),
            'menu_name'          => __( 'Services', 'pureFolio'),
            'all_items'          => __( 'All Services', 'pureFolio'),
            'add_new'            => __('Add New Service', 'pureFolio'),
            'add_new_item'       => __( 'Add New Service', 'pureFolio'),
            'edit_item'          => __( 'Edit Service', 'pureFolio'),
            'new_item'           => __( 'New Service', 'pureFolio'),
            'view_item'          => __( 'View Service', 'pureFolio'),
            'search_items'       => __( 'Search Services', 'pureFolio'),
            'not_found'          => __( 'No services found', 'pureFolio'),
            'not_found_in_trash' => __( 'No services found in Trash', 'pureFolio'),
            'parent_item_colon'  => __( 'Parent Service:', 'pureFolio'),
        );
    
        $args = array(
            'label'               => __('services', 'pureFolio'),
            'description'         => __('Services offered by individual or brand', 'pureFolio'),
            'labels'              => $labels,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'query_var'           => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-clipboard',
            'rewrite'             => array('slug' => 'services'),
            'supports'            => array('title', 'thumbnail', 'excerpt'),
            'hierarchical'        => false,
            'menu_position'       => 5,
            'show_in_rest' => true,
        );
    
        register_post_type('services', $args);

        // Add custom meta boxes for service post type
        require get_template_directory() . '/inc/custom-post-type/service/meta-boxes.php';
    }
    
    add_action( 'init', 'custom_post_type_services', 0 );
}

include_once dirname(__FILE__) . '/none/no-service.php';