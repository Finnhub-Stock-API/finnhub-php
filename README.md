# Finnhub

- Finnhub php api clent
- API version: 1.0.0
- Package version: 2.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

```bash
composer require finnhub/client
```

## Getting Started

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR API KEY');

$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

// Get a stock's quote
print_r($client->quote("AAPL"));

// Aggregate Indicators
print_r($client->aggregateIndicator("AAPL", "D"));

// Basic financials
print_r($client->companyBasicFinancials("AAPL", "margin"));

// Earnings surprises
print_r($client->companyEarnings("TSLA", 5));

// EPS estimates
print_r($client->companyEpsEstimates("AMZN", "quarterly"));

// Company Executives
print_r($client->companyExecutive("AAPL"));

// Company News
print_r($client->companyNews("AAPL", "2020-06-01", "2020-06-10"));

// Company Peers
print_r($client->companyPeers("AAPL"));

// Company Profile
print_r($client->companyProfile("AAPL"));
print_r($client->companyProfile(null, "US0378331005"));
print_r($client->companyProfile(null, null, "037833100"));

// Company Profile 2
print_r($client->companyProfile2("AAPL"));

// Revenue Estimates
print_r($client->companyRevenueEstimates("TSLA", "quarterly"));

// List country
print_r($client->country());

// Crypto Exchange
print_r($client->cryptoExchanges());

// Crypto symbols
print_r($client->cryptoSymbols("BINANCE"));

// Economic data
print_r($client->economicData("MA-USA-656880"));

// Filings
print_r($client->filings($symbol = "AAPL", $from = "2020-01-01", $to = "2020-06-11"));

// Financials
print_r($client->financials("AAPL", "bs", "annual"));

// Financials as reported
print_r($client->financialsReported($symbol = "AAPL", $freq = "annual"));

// Forex exchanges
print_r($client->forexExchanges());

// Forex all pairs
print_r($client->forexRates("USD"));

// Forex symbols
print_r($client->forexSymbols("OANDA"));

// Fund Ownership
print_r($client->fundOwnership("AMZN", 5));

// General news
print_r($client->marketNews("forex", 0));

// Ownership
print_r($client->ownership("AAPL", 5));

// IPO calendar
print_r($client->ipoCalendar("2020-05-01", "2020-06-01"));

// Major developments
print_r($client->pressReleases("AAPL", "2020-01-01", "2020-12-31"));

// News sentiment
print_r($client->newsSentiment("AAPL"));

// Pattern recognition
print_r($client->patternRecognition("AAPL", "D"));

// Price target
print_r($client->priceTarget("AAPL"));

// Quote
print_r($client->quote("AAPL"));

// Recommendation trends
print_r($client->recommendationTrends("AAPL"));

// Stock dividends
print_r($client->stockDividends("KO", "2019-01-01", "2020-01-01"));

// Stock symbols
print_r($client->stockSymbols("US"));

// Transcripts
print_r($client->transcripts("AAPL_162777"));

// Transcripts list
print_r($client->transcriptsList("AAPL"));

// Earnings Calendar
print_r($client->earningsCalendar("2020-06-10", "2020-06-30", null, false));

// Covid-19
print_r($client->covid19());

// Upgrade downgrade
print_r($client->upgradeDowngrade("AAPL", "2020-01-01", "2020-06-30"));

// Economic code
print_r($client->economicCode());

// Support resistance
print_r($client->supportResistance("AAPL", "D"));

// Technical Indicator
$indicatorFields = new stdClass();
$indicatorFields->timeperiod = 3;
print_r($client->technicalIndicator("AAPL", "D", 1583098857, 1584308457, "rsi", $indicatorFields));

// Stock splits
print_r($client->stockSplits("AAPL", "2000-01-01", "2020-01-01"));

// Forex candles
print_r($client->forexCandles("OANDA:EUR_USD", "D", 1590988249, 1591852249));

// Crypto Candles
print_r($client->cryptoCandles("BINANCE:BTCUSDT", "D", 1590988249, 1591852249));

// Tick Data
print_r($client->stockTick("AAPL", "2020-03-25", 500, 0));

// Indices Constituents
print_r($client->indicesConstituents("^GSPC"));

// Indices Historical Constituents
print_r($client->indicesHistoricalConstituents("^GSPC"));

// ETFs Profile
print_r($client->etfsProfile("SPY"));

// ETFs Holdings
print_r($client->etfsHoldings("SPY"));

// ETFs Industry Exposure
print_r($client->etfsSectorExposure("SPY"));

// ETFs Country Exposure
print_r($client->etfsCountryExposure("SPY"));

// Mutual Fund Profile
print_r($client->mutualFundProfile("VTSAX"));

// Mutual Fund Holdings
print_r($client->mutualFundHoldings("VTSAX"));

// Mutual Fund Sector Exposure
print_r($client->mutualFundSectorExposure("VTSAX"));

// Mutual Fund Country Exposure
print_r($client->mutualFundCountryExposure("VTSAX"));

// Revenue Breakdown
print_r($client->revenueBreakdown($symbol = "AAPL"));

// Social sentiment
print_r($client->socialSentiment("GME"));

// Investment themes
print_r($client->investmentThemes("financialExchangesData"));

// Supply Chain
print_r($client->supplyChainRelationships("AAPL"));

// Insider Transactions
print_r($client->insiderTransactions("AAPL", "2021-01-01", "2021-03-01"));

// International Filings
print_r($client->internationalFilings("AC.TO"));

// Filings sentiment
print_r($client->filingsSentiment("0000320193-20-000052"));

// Similarity Index
print_r($client->similarityIndex($symbol = "AAPL"));

//Symbol Search
print_r($client->symbolSearch("AAPL"));

//Company ESG
print_r($client->companyEsgScore("AAPL"));

//Company Earnings Quality Score
print_r($client->companyEarningsQualityScore("AAPL", "quarterly"));

//Company Earnings Quality Score
print_r($client->cryptoProfile("AAPL"));

// EBITDA Estimates
print_r($client->companyEbitdaEstimates("AAPL", "quarterly"));

// EBIT Estimates
print_r($client->companyEbitEstimates("TSLA", "quarterly"));

// USPTO Patent
print_r($client->stockUsptoPatent("NVDA", "2021-01-01", "2022-01-10"));

// Visa Application
print_r($client->stockVisaApplication("NVDA", "2021-01-01", "2022-01-10"));

// Bank Branch
print_r($client->bankBranch("JPM"));

// --- New Endpoints ---

// Bond Tick
print_r($client->bondTick("US912828U816", "2023-01-03", 10, 0));

// Bond Price
print_r($client->bondPrice("US912828U816", "2023-01-01", "2023-01-10"));

// Bond Profile
print_r($client->bondProfile(["isin" => "US912828U816"]));

// Bond Yield Curve
print_r($client->bondYieldCurve("USGG10YR"));

// Airline Price Index
print_r($client->airlinePriceIndex("AAL", "2023-01-01", "2023-01-10"));

// Sector Metric
print_r($client->sectorMetric("US"));

// USA Spending
print_r($client->stockUsaSpending("AAPL", "2023-01-01", "2023-01-10"));

// FDA Calendar
print_r($client->fdaCalendar());

// Stock Revenue Breakdown 2
print_r($client->stockRevenueBreakdown2("AAPL"));

// Market Status
print_r($client->marketStatus("US"));

// Market Holiday
print_r($client->marketHoliday("US"));

// Historical Employee Count
print_r($client->historicalEmployeeCount("AAPL", "2020-01-01", "2023-01-01"));

// Earnings Call Live
print_r($client->earningsCallLive("2023-01-01", "2023-01-10", "AAPL"));

// Stock Presentation
print_r($client->stockPresentation("AAPL"));

// Mutual Fund EET
print_r($client->mutualFundEet("LU1681045370"));

// Mutual Fund EET PAI
print_r($client->mutualFundEetPai("LU1681045370"));

// Institutional Profile
print_r($client->institutionalProfile("0000320193"));

// Institutional Portfolio
print_r($client->institutionalPortfolio("0000320193", "2022-01-01", "2022-12-31"));

// Institutional Ownership
print_r($client->institutionalOwnership("AAPL", "037833100", "2022-01-01", "2022-12-31"));

// Congressional Trading
print_r($client->congressionalTrading("AAPL", "2022-01-01", "2022-12-31"));

// Symbol Change
print_r($client->symbolChange("2022-01-01", "2022-12-31"));

// ISIN Change
print_r($client->isinChange("2022-01-01", "2022-12-31"));

// Company Historical ESG Score
print_r($client->companyHistoricalEsgScore("AAPL"));

// Last Bid Ask
print_r($client->lastBidAsk("AAPL"));

// Stock Insider Sentiment
print_r($client->stockInsiderSentiment("AAPL", "2022-01-01", "2022-12-31"));

// Stock Lobbying
print_r($client->stockLobbying("AAPL", "2022-01-01", "2022-12-31"));

?>
```

## License

Apache License
