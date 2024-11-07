<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE SIDE BAR
========================================================*/
$wp_customize->add_section(
    'single_blog_page_sidebar',
    array(
        'title'    => __('Single Blog Page Sidebar', 'pureFolio'),
        'description' => esc_html__('customizer the sidebar on single blog page. Click on a blog post to see your changes reflect there.', 'pureFolio'),
        'panel' => 'single_blog_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SIDE BAR
==========================================*/
// Setting and Control To Disable or Enable Sidebar on the single page
$wp_customize->add_setting(
    'toggle_single_sidebar',
    array(
        'default' => True,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_single_sidebar',
    array(
        'label' => __('Sidebar', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Sidebar of single blog page.', 'pureFolio'),
        'section'  => 'single_blog_page_sidebar',
        'settings'   => 'toggle_single_sidebar',
    )
));
