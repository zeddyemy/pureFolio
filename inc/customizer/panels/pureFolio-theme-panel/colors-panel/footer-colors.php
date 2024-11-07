<?php

	// Add section and controls to color panel
	$wp_customize->add_section( 'footer_color_sections',
		array(
			'title' => __( 'Footer Colors', 'pureFolio' ),
			'priority'    => 40,
			'capability'  => 'edit_theme_options',
			'panel' => 'colors_panel_id',
		)
	);

	/* ++++++++++++++++++++++++++++++
	CUSTOMIZER SETTINGS 
	+++++++++++++++++++++++++++++++++ */

	// add a setting for footer background color //
	$wp_customize->add_setting(
		'footer_bg_color', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	// add a setting for footer text color //
	$wp_customize->add_setting(
		'footer_text_color', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	// add a setting for the footer's background Image //
	$wp_customize->add_setting('footer_bg_image');


	/* ++++++++++++++++++++++++++++++++++++++++
	CUSTOMIZER CONTROLS FOR THE SETTINGS ABOVE 
	+++++++++++++++++++++++++++++++++++++++++ */

	// control for footer's background color //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bg_color',
			array(
				'label'      => __( 'Footer Background color', 'pureFolio' ),
				'section'    => 'footer_color_sections',
				'settings'   => 'footer_bg_color',
			)
		)
	);

	// control for footer's Text color //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text_color',
			array(
				'label'      => __( ' Footer Text Color', 'pureFolio' ),
				'section'    => 'footer_color_sections',
				'settings'   => 'footer_text_color'
			)
		)
	);

	// Control for footer's background image //
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'footer_bg_image',
		
			array(
				'label' => 'Upload Footer Background Image',
				'section' => 'footer_color_sections',
				'settings' => 'footer_bg_image',
			)
		)
	);