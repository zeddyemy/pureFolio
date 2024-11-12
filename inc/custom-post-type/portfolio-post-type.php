<?php

// Register Custom Post Type for Portfolios
if (!function_exists('custom_post_type_portfolios')) {
    function custom_post_type_portfolios() {
        $labels = array(
            'name'               => __('Portfolios', 'pureFolio'),
            'singular_name'      => __('Portfolio', 'pureFolio'),
            'menu_name'          => __('Portfolios', 'pureFolio'),
            'all_items'          => __('All Portfolios', 'pureFolio'),
            'add_new'            => __('Add New Portfolio', 'pureFolio'),
            'add_new_item'       => __('Add New Portfolio', 'pureFolio'),
            'edit_item'          => __('Edit Portfolio', 'pureFolio'),
            'new_item'           => __('New Portfolio', 'pureFolio'),
            'view_item'          => __('View Portfolio', 'pureFolio'),
            'search_items'       => __('Search Portfolios', 'pureFolio'),
            'not_found'          => __('No Portfolios found', 'pureFolio'),
            'not_found_in_trash' => __('No Portfolios found in Trash', 'pureFolio'),
            'parent_item_colon'  => __('Parent Portfolio:', 'pureFolio'),
        );

        $args = array(
            'label'               => __('Portfolios', 'pureFolio'),
            'description'         => __('Portfolios owned by individual or brand', 'pureFolio'),
            'labels'              => $labels,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'query_var'           => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-portfolio',
            'rewrite'             => array('slug' => 'portfolios'),
            'supports'            => array('title', 'thumbnail', 'editor'),
            'hierarchical'        => false,
            'menu_position'       => 5,
            'show_in_rest' => true,
            'taxonomies' => array('portfolio_category', 'portfolio_tag'), // Attach custom taxonomies
        );

        register_post_type('portfolios', $args);

        // Include Portfolio Taxonomies
        require get_template_directory() . '/inc/custom-post-type/portfolio/taxonomies.php';

        // Add custom meta boxes for portfolio post type
        require get_template_directory() . '/inc/custom-post-type/portfolio/meta-boxes.php';

    }
    add_action('init', 'custom_post_type_portfolios', 1);

    /*---------------------------
    HELPER FUNCTIONS
    ---------------------------*/
    // Display portfolio Overview on Singular Portfolio Pages
    function get_portfolio_overview() {
        $portfolioOverview = get_post_meta(get_the_ID(), 'portfolio_overview', true);
        if (!empty($portfolioOverview)) :
            echo '<h2 class="title article-card-title">Overview</h2>';
            echo '<div class="excerpt">' . $portfolioOverview . '</div>';
        endif;
    }

    function short_portfolio_overview($length = 135) {
        $portfolioOverview = get_post_meta(get_the_ID(), 'portfolio_overview', true);
        if (strlen($portfolioOverview) > $length) {
            $portfolioOverview = substr($portfolioOverview, 0, $length);
            $portfolioOverview = rtrim($portfolioOverview, " \t\n\r\0\x0B"); // Remove trailing whitespace
            $portfolioOverview .= '... <a style="color: var(--theme-clr); font-family: var(--font-four); font-weight: 800;"> Read More </a>';
        }
        return $portfolioOverview;
    }
    
    // Display portfolio URL on Singular Portfolio Pages
    function get_portfolio_url() {
        $portfolioURL = get_post_meta(get_the_ID(), 'portfolio_url', true);
        if (!empty($portfolioURL)) :
            echo '<a class="portfolio-url" href="' . $portfolioURL . '" target="_blank"> <span>View Website</span> </a>';
        endif;
    }

    // Display Tools on Singular Portfolio Pages
    function get_portfolio_tools() {
        $allTools = get_post_meta(get_the_ID(), 'portfolio_tools', true);

        if (!empty($allTools)) {
            $tools = explode(',', $allTools); // split tools by comma
            echo '<div class="folio-tools">';
            echo '<h3>Tools</h3> ';
            echo '<div class="used-tools row">';
            // loop through and display each tool separately
            foreach ($tools as $tool) {
                echo '<span class="tool">'. esc_html(trim($tool)) .'</span>';
            }
            echo '</div>';
            echo '</div>';
        }
    }
}


include_once dirname(__FILE__) . '/none/no-portfolio.php';