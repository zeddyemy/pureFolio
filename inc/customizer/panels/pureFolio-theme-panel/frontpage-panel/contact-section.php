<?php

/**=====================================
 * CONTACT SECTION PANEL
=======================================*/
/*
$contactSecPanel = new Clarusmod_Customize_Panel($wp_customize, 'contactSec_panel_id', array(
	'title' => __('Contact Section', "pureFolio"),
	'description' => esc_html__('Customize the Contact section on the frontpage'),
	'priority' => 60,
	'panel' => 'frontpage_panel_id',
));
$wp_customize->add_panel($contactSecPanel);
*/

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S CONTACT SECTION
========================================================*/
$wp_customize->add_section(
	'contact_Sec',
	array(
		'title'    => __("Contact Section", "pureFolio"),
		'description' => esc_html__('Tailor your Contact section on the front page to let people know how to reach you or your brand. Control the visibility of the Contact section, title, content, and imagery.', 'pureFolio'),
		'priority' => 60,
		'panel' => 'frontpage_panel_id',
	)
);

/**======================================================
 * CREATE SECTIONS TO MODIFY THE FRONTPAGE'S CONTACT SECTION
========================================================*/

include_once dirname(__FILE__) . '/contact-section/base-settings.php';
include_once dirname(__FILE__) . '/contact-section/socials-settings.php';
