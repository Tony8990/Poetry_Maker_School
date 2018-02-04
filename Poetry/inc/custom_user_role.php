<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 19/01/2018
 * Time: 18:51
 */
function add_manager_role()
{
    add_role('manager', __(
        'Manager'),
        array(
            'read' => true, // Allows a user to read
            'create_posts' => true, // Allows user to create new posts
            'edit_posts' => true, // Allows user to edit their own posts
        )
    );
}

register_activation_hook(__FILE__, 'add_manager_role');

add_action('admin_init', 'psp_add_role_caps', 999);
function psp_add_role_caps()
{

    // Add the roles you'd like to administer the custom post types
    $roles = array('manager');

    // Loop through each role and assign capabilities
    foreach ($roles as $the_role) {

        $role = get_role($the_role);

        $role->add_cap('read');
        $role->add_cap('create_cpt_project');
        $role->add_cap('create_private_cpt_project');
        $role->add_cap('read_cpt_project');
        $role->add_cap('read_private_cpt_project');
        $role->add_cap('edit_cpt_project');
        $role->add_cap('edit_published_cpt_project');
        $role->add_cap('publish_cpt_project');
        $role->add_cap('delete_private_cpt_project');
        $role->add_cap('delete_published_cpt_project');

    }
}

