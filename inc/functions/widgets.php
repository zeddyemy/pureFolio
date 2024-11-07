<?php


//function that registers widget areas
function pureFolio_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Single Page Sidebar', 'pureFolio'),
        'id' => 'sidebar-single',
        'description' => __( 'This Widget space is for the Sidebar that will only appear on single pages', 'pureFolio' ),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array( // for pages
        'name' =>__( 'Sidebar For Pages', 'pureFolio'),
        'id' => 'sidebar-pages',
        'description' => __( 'This Sidebar Will appear only on the website pages like the about us page', 'pureFolio' ),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar(array( // for category page
        'name' => __('Sidebar For Category Page', 'pureFolio'),
        'id' => 'sidebar-category',
        'description' => __('This Sidebar Will appear only on the Category. That is, it will appear on the page of each category you created', 'pureFolio'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for search page
        'name' => __('Sidebar For search Page', 'pureFolio'),
        'id' => 'sidebar-search',
        'description' => __('This Sidebar Will appear only on the search.', 'pureFolio'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for archive page
        'name' => __('Sidebar For Archive Page', 'pureFolio'),
        'id' => 'sidebar-archive',
        'description' => __('This Sidebar Will appear only on An Archive Page.', 'pureFolio'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer First  Column', 'pureFolio'),
        'id' => 'footer-widget-one',
        'description' => __('This Widget space is for the first Column in the footer.', 'pureFolio'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Second  Column', 'pureFolio'),
        'id' => 'footer-widget-two',
        'description' => __('This Widget space is for the Second Column in the footer.', 'pureFolio'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Third  Column', 'pureFolio'),
        'id' => 'footer-widget-three',
        'description' => __('This Widget space is for the Third Column in the footer.', 'pureFolio'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer fourth  Column', 'pureFolio'),
        'id' => 'footer-widget-four',
        'description' => __('This Widget space is for the fourth Column in the footer.', 'pureFolio'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

}
add_action( 'widgets_init', 'pureFolio_widgets_init' );

//function to render a sidebar
function pureFolio_dynamic_sidebar($sidebar_id) {
    if (is_active_sidebar($sidebar_id)) :
        dynamic_sidebar($sidebar_id);
    else :
        // display a message if there is no active widget on the sidebar
        if (current_user_can( 'administrator' )) {
            ?>
            <aside class="s-card card">
                <h4>Add Widgets Here</h4>
                <div class="no-widget">
                    <p> Oops! It Seems There Are No Widgets Added Here. </p>
                    <p> Go to the admin or customizer section to add widget to this sidebar. </p>
                </div>
            </aside>
            <?php
        }
        else {
            echo '';
        }
    endif;
}
