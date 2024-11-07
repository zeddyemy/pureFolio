<?php
/*
    Template part : Front Page
    Description : This Template Part Is Made Specifically For The Front Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) hero Header template part
                        2) about section template part
                        3) goal section template part
                        4) service section template part
                        5) portfolio section template part
                        6) blog section template part

*/

global $pureFolioThemeMods;
?>

<section class="wrapper col-12">
    <?php
    if ($pureFolioThemeMods['toggle_hero_header_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/hero-header', get_post_format());
    }

    if ($pureFolioThemeMods['toggle_about_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/about-section', get_post_format());
    }
    if ($pureFolioThemeMods['toggle_goal_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/goal-section', get_post_format());
    }
    if ($pureFolioThemeMods['toggle_services_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/services-section', get_post_format());
    }

    if ($pureFolioThemeMods['toggle_portfolios_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/portfolio-section', get_post_format());
    }
    
    if ($pureFolioThemeMods['toggle_blog_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/blog-section', get_post_format());
    }
    ?>
</section>