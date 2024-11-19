<?php

/**======================================================
 * CREATE SECTIONS TO MODIFY THE FRONTPAGE'S CONTACT SECTION
========================================================*/
/*
$wp_customize->add_section(
    'contact_base_sec',
    array(
        'title'    => __("Base Settings", "pureFolio"),
        'description' => esc_html__('Tailor your Contact section on the front page to let people know how to reach you or your brand. Control the visibility of the Contact section, title, and content.', 'pureFolio'),
        'priority' => 10,
        'panel' => 'contactSec_panel_id',
    )
);
*/


/**========================================
 * SETTINGS AND CONTROLS FOR CONTACT SECTION
==========================================*/
// setting and control To disable Contact Section
$wp_customize->add_setting(
    'toggle_contact_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_contact_sec',
    array(
        'label' => __('Contact Section', 'pureFolio'),
        'description' => esc_html__('Toggle the display of the contact section on the front page.'),
        'section' => 'contact_Sec',
        'settings'   => 'toggle_contact_sec',
        'capability' => 'edit_theme_options',
    )
));

// Setting and Control To disable the Title
$wp_customize->add_setting(
    'toggle_contact_title',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_contact_title',
    array(
        'label' => __('Title', 'pureFolio'),
        'description' => esc_html__('toggle the display of the title in contact section.'),
        'section' => 'contact_Sec',
        'settings'   => 'toggle_contact_title',
        'capability' => 'edit_theme_options',
    )
));

// setting and control To Edit the TitLE
$wp_customize->add_setting(
    'contact_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Contact Us',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'contact_sec_title',
    array(
        'label' => "Edit Title",
        'description' => __('Customize the title for your contact Section.'),
        'settings' => 'contact_sec_title',
        'section' => 'contact_Sec',
        'type' => 'text',
    )
);


// Test of Simple Notice control
$wp_customize->add_setting(
    'socials_notice',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'clarusmod_text_sanitization'
    )
);
$wp_customize->add_control(new Clarusmod_Raw_Text_Custom_Control(
    $wp_customize,
    'socials_notice',
    array(
        'label' => __('Socials Information', 'pureFolio'),
        'description' => __('The settings below allows you to provide your socials information. You can provide the link and text to any if the supported socials below. <br><br> When you provide a text for the socials, It will get displayed in the contact section', 'pureFolio'),
        'section' => 'contact_Sec'
    )
));



// linkedin Profile
$wp_customize->add_setting(
    'linkedin_profile_txt', array(
        'default' => 'LinkedIn Name',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'linkedin_profile_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'linkedin_txt_url', array(
    'label'       => __('LinkedIn Profile', 'pureFolio'),
    'description' => __('Input text and link to your LinkedIn profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'linkedin_profile_txt',
        'url'  => 'linkedin_profile_url',
    ),
)));

// email Profile
$wp_customize->add_setting(
    'mail_profile_txt', array(
        'default' => 'example@mail.com',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'mail_profile_url', array(
        'default' => 'example@mail.com',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'mail_txt_url', array(
    'label'       => __('Email Profile', 'pureFolio'),
    'description' => __('Input text and your Email address', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'mail_profile_txt',
        'url'  => 'mail_profile_url',
    ),
)));

// github Profile
$wp_customize->add_setting(
    'github_profile_txt',
    array(
        'default' => 'myUsername',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'github_profile_url',
    array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'github_txt_url', array(
    'label'       => __('Github Profile', 'pureFolio'),
    'description' => __('Input text and link to your Github profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'github_profile_txt',
        'url'  => 'github_profile_url',
    ),
)));

// X Profile
$wp_customize->add_setting(
    'x_profile_txt',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'x_profile_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'x_txt_url', array(
    'label'       => __('𝕏 (Twitter) Profile', 'pureFolio'),
    'description' => __('Input text and link to your 𝕏 profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'x_profile_txt',
        'url'  => 'x_profile_url',
    ),
)));

// Facebook Profile
$wp_customize->add_setting(
    'facebook_profile_txt',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'facebook_profile_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'facebook_txt_url', array(
    'label'       => __('Facebook Profile', 'pureFolio'),
    'description' => __('Input text and link to your Facebook profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'facebook_profile_txt',
        'url'  => 'facebook_profile_url',
    ),
)));

// Instagram Profile
$wp_customize->add_setting(
    'instagram_profile_txt',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'instagram_profile_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'instagram_txt_url', array(
    'label'       => __('Instagram Profile', 'pureFolio'),
    'description' => __('Input text and link to your Instagram profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'instagram_profile_txt',
        'url'  => 'instagram_profile_url',
    ),
)));


// Whatsapp Profile
$wp_customize->add_setting(
    'whatsapp_profile_txt',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_setting(
    'whatsapp_profile_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new Clarusmod_Txt_Url_Custom_Control($wp_customize, 'whatsapp_txt_url', array(
    'label'       => __('Whatsapp Profile', 'pureFolio'),
    'description' => __('Input text and link to your Whatsapp profile', 'pureFolio'),
    'section'     => 'contact_Sec',
    'settings'   => array(
        'text' => 'whatsapp_profile_txt',
        'url'  => 'whatsapp_profile_url',
    ),
)));