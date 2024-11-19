<?php

global $pureFolioThemeMods;
?>

<section id="contact" class="contact">
    <div class="container col-12">
        <?php if ($pureFolioThemeMods['toggle_contact_title'] == true) : ?>
            <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h2 class="title"> <?php echo $pureFolioThemeMods['contact_sec_title']; ?> </h2>
            </div>
        <?php endif; ?>

        <div class="tagline" style="text-align: center;" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
            <p>Feel free to reach out for projects, collaborations, or just to say hello!</p>
        </div>

        <?php display_socials() ?>
    </div>
</section>