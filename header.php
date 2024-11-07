<?php

/**
 * The header for our theme
 *
 * @package pureFolio
 */

global $pureFolioThemeMods, $pureFolioBodyClass;
$pureFolioThemeMods = pureFolio_theme_mods();

$siteName = !empty($pureFolioThemeMods['short_site_title']) ? $pureFolioThemeMods['short_site_title'] : get_bloginfo('name');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class($pureFolioBodyClass); ?>>
    <header id="header">
        <div class="header-c">
            <div class="logo">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <h1>
                        <?php echo $siteName; ?>
                    </h1>
                    <span class="tagline"><?php echo bloginfo('description'); ?></span>
                </a>
            </div>
            <nav class=" nav nav-links">
                <div class="nav-actionBtns flexSB">
                    <div class="actionBtns flex flexCenter">
                        <span class="searchBtn icoBtn"> <i class='bx bx-search'></i> </span>
                        <span class="themeBtn icoBtn"> <i class='bx bxs-moon'></i> </span>
                    </div>
                    <span class="menuCloseBtn icoBtn"> <i class='bx bx-x'></i> </span>
                </div>
                <?php
                $menu_args = array(
                    'menu_class' => 'links',
                    'menu_id' => 'items',
                    'theme_location' => 'main-nav-menu',
                    'container' => 'div',
                    'container_class' => 'links',
                    'container_id' => 'items',
                );
                if (has_nav_menu('main-nav-menu')) {
                    $menu_args['menu_class'] = '';
                    $menu_args['menu_id'] = '';
                    $menu_args['walker'] = new Custom_Nav_Menu();
                }
                wp_nav_menu($menu_args);
                ?>
            </nav>
            <div class="actionBtns flex flexCenter">
                <span class="searchBtn icoBtn"> <i class='bx bx-search'></i> </span>
                <span class="themeBtn icoBtn"> <i class='bx bxs-moon'></i> </span>
                <span class="menuBtn icoBtn btn"> <i class='bx bx-menu'></i> </span>
            </div>
            <div class="nav-overlay"></div>
            <div class="search-block flex flexCenter">
                <div class="search-card card flex flexCenter">
                    <span class="close-search icoBtn">
                        <i class='bx bx-x'></i>
                    </span>
                    <span class="search-title">What are you searching for?</span>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>