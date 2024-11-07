<?php

global $pureFolioThemeMods;

if ($pureFolioThemeMods['toggle_folio_featuredImg']) {
    $thisPageHeroHeaderImg = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $thisPageHeroHeaderImg = $pureFolioThemeMods['folio_hero_header_img'];
}


?>

<section class="wrapper col-12 portfolio-heroHeader">

    <section id="heroHeader" class="heroHeader noPad fitImg" style="background-image: url('<?php echo $thisPageHeroHeaderImg; ?>');">
        <div class="container col-12">
            <div class="slide flex flexCenter">
                <div class="heroHeader-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <h1> <?php the_title(); ?> </h1>
                </div>
            </div>
        </div>
    </section>

</section>