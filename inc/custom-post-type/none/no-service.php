<?php


function no_service_post()
{
    $services_query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => -1,
    )); ?>

    <section class="content-none flex flexCenter">
        <div class="card serCard noneCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <?php if (current_user_can('administrator')) :
                if ($services_query->have_posts()) : ?>
                    <label>NO SELECTED SERVICES</label>
                    <span> Oops! Seems you haven't selected any of your services to display here yet. PLease Use the button below to go to the customizer and select any Three Services you want displayed here</span>
                    <?php pureFolio_render_btn('Go To Customizer', wp_customize_url(), 'plainBtn'); ?>
                <?php else : ?>
                    <label>NO SERVICES</label>
                    <span> Oops! Seems you do not have any services yet. Please go to the dashboard to add a new service</span>
                    <?php pureFolio_render_btn('Add New Service', admin_url('post-new.php?post_type=services'), 'plainBtn'); ?>
                <?php endif;
            else : ?>
                <label>NO SERVICES</label>
                <span> Sorry we can't show you our services right now, but be rest assured you can always check back to view our services once they are up.</span>
            <?php endif; ?>
        </div>
    </section>
<?php
}
