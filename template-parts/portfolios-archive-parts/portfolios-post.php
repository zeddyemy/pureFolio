<?php

global $pureFolioThemeMods;

// Fetch portfolio categories
$portfolio_categories = get_terms([
    'taxonomy' => 'portfolio_category',
    'hide_empty' => true,
]);

$cf_class = $pureFolioThemeMods['button_style'] . ' ' . 'category-filter';

?>

<section class="all-post">
    <?php if (have_posts()) : ?>

        <?php if ($pureFolioThemeMods['toggle_folioArchive_title']) : ?>
            <div class="all-post-title">
                <div class="title"> <?php echo $pureFolioThemeMods['folioArchive_title']; ?> </div>
            </div>
        <?php endif; ?>

        <nav class="portfolio-categories-filter">
            <ul>
                <a href="#" class="<?php echo $cf_class ?> active" data-category="all">
                    <li>
                        All
                    </li>
                </a>
                <?php foreach ($portfolio_categories as $category) : ?>
                    <a href="#" class="<?php echo $cf_class ?>" data-category="<?php echo esc_attr($category->slug); ?>">
                        <li>
                            <?php echo esc_html($category->name); ?>
                        </li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- Loader element -->
        <div id="portfolio-loader" class="flex flexCenter" style="display: none;">
            <div class="loader"></div>
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