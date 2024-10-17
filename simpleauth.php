<?php

/**
*
*  Simple Auth 
*  @author David G. Bonacho
*
*/


// Variable to check if authorized
$authorized = false;


// Get token from authorization header
$token = null;
$headers = apache_request_headers();
if (isset($headers['Authorization'])) {
    $authorizationHeader = $headers['Authorization'];
    $token = str_replace('Bearer ', '', $authorizationHeader);
}


// Check if token is valid
$expectedToken = '{your 64 char token}';
if ($token === $expectedToken) {
    $authorized = true;
}



// input parameters

// JSON option
$json_data = file_get_contents("php://input");
$params = json_decode($json_data, true);

// Querystring option
//$params = $_POST;



if ($authorized) {

    http_response_code(200);

    // your code here (use $response array to response data to client)
    $response = array(
        'info' => 'your info',
        'data' => 'your data'
    );

}else{
    http_response_code(401);
    $response['info'] = 'Error - Unauthorized request';
}




// Convert to JSON
$encoded = json_encode($response); // , JSON_FORCE_OBJECT (def) , JSON_PRETTY_PRINT, JSON_UNESCAPED_UNICODE
header('Content-type: application/json');

exit($encoded);