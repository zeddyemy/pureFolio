<?php

/**======================================================
 * REMOVE WP BUILT IN SECTION FOR BACKGROUND IMAGE
 * And add our own section. This automatically add the settings and controls
 * So we don't have to do that again
========================================================*/
// Background Image Section
$wp_customize->remove_section('background_image');
$wp_customize->add_section(
    'background_image',
    array(
        'title'    => __('Background Image', 'pureFolio'),
        'description' => esc_html__(''),
        'priority' => 30,
        'panel' => 'other_settings_panel_id',
    )
);