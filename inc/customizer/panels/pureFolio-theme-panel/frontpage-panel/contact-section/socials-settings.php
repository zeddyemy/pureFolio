<?php

/**======================================================
 * CREATE SECTIONS TO MODIFY THE FRONTPAGE'S CONTACT SECTION
========================================================*/
$wp_customize->add_section(
    'socials_Sec',
    array(
        'title'    => __("Socials", "pureFolio"),
        'description' => esc_html__('Tailor your Contact section on the front page to let people know how to reach you or your brand. Control the visibility of the Contact section, title, content, and imagery.', 'pureFolio'),
        'priority' => 20,
        'panel' => 'contactSec_panel_id',
    )
);
