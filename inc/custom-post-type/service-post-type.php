<?php

// Register Custom Post Type for Services
if (!function_exists('custom_post_type_services')) {
    function custom_post_type_services() {
        $labels = array(
            'name'               => __( 'Services' ),
            'singular_name'      => __( 'Service' ),
            'menu_name'          => __( 'Services' ),
            'all_items'          => __( 'All Services' ),
            'add_new'            => __( 'Add New' ),
            'add_new_item'       => __( 'Add New Service' ),
            'edit_item'          => __( 'Edit Service' ),
            'new_item'           => __( 'New Service' ),
            'view_item'          => __( 'View Service' ),
            'search_items'       => __( 'Search Services' ),
            'not_found'          => __( 'No services found' ),
            'not_found_in_trash' => __( 'No services found in Trash' ),
            'parent_item_colon'  => __( 'Parent Service:' ),
        );
    
        $args = array(
            'label'               => __('services'),
            'description'         => __('Services offered by individual or brand'),
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
    
        // Add custom meta box for icon selection
        add_action('add_meta_boxes', 'add_service_icon_meta_box');
        add_action('save_post', 'save_service_icon_meta_box');
    
        function add_service_icon_meta_box() {
            add_meta_box(
                'service_icon',
                'Service Icon',
                'render_service_icon_meta_box',
                'services',
                'side',
                'default'
            );
        }
    
        function render_service_icon_meta_box($post) {
            $selected_icon = get_post_meta($post->ID, 'service_icon', true);
            $icon_choices = get_icons_choices(true);
    
            echo '<label for="service_icon" style="display:block;margin:10px 0px;font-weight:bold;">Select an Icon:</label>';
            echo '<select name="service_icon" id="service_icon">';
            
            if (is_array($icon_choices)) {
                foreach ($icon_choices as $value => $label) {
                    $selected = ($selected_icon === $value || (empty($selected_icon) && $value === 'bx bx-home')) ? 'selected="selected"' : '';
                    echo '<option value="' . esc_attr($value) . '"' . $selected . '>' . esc_html($label) . '</option>';
                }
            }
    
            echo '</select>';
        }
    
        function save_service_icon_meta_box($post_id) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }
    
            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
    
            if (isset($_POST['service_icon'])) {
                update_post_meta($post_id, 'service_icon', sanitize_text_field($_POST['service_icon']));
            }
        }
    }
}
add_action( 'init', 'custom_post_type_services', 0 );

include_once dirname(__FILE__) . '/none/no-service.php';