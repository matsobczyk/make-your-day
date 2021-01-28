<?php
$apiKey= env("API_KEY_NEWS");
$url = 'https://newsapi.org/v2/top-headlines?country=us&totalResults=1&apiKey='. $apiKey;    
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json_response = curl_exec($ch);

//assigning variables from json
//printing to check what we`re getting
echo $json_response;
?>
