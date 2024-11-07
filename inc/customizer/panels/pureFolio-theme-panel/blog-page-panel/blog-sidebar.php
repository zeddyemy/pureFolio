<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE SIDE BAR
========================================================*/
$wp_customize->add_section(
    'blog_page_sidebar',
    array(
        'title'    => __('Blog Page Sidebar', 'pureFolio'),
        'description' => esc_html__('customizer the sidebar on the blog page, where all you blog post are displayed. Visit the blog page to see your changes reflect there.', 'pureFolio'),
        'panel' => 'blog_page_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SIDE BAR
==========================================*/
// Setting and Control To Disable or Enable Sidebar on the Blog page
$wp_customize->add_setting(
    'toggle_blog_sidebar',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_blog_sidebar',
    array(
        'label' => __('Sidebar', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Sidebar on the blog page.', 'pureFolio'),
        'section'  => 'blog_page_sidebar',
        'settings'   => 'toggle_blog_sidebar',
    )
));

