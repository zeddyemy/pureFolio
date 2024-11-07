<?php

/**===================================
 * CREATE SECTION FOR FOOTER CREDITS
=====================================*/
$wp_customize->add_section(
    'footer_credits',
    array(
        'title'    => __('Footer Credits', 'pureFolio'),
        'description' => esc_html__(''),
        'priority' => 10,
        'panel' => 'footer_panel_id',
    )
);

/**===================================
 * SETTINGS AND CONTROLS FOR NAVIGATION MENU
=====================================*/
// setting and control To disable Copyrights
$wp_customize->add_setting(
    'toggle_footer_copyright',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_copyright',
    array(
        'label' => __('Copyright Info', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Copyright Info', 'pureFolio'),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_copyright',
    )
));

// setting and control To disable Author Information
$wp_customize->add_setting(
    'toggle_footer_dev_credits',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_dev_credits',
    array(
        'label' => __('Design/Development Credits', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Design/Development Credits', 'pureFolio'),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_dev_credits',
    )
));

// setting and control To disable Platform Information
$wp_customize->add_setting(
    'toggle_footer_platform_info',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_platform_info',
    array(
        'label' => __('Platform Information', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Platform Information', 'pureFolio'),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_platform_info',
    )
));
