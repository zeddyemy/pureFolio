<?php

/**=====================================
 * SINGLE PAGE PANEL
=======================================*/
$singlePagePanel = new Clarusmod_Customize_Panel($wp_customize, 'pages_panel_id', array(
    'title' => 'Pages',
    'description' => esc_html__('Customize how pages on your site looks like. This includes contact page, about page, e.t.c', 'pureFolio'),
    'priority' => 60,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($singlePagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Settings and control for default wordpress pages
include_once dirname(__FILE__) . '/pages-panel/default-pages.php';

// Settings and control for each wordpress pages
include_once dirname(__FILE__) . '/pages-panel/each-pages.php';