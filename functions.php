<?php
/**
 * Enqueue parent and child theme styles.
 */
function amre_wp_child_enqueue_styles() {
    // Parent style
    wp_enqueue_style(
        'amre-wp-parent-style',
        get_template_directory_uri() . '/style.css'
    );
    // Child style (loaded after parent)
    wp_enqueue_style(
        'amre-wp-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('amre-wp-parent-style')
    );
}
add_action( 'wp_enqueue_scripts', 'amre_wp_child_enqueue_styles' );
