<?php

/**=====================================
 * OTHER SETTINGS PANEL
=======================================*/

$otherSettingsPanel = new Clarusmod_Customize_Panel($wp_customize, 'other_settings_panel_id', array(
    'title'    => __('Other Settings', 'pureFolio'),
    'description' => esc_html__('Other settings for your site.', 'pureFolio'),
    'priority' => 200,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($otherSettingsPanel);




/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Button Style Section with its settings and controls.
include_once dirname(__FILE__) . '/other-settings-panel/button-style.php';

// Image Placeholder Section with its settings and controls.
include_once dirname(__FILE__) . '/other-settings-panel/image-placeholder.php';

// Background Image Section.
include_once dirname(__FILE__) . '/other-settings-panel/bg-image.php';
