<?php

global $pureFolioThemeMods;
$query = new WP_Query(array(
    'post_type' => 'post',
    'orderby' => 'rand',
    'posts_per_page' => 3,
));

?>
<section id="blog" class="blog">
    <div class="container col-12">
        <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
            <h2 class="title"> <?php echo $pureFolioThemeMods['blog_sec_title']; ?> </h2>
        </div>
        <div class="grid blogCards">
            <?php while ($query->have_posts()) :
                $query->the_post();
                echo get_default_card();
            endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>