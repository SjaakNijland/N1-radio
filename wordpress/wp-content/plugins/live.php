<?php
/*
* Plugin Name: live
* Description: next song
* Version: 1.0
* Author: Sjaak Nijland
*/
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 28-3-2017
 * Time: 11:34
 */
function live_func()
{

//Do a GET request
    include 'guzzel/index.php';
    $response = $client->get($url . 'items/current', [
        'headers' => [
            'nonce' => $nonce,
            'timestamp' => $time,
            'api-key' => $api_key,
            'hash' => $auth_string
        ]
    ]);

    $data = json_decode($response->getBody(), true);
    echo $data['title'];

}
add_shortcode('live', 'live_func');