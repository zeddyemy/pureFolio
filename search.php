<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pureFolio
 */

get_header(); 

get_template_part('template-parts/search-page', get_post_format());

get_footer(); 

?>