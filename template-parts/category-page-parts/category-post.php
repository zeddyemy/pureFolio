<?php

/*
    Template part : Category Post
    Description : This Template Part Is Designed To Display all post from a particular Category on the site.
    This Template Part Also contains Other Templates That Determines How The would Post Looks Like.

    Template Parts :    1)  None Template :> If there are no post in a category.
*/

$disableCategoryPageTitle  = get_theme_mod('disable_catPage_title');
?>
<section class="all-post">
    <?php if (have_posts()) : ?>
        <div class="all-post-title">
            <div class="title"> <?php single_cat_title('', true); ?> </div>
        </div>

        <article class="grid blogCards">
            <?php while (have_posts()) : the_post();
                echo get_default_card();
            endwhile; ?>
        </article>

        <div class="pagination row flexCenter">
            <?php echo paginate_links(); ?>
        </div>
    <?php else :

        get_template_part('template-parts/none', get_post_format()); // None template part

    endif;
    wp_reset_postdata(); ?>
</section>