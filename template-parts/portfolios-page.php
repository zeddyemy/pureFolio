<?php
/*
    Template part : Portfolios Page
    Description : This Template Part Is Made Specifically To Display All Portfolios.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) portfolios-post part

*/

global $pureFolioThemeMods;

?>

<section class="wrapper portfoliosPage col-12 flex layout">
    <section class=" col-12 main">
        <?php
        // blog template part
        get_template_part('template-parts/portfolios-page-parts/portfolios-post', get_post_format());
        ?>
    </section>
</section>