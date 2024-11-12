<?php

function pf_save_portfolio_meta_boxes($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['portfolio_url'])) {
        update_post_meta($post_id, 'portfolio_url', esc_url($_POST['portfolio_url']));
    }
    
    if (isset($_POST['portfolio_overview'])) {
        update_post_meta($post_id, 'portfolio_overview', wp_kses_post($_POST['portfolio_overview']));
    }
    
    if (isset($_POST['portfolio_tools'])) {
        update_post_meta($post_id, 'portfolio_tools', sanitize_text_field($_POST['portfolio_tools']));
    }
}

add_action('save_post', 'pf_save_portfolio_meta_boxes');


function add_portfolio_meta_boxes()
{
    // url meta box
    add_meta_box(
        'portfolio_url',
        'Portfolio URL',
        'render_portfolio_url_meta_box',
        'portfolios', // custom post type name
        'normal',
        'default'
    );

    // overview meta box
    add_meta_box(
        'portfolio_overview',
        'Overview',
        'render_portfolio_overview_meta_box',
        'portfolios', // custom post type name
        'normal',
        'default'
    );

    // tools meta box
    add_meta_box(
        'portfolio_tools',
        'Tools',
        'render_portfolio_tools_meta_box',
        'portfolios', // custom post type name
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'add_portfolio_meta_boxes');

// Render the contents of the url meta box
function render_portfolio_url_meta_box($post)
{
    $portfolio_url = get_post_meta($post->ID, 'portfolio_url', true);

    echo '<label for="portfolio_url">Portfolio URL:</label> &nbsp;&nbsp;&nbsp;';
    echo '<input type="url" id="portfolio_url" name="portfolio_url" value="' . esc_url($portfolio_url) . '" size="30" placeholder="Add url" />';
}

// Render the contents of the overview meta box
function render_portfolio_overview_meta_box($post)
{
    $overview = get_post_meta($post->ID, 'portfolio_overview', true);
    $max_char = 250; // set character limit

    echo '<label for="portfolio_overview">Overview (Max' . $max_char . ' characters):</label> &nbsp;&nbsp;&nbsp<br>;';
    echo '<textarea id="portfolio_overview" name="portfolio_overview" rows="4" cols="50" maxlength="' . $max_char . '">' . esc_textarea($overview) . '</textarea>';

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

// Render the contents of the tools meta box
function render_portfolio_tools_meta_box($post)
{
    $tools = get_post_meta($post->ID, 'portfolio_tools', true);

    echo '<label for="portfolio_tools">Tools (separate with a comma):</label> &nbsp;&nbsp;&nbsp;';
    echo '<input type="text" id="portfolio_tools" name="portfolio_tools" value="' . esc_attr($tools) . '" size="30" placeholder="Enter tools or skills" />';
}


// Save the meta box data
// function save_portfolio_url_meta_box($post_id)
// {
//     if (!isset($_POST['portfolio_url_nonce_field']) || !wp_verify_nonce($_POST['portfolio_url_nonce_field'], 'portfolio_url_nonce')) {
//         return;
//     }

//     if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
//         return;
//     }

//     if (!current_user_can('edit_post', $post_id)) {
//         return;
//     }

//     if ($post_id && isset($_POST['portfolio_url'])) {
//         update_post_meta($post_id, 'portfolio_url', esc_url($_POST['portfolio_url']));
//     }
// }