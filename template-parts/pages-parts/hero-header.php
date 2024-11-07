<?php

global $pureFolioThemeMods;
global $pureFolioPageThemeMods;

$heroHeaderSubtext = $pureFolioPageThemeMods['hero_header_subtext'];
$thisPageHeroHeaderImg = (!empty($pureFolioPageThemeMods['hero_header_img'])) ? $pureFolioPageThemeMods['hero_header_img'] :
$pureFolioThemeMods['pages_hero_header_img'];


?>

<section class="wrapper col-12 pages-heroHeader">
    
    <section id="heroHeader" class="heroHeader noPad fitImg" style="background-image: url('<?php echo $thisPageHeroHeaderImg; ?>');">
        <div class="container col-12">
            <div class="slide flex flexCenter">
                <div class="heroHeader-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <h1> <?php the_title(); ?> </h1>

                    <?php if (!empty($heroHeaderSubtext)) { ?>
                        <p> <?php echo $heroHeaderSubtext; ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
</section>