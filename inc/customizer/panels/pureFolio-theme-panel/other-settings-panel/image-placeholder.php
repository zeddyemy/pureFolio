<?php

/**======================================================
 * CREATE SECTION TO MODIFY BUTTONS LOOKS
========================================================*/
$wp_customize->add_section(
    'img_placeholder',
    array(
        'title'    => __("Image Placeholder", "pureFolio"),
        'description' => esc_html__('This will serve as a placeholder that will be visible while images are still loading. Its advised to use images with low sizes. Best between 1 byte and 22kb', 'pureFolio'),
        'priority' => 20,
        'panel' => 'other_settings_panel_id',
    )
);


/**========================================
 * SETTINGS AND CONTROLS FOR BUTTON STYLES
==========================================*/
// Setting and Control for Image placeholder
$wp_customize->add_setting(
    'placeholder_img',
    array(
        'default' => get_pureFolio_assets('img') . 'placeholder.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'placeholder_img',
        array(
            'label' => __('Image Placeholder', 'pureFolio'),
            'section' => 'img_placeholder',
            'settings' => 'placeholder_img',
        )
    )
);
