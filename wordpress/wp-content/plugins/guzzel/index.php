
<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client(['verify' => false]);
 
$url = 'https://radiomanager.pluxbox.com/api/v1/';
 
//Set your credentials 
$api_key = 'Gi7hKNQo1IPL7QZoivG454erG';
$api_secret = 'DRrmdeAkCtD42XODv2CGYk4IjwDr6NigbYyM51Tc';
 
//Create random string 
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
for ($nonce = '', $cl = strlen($chars)-1, $i = 0; $i < 32; $nonce .= $chars[mt_rand(0, $cl)], ++$i);
 
//Save timestamp in a variable to be sure it fixed through the process 
$time = time();
 
//For GET and DELETE requests the body should be NULL 
$auth_string = sprintf("%s:%s:%s:%s", $time, $nonce, $api_key, NULL);
 
//Hash the string with hmac algoritm and sha256 bit encryption 
$auth_string = hash_hmac('sha256', $auth_string, $api_secret);
 
//Base64 encode the string to shorten and have ASCII for sending 
$auth_string = base64_encode($auth_string);
 

?> 