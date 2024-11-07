<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S BLOG SECTION
========================================================*/
$wp_customize->add_section(
    'blog_Sec',
    array(
        'title'    => __("Blog Section", "pureFolio"),
        'description' => esc_html__("Blogs written for your site", 'pureFolio'),
        'priority' => 50,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR BLOG SECTION
==========================================*/
// setting and control To disable or enable Blog Section
$wp_customize->add_setting(
    'toggle_blog_sec',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_blog_sec',
    array(
        'label' => __('Blog Section', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Blog section on the front page', 'pureFolio'),
        'section' => 'blog_Sec',
        'settings'   => 'toggle_blog_sec',
    )
));


// setting and control To Change Blog TitLE
$wp_customize->add_setting(
    'blog_sec_title',
    array(
        'default' => __('Our Latest Blogs', 'pureFolio'),
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'blog_sec_title',
    array(
        'label' => __("Title", 'pureFolio'),
        'description' => __('Change The title of the Blog Section.', 'pureFolio'),
        'settings' => 'blog_sec_title',
        'section' => 'blog_Sec',
        'type' => 'text',
    )
);