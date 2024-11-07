<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S HERO HEADER SECTION
========================================================*/
$wp_customize->add_section(
    'folio_hero_header',
    array(
        'title'    => __("Hero Header", "pureFolio"),
        'description' => esc_html__("Customizer the Hero Header of the singule portfolio page.", "pureFolio"),
        'priority' => 10,
        'panel' => 'single_folio_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HERO HEADER SECTION
==========================================*/
// setting and control To disable Hero Header Section
$wp_customize->add_setting(
    'toggle_folio_hero_header',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_folio_hero_header',
    array(
        'label' => __('Hero Header', 'pureFolio'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable the Hero Header', 'pureFolio'),
        'section' => 'folio_hero_header',
        'settings'   => 'toggle_folio_hero_header',
    )
));


// setting for image in Hero Header section
$wp_customize->add_setting(
    'folio_hero_header_img',
    array(
        'default' => get_pureFolio_assets('img') . 'img3.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'folio_hero_header_img',
    array(
        'label' => __('Hero Header Background Image', 'pureFolio'),
        'description' => esc_html__('This is the background image of the Hero Header. You can change it to your own image below.', 'pureFolio'),
        'section' => 'folio_hero_header',
        'settings' => 'folio_hero_header_img',
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



// setting and control To disable Hero Header Section
$wp_customize->add_setting(
    'toggle_folio_featuredImg',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_folio_featuredImg',
    array(
        'label' => __('Use Featured Image', 'pureFolio'),
        'description' => esc_html__('If you want, you can use the Featured Image of portfolio as the background image for the Hero Header', 'pureFolio'),
        'section' => 'folio_hero_header',
        'settings'   => 'toggle_folio_featuredImg',
    )
));