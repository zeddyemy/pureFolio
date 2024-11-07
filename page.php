<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pureFolio
 */

global $pureFolioThemeMods, $pureFolioPageThemeMods, $pureFolioBodyClass;
$pureFolioThemeMods = pureFolio_theme_mods();
$pureFolioPageThemeMods = pureFolio_page_theme_mods();

if (!$pureFolioPageThemeMods['toggle_hero_header']) {
    $pureFolioBodyClass[] = 'noHero';
}

get_header();

get_template_part('template-parts/pages', get_post_format());

get_footer();
