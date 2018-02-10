<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 10/02/2018
 * Time: 10:37
 */
function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyChhAz4F8tuuxcPnIw7LBH_7DJ3tqJI5yo';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');