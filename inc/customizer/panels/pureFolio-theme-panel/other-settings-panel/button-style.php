<?php

/**======================================================
 * CREATE SECTION TO MODIFY BUTTONS LOOKS
========================================================*/
$wp_customize->add_section(
    'btn_styles',
    array(
        'title'    => __("Button Styles", "pureFolio"),
        'description' => esc_html__('Change the style to be used for buttons on the site', 'pureFolio'),
        'priority' => 10,
        'panel' => 'other_settings_panel_id',
    )
);


/**========================================
 * SETTINGS AND CONTROLS FOR BUTTON STYLES
==========================================*/
// setting and control To Change style of buttons on the site
$wp_customize->add_setting(
    'button_style',
    array(
        'default' => 'normal',
        'transport' => 'refresh',
        'sanitize_callback' => 'clarusmod_radio_sanitization'
    )
);
$wp_customize->add_control(new Btn_Style_Custom_Control(
    $wp_customize,
    'button_style',
    array(
        'label' => __('Button Style', 'pureFolio'),
        'description' => esc_html__('Change Button Style'),
        'section' => 'btn_styles',
        'settings'   => 'button_style',
    )
));
