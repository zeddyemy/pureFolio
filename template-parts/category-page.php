<?php
/*
    Template part : Category Page
    Description : This Template Part Is Made Specifically For The Category Page.
    The Category Page is the template thats displays all post from a particular Category on the site. 
    This Template Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Category Page.

    Template Parts :    1) category Post template.

*/

global $pureFolioThemeMods;

?>

<section class="wrapper blogPage col-12 flex layout">
    <section class=" col-12 main">
        <?php
        // category post template part
        get_template_part('template-parts/category-page-parts/category-post', get_post_format());
        ?>
    </section>
</section>