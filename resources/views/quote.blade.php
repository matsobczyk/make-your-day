<?php
$url = 'https://type.fit/api/quotes';
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json_response = curl_exec($ch);

//assigning variables from json
//printing to check what we`re getting
echo $json_response;

?>
