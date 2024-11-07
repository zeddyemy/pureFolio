<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE TITLE
========================================================*/
$wp_customize->add_section(
    'blog_page_title_sec',
    array(
        'title'    => __('Blog Page Title', 'pureFolio'),
        'description' => esc_html__('Make changes to the title on the blog page, where all you blog post are displayed. Visit the blog page to see your changes reflect there.', 'pureFolio'),
        'panel' => 'blog_page_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR BLOG PAGE TITLE
==========================================*/
// Setting and Control To Disable or Enable the title on the Blog page
$wp_customize->add_setting(
    'toggle_blogPage_title',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_blogPage_title',
    array(
        'label' => __('Title', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Title on the blog page.', 'pureFolio'),
        'section'  => 'blog_page_title_sec',
        'settings'   => 'toggle_blogPage_title',
    )
));


// setting and control To Change Blog Page TitLE
$wp_customize->add_setting(
    'blogPage_title',
    array(
        'default' => __('Blog Posts', 'pureFolio'),
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'blogPage_title',
    array(
        'label' => __("Title", 'pureFolio'),
        'description' => __('Change The title on the Blog Page.', 'pureFolio'),
        'settings' => 'blogPage_title',
        'section' => 'blog_page_title_sec',
        'type' => 'text',
    )
);