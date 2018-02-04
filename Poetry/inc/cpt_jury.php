<?php
function register_jury_cpt() {
    $labels = array(
        'name'                => 'Giuria',
        'menu_name'           => 'Giuria',
    );
    $args = array(
        'label'               => 'Giuria',
        'description'         => 'La Giuria',
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'jury',  $args );
}
add_action( 'init', 'register_jury_cpt' );

?>
