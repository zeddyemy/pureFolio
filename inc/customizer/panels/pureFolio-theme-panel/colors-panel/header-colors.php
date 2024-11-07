<?php

	// Add section and controls to color panel
	$wp_customize->add_section( 'header_color_sections',
		array(
			'title' => __( 'Header Colors', 'pureFolio' ),
			'description' => esc_html__( 'Colors applied to the header will on be visible when you scroll down a little. You can go ahead and scroll down to be able to see your changes.' ),
			'priority'    => 30,
			'capability'  => 'edit_theme_options',
			'panel' => 'colors_panel_id',
		)
	);

	/* ++++++++++++++++++++++++++++++
	CUSTOMIZER SETTINGS
	+++++++++++++++++++++++++++++++++ */

	// add a setting for header background color
	$wp_customize->add_setting( 'header_bg_color',
		array(
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// add a setting for header text color
	$wp_customize->add_setting( 'header_text_color',
		array(
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// add a setting for the header's background Image
	$wp_customize->add_setting('header_bg_image');


	/* ++++++++++++++++++++++++++++++++++++++++
	CUSTOMIZER CONTROLS FOR THE SETTINGS ABOVE 
	+++++++++++++++++++++++++++++++++++++++++ */
	
	// ++ control for header's background color ++ //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_bg_color', //give it an ID
			array(
              	'label'      => __( 'Header Background color', 'pureFolio' ), //set the label to appear in the Customizer
            	'section'    => 'header_color_sections', //select the section for it to appear under  
              	'settings'   => 'header_bg_color' //pick the setting it applies to
			)
		)
	);
	
	// ++ control for header's Text color ++ //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_text_color', //give it an ID
			array(
              	'label'      => __( ' Header Text Color', 'pureFolio' ), //set the label to appear in the Customizer
            	'section'    => 'header_color_sections', //select the section for it to appear under  
              	'settings'   => 'header_text_color' //pick the setting it applies to
			)
		)
	);
	
	// ++ Control for header's background image ++ //
	$wp_customize->add_control(
		new WP_Customize_Image_Control( $wp_customize, 'header_bg_img',
		
			array(
				'label' => 'Upload Header Background Image',
				'section' => 'header_color_sections',
				'settings' => 'header_bg_image',
			)
		)
	);