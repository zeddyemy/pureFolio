<?php

/**======================================================
 * CREATE SECTION TO MODIFY HERO HEADER
========================================================*/
$wp_customize->add_section(
    'pages_default_settings',
    array(
        'title'    => __('Default Settings For Pages', 'pureFolio'),
        'description' => esc_html__('The settings on here, are the defualt settings for all pages across your website. Visit a page to see your changes reflect there.', 'pureFolio'),
        'panel' => 'pages_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HERO HEADER
==========================================*/
// setting for Default Background image of Hero Header
$wp_customize->add_setting(
    'pages_hero_header_img',
    array(
        'default' => get_pureFolio_assets('img') . 'pages-img.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'pages_hero_header_img',
    array(
        'label' => __('Default Hero Header Background Image', 'pureFolio'),
        'description' => esc_html__('Change the default background image for all pages. This will not affect pages where you explicitly set a different image.', 'pureFolio'),
        'section'  => 'pages_default_settings',
        'settings' => 'pages_hero_header_img',
        'button_labels' => array( // Optional.
            'select' => __('Select Image'),
            'change' => __('Change Image'),
            'remove' => __('Remove'),
            'default' => __('Default'),
            'frame_title' => __('Select Image'),
            'frame_button' => __('Choose Image'),
        )
    )
));


// Setting and Control To disable featured image
$wp_customize->add_setting(
    'toggle_pages_featured_img',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pages_featured_img',
    array(
        'label' => __('Featured Image', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Featured Image on your site\'s pages.', 'pureFolio'),
        'section'  => 'pages_default_settings',
        'settings'   => 'toggle_pages_featured_img',
    )
));