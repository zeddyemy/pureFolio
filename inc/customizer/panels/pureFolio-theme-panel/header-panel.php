<?php

/**=====================================
 * HEADER PANEL
=======================================*/
$headerPanel = new Clarusmod_Customize_Panel($wp_customize, 'header_panel_id', array(
	'title' => 'Header',
	'priority' => 20,
	'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($headerPanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// site identity Section with its settings and controls.
include_once dirname( __FILE__ ) . '/header-panel/site-identity.php';

// Navigation Menu Section with its settings and controls.
include_once dirname( __FILE__ ) . '/header-panel/nav-menu.php';