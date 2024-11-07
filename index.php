<?php

/**
 * The main template file
 *
 * @package pureFolio
 */

global $pureFolioBodyClass;
$pureFolioThemeMods = pureFolio_theme_mods();
if (!$pureFolioThemeMods['toggle_hero_header_sec']) {
    $pureFolioBodyClass[] = 'noHero';
}

get_header();

get_template_part('template-parts/frontpage', get_post_format());

get_footer();
