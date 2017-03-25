<?php
/*
* Plugin Name: schema2
* Description: schema voor radio station
* Version: 1.0
* Author: Sjaak Nijland
*/
function schema_func()
{
//Do a GET request
    include 'guzzel/index.php';
    $response = $client->get($url . 'broadcasts', [
        'headers' => [
            'nonce' => $nonce,
            'timestamp' => $time,
            'api-key' => $api_key,
            'hash' => $auth_string
        ]
    ]);
    echo '<table>';
    $data = json_decode($response->getBody(), true);
//print_r($data);
//echo $response->getBody();
//echo "total entries: ".$data["total"];
    $broadcasts = $data["broadcasts"];
    for ($i = 0; $i < count($broadcasts); $i++) {
        $programma = $broadcasts[$i];
//    echo print_r($programma)."<hr>";
//    echo $programma['model_type_id'];
        echo '<tr>' . '<td>' . $programma['title'] . '</td>' . '<td>' . $programma['start'] . '</td>' . '<td>' . $programma['stop'] . '</td>' . '</td>' . '<td>' . $programma['description'] . '</td>' . '<tr>';

    }
    echo '</table>';
}
add_shortcode('schema2', 'schema_func');