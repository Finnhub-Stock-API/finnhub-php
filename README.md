# Finnhub
- Finnhub php api clent
- API version: 1.0.0
- Package version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

```json
{
  "require": {
    "finnhub/client": "1.0.0"
  }
}
```

Then run `composer install`

## Getting Started

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'brcevevrh5rap841k770');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

// Stock candles
print_r($client->stockCandles('AAPL', 'D', 1590988249, 1591852249));

// Aggregate Indicators
print_r($client->aggregateIndicator('AAPL', 'D'));

// Basic financials
print_r($client->companyBasicFinancials('AAPL', 'margin'));

// Earnings surprises
print_r($client->companyEarnings('TSLA', 5));

// EPS estimates
print_r($client->companyEpsEstimates('AMZN', 'quarterly'));

// Company Executives
print_r($client->companyExecutive('AAPL'));

// Company News
print_r($client->companyNews('AAPL', "2020-06-01", "2020-06-10"));

// Company Peers
print_r($client->companyPeers('AAPL'));

// Company Profile
print_r($client->companyProfile('AAPL'));
print_r($client->companyProfile(null, 'US0378331005'));
print_r($client->companyProfile(null, null, '037833100'));

// Company Profile 2
print_r($client->companyProfile2('AAPL'));

// Revenue Estimates
print_r($client->companyRevenueEstimates('TSLA', 'quarterly'));

// List country
print_r($client->country());

// Crypto Exchange
print_r($client->cryptoExchanges());

// Crypto symbols
print_r($client->cryptoSymbols('BINANCE'));

// Economic data
print_r($client->economicData('MA-USA-656880'));

// Filings
print_r($client->filings('AAPL', "2020-01-01", "2020-06-11"));

// Financials
print_r($client->financials('AAPL', 'bs', 'annual'));

// Financials as reported
print_r($client->financialsReported('AAPL', 'annual'));

// Forex exchanges
print_r($client->forexExchanges());

// Forex all pairs
print_r($client->forexRates('USD'));

// Forex symbols
print_r($client->forexSymbols('OANDA'));

// Fund Ownership
print_r($client->fundOwnership('AMZN', 5));

// General news
print_r($client->generalNews('forex', 0));

// Investors ownership
print_r($client->investorsOwnership('AAPL', 5));

// IPO calendar
print_r($client->ipoCalendar("2020-05-01", "2020-06-01"));

// Major developments
print_r($client->majorDevelopments('AAPL', "2020-01-01", "2020-12-31"));

// News sentiment
print_r($client->newsSentiment('AAPL'));

// Pattern recognition
print_r($client->patternRecognition('AAPL', 'D'));

// Price target
print_r($client->priceTarget('AAPL'));

// Quote
print_r($client->quote('AAPL'));

// Recommendation trends
print_r($client->recommendationTrends('AAPL'));

// Stock dividends
print_r($client->stockDividends('KO', '2019-01-01', '2020-01-01'));

// Stock symbols
print_r($client->stockSymbols('US'));

// Transcripts
print_r($client->transcripts('AAPL_162777'));

// Transcripts list
print_r($client->transcriptsList('AAPL'));

// Earnings Calendar
print_r($client->earningsCalendar("2020-06-10", "2020-06-30", null, false));

// Covid-19
print_r($client->covid19());

// Upgrade downgrade
print_r($client->upgradeDowngrade('AAPL', '2020-01-01', '2020-06-30'));

// Economic code
print_r($client->economicCode());

// Support resistance
print_r($client->supportResistance('AAPL', 'D'));

// Technical Indicator
$indicatorFields = new stdClass();
$indicatorFields->timeperiod = 3;
print_r($client->technicalIndicator("AAPL", 'D', 1583098857, 1584308457, 'rsi', $indicatorFields));

// Stock splits
print_r($client->stockSplits('AAPL', '2000-01-01', '2020-01-01'));

// Forex candles
print_r($client->forexCandles('OANDA:EUR_USD', 'D', 1590988249, 1591852249));

// Crypto Candles
print_r($client->cryptoCandles('BINANCE:BTCUSDT', 'D', 1590988249, 1591852249));

// Tick Data
print_r($client->stockTick('AAPL', '2020-03-25', 500, 0));
?>
```

## License

Apache License
