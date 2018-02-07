<?php
function register_project_cpt()
{
    $labels = array(
        'name' => 'Progetti',
        'menu_name' => 'Progetti',
    );
    $args = array(
        'label' => 'Progetti',
        'description' => 'I Progetti',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-admin-customizer',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => array("project", "projects"),
        'map_meta_cap'  => true,

    );
    register_post_type('project', $args);
}

add_action('init', 'register_project_cpt');
add_action('add_meta_boxes', 'add_project_custom_fields');
add_action('save_post','save_project_location_data');

function add_project_custom_fields() {

    add_meta_box('project_location', 'Posizione Progetto', 'project_location_callback', 'project', 'normal', 'default');
}
function project_location_callback($post) {
    wp_nonce_field('save_project_location_data', 'project_location_meta_box_nonce');
    $regioni = get_post_meta($post->ID, 'sl-regioni-1', true);
    $provincie = get_post_meta($post->ID, 'sl-province-1', true);
    $comuni =get_post_meta($post->ID, 'sl-comuni-1', true);
    ?>
    <?php echo do_shortcode('[lb-sl label_comuni]');?>
<?php
}

function save_project_location_data($post_id) {
    // Store data in post meta table if present in post data
    if (!isset($_POST['project_location_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['project_location_meta_box_nonce'], 'save_project_location_data')) {
        return;
    }
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    if(!current_user_can('edit_post', $post_id)){
        return;
    }
    if(isset($_POST['sl-regioni-1'])){
        update_post_meta($post_id, 'sl-regioni-1',$_POST['sl-regioni-1']);
    }
    if(isset($_POST['sl-province-1'])){
        update_post_meta($post_id, 'sl-province-1',$_POST['sl-province-1']);
    }
    if(isset($_POST['sl-comuni-1'])){
        update_post_meta($post_id, 'sl-comuni-1',$_POST['sl-comuni-1']);
    }


}
add_filter( 'the_content', 'cd_display_location' );
function cd_display_location( $content )
{
    if( is_single() ) return $content;
    // We only want this on single posts, bail if we're not in a single post
    global $post;
    global $select;
    $regioni = get_post_meta($post->ID, 'sl-regioni-1', true);
    $provincie = get_post_meta($post->ID, 'sl-province-1', true);
    $comuni =get_post_meta($post->ID, 'sl-comuni-1', true);
    $regione=$select->get_regioneByID($regioni);
    $provincia=$select->get_provinciaByID($provincie,'provincia_nome');
    $comune=$select->get_comuneByID($comuni,'comune_nome');
    if (!empty($regione)) {
        $out = '<p> Regione : ' . $regione;
        if (!empty($provincia)) {
            $out .= '<p> Provincia : ' . $provincia;
            if (!empty($comune)) {
                $out .= '(  Comune : ' . $comune .')' ;
            }
            $out .= '</p>';
        }
        $out .= '</p>';
    }
    return $out.$content;
}
