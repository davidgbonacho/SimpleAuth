<?php

/**
 * check access Simple Auth API DGB
 */

// Access token
$bearer_token = '{your 64 char token}';

// API URL
$baseurl = 'https://........'; // ssl required

// Configure headers / bearer security
$headers = array(
    "Authorization: Bearer $bearer_token",
    "accept: application/json"
);

// Params
/*  $params = array(
    'data' => 3383870827,
    'info' => 'your info',
    'code' => 'your code'
);  */

// Initialize cURL to send parameters
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $baseurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Do request and get the response
$result = curl_exec($ch);
curl_close($ch);

// show API response
var_dump($result);