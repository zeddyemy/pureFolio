<?php
	
	/*******************
	Base Color Section
	*********************/
	
	$wp_customize->remove_section( 'colors' );
	$wp_customize->add_section( 'base_color_sections',
		array(
			'title' => __( 'Base Colors', 'pureFolio' ),
			'priority'    => 10,
			'capability'  => 'edit_theme_options',
			'panel' => 'colors_panel_id',
		)
	);


	/************************************
	Settings and controls for Base Colors
	*************************************/

	// #1 setting and control for background color
	$wp_customize->get_control( 'background_color' )->section = 'base_color_sections';
	$wp_customize->get_control( 'background_color' )->priority = 10;

	
	// #2 setting and control for theme color
	$wp_customize->add_setting('pureFolio_theme_color',
		array(
			'default' => '#2869ff',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
	        'theme_color', //give it an ID
			array(
	            'label'      => __( 'Theme Color', 'pureFolio' ), //set the label to appear in the Customizer
		        'section'    => 'base_color_sections', //select the section for it to appear under  
	            'settings'   => 'pureFolio_theme_color', //pick the setting it applies to
				'priority' => 20,
			)
		)
	);