<?php

/**=====================================
 * FRONTPAGE PANEL
=======================================*/
$frontpagePanel = new Clarusmod_Customize_Panel($wp_customize, 'frontpage_panel_id', array(
    'title' => 'Front Page',
    'description' => esc_html__('Customize how the Front Page Feels And Look'),
    'priority' => 30,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($frontpagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Hero Header Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/hero-header.php';

// About Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/about-section.php';

// Goal Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/goal-section.php';

// services Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/services-section.php';

// portfolios Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/portfolios-section.php';

// blog Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/blog-section.php';

// "Other settings" Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/other-settings-section.php';