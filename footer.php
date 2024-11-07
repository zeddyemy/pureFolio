<?php

/**
 * pureFolio footer
 *
 * @package pureFolio
 */

global $pureFolioThemeMods;

if (is_active_sidebar('footer-widget-one') || is_active_sidebar('footer-widget-two') || is_active_sidebar('footer-widget-three') || is_active_sidebar('footer-widget-four')) {
    $footerColumns = true;
} else {
    $footerColumns = false;
}

?>
<footer class="footer col-12">
    <?php if ($footerColumns) : ?>
        <div class="footerColumns grid">
            <?php if (is_active_sidebar('footer-widget-one')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-one'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-two')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-two'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-three')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-three'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-four')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-four'); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="footer-b flex flexCenter">
        <?php
        if ($pureFolioThemeMods['toggle_footer_copyright']) {
            echo pureFolio_copyright();
        }
        if ($pureFolioThemeMods['toggle_footer_dev_credits']) {
            echo pureFolio_author_url('https://zeddyemy.github.io', 'Emmanuel Olowu');
        }
        if ($pureFolioThemeMods['toggle_footer_platform_info']) {
            echo the_wp_link();
        }
        ?>

    </div>
</footer>



<?php wp_footer(); ?>
<script>
    AOS.init({
        duration: 900,
        once: false,
    });
</script>

</body>

</html>