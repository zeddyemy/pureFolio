<?php

/**=====================================
 * BLOG PAGE PANEL
=======================================*/
$blogPagePanel = new Clarusmod_Customize_Panel($wp_customize, 'blog_page_panel_id', array(
    'title' => 'Blog Page',
    'description' => esc_html__('This is where all blog post are listed', 'pureFolio'),
    'priority' => 40,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($blogPagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// blog page 'Title' section with its settings and controls.
include_once dirname(__FILE__) . '/blog-page-panel/blog-title.php';

// blog page 'Sidebar' section with its settings and controls.
include_once dirname(__FILE__) . '/blog-page-panel/blog-sidebar.php';