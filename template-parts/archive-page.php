<?php
/*
    Template part : Archive Page
    Description : This Template Part Is Made Specifically For The Archive Page.
    The Archive Page is the template thats displays all post from An Archive on the site. 
    This Template Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Archive Page.

    Template Parts :    1) Archive Post template.

*/

global $pureFolioThemeMods;

?>

<section class="wrapper blogPage col-12 flex layout">
    <section class=" col-12 main">
        <?php
        // Archive post template part
        get_template_part('template-parts/archive-page-parts/archive-post', get_post_format());
        ?>
    </section>
</section>