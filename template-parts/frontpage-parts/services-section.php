<?php

global $pureFolioThemeMods;

$service_ids = array(
    $pureFolioThemeMods['frontpage_service_card_1'],
    $pureFolioThemeMods['frontpage_service_card_2'],
    $pureFolioThemeMods['frontpage_service_card_3'],
);

// Custom query to retrieve services
$services_query = new WP_Query(array(
    'post_type' => 'services',
    'posts_per_page' => 3,
    'post__in' => $service_ids,
    'orderby' => 'post__in',
));
?>

<section id="services" class="services">
    <div class="container col-12">
        <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
            <h2 class="title"> <?php echo $pureFolioThemeMods['service_section_title']; ?> </h2>
        </div>
        <?php if ($services_query->have_posts()) : ?>
            <div class="grid theServices">
                <?php
                    while ($services_query->have_posts()) :
                        $services_query->the_post();
                        echo get_service_card();
                    endwhile;
                    wp_reset_postdata();
                    echo viewMore_service_card();
                ?>
            </div>
        <?php else:
            echo no_service_post();
        endif; ?>
    </div>
</section>