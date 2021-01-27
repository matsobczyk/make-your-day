<?php
$apiKey= env("API_KEY_WEATHER");
$url = 'api.openweathermap.org/data/2.5/weather?id=3099434&appid='.$apiKey;    
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json_response = curl_exec($ch);
$json_response = json_decode($json_response);

//assigning variables from json
$temperature = $json_response->main->temp;
$humidity = $json_response->main->humidity;
$weatherDescription = $json_response->weather[2];
$wind_speed = $json_response->wind->speed;

//printing to check what we`re getting
echo 'tęp ' . $temperature ."<br>" ;

echo 'desc ' . $weatherDescription;

echo 'humidity '. $humidity . "<br>" ;

echo 'wind_speed ' . $wind_speed."<br>";

?>
