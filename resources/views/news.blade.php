<?php
$apiKey= env("API_KEY_NEWS");
$url = 'https://newsapi.org/v2/top-headlines?country=us&totalResults=1&apiKey='. $apiKey;    
$response = file_get_contents($url);
$NewsData = json_decode($response);

foreach ($NewsData->articles as $News){
    echo 'Title: ' . "<br>" .$News->title; 
    echo "<br>" .'Description: ' . "<br>" . $News->description;
    echo "<br>" . 'Content: ' . "<br>" . $News->content;
    echo "<br>" . 'Link: ' . "<br>" . $News->url;
    echo "<br>" . 'Author: ' . "<br>" . $News->author;
    echo "<br>" . 'Published: ' . "<br>" . $News->publishedAt;
    break;
} 
?>
