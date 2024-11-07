<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S SERVICES SECTION
========================================================*/
$wp_customize->add_section(
    'services_Sec',
    array(
        'title'    => __("Services Section", "pureFolio"),
        'description' => esc_html__("The services you offer as an Individual or as a Brand."),
        'priority' => 30,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SERVICES SECTION
==========================================*/
// setting and control To disable or enable Services Section
$wp_customize->add_setting(
    'toggle_services_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_services_sec',
    array(
        'label' => __('Services Section', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the Services section on the front page', 'pureFolio'),
        'section' => 'services_Sec',
        'settings'   => 'toggle_services_sec',
    )
));


// setting and control To Change TitLE For The Service Section
$wp_customize->add_setting(
    'service_section_title',
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Our Services',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'service_section_title',
    array(
        'label' => "Title",
        'description' => __('Change The title of the Service Section.'),
        'settings' => 'service_section_title',
        'section' => 'services_Sec',
        'type' => 'text',
    )
);

// setting and control To Choose SERVICE 1
$wp_customize->add_setting(
    'frontpage_service_card_1', 
    array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'frontpage_service_card_1',
    array(
        'label' => 'Service 1',
        'description' => __('Choose a service you want displayed Here'),
        'settings' => 'frontpage_service_card_1',
        'section' => 'services_Sec',
        'type' => 'select',
        'choices' => get_services_choices(),
    )
);

// setting and control To Choose SERVICE 2
$wp_customize->add_setting(
    'frontpage_service_card_2', 
    array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'frontpage_service_card_2',
    array(
        'label' => 'Service 2',
        'description' => __('Choose a service you want displayed Here'),
        'settings' => 'frontpage_service_card_2',
        'section' => 'services_Sec',
        'type' => 'select',
        'choices' => get_services_choices(),
    )
);

// setting and control To Choose SERVICE 3
$wp_customize->add_setting(
    'frontpage_service_card_3', 
    array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'frontpage_service_card_3',
    array(
        'label' => 'Service 3',
        'description' => __('Choose a service you want displayed Here'),
        'settings' => 'frontpage_service_card_3',
        'section' => 'services_Sec',
        'type' => 'select',
        'choices' => get_services_choices(),
    )
);


// setting and control To Edit title for the fourth additional card
$wp_customize->add_setting(
    'additional_card_title',  
    array(
        'default' => 'We offer More',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'additional_card_title',
    array(
        'label' => 'Additional Card Label',
        'description' => __('Input your desired title for the additional card'),
        'settings' => 'additional_card_title',
        'section' => 'services_Sec',
        'type' => 'text',
    )
);

// setting and control To Edit content for the fourth additional card
$wp_customize->add_setting(
    'additional_card_content',  
    array(
        'default' => 'Our team of creative thinkers simplify the complex challenges businesses face everyday. Our services are tailored to offer the most effective solutions, to grow your business.',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'additional_card_content',
    array(
        'label' => 'Additional Card Content',
        'description' => __('Input your desired content for the additional card.'),
        'settings' => 'additional_card_content',
        'section' => 'services_Sec',
        'type' => 'textarea',
    )
);

// setting and control To Edit button for the fourth additional card
$wp_customize->add_setting(
    'additional_card_btn', 
    array(
        'default' => 'Explore More',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'additional_card_btn',
    array(
        'label' => 'Card View More Button',
        'description' => __('This is the button to take users to the Services page'),
        'settings' => 'additional_card_btn',
        'section' => 'services_Sec',
        'type' => 'text',
    )
);


function get_services_choices() {
    $services_query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => -1,
    ));

    $choices = array();
    $choices['0'] = '— Select —';

    if ($services_query->have_posts()) {
        while ($services_query->have_posts()) {
            $services_query->the_post();
            $choices[get_the_ID()] = get_the_title();
        }
    }

    wp_reset_postdata();

    return $choices;
}
