<?php

add_action('wp_enqueu_script', 'theme_enqueue_styles');
function theme_enqueu_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $args['menu'] = 622 ;
     
    } else {
    // Non-logged-in menu to display
    $args['menu'] = 35;
    }
    return $args;
    }
    add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

    function my_wp_nav_menu_args( $args = '' ) {
        if( is_user_logged_in() ) {
        // Logged in menu to display
        $args['menu'] = 4;
         
        } else {
        // Non-logged-in menu to display
        $args['menu'] = 20;
        }
        return $args;
        }
        add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );