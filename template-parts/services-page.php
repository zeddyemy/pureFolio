<?php
/*
    Template part : Services Page
    Description : This Template Part Is Made Specifically To Display All Services.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) services-post part

*/

global $pureFolioThemeMods;

?>

<section class="wrapper servicesPage col-12 flex layout">
    <section class=" col-12 main">
        <?php
        // blog template part
        get_template_part('template-parts/services-page-parts/services-post', get_post_format());
        ?>
    </section>
</section>