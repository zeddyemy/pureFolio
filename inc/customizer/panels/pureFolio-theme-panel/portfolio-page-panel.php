<?php

/**=====================================
 * PORTFOLIO ARCHIVE PAGE PANEL
=======================================*/
$portfolioPagePanel = new Clarusmod_Customize_Panel($wp_customize, 'portfolio_archive_panel_id', array(
    'title' => 'Portfolio Archive Page',
    'description' => esc_html__('This is where all portfolio post are listed', 'pureFolio'),
    'priority' => 50,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($portfolioPagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// blog page 'Title' section with its settings and controls.
include_once dirname(__FILE__) . '/portfolio-archive-panel/portfolio-archive-title.php';

// blog page 'Sidebar' section with its settings and controls.
include_once dirname(__FILE__) . '/portfolio-archive-panel/portfolio-archive-sidebar.php';
