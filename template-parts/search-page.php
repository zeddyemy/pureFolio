<?php
/*
    Template part : Search Page
    Description : This Template Part Is Made Specifically For The Search Page.
    The Search Page is the template thats displays search results of a particular Search on the site. 
    This Template Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Search Page.

    Template Parts :    1) Search Post template.

*/

global $pureFolioThemeMods;

?>

<section class="wrapper blogPage col-12 flex layout">
    <section class=" col-12 main">
        <?php
        // Search blog post template part
        get_template_part('template-parts/search-page-parts/search-results', get_post_format());
        ?>
    </section>
</section>