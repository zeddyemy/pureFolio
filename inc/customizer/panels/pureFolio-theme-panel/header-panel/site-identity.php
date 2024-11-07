<?php


/**===================================
 * CREATE SECTION FOR SITE IDENTITY
=====================================*/
$wp_customize->remove_section('title_tagline');
$wp_customize->add_section(
	'title_tagline',
	array(
		'title'    => __('Site Identity', 'pureFolio'),
		'description' => esc_html__(''),
		'priority' => 10,
		'panel' => 'header_panel_id',
	)
);


/**===================================
 * SETTINGS AND CONTROLS FOR SITE IDENTITY
=====================================*/
// setting and control To Change the Button Text
$wp_customize->add_setting(
	'short_site_title', //give it an ID
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);
$wp_customize->add_control(
	'short_site_title',
	array(
		'label' => __("Short Site Tile", 'pureFolio'),
		'description' => __('Add a short Site Title if you feel your your initial Site Title is a little long.', 'pureFolio' ),
		'settings' => 'short_site_title',
		'section' => 'title_tagline',
		'type' => 'text',
	)
);

// Setting for the site logo (upload Logo)
$wp_customize->add_setting('your_theme_logo');
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize, 'your_theme_logo',
		array(
			'label' => __('Upload Logo', 'pureFolio'),
			'section' => 'title_tagline',
			'settings' => 'your_theme_logo',
		)
	)
);