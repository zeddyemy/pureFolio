<?php

global $pureFolioThemeMods;

?>

<section class="all-post">
    <?php if (have_posts()) : ?>

        <div class="all-post-title">
            <div class="title"> <?php echo 'Our Portfolio'; ?> </div>
        </div>

        <article class="grid thePortfolios">
                <?php

                while (have_posts()) : the_post();

                    echo get_portfolio_card();

                endwhile;
                ?>
        </article>

        <div class="pagination row flexCenter">
            <?php echo paginate_links(); ?>
        </div>

    <?php else :

        get_template_part('template-parts/none', get_post_format()); // None template part

    endif;
    wp_reset_postdata(); ?>
</section>