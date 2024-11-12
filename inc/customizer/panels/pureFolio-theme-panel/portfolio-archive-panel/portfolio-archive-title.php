<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE TITLE
========================================================*/
$wp_customize->add_section(
    'portfolio_archive_title_sec',
    array(
        'title'    => __('Portfolio Archive Title', 'pureFolio'),
        'description' => esc_html__('Make changes to the title on the Portfolio Archive page, where all portfolios are displayed. Visit the portfolio archive page to see your changes reflect there.', 'pureFolio'),
        'panel' => 'portfolio_archive_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR PORTFOLIO ARCHIVE PAGE TITLE
==========================================*/
// Setting and Control To Disable or Enable the title on the Blog page
$wp_customize->add_setting(
    'toggle_folioArchive_title',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_folioArchive_title',
    array(
        'label' => __('Title', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Title on the portfolio Archive page.', 'pureFolio'),
        'section'  => 'portfolio_archive_title_sec',
        'settings'   => 'toggle_folioArchive_title',
    )
));


// setting and control To Change Blog Page TitLE
$wp_customize->add_setting(
    'folioArchive_title',
    array(
        'default' => __('Our Portfolio', 'pureFolio'),
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'folioArchive_title',
    array(
        'label' => __("Title", 'pureFolio'),
        'description' => __('Change The title on the portfolio archive page.', 'pureFolio'),
        'settings' => 'folioArchive_title',
        'section' => 'portfolio_archive_title_sec',
        'type' => 'text',
    )
);
