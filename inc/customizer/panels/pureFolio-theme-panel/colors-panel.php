<?php

/**=====================================
 * HEADER PANEL
=======================================*/
$colorsPanel = new Clarusmod_Customize_Panel($wp_customize, 'colors_panel_id', array(
    'title' => 'Colors',
    'panel' => 'pureFolioTheme_panel_id',
    'priority' => 10,
));
$wp_customize->add_panel($colorsPanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// base colors Section with its settings and controls.
include_once dirname(__FILE__) . '/colors-panel/base-colors.php';

// header colors Section with its settings and controls.
include_once dirname(__FILE__) . '/colors-panel/header-colors.php';

// footer colors Section with its settings and controls.
include_once dirname(__FILE__) . '/colors-panel/footer-colors.php';