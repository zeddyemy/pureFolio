<?php

/**
 * function that sets card structure of each Post Types such as,
 * service, portfolio or default post type. (POST CARD)
 * 
 * @author Emmanuel Zeddy
 * @package pureFolio
 */


// POST CARD FOR EACH SERVICE POST TYPE
function get_service_card()
{
    // Retrieve service data
    $service_title = get_the_title();
    $service_excerpt = get_the_excerpt();
    $service_icon = get_post_meta(get_the_ID(), 'service_icon', true); ?>

    <article class="card serCard" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
        <i class="<?php echo $service_icon ?>"></i>
        <label><?php echo $service_title ?></label>
        <span> <?php echo $service_excerpt ?></span>
    </article>

<?php }

function viewMore_service_card() {
    global $pureFolioThemeMods; ?>
    <div class="card serCard" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
        <label><?php echo esc_html($pureFolioThemeMods['additional_card_title']); ?></label>
        <span><?php echo esc_html($pureFolioThemeMods['additional_card_content']); ?></span>
        <?php pureFolio_render_btn($pureFolioThemeMods['additional_card_btn'], get_post_type_archive_link('services'), 'plainBtn'); ?>
    </div>

<?php }


// POST CARD FOR EACH PORTFOLIO POST TYPE
function get_portfolio_card() {
    // Retrieve portfolio data
    $portfolio_title = get_the_title();
    $portfolio_overview = short_portfolio_overview();
    $portfolio_url = get_post_meta(get_the_ID(), 'portfolio_url', true); ?>

    <article class="card folioCard" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
        <?php if (is_search()) {
            $postType = (get_post_type() === 'portfolios') ? 'Portfolio' : ((get_post_type() === 'post') ? 'Blog' : '');
            if (!empty($postType)) { ?>
                <span class="postType"> <?php echo $postType; ?> </span>
        <?php }
        }
        ?>
        <div class="fitImg cardImg">
            <a href="<?php the_permalink() ?>" aria-label="<?php echo $portfolio_title; ?>" title="<?php echo $portfolio_title; ?>">
                <?php theme_post_thumb(); ?>
            </a>
        </div>
        <div class="ovrLay flex flexCenter">
            <div class="cardBody txtShadowDrk">
                <a href="<?php the_permalink() ?>" rel="bookmark" aria-label="<?php echo $portfolio_title; ?>" title="<?php echo $portfolio_title; ?>"> <label><?php echo $portfolio_title; ?></label> </a>
                <span> <?php echo $portfolio_overview ?></span>
            </div>
        </div>
    </article>
<?php
}


// POST CARD FOR EACH DEFAULT POST TYPE
function get_default_card() { ?>

    <article class="card blogCard" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
        <?php if (is_search()) {
            $postType = (get_post_type() === 'portfolios') ? 'Portfolio' : ((get_post_type() === 'post') ? 'Blog' : '');
            if (!empty($postType)) { ?>
                <span class="postType"> <?php echo $postType; ?> </span>
        <?php }
        }
        ?>
        <div class="fitImg cardImg">
            <a href="<?php the_permalink() ?>" aria-label="<?php the_title() ?>" title="<?php the_title() ?>">
                <?php theme_post_thumb(); ?>
            </a>
        </div>
        <div class="ovrLay">
            <div class="cardBody txtShadowDrk">
                <h3 class="title">
                    <a href="<?php the_permalink() ?>" aria-label="<?php the_title() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title(); ?> </a>
                </h3>
            </div>
        </div>
    </article>
<?php }
