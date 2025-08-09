<?php
// Repository: php-currency-converter
// Description: A script to convert currencies using an external API.

$apiKey = "your_api_key_here";
$baseCurrency = "USD";
$targetCurrency = "EUR";
$url = "https://api.exchangerate-api.com/v4/latest/$baseCurrency";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['rates'][$targetCurrency])) {
    $rate = $data['rates'][$targetCurrency];
    echo "1 $baseCurrency = $rate $targetCurrency";
} else {
    echo "Currency conversion failed.";
}
?>
