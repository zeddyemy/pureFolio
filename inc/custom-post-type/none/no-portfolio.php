<?php


function no_portfolio_post()
{
    $portfolios_query = new WP_Query(array(
        'post_type' => 'portfolios',
        'posts_per_page' => -1,
    )); ?>

    <section class="content-none flex flexCenter">
        <div class="card folioCard noneCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <?php  if (!$portfolios_query->have_posts()) :
                if (current_user_can('administrator')) : ?>
                    <label>NO PORTFOLIOS</label>
                    <span> Oops! Seems you do not have any portfolio yet. Please go to the dashboard to add a new portfolio</span>
                    <?php pureFolio_render_btn('Add New Portfolio', admin_url('post-new.php?post_type=portfolios'), 'plainBtn');
                else : ?>
                    <label> No portfolios </label>
                    <span>Sorry we currently do not have any portfolio to show, but be rest assured that we'll have something to show you soon.</span>
                <?php endif;
            endif; ?>
        </div>
    </section>
<?php
}
