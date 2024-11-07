<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE SHARE BUTTON
========================================================*/
// Share Buttons section
$wp_customize->add_section(
    'share_btns',
    array(
        'title'    => __('Share Buttons', 'pureFolio'),
        'panel' => 'single_blog_panel_id',
        'description' => __('Enable Social Media share buttons. This will allow users to share a blog post.', 'pureFolio'),
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SHARE BUTTON
==========================================*/
// Setting and Control To disable Share Button
$wp_customize->add_setting(
    'toggle_share_btns',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_share_btns',
    array(
        'label' => __('Share Button', 'pureFolio'),
        'description' => esc_html__('Use this toggle to Disable or Enable Social Media Share Buttons for a blog post.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_share_btns',
    )
));


// setting & control for facebook button
$wp_customize->add_setting(
    'toggle_facebook_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_facebook_btn',
    array(
        'label' => __('Facebook Button', 'pureFolio'),
        'description' => __('toggle On/Off Facebook Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_facebook_btn',
    )
));


// setting & control for X button
$wp_customize->add_setting(
    'toggle_x_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_x_btn',
    array(
        'label' => __('X (Twitter) Button', 'pureFolio'),
        'description' => __('toggle On/Off X Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_x_btn',
    )
));


// setting & control for Whatsapp button
$wp_customize->add_setting(
    'toggle_whatsapp_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_whatsapp_btn',
    array(
        'label' => __('Whatsapp Button', 'pureFolio'),
        'description' => __('toggle On/Off Whatsapp Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_whatsapp_btn',
    )
));

// setting & control for telegram button
$wp_customize->add_setting(
    'toggle_telegram_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_telegram_btn',
    array(
        'label' => __('Telegram Button', 'pureFolio'),
        'description' => __('toggle On/Off Telegram Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_telegram_btn',
    )
));


// setting & control for pinterest button
$wp_customize->add_setting(
    'toggle_pinterest_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pinterest_btn',
    array(
        'label' => __('Pinterest Button', 'pureFolio'),
        'description' => __('toggle On/Off Pinterest Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_pinterest_btn',
    )
));


// setting & control for linkedin button
$wp_customize->add_setting(
    'toggle_linkedin_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_linkedin_btn',
    array(
        'label' => __('Linkedin Button', 'pureFolio'),
        'description' => __('toggle On/Off Linkedin Share Buttons.', 'pureFolio'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_linkedin_btn',
    )
));