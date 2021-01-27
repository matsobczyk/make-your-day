<?php
$apiKey= env("API_KEY_NEWS");
$url = 'https://newsapi.org/v2/top-headlines?country=us&totalResults=1&apiKey='. $apiKey;    
$response = file_get_contents($url);
$NewsData = json_decode($response);

foreach ($NewsData->articles as $News){
    //assigning json to variables
    $newsTitle =$News->title;
    $newsDescription = $News->description;
    $newsContent = $News->content;
    $newsUrl = $News->url;
    $newsAuthor = $News->author;
    $newsDate =$News->publishedAt;
    //printing one article
    echo 'Title: ' . "<br>" .$newsTitle; 
    echo "<br>" .'Description: ' . "<br>" . $newsDescription;
    echo "<br>" . 'Content: ' . "<br>" . $newsContent;
    echo "<br>" . 'Link: ' . "<br>" . $newsUrl;
    echo "<br>" . 'Author: ' . "<br>" . $newsAuthor;
    echo "<br>" . 'Published: ' . "<br>" . $newsDate;
    break;
} 
?>
