<?php


$eachPagesPanel = new Clarusmod_Customize_Panel($wp_customize, 'each_pages', array(
    'title' => 'Each Pages',
    'description' => esc_html__('You can customize each pages to your liking in the section. Make changes to each page you have on your site. You will be able to use different Hero image for a specific page, you\'ll also be able to disable sidebar on specific pages irrespective of the setting on other pages ', 'pureFolio'),
    'panel' => 'pages_panel_id',
));
$wp_customize->add_panel($eachPagesPanel);


global $pubPages;
foreach ($pubPages as $page) {
    $wp_customize->add_section(
        'pages_' . $page->post_name,
        array(
            'title'    => __($page->post_title . ' Page', 'pureFolio'),
            'panel' => 'each_pages',
        )
    );

    // Setting and Control To Disable or Enable Hero Header on wordpress pages
    $wp_customize->add_setting(
        'toggle_hero_header_' . $page->ID,
        array(
            'default' => true,
        )
    );
    $wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
        $wp_customize,
        'toggle_hero_header_' . $page->ID,
        array(
            'label' => __('Hero Header', 'pureFolio'),
            'description' => esc_html__('Disable or Enable the Hero Header on this page.', 'pureFolio'),
            'section'  => 'pages_' . $page->post_name,
            'settings'   => 'toggle_hero_header_' . $page->ID,
        )
    ));

    // setting for Background image of Hero Header
    $wp_customize->add_setting(
        'hero_header_img_' . $page->ID,
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'hero_header_img_' . $page->ID,
        array(
            'label' => __('Hero Header Background Image', 'pureFolio'),
            'description' => esc_html__('You can change the background image of the hero header on this page alone.', 'pureFolio'),
            'section'  => 'pages_' . $page->post_name,
            'settings' => 'hero_header_img_' . $page->ID,
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

    // setting and control To Edit Hero Header subtext
    $wp_customize->add_setting(
        'hero_header_subtext_' . $page->ID,
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );
    $wp_customize->add_control(
        'hero_header_subtext_' . $page->ID,
        array(
            'label' => __('Hero Subtext', 'pureFolio'),
            'description' => __('Input your desired subtext for the Hero Header on this page. (Optional)', 'pureFolio'),
            'settings' => 'hero_header_subtext_' . $page->ID,
            'section'  => 'pages_' . $page->post_name,
            'type' => 'textarea',
        )
    );

    // Setting and Control To Disable or Enable Sidebar on wordpress pages
    $wp_customize->add_setting(
        'toggle_sidebar_' . $page->ID,
        array(
            'default' => true,
        )
    );
    $wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
        $wp_customize,
        'toggle_sidebar_' . $page->ID,
        array(
            'label' => __('Sidebar', 'pureFolio'),
            'description' => esc_html__('Use this toggle to Disable or Enable the Sidebar on this page.', 'pureFolio'),
            'section'  => 'pages_' . $page->post_name,
            'settings'   => 'toggle_sidebar_' . $page->ID,
        )
    ));
}