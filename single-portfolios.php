<?php

/**
 * The template for displaying single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pureFolio
 */
global $pureFolioThemeMods, $pureFolioBodyClass;
$pureFolioThemeMods = pureFolio_theme_mods();

if (!$pureFolioThemeMods['toggle_folio_hero_header']) {
    $pureFolioBodyClass[] = 'noHero';
}

get_header();

get_template_part('template-parts/single-folio-page', get_post_format());

get_footer();
