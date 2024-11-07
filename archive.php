<?php

/**
 * The template for displaying Archive pages
 *
 * @package pureFolio
 */
global $pureFolioThemeMods, $pureFolioBodyClass;
$pureFolioThemeMods = pureFolio_theme_mods();
$pureFolioBodyClass[] = 'noHero';

get_header();

get_template_part('template-parts/archive-page', get_post_format());

get_footer();
