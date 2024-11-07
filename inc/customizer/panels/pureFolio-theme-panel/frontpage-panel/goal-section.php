<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S GOAL SECTION
========================================================*/
$wp_customize->add_section(
    'ourGoal_Sec',
    array(
        'title'    => __("Goal Section", "pureFolio" ),
		'description' => esc_html__("Highlight your objectives and aspirations with the Goal section on your front page. This section empowers you to control the visibility, title, and content of your goals, allowing you to share your mission as a user or brand. Enhance the visual appeal with a customizable background image, and use tags to briefly express your goals, such as 'innovative,' 'insightful,' and more." ),
		'priority' => 20,
		'panel' => 'frontpage_panel_id',
	)
);

/**========================================
 * SETTINGS AND CONTROLS FOR GOAL SECTION
==========================================*/
// setting and control To disable Goal Section
$wp_customize->add_setting(
    'toggle_goal_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_goal_sec',
    array(
        'label' => __('Goal Section', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Goal section on the front page'),

        'section' => 'ourGoal_Sec',
        'settings'   => 'toggle_goal_sec',
        'capability' => 'edit_theme_options',
    )
));

// setting for image in goal section
$wp_customize->add_setting(
    'goal_sec_img',
    array(
        'default' => get_pureFolio_assets('img') . 'team.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'goal_sec_img',
    array(
        'label' => __('Goal Background Image', 'pureFolio'),
        'description' => esc_html__('Add a background image to enhance the aesthetics of the Goal section.', 'pureFolio'),
        'section' => 'ourGoal_Sec',
        'settings' => 'goal_sec_img',
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

// setting and control To Change Goal TitLE
$wp_customize->add_setting(
    'goal_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Our Goal?',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'goal_sec_title',
    array(
        'label' => __('Title', 'pureFolio'),
        'description' => __('Customize the title for your Goal Section. (Default: Our Goal)', 'pureFolio'),
        'settings' => 'goal_sec_title',
        'section' => 'ourGoal_Sec',
        'type' => 'text',
    )
);

// setting and control To Change Goal Content
$wp_customize->add_setting(
    'goal_sec_content', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Our goal is to empower businesses with innovative tech solutions, delivering seamless web and mobile experiences, captivating design, and cutting-edge SEO strategies, enabling them to thrive in the digital world.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(new Clarusmod_TinyMCE_Custom_control(
    $wp_customize,
    'goal_sec_content',
    array(
        'label' => "Content",
        'description' => __('Use the rich text editor below to articulate your goals as a user or brand.'),
        'settings' => 'goal_sec_content',
        'section' => 'ourGoal_Sec',
        'input_attrs' => array(
            'toolbar1' => 'undo redo blocks bold italic bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )
));


// setting and control To disable goal Tags
$wp_customize->add_setting(
    'toggle_goal_tags',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_goal_tags',
    array(
        'label' => __('Goal Tags', 'pureFolio'),
        'description' => esc_html__('Toggle the display of Goal Tags'),
        'section' => 'ourGoal_Sec',
        'settings'   => 'toggle_goal_tags',
        'capability' => 'edit_theme_options',
    )
));


// setting and Control to add goal tags
$wp_customize->add_setting(
    'goal_tags',
    array(
        'default' => 'Captivating, Insightful, fast',
        'transport' => 'refresh',
        'sanitize_callback' => 'clarusmod_text_sanitization'
    )
);
$wp_customize->add_control(new Clarusmod_Repeater_Custom_Control(
    $wp_customize,
    'goal_tags',
    array(
        'label' => __('Add Tags', 'pureFolio'),
        'description' => esc_html__('Define your goals using tags or phrases that represent your aspirations. You can add multiple tags to showcase various goals.', 'pureFolio'),
        'section' => 'ourGoal_Sec',
        'settings'   => 'goal_tags',
        'button_labels' => array(
            'add' => __('Add New Tag', 'pureFolio'),
        ),
        'input_type' => 'text', // specify input type here (url or text)
        'placeholder' => 'input tag', // placeholder for the input field (default : new)
        'is_sortable' => true,
    )
));