<?php
function register_quote_cpt()
{
    $labels = array(
        'name' => 'Poesie',
        'menu_name' => 'Poesie',
    );
    $args = array(
        'label' => 'Poesie',
        'description' => 'Le Poesie e le citazioni',
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-format-status',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('quote', $args);
}

add_action('init', 'register_quote_cpt');

