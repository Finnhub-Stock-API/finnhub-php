<?php

require_once 'vendor/autoload.php';

use Finnhub\Api\DefaultApi;
use Finnhub\Configuration;
use GuzzleHttp\Client;

// Configure API key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey("token", "bm9b5n7rh5rb24oa6teg");

$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);
print_r($client->stockSymbols("US"));
