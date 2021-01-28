<?php
$apiKey= env("API_KEY_WEATHER");
$url = 'api.openweathermap.org/data/2.5/weather?id=3099434&appid='.$apiKey;    
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json_response = curl_exec($ch);

//assigning variables from json
//printing to check what we`re getting
echo $json_response;

?>
