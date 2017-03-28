<?php
/*
* Plugin Name: next
* Description: volgende nummer
* Version: 1.0
* Author: Sjaak Nijland
*/
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 28-3-2017
 * Time: 13:59
 */

function next_func()
{
//Do a GET request
    include 'guzzel/index.php';
    $response = $client->get($url . 'items/next', [
        'headers' => [
            'nonce' => $nonce,
            'timestamp' => $time,
            'api-key' => $api_key,
            'hash' => $auth_string
        ]
    ]);
//    echo '<table>';
    $data = json_decode($response->getBody(), true);
    echo $data['title'];

//print_r($data);
//echo $response->getBody();
//echo "total entries: ".$data["total"];
//    $broadcasts = $data["broadcasts"];
//    for ($i = 0; $i < count($broadcasts); $i++) {
//        $programma = $broadcasts[$i];
////    echo print_r($programma)."<hr>";
////    echo $programma['model_type_id'];
//        echo '<tr>' . '<td>' . $programma['title'] . '</td>' . '<td>' . $programma['start'] . '</td>' . '<td>' . $programma['stop'] . '</td>' . '</td>' . '<td>' . $programma['description'] . '</td>' . '<tr>';
//
//    }
//    echo '</table>';
}
add_shortcode('next', 'next_func');