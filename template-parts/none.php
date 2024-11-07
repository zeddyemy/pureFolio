<?php

/**
 * Template Name: None
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pureFolio
 */

global $pureFolioBodyClass;
$pureFolioBodyClass[] = 'noneTemplate';
$secClass = is_post_type_archive('portfolios') || is_post_type_archive('services') ? 'isArchive' : '';

?>

<section class="content-none card flex flexCenter <?php echo $secClass; ?>">
    <?php
    if (is_front_page() || is_home() && current_user_can('publish_posts')) :

        printf(
            '<p>' . wp_kses(
                /* translators: 1: link to WP admin new post page. */
                __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pureFolio'),
                array(
                    'a' => array(
                        'href' => array(),
                    ),
                )
            ) . '</p>',
            esc_url(admin_url('post-new.php'))
        );

    elseif (is_search()) : ?>

        <h2>Search result for: "<?php the_search_query(); ?>"</h2>
        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pureFolio'); ?></p>
        <?php get_search_form();

    elseif (is_author()) : ?>
        
        <p><?php _e('No posts by this author yet. Perhaps searching for other contents can help.'); ?></p>
        <?php get_search_form();

    elseif (is_post_type_archive('portfolios')) :
        
        echo no_portfolio_post();

    elseif (is_post_type_archive('services')) :
        
        echo no_service_post(); ?>

    <?php else : ?>

        <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pureFolio'); ?></p>

        <?php get_search_form(); ?>

    <?php endif; ?>

</section>