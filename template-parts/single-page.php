<?php
/*
    Template part : Single Page
    Description : This Template Part Is Made Specifically For The Single Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Single Page.

    Template Parts : 	1) single-content template part.
						2) None template part.
						3) The Side Bar.

*/
global $pureFolioThemeMods;
$mainSecWidth = ($pureFolioThemeMods['toggle_single_sidebar'] == true) ? 'col-8' : 'col-9';
?>

<section class="wrapper singlePage col-12 flex layout">
    <section class=" <?php echo $mainSecWidth; ?> main">
        <?php if (have_posts()) :

            while (have_posts()) : the_post();

                get_template_part('template-parts/singlepage-parts/single-content', get_post_format()); //single-content template part.

            endwhile;

        else :

            // if there is nothing on the page
            get_template_part('template-parts/none', get_post_format()); // None template part

        endif; ?>
    </section>

    <?php if ($pureFolioThemeMods['toggle_single_sidebar'] == true) { ?>
        <section class="col-4 side">
            <?php get_sidebar('single'); // The Side Bar. 
            ?>
        </section>
    <?php } ?>

</section>