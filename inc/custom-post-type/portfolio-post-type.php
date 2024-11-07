<?php

// Register Custom Post Type for Portfolios
if (!function_exists('custom_post_type_portfolios')) {
    function custom_post_type_portfolios() {
        $labels = array(
            'name'               => __('Portfolios'),
            'singular_name'      => __('Portfolio'),
            'menu_name'          => __('Portfolios'),
            'all_items'          => __('All Portfolios'),
            'add_new'            => __('Add New'),
            'add_new_item'       => __('Add New Portfolio'),
            'edit_item'          => __('Edit Portfolio'),
            'new_item'           => __('New Portfolio'),
            'view_item'          => __('View Portfolio'),
            'search_items'       => __('Search Portfolios'),
            'not_found'          => __('No Portfolios found'),
            'not_found_in_trash' => __('No Portfolios found in Trash'),
            'parent_item_colon'  => __('Parent Portfolio:'),
        );

        $args = array(
            'label'               => __('Portfolios'),
            'description'         => __('Portfolios owned by individual or brand'),
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
        );

        register_post_type('portfolios', $args);

        // Add custom meta box for portfolio url
        add_action('add_meta_boxes', 'add_portfolio_meta_boxes');
        add_action('save_post', 'save_portfolio_url_meta_box');
        add_action('save_post', 'save_portfolio_overview_meta_box');
        add_action('save_post', 'save_portfolio_tools_meta_box');

        function add_portfolio_meta_boxes() {
            add_meta_box(
                'portfolio_url',
                'Portfolio URL',
                'render_portfolio_url_meta_box',
                'portfolios', // custom post type name
                'normal',
                'default'
            );

            add_meta_box(
                'portfolio_overview',
                'Overview',
                'render_portfolio_overview_meta_box',
                'portfolios', // custom post type name
                'normal',
                'default'
            );

            add_meta_box(
                'portfolio_tools',
                'Tools',
                'render_portfolio_tools_meta_box',
                'portfolios', // custom post type name
                'normal',
                'default'
            );
        }

        // Render the contents of the url meta box
        function render_portfolio_url_meta_box($post) {
            $portfolio_url = get_post_meta($post->ID, 'portfolio_url', true);
            
            echo '<label for="portfolio_url">Portfolio URL:</label> &nbsp;&nbsp;&nbsp;';
            echo '<input type="url" id="portfolio_url" name="portfolio_url" value="' . esc_url($portfolio_url) . '" size="30" placeholder="Add url" />';
        }

        // Save the meta box data
        function save_portfolio_url_meta_box($post_id) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
            
            if ($post_id && isset($_POST['portfolio_url'])) {
                update_post_meta($post_id, 'portfolio_url', esc_url($_POST['portfolio_url']));
            }
        }

        // Render the contents of the overview meta box
        function render_portfolio_overview_meta_box($post) {
            $overview = get_post_meta($post->ID, 'portfolio_overview', true);
            $max_char = 250; // set character limit

            echo '<label for="portfolio_overview">Overview (Max'. $max_char .' characters):</label> &nbsp;&nbsp;&nbsp<br>;';
            echo '<textarea id="portfolio_overview" name="portfolio_overview" rows="4" cols="50" maxlength="'. $max_char .'">' . esc_textarea($overview) . '</textarea>';

            // JavaScript to enforce character limit
            echo '<script>
                jQuery(document).ready(function($) {
                    $("#portfolio_overview").on("input", function() {
                        var text = $(this).val();
                        if (text.length > ' . $max_char . ') {
                            $(this).val(text.substr(0, ' . $max_char . '));
                        }
                    });
                });
                </script>';
        }

        // Save the meta box data
        function save_portfolio_overview_meta_box($post_id) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
            
            if ($post_id && isset($_POST['portfolio_overview'])) {
                update_post_meta($post_id, 'portfolio_overview', wp_kses_post($_POST['portfolio_overview']));
            }
        }

        // Render the contents of the tools meta box
        function render_portfolio_tools_meta_box($post) {
            $tools = get_post_meta($post->ID, 'portfolio_tools', true);

            echo '<label for="portfolio_tools">Tools (separate with a comma):</label> &nbsp;&nbsp;&nbsp;';
            echo '<input type="text" id="portfolio_tools" name="portfolio_tools" value="' . esc_attr($tools) . '" size="30" placeholder="Enter tools or skills" />';
        }

        // Save tools meta box data
        function save_portfolio_tools_meta_box($post_id) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if (!current_user_can('edit_post', $post_id)) {
                return;
            }

            if ($post_id && isset($_POST['portfolio_tools'])) {
                update_post_meta($post_id, 'portfolio_tools', sanitize_text_field($_POST['portfolio_tools']));
            }
        }
    }

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
add_action('init', 'custom_post_type_portfolios', 1);


include_once dirname(__FILE__) . '/none/no-portfolio.php';