<?php
$url = 'https://quotes.rest/qod?language=en';
$response = file_get_contents($url);
$quoteData = json_decode($response);

$daliQuote = $quoteData->quotes;
echo $dailyQuote->author;
echo $dailyQuote->quote;
?>
