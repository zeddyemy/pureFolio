<?php

function internal_css()
{
    global $pureFolioThemeMods;
    $pureFolioThemeMods = pureFolio_theme_mods();

    $headerTxtColor = !empty($pureFolioThemeMods['header_text_color']) ? $pureFolioThemeMods['header_text_color'] : 'var(--body-txt-clr)';
    $headerBgColor = !empty($pureFolioThemeMods['header_bg_color']) ? $pureFolioThemeMods['header_bg_color'] : 'var(--box-bg-clr-solid)';

    $navbarCaseMod  = $pureFolioThemeMods['nav_text_transform']; // To check If Uppercase is set for the nav items
    $navbarCase = ($navbarCaseMod == 'capitalize') ? 'capitalize' : (($navbarCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $titleCaseMod  = $pureFolioThemeMods['title_text_transform'];
    $titleCase = ($titleCaseMod == 'capitalize') ? 'capitalize' : (($titleCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $footerTxtColor = !empty($pureFolioThemeMods['footer_text_color']) ? $pureFolioThemeMods['footer_text_color'] : 'var(--body-txt-clr)';
    $footerBgColor = !empty($pureFolioThemeMods['footer_bg_color']) ? $pureFolioThemeMods['footer_bg_color'] : 'var(--box-bg-clr-solid)';

    $adminBar = is_admin_bar_showing(); ?>

    <style>
        #header {
            --navbar-background-color: <?php echo $headerBgColor; ?> !important;
        }

        @media screen and (max-width: 1024px) {
            .nav {
                --header-text-color: <?php echo $headerTxtColor;  ?> !important;
            }
        }

        .noHero #header,
        .headerBg {
            --header-text-color: <?php echo $headerTxtColor;  ?> !important;
            --header-background-color: <?php echo $headerBgColor; ?> !important;
            --header-background-image: url(' <?php echo $pureFolioThemeMods['header_bg_image']; ?> ');
        }

        body {
            --theme-clr: <?php echo $pureFolioThemeMods['pureFolio_theme_color'];  ?>;
            --theme-clr-trans: <?php echo $pureFolioThemeMods['pureFolio_theme_color'].'4f';  ?>;
            --footer-txt-clr: <?php echo $footerTxtColor;  ?> !important;
            --footer-bg-clr: <?php echo $footerBgColor; ?> !important;
            --footer-bg-image: url(' <?php echo $pureFolioThemeMods['footer_bg_image']; ?> ');
            --title-text-transform: <?php echo $titleCase; ?>;
            --navbar-text-transform: <?php echo $navbarCase; ?>;
        }

        <?php
        // if custom background color is not set
        if (!$pureFolioThemeMods['background_color']) {
            echo 'body { background-color: var(--body-bg-clr); }';
        }

        if (is_search()) { ?>.postType {
            z-index: 1;
            position: absolute;
            background: var(--theme-clr);
            padding: 5px 10px;
            border-radius: calc(var(--round-conners) - 10px);
            left: 10px;
            top: 10px;
        }

        <?php } ?>
    </style>
<?php
}
add_action('wp_head', 'internal_css');
