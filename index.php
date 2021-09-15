<?php

$timestamp = time();
$ConsumerSecret = "84104c793e454d51bdb39bd3a1b8a651&";
$page_number = 1;
$search = "check";
$http_method = "GET";
$url = urlencode('https://platform.fatsecret.com/rest/server.api');
$param = [
    "format=json",
    "method=foods.search",
    'oauth_consumer_key=159ba5a9daf448b191ebd17f03cbc16c',
    'oauth_nonce=ABC',
    "oauth_signature_method=HMAC-SHA1",
    'oauth_timestamp='.$timestamp,
    "oauth_version=1.0",
    "search_expression=check",
];

$create_string = join('&',$param);
$url_encode = urlencode($create_string);

$concatenated  = $http_method.'&'.$url.'&'.$url_encode;
$oauth_signature = hash_hmac("sha1", $concatenated, $ConsumerSecret, true);
$sig = base64_encode($oauth_signature);

$param = [
    "format=json",
    "method=foods.search",
    "oauth_consumer_key=159ba5a9daf448b191ebd17f03cbc16c",
    "oauth_nonce=ABC",
    "oauth_signature_method=HMAC-SHA1",
    "oauth_timestamp=".time(),
    "oauth_version=1.0",
    "oauth_signature=".$sig,
    "search_expression=check",
];
$param_encode = join('&', $param);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://platform.fatsecret.com/rest/server.api?'.$param_encode,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(

    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;