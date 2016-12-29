<?php

require 'vendor/autoload.php';

$config = json_decode(file_get_contents('config/credentials.json'));

$httpClient = new GuzzleHttp\Client();

// As an example we just retrieve your list of profiles.
// For other examples and documentation read https://api.quintly.com
$result = $httpClient->request(
    'GET',
    'https://api.quintly.com/v0.9/list-profiles',
    ['auth' => [$config->user, $config->password]]
);

// Data is json encoded, so you can use json_decode to make an object or array out of the result
echo $result->getBody()->getContents();