<?php
$url = 'https://quotes.rest/qod?language=en';
$response = file_get_contents($url);
$quoteData = json_decode($response);

$dailyQuote = $quoteData->quotes;
$quoteAuthor = $dailyQuote->author;
$quoteContent = $dailyQuote->quote;
echo $quoteAuthor . '<br>';
echo $quoteContent;
?>
