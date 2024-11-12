<?php

function pf_save_service_meta_boxes($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Add custom meta box for icon selection
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, 'service_icon', sanitize_text_field($_POST['service_icon']));
    }

}
add_action('save_post', 'pf_save_service_meta_boxes');

function add_service_meta_boxes() {
    // icon meta box
    add_meta_box(
        'service_icon',
        'Service Icon',
        'render_service_icon_meta_box',
        'services',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_service_meta_boxes');

function render_service_icon_meta_box($post)
{
    $selected_icon = get_post_meta($post->ID, 'service_icon', true);
    $icon_choices = get_icons_choices(true);

    echo '<label for="service_icon" style="display:block;margin:10px 0px;font-weight:bold;">Select an Icon:</label>';
    echo '<select name="service_icon" id="service_icon">';

    if (is_array($icon_choices)) {
        foreach ($icon_choices as $value => $label) {
            $selected = ($selected_icon === $value || (empty($selected_icon) && $value === 'bx bx-home')) ? 'selected="selected"' : '';
            echo '<option value="' . esc_attr($value) . '"' . $selected . '>' . esc_html($label) . '</option>';
        }
    }

    echo '</select>';
}