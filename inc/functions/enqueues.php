<?php

/**
 * Enqueue pureFolio Theme's Styles and Scripts
 * @author Emmanuel Zeddy <http://zeddyemy.github.io>
 */

if (!is_admin()) {
    // Add async or defer attributes to script enqueues
    function add_async_defer_attribute($tag, $handle) {
        // if script handle contains 'async' or 'defer
        if (strpos($handle, 'async') !== false) {
            $tag = str_replace('<script ', '<script async ', $tag);
        } else if (strpos($handle, 'defer') !== false) {
            $tag = str_replace('<script ', '<script defer ', $tag);
        }
        return $tag;
    }
    add_filter('script_loader_tag', 'add_async_defer_attribute', 10, 2);

    // Function to allow preloading of Styles
    function preload_style($tag, $handle) {
        if (strpos($handle, 'preload') !== false) {
            $preload_tag = str_replace('rel="stylesheet"', 'rel="preload"', $tag);
            return $preload_tag . $tag;
        }
        return $tag;
    }
    add_filter('style_loader_tag', 'preload_style', 10, 2);
}

// Enqueue pureFolio Styles and Scripts
function pureFolio_scripts() {
    global $pureFolioThemeMods;

    // Box Icons.
    wp_enqueue_style('preload-box-icons', get_pureFolio_assets('library/boxicons/css') . 'boxicons.min.css');
	
    // aos library
    wp_enqueue_style('aos', get_pureFolio_assets('library/aos') . 'aos.css');
    wp_enqueue_script('aosJS', get_pureFolio_assets('library/aos') . 'aos.js', '', '1.0', true);
    
    wp_enqueue_style('main', get_pureFolio_assets('css') . 'main.css'); // Main stylesheet
    wp_enqueue_style('header', get_pureFolio_assets('css') . 'header.css'); // Header stylesheet
    wp_enqueue_script('headerJS', get_pureFolio_assets('js') . 'header.js', '', '1.0', true); // Header Script
    wp_enqueue_script('darkmode', get_pureFolio_assets('js') . 'darkmode.js', '', '1.0', true); // Header Script

    if (is_front_page() || is_home()) {
        if ($pureFolioThemeMods['toggle_hero_header_sec'] == true) {
            wp_enqueue_style('hero-header',     get_pureFolio_assets('css') . 'hero-header.css');
        }
        if ($pureFolioThemeMods['toggle_about_sec'] == true) {
            wp_enqueue_style('pureFolioAbout', get_pureFolio_assets('css') . 'about.css');
        }
        if ($pureFolioThemeMods['toggle_goal_sec'] == true) {
            wp_enqueue_style('goal',     get_pureFolio_assets('css') . 'goal.css');
        }
        if ($pureFolioThemeMods['toggle_services_sec'] == true || is_post_type_archive('services')) {
            wp_enqueue_style('services', get_pureFolio_assets('css') . 'services.css');
        }
        if ($pureFolioThemeMods['toggle_portfolios_sec'] == true || is_post_type_archive('portfolios')) {
            wp_enqueue_style('portfolios', get_pureFolio_assets('css') . 'portfolios.css');
        }
        if ($pureFolioThemeMods['toggle_blog_sec'] == true) {
            wp_enqueue_style('blog', get_pureFolio_assets('css') . 'blog.css');
        }
    }

    if (is_single() || is_page()) {
        // enqueue stylesheet for single post.
        wp_enqueue_style('single-css', get_pureFolio_assets('css') . 'single.css');

        if (comments_open() || get_comments_number()) {
            // enqueue stylesheet for the comment section.
            wp_enqueue_style('comment-css', get_pureFolio_assets('css') . 'comments.css');
        }
        if (is_singular('portfolios')) {
            wp_enqueue_style('hero-header',     get_pureFolio_assets('css') . 'hero-header.css');
        }
    }

    if (is_page()) {
        wp_enqueue_style('hero-header',     get_pureFolio_assets('css') . 'hero-header.css');
        wp_enqueue_style('pages',     get_pureFolio_assets('css') . 'pages.css');
    }

    if (is_author()) {
        // enqueue stylesheet for Author page.
        wp_enqueue_style('author-css', get_pureFolio_assets('css') . 'author.css');
    }

    if (is_404()) {
        // enqueue stylesheet for 404 page.
        wp_enqueue_style('404-css', get_pureFolio_assets('css') . '404.css');
    }

    if (is_page('blog')) {
        wp_enqueue_style('blog', get_pureFolio_assets('css') . 'blog.css');
    }

    if (is_post_type_archive('portfolios')) {

        wp_enqueue_style('portfolios', get_pureFolio_assets('css') . 'portfolios.css');

    } elseif (is_post_type_archive('services')) {

        wp_enqueue_style('services', get_pureFolio_assets('css') . 'services.css');

    } elseif (is_category() || is_search() || is_archive() || is_author()) {

        wp_enqueue_style('blog', get_pureFolio_assets('css') . 'blog.css');
    }
    if (is_search()) {
        wp_enqueue_style('portfolios', get_pureFolio_assets('css') . 'portfolios.css');
        wp_enqueue_style('blog', get_pureFolio_assets('css') . 'blog.css');
    }
}
add_action('wp_enqueue_scripts', 'pureFolio_scripts');

// add noHero class to body tag
function add_noHero_body_class($classes) {
    if (!is_front_page() && !is_home() && !is_page() && !is_singular('portfolios')) {
        $classes[] = 'noHero';
    }
    return $classes;
}
add_filter('body_class', 'add_noHero_body_class');

// global variable for body classes
global $pureFolioBodyClass;
$pureFolioBodyClass = array();