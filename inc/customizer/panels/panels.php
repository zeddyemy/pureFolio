<?php

/**=====================================
 * pureFolio THEME SETTINGS PANEL
=======================================*/
$pureFolioThemePanel = new Clarusmod_Customize_Panel($wp_customize, 'pureFolioTheme_panel_id', array(
    'title' => 'Pure Folio Theme Settings',
    'priority' => 10,
));
$wp_customize->add_panel($pureFolioThemePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Colors Panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/colors-panel.php';

// Header Panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/header-panel.php';

// Footer Panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/footer-panel.php';

// Frontpage Panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/frontpage-panel.php';

// Blog page Panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/blog-page-panel.php';

// Singular blog Page panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/single-page-panel.php';

// Singular Portfolio Page panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/single-folio-page-panel.php';

// Pages panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/pages-panel.php';

// Other settings panel
include_once dirname(__FILE__) . '/pureFolio-theme-panel/other-settings-panel.php';
