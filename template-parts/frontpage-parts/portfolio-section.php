<?php

global $pureFolioThemeMods;

// Custom query to retrieve Portfolios
$portfolios_query = new WP_Query(array(
    'post_type' => 'portfolios',
    'posts_per_page' => $pureFolioThemeMods['portfolios_count'],
));

// Fetch portfolio categories
$portfolio_categories = get_terms([
    'taxonomy' => 'portfolio_category',
    'hide_empty' => true,
]);

$cf_class = $pureFolioThemeMods['button_style'] . ' ' . 'category-filter';

?>
<section id="portfolio" class="portfolio">
    <div class="container col-12">
        <div class="card secCard col-12 fitImg" data-aos="fade-up" data-aos-easing="ease-in-out-quart">

            <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h2 class="title"> <?php echo $pureFolioThemeMods['portfolios_sec_title']; ?> </h2>
            </div>

            <nav class="portfolio-categories-filter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
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

            <?php if ($portfolios_query->have_posts()) : ?>
                <div class="grid thePortfolios">
                    <?php
                    while ($portfolios_query->have_posts()) :
                        $portfolios_query->the_post();
                        echo get_portfolio_card();
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php else :
                echo no_portfolio_post();
            endif; ?>

        </div>

    </div>
</section>