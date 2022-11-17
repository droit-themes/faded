<?php

/* Register Widget areas */


add_action('widgets_init', function() {

    register_sidebar(array(
        'name'          => esc_html__('Blog Sidebar', 'faded'),
        'description'   => esc_html__('Note :: If any widget contain here ,sidebar will be enable otherwise blog will be full width. ', 'faded'),
        'id'            => 'sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>'
    ));


    register_sidebar(array(
        'name'          => esc_html__('Footer Widgets', 'faded'),
        'description'   => esc_html__('Add widgets here for Footer widgets area', 'faded'),
        'id'            => 'footer_widgets',
        'before_widget' => '<div id="%1$s" class="widget footer-widget col-xs-12 col-sm-6 col-md-4 widget_recent_post widget_contact %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="f_title widget_title_two">',
        'after_title'   => '</h4>'
    ));

});
