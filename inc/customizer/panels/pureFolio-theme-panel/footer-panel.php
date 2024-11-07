<?php

/**=====================================
 * FOOTER PANEL
=======================================*/
$footerPanel = new Clarusmod_Customize_Panel($wp_customize, 'footer_panel_id', array(
    'title' => 'Footer',
    'priority' => 30,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($footerPanel);

/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// site identity Section with its settings and controls.
include_once dirname(__FILE__) . '/footer-panel/credits.php';