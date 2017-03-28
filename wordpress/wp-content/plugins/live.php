<?php
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
add_shortcode('live', 'live_func');