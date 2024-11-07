<?php
/*
    Template part : Single Portfolio Page
    Description : This Template Part Is Made Specifically For The Single Portfolio Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Page.

    Template Parts : 	1) Hero Header part.
						2) None template part.

*/
global $pureFolioThemeMods;
$portfolioOverview = get_post_meta(get_the_ID(), 'portfolio_overview', true);
$portfolioURL = get_post_meta(get_the_ID(), 'portfolio_url', true);
$portfolioTools = get_post_meta(get_the_ID(), 'portfolio_tools', true);

if ($pureFolioThemeMods['toggle_folio_hero_header']) {
    get_template_part('template-parts/single-folio-page-parts/hero-header', get_post_format());
}

?>

<section class="wrapper singlePage col-12 flex layout">
    <section class="col-9 main">
        <?php if (have_posts()) :

            while (have_posts()) : the_post();

                if (!empty($portfolioOverview) || !empty($portfolioURL) || !empty($portfolioTools)) :
                    get_template_part('template-parts/single-folio-page-parts/single-folio-overview', get_post_format());
                endif;

                get_template_part('template-parts/single-folio-page-parts/single-folio-content', get_post_format());

            endwhile;

        else :

            // if there is nothing on the page
            get_template_part('template-parts/none', get_post_format()); // None template part

        endif; ?>
    </section>

</section>