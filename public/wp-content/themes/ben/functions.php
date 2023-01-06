<?php
function add_theme_scripts_and_styles() {
    wp_enqueue_style("style", get_stylesheet_uri());
}
    add_action ('wp_enqueue_scripts', 'add_theme_scripts_and_styles');
    register_nav_menu( 'main-menu', 'Main Menu' ); 
    register_nav_menu( 'footer-menu', 'Footer Menu' );    