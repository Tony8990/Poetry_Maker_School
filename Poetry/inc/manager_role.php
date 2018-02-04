<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 03/02/2018
 * Time: 16:33
 */
function add_manager_caps_to_admin() {
    $caps = array(
        'read',
        'read_projects',
        'create_projects',
        'create_private_projects',
        'read_private_projects',
        'publish_projects',
        'edit_projects',
        'edit_published_projects',
        'delete_projects',
        'delete_published_projects',



    );
    $roles = array(
        get_role( 'administrator' ),
        get_role( 'editor' ),
    );
    foreach ($roles as $role) {
        foreach ($caps as $cap) {
            $role->add_cap( $cap );
        }
    }
}
add_action( 'after_setup_theme', 'add_manager_caps_to_admin' );


function project_manager_setup() {
    add_role( 'manager', 'Manager');
}
add_action( 'after_setup_theme', 'project_manager_setup' );




function add_manager_caps_to_non_admin_roles() {
    # Everyone gets these capabilities:
    $caps = array(
        'read',
        'read_projects',
        'create_projects',
        'create_private_projects',
        'read_private_projects',
        'publish_projects',
        'edit_projects',
        'edit_published_projects',
        'delete_projects',
        'delete_published_projects',


    );
    $roles = array(

        get_role( 'manager' ),

    );
    foreach ($roles as $role) {
        foreach ($caps as $cap) {
            $role->add_cap( $cap );
        }
    }
}
add_action( 'after_setup_theme', 'add_manager_caps_to_non_admin_roles' );