<?php
$apiKey= env("API_KEY");
$url = 'api.openweathermap.org/data/2.5/weather?id=3099434&appid='.$apiKey;    
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json_response = curl_exec($ch);

$weather_array = json_decode($json_response);
echo $weather_array;
?>
