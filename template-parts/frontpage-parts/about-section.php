<?php

global $pureFolioThemeMods;
?>

<section id="about" class="about">
    <div class="container col-12">
        <div class="container col-12 noPad flex flexCenter row">
            <div class="noPad flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <div class="txtContain">
                    <?php if ($pureFolioThemeMods['toggle_about_title'] == true) : ?>
                        <div class="secTitle flex flexStart row">
                            <h2 class="title"> <?php echo $pureFolioThemeMods['about_sec_title']; ?> </h2>
                        </div>
                    <?php endif; ?>
                    
                    <p><?php echo $pureFolioThemeMods['about_sec_content']; ?></p>

                    <?php if ($pureFolioThemeMods['toggle_about_readMore_btn'] == true) :
                        pureFolio_render_btn($pureFolioThemeMods['about_readMore_btn_text'], $pureFolioThemeMods['about_readMore_btn_url']);
                    endif; ?>
                </div>
            </div>
            <?php if ($pureFolioThemeMods['toggle_about_sec_img'] == true) : ?>
                <div class="noPad" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <div class="card logo">
                        <div class="cardImg">
                            <img src="<?php echo $pureFolioThemeMods['about_sec_img']; ?>" alt="<?php echo $pureFolioThemeMods['about_sec_title'] ?>">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>