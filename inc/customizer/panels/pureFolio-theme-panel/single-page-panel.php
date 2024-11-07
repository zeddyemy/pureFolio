<?php

/**=====================================
 * SINGLE PAGE PANEL
=======================================*/
$singlePagePanel = new Clarusmod_Customize_Panel($wp_customize, 'single_blog_panel_id', array(
    'title' => 'Single Blog Page',
    'description' => esc_html__('Customize how the blog pages looks like', 'pureFolio'),
    'priority' => 50,
    'panel' => 'pureFolioTheme_panel_id',
));
$wp_customize->add_panel($singlePagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// single blog page 'Share Buttons' section with its settings and controls.
include_once dirname(__FILE__) . '/single-page-panel/share-buttons.php';

// single blog page 'Excerpt' section with its settings and controls.
include_once dirname(__FILE__) . '/single-page-panel/excerpt.php';

// single blog page 'featured image' section with its settings and controls.
include_once dirname(__FILE__) . '/single-page-panel/featured-image.php';

// single blog page 'sidebar' section with its settings and controls.
include_once dirname(__FILE__) . '/single-page-panel/single-page-side.php';