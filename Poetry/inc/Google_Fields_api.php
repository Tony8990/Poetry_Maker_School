<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 26/01/2018
 * Time: 18:33
 */
function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyCfG1YGUqNT6cWRCdQeQwMGR3mdGKdxInQ';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');