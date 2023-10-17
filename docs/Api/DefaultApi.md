# Finnhub\DefaultApi

All URIs are relative to https://finnhub.io/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateIndicator()**](DefaultApi.md#aggregateIndicator) | **GET** /scan/technical-indicator | Aggregate Indicators
[**bondPrice()**](DefaultApi.md#bondPrice) | **GET** /bond/price | Bond price data
[**bondProfile()**](DefaultApi.md#bondProfile) | **GET** /bond/profile | Bond Profile
[**bondTick()**](DefaultApi.md#bondTick) | **GET** /bond/tick | Bond Tick Data
[**bondYieldCurve()**](DefaultApi.md#bondYieldCurve) | **GET** /bond/yield-curve | Bond Yield Curve
[**companyBasicFinancials()**](DefaultApi.md#companyBasicFinancials) | **GET** /stock/metric | Basic Financials
[**companyEarnings()**](DefaultApi.md#companyEarnings) | **GET** /stock/earnings | Earnings Surprises
[**companyEarningsQualityScore()**](DefaultApi.md#companyEarningsQualityScore) | **GET** /stock/earnings-quality-score | Company Earnings Quality Score
[**companyEbitEstimates()**](DefaultApi.md#companyEbitEstimates) | **GET** /stock/ebit-estimate | EBIT Estimates
[**companyEbitdaEstimates()**](DefaultApi.md#companyEbitdaEstimates) | **GET** /stock/ebitda-estimate | EBITDA Estimates
[**companyEpsEstimates()**](DefaultApi.md#companyEpsEstimates) | **GET** /stock/eps-estimate | Earnings Estimates
[**companyEsgScore()**](DefaultApi.md#companyEsgScore) | **GET** /stock/esg | Company ESG Scores
[**companyExecutive()**](DefaultApi.md#companyExecutive) | **GET** /stock/executive | Company Executive
[**companyNews()**](DefaultApi.md#companyNews) | **GET** /company-news | Company News
[**companyPeers()**](DefaultApi.md#companyPeers) | **GET** /stock/peers | Peers
[**companyProfile()**](DefaultApi.md#companyProfile) | **GET** /stock/profile | Company Profile
[**companyProfile2()**](DefaultApi.md#companyProfile2) | **GET** /stock/profile2 | Company Profile 2
[**companyRevenueEstimates()**](DefaultApi.md#companyRevenueEstimates) | **GET** /stock/revenue-estimate | Revenue Estimates
[**congressionalTrading()**](DefaultApi.md#congressionalTrading) | **GET** /stock/congressional-trading | Congressional Trading
[**country()**](DefaultApi.md#country) | **GET** /country | Country Metadata
[**covid19()**](DefaultApi.md#covid19) | **GET** /covid19/us | COVID-19
[**cryptoCandles()**](DefaultApi.md#cryptoCandles) | **GET** /crypto/candle | Crypto Candles
[**cryptoExchanges()**](DefaultApi.md#cryptoExchanges) | **GET** /crypto/exchange | Crypto Exchanges
[**cryptoProfile()**](DefaultApi.md#cryptoProfile) | **GET** /crypto/profile | Crypto Profile
[**cryptoSymbols()**](DefaultApi.md#cryptoSymbols) | **GET** /crypto/symbol | Crypto Symbol
[**earningsCalendar()**](DefaultApi.md#earningsCalendar) | **GET** /calendar/earnings | Earnings Calendar
[**economicCalendar()**](DefaultApi.md#economicCalendar) | **GET** /calendar/economic | Economic Calendar
[**economicCode()**](DefaultApi.md#economicCode) | **GET** /economic/code | Economic Code
[**economicData()**](DefaultApi.md#economicData) | **GET** /economic | Economic Data
[**etfsCountryExposure()**](DefaultApi.md#etfsCountryExposure) | **GET** /etf/country | ETFs Country Exposure
[**etfsHoldings()**](DefaultApi.md#etfsHoldings) | **GET** /etf/holdings | ETFs Holdings
[**etfsProfile()**](DefaultApi.md#etfsProfile) | **GET** /etf/profile | ETFs Profile
[**etfsSectorExposure()**](DefaultApi.md#etfsSectorExposure) | **GET** /etf/sector | ETFs Sector Exposure
[**fdaCommitteeMeetingCalendar()**](DefaultApi.md#fdaCommitteeMeetingCalendar) | **GET** /fda-advisory-committee-calendar | FDA Committee Meeting Calendar
[**filings()**](DefaultApi.md#filings) | **GET** /stock/filings | SEC Filings
[**filingsSentiment()**](DefaultApi.md#filingsSentiment) | **GET** /stock/filings-sentiment | SEC Sentiment Analysis
[**financials()**](DefaultApi.md#financials) | **GET** /stock/financials | Financial Statements
[**financialsReported()**](DefaultApi.md#financialsReported) | **GET** /stock/financials-reported | Financials As Reported
[**forexCandles()**](DefaultApi.md#forexCandles) | **GET** /forex/candle | Forex Candles
[**forexExchanges()**](DefaultApi.md#forexExchanges) | **GET** /forex/exchange | Forex Exchanges
[**forexRates()**](DefaultApi.md#forexRates) | **GET** /forex/rates | Forex rates
[**forexSymbols()**](DefaultApi.md#forexSymbols) | **GET** /forex/symbol | Forex Symbol
[**fundOwnership()**](DefaultApi.md#fundOwnership) | **GET** /stock/fund-ownership | Fund Ownership
[**indicesConstituents()**](DefaultApi.md#indicesConstituents) | **GET** /index/constituents | Indices Constituents
[**indicesHistoricalConstituents()**](DefaultApi.md#indicesHistoricalConstituents) | **GET** /index/historical-constituents | Indices Historical Constituents
[**insiderSentiment()**](DefaultApi.md#insiderSentiment) | **GET** /stock/insider-sentiment | Insider Sentiment
[**insiderTransactions()**](DefaultApi.md#insiderTransactions) | **GET** /stock/insider-transactions | Insider Transactions
[**institutionalOwnership()**](DefaultApi.md#institutionalOwnership) | **GET** /institutional/ownership | Institutional Ownership
[**institutionalPortfolio()**](DefaultApi.md#institutionalPortfolio) | **GET** /institutional/portfolio | Institutional Portfolio
[**institutionalProfile()**](DefaultApi.md#institutionalProfile) | **GET** /institutional/profile | Institutional Profile
[**internationalFilings()**](DefaultApi.md#internationalFilings) | **GET** /stock/international-filings | International Filings
[**investmentThemes()**](DefaultApi.md#investmentThemes) | **GET** /stock/investment-theme | Investment Themes (Thematic Investing)
[**ipoCalendar()**](DefaultApi.md#ipoCalendar) | **GET** /calendar/ipo | IPO Calendar
[**isinChange()**](DefaultApi.md#isinChange) | **GET** /ca/isin-change | ISIN Change
[**marketHoliday()**](DefaultApi.md#marketHoliday) | **GET** /stock/market-holiday | Market Holiday
[**marketNews()**](DefaultApi.md#marketNews) | **GET** /news | Market News
[**marketStatus()**](DefaultApi.md#marketStatus) | **GET** /stock/market-status | Market Status
[**mutualFundCountryExposure()**](DefaultApi.md#mutualFundCountryExposure) | **GET** /mutual-fund/country | Mutual Funds Country Exposure
[**mutualFundEet()**](DefaultApi.md#mutualFundEet) | **GET** /mutual-fund/eet | Mutual Funds EET
[**mutualFundEetPai()**](DefaultApi.md#mutualFundEetPai) | **GET** /mutual-fund/eet-pai | Mutual Funds EET PAI
[**mutualFundHoldings()**](DefaultApi.md#mutualFundHoldings) | **GET** /mutual-fund/holdings | Mutual Funds Holdings
[**mutualFundProfile()**](DefaultApi.md#mutualFundProfile) | **GET** /mutual-fund/profile | Mutual Funds Profile
[**mutualFundSectorExposure()**](DefaultApi.md#mutualFundSectorExposure) | **GET** /mutual-fund/sector | Mutual Funds Sector Exposure
[**newsSentiment()**](DefaultApi.md#newsSentiment) | **GET** /news-sentiment | News Sentiment
[**ownership()**](DefaultApi.md#ownership) | **GET** /stock/ownership | Ownership
[**patternRecognition()**](DefaultApi.md#patternRecognition) | **GET** /scan/pattern | Pattern Recognition
[**pressReleases()**](DefaultApi.md#pressReleases) | **GET** /press-releases | Major Press Releases
[**priceMetrics()**](DefaultApi.md#priceMetrics) | **GET** /stock/price-metric | Price Metrics
[**priceTarget()**](DefaultApi.md#priceTarget) | **GET** /stock/price-target | Price Target
[**quote()**](DefaultApi.md#quote) | **GET** /quote | Quote
[**recommendationTrends()**](DefaultApi.md#recommendationTrends) | **GET** /stock/recommendation | Recommendation Trends
[**revenueBreakdown()**](DefaultApi.md#revenueBreakdown) | **GET** /stock/revenue-breakdown | Revenue Breakdown
[**sectorMetric()**](DefaultApi.md#sectorMetric) | **GET** /sector/metrics | Sector Metrics
[**similarityIndex()**](DefaultApi.md#similarityIndex) | **GET** /stock/similarity-index | Similarity Index
[**socialSentiment()**](DefaultApi.md#socialSentiment) | **GET** /stock/social-sentiment | Social Sentiment
[**stockBasicDividends()**](DefaultApi.md#stockBasicDividends) | **GET** /stock/dividend2 | Dividends 2 (Basic)
[**stockBidask()**](DefaultApi.md#stockBidask) | **GET** /stock/bidask | Last Bid-Ask
[**stockCandles()**](DefaultApi.md#stockCandles) | **GET** /stock/candle | Stock Candles
[**stockDividends()**](DefaultApi.md#stockDividends) | **GET** /stock/dividend | Dividends
[**stockLobbying()**](DefaultApi.md#stockLobbying) | **GET** /stock/lobbying | Senate Lobbying
[**stockNbbo()**](DefaultApi.md#stockNbbo) | **GET** /stock/bbo | Historical NBBO
[**stockSplits()**](DefaultApi.md#stockSplits) | **GET** /stock/split | Splits
[**stockSymbols()**](DefaultApi.md#stockSymbols) | **GET** /stock/symbol | Stock Symbol
[**stockTick()**](DefaultApi.md#stockTick) | **GET** /stock/tick | Tick Data
[**stockUsaSpending()**](DefaultApi.md#stockUsaSpending) | **GET** /stock/usa-spending | USA Spending
[**stockUsptoPatent()**](DefaultApi.md#stockUsptoPatent) | **GET** /stock/uspto-patent | USPTO Patents
[**stockVisaApplication()**](DefaultApi.md#stockVisaApplication) | **GET** /stock/visa-application | H1-B Visa Application
[**supplyChainRelationships()**](DefaultApi.md#supplyChainRelationships) | **GET** /stock/supply-chain | Supply Chain Relationships
[**supportResistance()**](DefaultApi.md#supportResistance) | **GET** /scan/support-resistance | Support/Resistance
[**symbolChange()**](DefaultApi.md#symbolChange) | **GET** /ca/symbol-change | Symbol Change
[**symbolSearch()**](DefaultApi.md#symbolSearch) | **GET** /search | Symbol Lookup
[**technicalIndicator()**](DefaultApi.md#technicalIndicator) | **GET** /indicator | Technical Indicators
[**transcripts()**](DefaultApi.md#transcripts) | **GET** /stock/transcripts | Earnings Call Transcripts
[**transcriptsList()**](DefaultApi.md#transcriptsList) | **GET** /stock/transcripts/list | Earnings Call Transcripts List
[**upgradeDowngrade()**](DefaultApi.md#upgradeDowngrade) | **GET** /stock/upgrade-downgrade | Stock Upgrade/Downgrade


## `aggregateIndicator()`

```php
aggregateIndicator($symbol, $resolution): \Finnhub\Model\AggregateIndicators
```

Aggregate Indicators

Get aggregate signal of multiple technical indicators such as MACD, RSI, Moving Average v.v. A full list of indicators can be found <a href=\"https://docs.google.com/spreadsheets/d/1MWuy0WuT2yVlxr1KbPdggVygMZtJfunDnhe-C0GEXYM/edit?usp=sharing\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | symbol
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.

try {
    $result = $apiInstance->aggregateIndicator($symbol, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |

### Return type

[**\Finnhub\Model\AggregateIndicators**](../Model/AggregateIndicators.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bondPrice()`

```php
bondPrice($isin, $from, $to): \Finnhub\Model\BondCandles
```

Bond price data

<p>Get bond's price data. The following datasets are supported:</p><table class=\"table table-hover\">   <thead>     <tr>       <th>Exchange</th>       <th>Segment</th>       <th>Delay</th>     </tr>   </thead>   <tbody>   <tr>       <td class=\"text-blue\">US Government Bonds</th>       <td>Government Bonds</td>       <td>End-of-day</td>     </tr>     <tr>       <td class=\"text-blue\">FINRA Trace</th>       <td>BTDS: US Corporate Bonds</td>       <td>Delayed 4h</td>     </tr>     <tr>       <td class=\"text-blue\">FINRA Trace</th>       <td>144A Bonds</td>       <td>Delayed 4h</td>     </tr>   </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isin = 'isin_example'; // string | ISIN.
$from = 56; // int | UNIX timestamp. Interval initial value.
$to = 56; // int | UNIX timestamp. Interval end value.

try {
    $result = $apiInstance->bondPrice($isin, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bondPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isin** | **string**| ISIN. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |

### Return type

[**\Finnhub\Model\BondCandles**](../Model/BondCandles.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bondProfile()`

```php
bondProfile($isin, $cusip, $figi): \Finnhub\Model\BondProfile
```

Bond Profile

Get general information of a bond. You can query by FIGI, ISIN or CUSIP. A list of supported bonds can be found <a href=\"/api/v1/bond/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isin = 'isin_example'; // string | ISIN
$cusip = 'cusip_example'; // string | CUSIP
$figi = 'figi_example'; // string | FIGI

try {
    $result = $apiInstance->bondProfile($isin, $cusip, $figi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bondProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isin** | **string**| ISIN | [optional]
 **cusip** | **string**| CUSIP | [optional]
 **figi** | **string**| FIGI | [optional]

### Return type

[**\Finnhub\Model\BondProfile**](../Model/BondProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bondTick()`

```php
bondTick($isin, $date, $limit, $skip, $exchange): \Finnhub\Model\BondTickData
```

Bond Tick Data

<p>Get trade-level data for bonds. The following datasets are supported:</p><table class=\"table table-hover\">   <thead>     <tr>       <th>Exchange</th>       <th>Segment</th>       <th>Delay</th>     </tr>   </thead>   <tbody>     <tr>       <td class=\"text-blue\">FINRA Trace</th>       <td>BTDS: US Corporate Bonds</td>       <td>Delayed 4h</td>     </tr>     <tr>       <td class=\"text-blue\">FINRA Trace</th>       <td>144A Bonds</td>       <td>Delayed 4h</td>     </tr>   </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isin = 'isin_example'; // string | ISIN.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date: 2020-04-02.
$limit = 56; // int | Limit number of ticks returned. Maximum value: <code>25000</code>
$skip = 56; // int | Number of ticks to skip. Use this parameter to loop through the entire data.
$exchange = 'exchange_example'; // string | Currently support the following values: <code>trace</code>.

try {
    $result = $apiInstance->bondTick($isin, $date, $limit, $skip, $exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bondTick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isin** | **string**| ISIN. |
 **date** | **\DateTime**| Date: 2020-04-02. |
 **limit** | **int**| Limit number of ticks returned. Maximum value: &lt;code&gt;25000&lt;/code&gt; |
 **skip** | **int**| Number of ticks to skip. Use this parameter to loop through the entire data. |
 **exchange** | **string**| Currently support the following values: &lt;code&gt;trace&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\BondTickData**](../Model/BondTickData.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bondYieldCurve()`

```php
bondYieldCurve($code): \Finnhub\Model\BondYieldCurve
```

Bond Yield Curve

Get yield curve data for Treasury bonds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Bond's code. You can find the list of supported code <a href=\"https://docs.google.com/spreadsheets/d/1iA-lM0Kht7lsQZ7Uu_s6r2i1BbQNUNO9eGkO5-zglHg/edit?usp=sharing\" target=\"_blank\" rel=\"noopener\">here</a>.

try {
    $result = $apiInstance->bondYieldCurve($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bondYieldCurve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Bond&#39;s code. You can find the list of supported code &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1iA-lM0Kht7lsQZ7Uu_s6r2i1BbQNUNO9eGkO5-zglHg/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot; rel&#x3D;\&quot;noopener\&quot;&gt;here&lt;/a&gt;. |

### Return type

[**\Finnhub\Model\BondYieldCurve**](../Model/BondYieldCurve.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyBasicFinancials()`

```php
companyBasicFinancials($symbol, $metric): \Finnhub\Model\BasicFinancials
```

Basic Financials

Get company basic financials such as margin, P/E ratio, 52-week high/low etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$metric = 'metric_example'; // string | Metric type. Can be 1 of the following values <code>all</code>

try {
    $result = $apiInstance->companyBasicFinancials($symbol, $metric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyBasicFinancials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **metric** | **string**| Metric type. Can be 1 of the following values &lt;code&gt;all&lt;/code&gt; |

### Return type

[**\Finnhub\Model\BasicFinancials**](../Model/BasicFinancials.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEarnings()`

```php
companyEarnings($symbol, $limit): \Finnhub\Model\EarningResult[]
```

Earnings Surprises

Get company historical quarterly earnings surprise going back to 2000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$limit = 56; // int | Limit number of period returned. Leave blank to get the full history.

try {
    $result = $apiInstance->companyEarnings($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEarnings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **limit** | **int**| Limit number of period returned. Leave blank to get the full history. | [optional]

### Return type

[**\Finnhub\Model\EarningResult[]**](../Model/EarningResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEarningsQualityScore()`

```php
companyEarningsQualityScore($symbol, $freq): \Finnhub\Model\CompanyEarningsQualityScore
```

Company Earnings Quality Score

<p>This endpoint provides Earnings Quality Score for global companies.</p><p> Earnings quality refers to the extent to which current earnings predict future earnings. \"High-quality\" earnings are expected to persist, while \"low-quality\" earnings do not. A higher score means a higher earnings quality</p><p>Finnhub uses a proprietary model which takes into consideration 4 criteria:</p> <ul style=\"list-style-type: unset; margin-left: 30px;\"><li>Profitability</li><li>Growth</li><li>Cash Generation & Capital Allocation</li><li>Leverage</li></ul><br/><p>We then compare the metrics of each company in each category against its peers in the same industry to gauge how quality its earnings is.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$freq = 'freq_example'; // string | Frequency. Currently support <code>annual</code> and <code>quarterly</code>

try {
    $result = $apiInstance->companyEarningsQualityScore($symbol, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEarningsQualityScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **freq** | **string**| Frequency. Currently support &lt;code&gt;annual&lt;/code&gt; and &lt;code&gt;quarterly&lt;/code&gt; |

### Return type

[**\Finnhub\Model\CompanyEarningsQualityScore**](../Model/CompanyEarningsQualityScore.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEbitEstimates()`

```php
companyEbitEstimates($symbol, $freq): \Finnhub\Model\EbitEstimates
```

EBIT Estimates

Get company's ebit estimates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$freq = 'freq_example'; // string | Can take 1 of the following values: <code>annual, quarterly</code>. Default to <code>quarterly</code>

try {
    $result = $apiInstance->companyEbitEstimates($symbol, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEbitEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **freq** | **string**| Can take 1 of the following values: &lt;code&gt;annual, quarterly&lt;/code&gt;. Default to &lt;code&gt;quarterly&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\EbitEstimates**](../Model/EbitEstimates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEbitdaEstimates()`

```php
companyEbitdaEstimates($symbol, $freq): \Finnhub\Model\EbitdaEstimates
```

EBITDA Estimates

Get company's ebitda estimates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$freq = 'freq_example'; // string | Can take 1 of the following values: <code>annual, quarterly</code>. Default to <code>quarterly</code>

try {
    $result = $apiInstance->companyEbitdaEstimates($symbol, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEbitdaEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **freq** | **string**| Can take 1 of the following values: &lt;code&gt;annual, quarterly&lt;/code&gt;. Default to &lt;code&gt;quarterly&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\EbitdaEstimates**](../Model/EbitdaEstimates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEpsEstimates()`

```php
companyEpsEstimates($symbol, $freq): \Finnhub\Model\EarningsEstimates
```

Earnings Estimates

Get company's EPS estimates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$freq = 'freq_example'; // string | Can take 1 of the following values: <code>annual, quarterly</code>. Default to <code>quarterly</code>

try {
    $result = $apiInstance->companyEpsEstimates($symbol, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEpsEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **freq** | **string**| Can take 1 of the following values: &lt;code&gt;annual, quarterly&lt;/code&gt;. Default to &lt;code&gt;quarterly&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\EarningsEstimates**](../Model/EarningsEstimates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEsgScore()`

```php
companyEsgScore($symbol): \Finnhub\Model\CompanyESG
```

Company ESG Scores

<p>This endpoint provides ESG scores and important indicators for 7000+ global companies. The data is collected through company's public ESG disclosure and public sources.</p><p>Our ESG scoring models takes into account more than 150 different inputs to calculate the level of ESG risks and how well a company is managing them. A higher score means lower ESG risk or better ESG management. ESG scores are in the the range of 0-100. Some key indicators might contain letter-grade score from C- to A+ with C- is the lowest score and A+ is the highest score.</p><p>Historical ESG data is available for Enterprise users. <a href=\"mailto:support@finnhub.io\">Contact us</a> to learn more.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.

try {
    $result = $apiInstance->companyEsgScore($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEsgScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |

### Return type

[**\Finnhub\Model\CompanyESG**](../Model/CompanyESG.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyExecutive()`

```php
companyExecutive($symbol): \Finnhub\Model\CompanyExecutive
```

Company Executive

Get a list of company's executives and members of the Board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.

try {
    $result = $apiInstance->companyExecutive($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyExecutive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |

### Return type

[**\Finnhub\Model\CompanyExecutive**](../Model/CompanyExecutive.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyNews()`

```php
companyNews($symbol, $from, $to): \Finnhub\Model\CompanyNews[]
```

Company News

List latest company news by symbol. This endpoint is only available for North American companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Company symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->companyNews($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\CompanyNews[]**](../Model/CompanyNews.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyPeers()`

```php
companyPeers($symbol, $grouping): string[]
```

Peers

Get company peers. Return a list of peers operating in the same country and sector/industry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$grouping = 'grouping_example'; // string | Specify the grouping criteria for choosing peers.Supporter values: <code>sector</code>, <code>industry</code>, <code>subIndustry</code>. Default to <code>subIndustry</code>.

try {
    $result = $apiInstance->companyPeers($symbol, $grouping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyPeers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **grouping** | **string**| Specify the grouping criteria for choosing peers.Supporter values: &lt;code&gt;sector&lt;/code&gt;, &lt;code&gt;industry&lt;/code&gt;, &lt;code&gt;subIndustry&lt;/code&gt;. Default to &lt;code&gt;subIndustry&lt;/code&gt;. | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyProfile()`

```php
companyProfile($symbol, $isin, $cusip): \Finnhub\Model\CompanyProfile
```

Company Profile

Get general information of a company. You can query by symbol, ISIN or CUSIP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL e.g.
$isin = 'isin_example'; // string | ISIN
$cusip = 'cusip_example'; // string | CUSIP

try {
    $result = $apiInstance->companyProfile($symbol, $isin, $cusip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL e.g. | [optional]
 **isin** | **string**| ISIN | [optional]
 **cusip** | **string**| CUSIP | [optional]

### Return type

[**\Finnhub\Model\CompanyProfile**](../Model/CompanyProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyProfile2()`

```php
companyProfile2($symbol, $isin, $cusip): \Finnhub\Model\CompanyProfile2
```

Company Profile 2

Get general information of a company. You can query by symbol, ISIN or CUSIP. This is the free version of <a href=\"#company-profile\">Company Profile</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL e.g.
$isin = 'isin_example'; // string | ISIN
$cusip = 'cusip_example'; // string | CUSIP

try {
    $result = $apiInstance->companyProfile2($symbol, $isin, $cusip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyProfile2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL e.g. | [optional]
 **isin** | **string**| ISIN | [optional]
 **cusip** | **string**| CUSIP | [optional]

### Return type

[**\Finnhub\Model\CompanyProfile2**](../Model/CompanyProfile2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyRevenueEstimates()`

```php
companyRevenueEstimates($symbol, $freq): \Finnhub\Model\RevenueEstimates
```

Revenue Estimates

Get company's revenue estimates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$freq = 'freq_example'; // string | Can take 1 of the following values: <code>annual, quarterly</code>. Default to <code>quarterly</code>

try {
    $result = $apiInstance->companyRevenueEstimates($symbol, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyRevenueEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **freq** | **string**| Can take 1 of the following values: &lt;code&gt;annual, quarterly&lt;/code&gt;. Default to &lt;code&gt;quarterly&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\RevenueEstimates**](../Model/RevenueEstimates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `congressionalTrading()`

```php
congressionalTrading($symbol, $from, $to): \Finnhub\Model\CongressionalTrading
```

Congressional Trading

Get stock trades data disclosed by members of congress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->congressionalTrading($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->congressionalTrading: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\CongressionalTrading**](../Model/CongressionalTrading.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `country()`

```php
country(): \Finnhub\Model\CountryMetadata[]
```

Country Metadata

List all countries and metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->country();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->country: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\CountryMetadata[]**](../Model/CountryMetadata.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `covid19()`

```php
covid19(): \Finnhub\Model\CovidInfo[]
```

COVID-19

Get real-time updates on the number of COVID-19 (Corona virus) cases in the US with a state-by-state breakdown. Data is sourced from CDC and reputable sources. You can also access this API <a href=\"https://rapidapi.com/Finnhub/api/finnhub-real-time-covid-19\" target=\"_blank\" rel=\"nofollow\">here</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->covid19();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->covid19: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\CovidInfo[]**](../Model/CovidInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoCandles()`

```php
cryptoCandles($symbol, $resolution, $from, $to): \Finnhub\Model\CryptoCandles
```

Crypto Candles

Get candlestick data for crypto symbols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Use symbol returned in <code>/crypto/symbol</code> endpoint for this field.
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.
$from = 56; // int | UNIX timestamp. Interval initial value.
$to = 56; // int | UNIX timestamp. Interval end value.

try {
    $result = $apiInstance->cryptoCandles($symbol, $resolution, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cryptoCandles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Use symbol returned in &lt;code&gt;/crypto/symbol&lt;/code&gt; endpoint for this field. |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |

### Return type

[**\Finnhub\Model\CryptoCandles**](../Model/CryptoCandles.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoExchanges()`

```php
cryptoExchanges(): string[]
```

Crypto Exchanges

List supported crypto exchanges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cryptoExchanges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cryptoExchanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoProfile()`

```php
cryptoProfile($symbol): \Finnhub\Model\CryptoProfile
```

Crypto Profile

Get crypto's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Crypto symbol such as BTC or ETH.

try {
    $result = $apiInstance->cryptoProfile($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cryptoProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Crypto symbol such as BTC or ETH. |

### Return type

[**\Finnhub\Model\CryptoProfile**](../Model/CryptoProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoSymbols()`

```php
cryptoSymbols($exchange): \Finnhub\Model\CryptoSymbol[]
```

Crypto Symbol

List supported crypto symbols by exchange

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = 'exchange_example'; // string | Exchange you want to get the list of symbols from.

try {
    $result = $apiInstance->cryptoSymbols($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cryptoSymbols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange you want to get the list of symbols from. |

### Return type

[**\Finnhub\Model\CryptoSymbol[]**](../Model/CryptoSymbol.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `earningsCalendar()`

```php
earningsCalendar($from, $to, $symbol, $international): \Finnhub\Model\EarningsCalendar
```

Earnings Calendar

Get historical and coming earnings release. EPS and Revenue in this endpoint are non-GAAP, which means they are adjusted to exclude some one-time or unusual items. This is the same data investors usually react to and talked about on the media. Estimates are sourced from both sell-side and buy-side analysts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2020-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.
$symbol = 'symbol_example'; // string | Filter by symbol: AAPL.
$international = True; // bool | Set to <code>true</code> to include international markets. Default value is <code>false</code>

try {
    $result = $apiInstance->earningsCalendar($from, $to, $symbol, $international);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->earningsCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| From date: 2020-03-15. | [optional]
 **to** | **\DateTime**| To date: 2020-03-16. | [optional]
 **symbol** | **string**| Filter by symbol: AAPL. | [optional]
 **international** | **bool**| Set to &lt;code&gt;true&lt;/code&gt; to include international markets. Default value is &lt;code&gt;false&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\EarningsCalendar**](../Model/EarningsCalendar.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `economicCalendar()`

```php
economicCalendar($from, $to): \Finnhub\Model\EconomicCalendar
```

Economic Calendar

<p>Get recent and upcoming economic releases.</p><p>Historical events and surprises are available for Enterprise clients.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->economicCalendar($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->economicCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. | [optional]
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. | [optional]

### Return type

[**\Finnhub\Model\EconomicCalendar**](../Model/EconomicCalendar.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `economicCode()`

```php
economicCode(): \Finnhub\Model\EconomicCode[]
```

Economic Code

List codes of supported economic data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->economicCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->economicCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\EconomicCode[]**](../Model/EconomicCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `economicData()`

```php
economicData($code): \Finnhub\Model\EconomicData
```

Economic Data

Get economic data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Economic code.

try {
    $result = $apiInstance->economicData($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->economicData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Economic code. |

### Return type

[**\Finnhub\Model\EconomicData**](../Model/EconomicData.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `etfsCountryExposure()`

```php
etfsCountryExposure($symbol, $isin): \Finnhub\Model\ETFsCountryExposure
```

ETFs Country Exposure

Get ETF country exposure data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | ETF symbol.
$isin = 'isin_example'; // string | ETF isin.

try {
    $result = $apiInstance->etfsCountryExposure($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->etfsCountryExposure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| ETF symbol. | [optional]
 **isin** | **string**| ETF isin. | [optional]

### Return type

[**\Finnhub\Model\ETFsCountryExposure**](../Model/ETFsCountryExposure.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `etfsHoldings()`

```php
etfsHoldings($symbol, $isin, $skip, $date): \Finnhub\Model\ETFsHoldings
```

ETFs Holdings

Get full ETF holdings/constituents. This endpoint has global coverage. Widget only shows top 10 holdings. A list of supported ETFs can be found <a href=\"/api/v1/etf/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | ETF symbol.
$isin = 'isin_example'; // string | ETF isin.
$skip = 56; // int | Skip the first n results. You can use this parameter to query historical constituents data. The latest result is returned if skip=0 or not set.
$date = 'date_example'; // string | Query holdings by date. You can use either this param or <code>skip</code> param, not both.

try {
    $result = $apiInstance->etfsHoldings($symbol, $isin, $skip, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->etfsHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| ETF symbol. | [optional]
 **isin** | **string**| ETF isin. | [optional]
 **skip** | **int**| Skip the first n results. You can use this parameter to query historical constituents data. The latest result is returned if skip&#x3D;0 or not set. | [optional]
 **date** | **string**| Query holdings by date. You can use either this param or &lt;code&gt;skip&lt;/code&gt; param, not both. | [optional]

### Return type

[**\Finnhub\Model\ETFsHoldings**](../Model/ETFsHoldings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `etfsProfile()`

```php
etfsProfile($symbol, $isin): \Finnhub\Model\ETFsProfile
```

ETFs Profile

Get ETF profile information. This endpoint has global coverage. A list of supported ETFs can be found <a href=\"/api/v1/etf/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | ETF symbol.
$isin = 'isin_example'; // string | ETF isin.

try {
    $result = $apiInstance->etfsProfile($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->etfsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| ETF symbol. | [optional]
 **isin** | **string**| ETF isin. | [optional]

### Return type

[**\Finnhub\Model\ETFsProfile**](../Model/ETFsProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `etfsSectorExposure()`

```php
etfsSectorExposure($symbol, $isin): \Finnhub\Model\ETFsSectorExposure
```

ETFs Sector Exposure

Get ETF sector exposure data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | ETF symbol.
$isin = 'isin_example'; // string | ETF isin.

try {
    $result = $apiInstance->etfsSectorExposure($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->etfsSectorExposure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| ETF symbol. | [optional]
 **isin** | **string**| ETF isin. | [optional]

### Return type

[**\Finnhub\Model\ETFsSectorExposure**](../Model/ETFsSectorExposure.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fdaCommitteeMeetingCalendar()`

```php
fdaCommitteeMeetingCalendar(): \Finnhub\Model\FDAComitteeMeeting[]
```

FDA Committee Meeting Calendar

FDA's advisory committees are established to provide functions which support the agency's mission of protecting and promoting the public health, while meeting the requirements set forth in the Federal Advisory Committee Act. Committees are either mandated by statute or established at the discretion of the Department of Health and Human Services. Each committee is subject to renewal at two-year intervals unless the committee charter states otherwise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fdaCommitteeMeetingCalendar();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fdaCommitteeMeetingCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\FDAComitteeMeeting[]**](../Model/FDAComitteeMeeting.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filings()`

```php
filings($symbol, $cik, $access_number, $form, $from, $to): \Finnhub\Model\Filing[]
```

SEC Filings

List company's filing. Limit to 250 documents at a time. This data is available for bulk download on <a href=\"https://www.kaggle.com/finnhub/sec-filings\" target=\"_blank\">Kaggle SEC Filings database</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol. Leave <code>symbol</code>,<code>cik</code> and <code>accessNumber</code> empty to list latest filings.
$cik = 'cik_example'; // string | CIK.
$access_number = 'access_number_example'; // string | Access number of a specific report you want to retrieve data from.
$form = 'form_example'; // string | Filter by form. You can use this value <code>NT 10-K</code> to find non-timely filings for a company.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2020-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.

try {
    $result = $apiInstance->filings($symbol, $cik, $access_number, $form, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->filings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. Leave &lt;code&gt;symbol&lt;/code&gt;,&lt;code&gt;cik&lt;/code&gt; and &lt;code&gt;accessNumber&lt;/code&gt; empty to list latest filings. | [optional]
 **cik** | **string**| CIK. | [optional]
 **access_number** | **string**| Access number of a specific report you want to retrieve data from. | [optional]
 **form** | **string**| Filter by form. You can use this value &lt;code&gt;NT 10-K&lt;/code&gt; to find non-timely filings for a company. | [optional]
 **from** | **\DateTime**| From date: 2020-03-15. | [optional]
 **to** | **\DateTime**| To date: 2020-03-16. | [optional]

### Return type

[**\Finnhub\Model\Filing[]**](../Model/Filing.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filingsSentiment()`

```php
filingsSentiment($access_number): \Finnhub\Model\SECSentimentAnalysis
```

SEC Sentiment Analysis

Get sentiment analysis of 10-K and 10-Q filings from SEC. An abnormal increase in the number of positive/negative words in filings can signal a significant change in the company's stock price in the upcoming 4 quarters. We make use of <a href= \"https://sraf.nd.edu/textual-analysis/resources/\" target=\"_blank\">Loughran and McDonald Sentiment Word Lists</a> to calculate the sentiment for each filing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_number = 'access_number_example'; // string | Access number of a specific report you want to retrieve data from.

try {
    $result = $apiInstance->filingsSentiment($access_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->filingsSentiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_number** | **string**| Access number of a specific report you want to retrieve data from. |

### Return type

[**\Finnhub\Model\SECSentimentAnalysis**](../Model/SECSentimentAnalysis.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `financials()`

```php
financials($symbol, $statement, $freq): \Finnhub\Model\FinancialStatements
```

Financial Statements

<p>Get standardized balance sheet, income statement and cash flow for global companies going back 30+ years. Data is sourced from original filings most of which made available through <a href=\"#filings\">SEC Filings</a> and <a href=\"#international-filings\">International Filings</a> endpoints.</p><p><i>Wondering why our standardized data is different from Bloomberg, Reuters, Factset, S&P or Yahoo Finance ? Check out our <a href=\"/faq\">FAQ page</a> to learn more</i></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$statement = 'statement_example'; // string | Statement can take 1 of these values <code>bs, ic, cf</code> for Balance Sheet, Income Statement, Cash Flow respectively.
$freq = 'freq_example'; // string | Frequency can take 1 of these values <code>annual, quarterly, ttm, ytd</code>.  TTM (Trailing Twelve Months) option is available for Income Statement and Cash Flow. YTD (Year To Date) option is only available for Cash Flow.

try {
    $result = $apiInstance->financials($symbol, $statement, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **statement** | **string**| Statement can take 1 of these values &lt;code&gt;bs, ic, cf&lt;/code&gt; for Balance Sheet, Income Statement, Cash Flow respectively. |
 **freq** | **string**| Frequency can take 1 of these values &lt;code&gt;annual, quarterly, ttm, ytd&lt;/code&gt;.  TTM (Trailing Twelve Months) option is available for Income Statement and Cash Flow. YTD (Year To Date) option is only available for Cash Flow. |

### Return type

[**\Finnhub\Model\FinancialStatements**](../Model/FinancialStatements.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `financialsReported()`

```php
financialsReported($symbol, $cik, $access_number, $freq, $from, $to): \Finnhub\Model\FinancialsAsReported
```

Financials As Reported

Get financials as reported. This data is available for bulk download on <a href=\"https://www.kaggle.com/finnhub/reported-financials\" target=\"_blank\">Kaggle SEC Financials database</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$cik = 'cik_example'; // string | CIK.
$access_number = 'access_number_example'; // string | Access number of a specific report you want to retrieve financials from.
$freq = 'freq_example'; // string | Frequency. Can be either <code>annual</code> or <code>quarterly</code>. Default to <code>annual</code>.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>. Filter for endDate.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>. Filter for endDate.

try {
    $result = $apiInstance->financialsReported($symbol, $cik, $access_number, $freq, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financialsReported: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. | [optional]
 **cik** | **string**| CIK. | [optional]
 **access_number** | **string**| Access number of a specific report you want to retrieve financials from. | [optional]
 **freq** | **string**| Frequency. Can be either &lt;code&gt;annual&lt;/code&gt; or &lt;code&gt;quarterly&lt;/code&gt;. Default to &lt;code&gt;annual&lt;/code&gt;. | [optional]
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter for endDate. | [optional]
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter for endDate. | [optional]

### Return type

[**\Finnhub\Model\FinancialsAsReported**](../Model/FinancialsAsReported.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forexCandles()`

```php
forexCandles($symbol, $resolution, $from, $to): \Finnhub\Model\ForexCandles
```

Forex Candles

Get candlestick data for forex symbols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Use symbol returned in <code>/forex/symbol</code> endpoint for this field.
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.
$from = 56; // int | UNIX timestamp. Interval initial value.
$to = 56; // int | UNIX timestamp. Interval end value.

try {
    $result = $apiInstance->forexCandles($symbol, $resolution, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->forexCandles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Use symbol returned in &lt;code&gt;/forex/symbol&lt;/code&gt; endpoint for this field. |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |

### Return type

[**\Finnhub\Model\ForexCandles**](../Model/ForexCandles.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forexExchanges()`

```php
forexExchanges(): string[]
```

Forex Exchanges

List supported forex exchanges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->forexExchanges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->forexExchanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forexRates()`

```php
forexRates($base, $date): \Finnhub\Model\Forexrates
```

Forex rates

Get rates for all forex pairs. Ideal for currency conversion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base = 'base_example'; // string | Base currency. Default to EUR.
$date = 'date_example'; // string | Date. Leave blank to get the latest data.

try {
    $result = $apiInstance->forexRates($base, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->forexRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base** | **string**| Base currency. Default to EUR. | [optional]
 **date** | **string**| Date. Leave blank to get the latest data. | [optional]

### Return type

[**\Finnhub\Model\Forexrates**](../Model/Forexrates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forexSymbols()`

```php
forexSymbols($exchange): \Finnhub\Model\ForexSymbol[]
```

Forex Symbol

List supported forex symbols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = 'exchange_example'; // string | Exchange you want to get the list of symbols from.

try {
    $result = $apiInstance->forexSymbols($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->forexSymbols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange you want to get the list of symbols from. |

### Return type

[**\Finnhub\Model\ForexSymbol[]**](../Model/ForexSymbol.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundOwnership()`

```php
fundOwnership($symbol, $limit): \Finnhub\Model\FundOwnership
```

Fund Ownership

Get a full list fund and institutional investors of a company in descending order of the number of shares held. Data is sourced from <code>13F form</code>, <code>Schedule 13D</code> and <code>13G</code> for US market, <code>UK Share Register</code> for UK market, <code>SEDI</code> for Canadian market and equivalent filings for other international markets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$limit = 56; // int | Limit number of results. Leave empty to get the full list.

try {
    $result = $apiInstance->fundOwnership($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fundOwnership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **limit** | **int**| Limit number of results. Leave empty to get the full list. | [optional]

### Return type

[**\Finnhub\Model\FundOwnership**](../Model/FundOwnership.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indicesConstituents()`

```php
indicesConstituents($symbol): \Finnhub\Model\IndicesConstituents
```

Indices Constituents

Get a list of index's constituents. A list of supported indices for this endpoint can be found <a href=\"/api/v1/index/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | symbol

try {
    $result = $apiInstance->indicesConstituents($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->indicesConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol |

### Return type

[**\Finnhub\Model\IndicesConstituents**](../Model/IndicesConstituents.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indicesHistoricalConstituents()`

```php
indicesHistoricalConstituents($symbol): \Finnhub\Model\IndicesHistoricalConstituents
```

Indices Historical Constituents

Get full history of index's constituents including symbols and dates of joining and leaving the Index. Currently support <code>^GSPC</code>, <code>^NDX</code>, <code>^DJI</code>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | symbol

try {
    $result = $apiInstance->indicesHistoricalConstituents($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->indicesHistoricalConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol |

### Return type

[**\Finnhub\Model\IndicesHistoricalConstituents**](../Model/IndicesHistoricalConstituents.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insiderSentiment()`

```php
insiderSentiment($symbol, $from, $to): \Finnhub\Model\InsiderSentiments
```

Insider Sentiment

Get insider sentiment data for US companies calculated using method discussed <a href=\"https://medium.com/@stock-api/finnhub-insiders-sentiment-analysis-cc43f9f64b3a\" target=\"_blank\">here</a>. The MSPR ranges from -100 for the most negative to 100 for the most positive which can signal price changes in the coming 30-90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2020-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.

try {
    $result = $apiInstance->insiderSentiment($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->insiderSentiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **from** | **\DateTime**| From date: 2020-03-15. |
 **to** | **\DateTime**| To date: 2020-03-16. |

### Return type

[**\Finnhub\Model\InsiderSentiments**](../Model/InsiderSentiments.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insiderTransactions()`

```php
insiderTransactions($symbol, $from, $to): \Finnhub\Model\InsiderTransactions
```

Insider Transactions

Company insider transactions data sourced from <code>Form 3,4,5</code>, SEDI and relevant companies' filings. This endpoint covers US, Canada, Australia, and selected EU companies. Limit to 100 transactions per API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL. Leave this param blank to get the latest transactions.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2020-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.

try {
    $result = $apiInstance->insiderTransactions($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->insiderTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. Leave this param blank to get the latest transactions. |
 **from** | **\DateTime**| From date: 2020-03-15. | [optional]
 **to** | **\DateTime**| To date: 2020-03-16. | [optional]

### Return type

[**\Finnhub\Model\InsiderTransactions**](../Model/InsiderTransactions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionalOwnership()`

```php
institutionalOwnership($symbol, $cusip, $from, $to): \Finnhub\Model\InstitutionalOwnership
```

Institutional Ownership

Get a list institutional investors' positions for a particular stock overtime. Data from 13-F filings. Limit to 1 year of data at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Filter by symbol.
$cusip = 'cusip_example'; // string | Filter by CUSIP.
$from = 'from_example'; // string | From date <code>YYYY-MM-DD</code>.
$to = 'to_example'; // string | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->institutionalOwnership($symbol, $cusip, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->institutionalOwnership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Filter by symbol. |
 **cusip** | **string**| Filter by CUSIP. |
 **from** | **string**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **string**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\InstitutionalOwnership**](../Model/InstitutionalOwnership.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionalPortfolio()`

```php
institutionalPortfolio($cik, $from, $to): \Finnhub\Model\InstitutionalPortfolio
```

Institutional Portfolio

Get the holdings/portfolio data of institutional investors from 13-F filings. Limit to 1 year of data at a time. You can get a list of supported CIK <a href=\"/api/v1/institutional/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cik = 'cik_example'; // string | Fund's CIK.
$from = 'from_example'; // string | From date <code>YYYY-MM-DD</code>.
$to = 'to_example'; // string | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->institutionalPortfolio($cik, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->institutionalPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cik** | **string**| Fund&#39;s CIK. |
 **from** | **string**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **string**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\InstitutionalPortfolio**](../Model/InstitutionalPortfolio.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionalProfile()`

```php
institutionalProfile($cik): \Finnhub\Model\InstitutionalProfile
```

Institutional Profile

Get a list of well-known institutional investors. Currently support 60+ profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cik = 'cik_example'; // string | Filter by CIK. Leave blank to get the full list.

try {
    $result = $apiInstance->institutionalProfile($cik);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->institutionalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cik** | **string**| Filter by CIK. Leave blank to get the full list. | [optional]

### Return type

[**\Finnhub\Model\InstitutionalProfile**](../Model/InstitutionalProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internationalFilings()`

```php
internationalFilings($symbol, $country): \Finnhub\Model\InternationalFiling[]
```

International Filings

List filings for international companies. Limit to 250 documents at a time. These are the documents we use to source our fundamental data. Only support SEDAR and UK Companies House for normal usage. Enterprise clients who need access to the full filings for global markets should contact us for the access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol. Leave empty to list latest filings.
$country = 'country_example'; // string | Filter by country using country's 2-letter code.

try {
    $result = $apiInstance->internationalFilings($symbol, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->internationalFilings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. Leave empty to list latest filings. | [optional]
 **country** | **string**| Filter by country using country&#39;s 2-letter code. | [optional]

### Return type

[**\Finnhub\Model\InternationalFiling[]**](../Model/InternationalFiling.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentThemes()`

```php
investmentThemes($theme): \Finnhub\Model\InvestmentThemes
```

Investment Themes (Thematic Investing)

<p>Thematic investing involves creating a portfolio (or portion of a portfolio) by gathering together a collection of companies involved in certain areas that you predict will generate above-market returns over the long term. Themes can be based on a concept such as ageing populations or a sub-sector such as robotics, and drones. Thematic investing focuses on predicted long-term trends rather than specific companies or sectors, enabling investors to access structural, one-off shifts that can change an entire industry.</p><p>This endpoint will help you get portfolios of different investment themes that are changing our life and are the way of the future.</p><p>A full list of themes supported can be found <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1ULj9xDh4iPoQj279M084adZ2_S852ttRthKKJ7madYc/edit?usp=sharing\">here</a>. The theme coverage and portfolios are updated bi-weekly by our analysts. Our approach excludes penny, super-small cap and illiquid stocks.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$theme = 'theme_example'; // string | Investment theme. A full list of themes supported can be found <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1ULj9xDh4iPoQj279M084adZ2_S852ttRthKKJ7madYc/edit?usp=sharing\">here</a>.

try {
    $result = $apiInstance->investmentThemes($theme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->investmentThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme** | **string**| Investment theme. A full list of themes supported can be found &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1ULj9xDh4iPoQj279M084adZ2_S852ttRthKKJ7madYc/edit?usp&#x3D;sharing\&quot;&gt;here&lt;/a&gt;. |

### Return type

[**\Finnhub\Model\InvestmentThemes**](../Model/InvestmentThemes.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipoCalendar()`

```php
ipoCalendar($from, $to): \Finnhub\Model\IPOCalendar
```

IPO Calendar

Get recent and upcoming IPO.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2020-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.

try {
    $result = $apiInstance->ipoCalendar($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ipoCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| From date: 2020-03-15. |
 **to** | **\DateTime**| To date: 2020-03-16. |

### Return type

[**\Finnhub\Model\IPOCalendar**](../Model/IPOCalendar.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isinChange()`

```php
isinChange($from, $to): \Finnhub\Model\IsinChange
```

ISIN Change

Get a list of ISIN changes for EU-listed securities. Limit to 2000 events at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | From date <code>YYYY-MM-DD</code>.
$to = 'to_example'; // string | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->isinChange($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->isinChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **string**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\IsinChange**](../Model/IsinChange.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketHoliday()`

```php
marketHoliday($exchange): \Finnhub\Model\MarketHoliday
```

Market Holiday

Get a list of holidays for global exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = 'exchange_example'; // string | Exchange code.

try {
    $result = $apiInstance->marketHoliday($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->marketHoliday: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange code. |

### Return type

[**\Finnhub\Model\MarketHoliday**](../Model/MarketHoliday.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketNews()`

```php
marketNews($category, $min_id): \Finnhub\Model\MarketNews[]
```

Market News

Get latest market news.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string | This parameter can be 1 of the following values <code>general, forex, crypto, merger</code>.
$min_id = 56; // int | Use this field to get only news after this ID. Default to 0

try {
    $result = $apiInstance->marketNews($category, $min_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->marketNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| This parameter can be 1 of the following values &lt;code&gt;general, forex, crypto, merger&lt;/code&gt;. |
 **min_id** | **int**| Use this field to get only news after this ID. Default to 0 | [optional]

### Return type

[**\Finnhub\Model\MarketNews[]**](../Model/MarketNews.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketStatus()`

```php
marketStatus($exchange): \Finnhub\Model\MarketStatus
```

Market Status

Get current market status for global exchanges (whether exchanges are open or close).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = 'exchange_example'; // string | Exchange code.

try {
    $result = $apiInstance->marketStatus($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->marketStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange code. |

### Return type

[**\Finnhub\Model\MarketStatus**](../Model/MarketStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundCountryExposure()`

```php
mutualFundCountryExposure($symbol, $isin): \Finnhub\Model\MutualFundCountryExposure
```

Mutual Funds Country Exposure

Get Mutual Funds country exposure data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$isin = 'isin_example'; // string | Fund's isin.

try {
    $result = $apiInstance->mutualFundCountryExposure($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundCountryExposure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. | [optional]
 **isin** | **string**| Fund&#39;s isin. | [optional]

### Return type

[**\Finnhub\Model\MutualFundCountryExposure**](../Model/MutualFundCountryExposure.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundEet()`

```php
mutualFundEet($isin): \Finnhub\Model\MutualFundEet
```

Mutual Funds EET

Get EET data for EU funds. For PAIs data, please see the EET PAI endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isin = 'isin_example'; // string | ISIN.

try {
    $result = $apiInstance->mutualFundEet($isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundEet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isin** | **string**| ISIN. |

### Return type

[**\Finnhub\Model\MutualFundEet**](../Model/MutualFundEet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundEetPai()`

```php
mutualFundEetPai($isin): \Finnhub\Model\MutualFundEetPai
```

Mutual Funds EET PAI

Get EET PAI data for EU funds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isin = 'isin_example'; // string | ISIN.

try {
    $result = $apiInstance->mutualFundEetPai($isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundEetPai: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isin** | **string**| ISIN. |

### Return type

[**\Finnhub\Model\MutualFundEetPai**](../Model/MutualFundEetPai.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundHoldings()`

```php
mutualFundHoldings($symbol, $isin, $skip): \Finnhub\Model\MutualFundHoldings
```

Mutual Funds Holdings

Get full Mutual Funds holdings/constituents. This endpoint covers both US and global mutual funds. For international funds, you must query the data using ISIN. A list of supported funds can be found <a href=\"/api/v1/mutual-fund/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Fund's symbol.
$isin = 'isin_example'; // string | Fund's isin.
$skip = 56; // int | Skip the first n results. You can use this parameter to query historical constituents data. The latest result is returned if skip=0 or not set.

try {
    $result = $apiInstance->mutualFundHoldings($symbol, $isin, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Fund&#39;s symbol. | [optional]
 **isin** | **string**| Fund&#39;s isin. | [optional]
 **skip** | **int**| Skip the first n results. You can use this parameter to query historical constituents data. The latest result is returned if skip&#x3D;0 or not set. | [optional]

### Return type

[**\Finnhub\Model\MutualFundHoldings**](../Model/MutualFundHoldings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundProfile()`

```php
mutualFundProfile($symbol, $isin): \Finnhub\Model\MutualFundProfile
```

Mutual Funds Profile

Get mutual funds profile information. This endpoint covers both US and global mutual funds. For international funds, you must query the data using ISIN. A list of supported funds can be found <a href=\"/api/v1/mutual-fund/list?token=\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Fund's symbol.
$isin = 'isin_example'; // string | Fund's isin.

try {
    $result = $apiInstance->mutualFundProfile($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Fund&#39;s symbol. | [optional]
 **isin** | **string**| Fund&#39;s isin. | [optional]

### Return type

[**\Finnhub\Model\MutualFundProfile**](../Model/MutualFundProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mutualFundSectorExposure()`

```php
mutualFundSectorExposure($symbol, $isin): \Finnhub\Model\MutualFundSectorExposure
```

Mutual Funds Sector Exposure

Get Mutual Funds sector exposure data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Mutual Fund symbol.
$isin = 'isin_example'; // string | Fund's isin.

try {
    $result = $apiInstance->mutualFundSectorExposure($symbol, $isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mutualFundSectorExposure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Mutual Fund symbol. | [optional]
 **isin** | **string**| Fund&#39;s isin. | [optional]

### Return type

[**\Finnhub\Model\MutualFundSectorExposure**](../Model/MutualFundSectorExposure.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsSentiment()`

```php
newsSentiment($symbol): \Finnhub\Model\NewsSentiment
```

News Sentiment

Get company's news sentiment and statistics. This endpoint is only available for US companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Company symbol.

try {
    $result = $apiInstance->newsSentiment($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newsSentiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |

### Return type

[**\Finnhub\Model\NewsSentiment**](../Model/NewsSentiment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ownership()`

```php
ownership($symbol, $limit): \Finnhub\Model\Ownership
```

Ownership

Get a full list of shareholders of a company in descending order of the number of shares held. Data is sourced from <code>13F form</code>, <code>Schedule 13D</code> and <code>13G</code> for US market, <code>UK Share Register</code> for UK market, <code>SEDI</code> for Canadian market and equivalent filings for other international markets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$limit = 56; // int | Limit number of results. Leave empty to get the full list.

try {
    $result = $apiInstance->ownership($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ownership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **limit** | **int**| Limit number of results. Leave empty to get the full list. | [optional]

### Return type

[**\Finnhub\Model\Ownership**](../Model/Ownership.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patternRecognition()`

```php
patternRecognition($symbol, $resolution): \Finnhub\Model\PatternRecognition
```

Pattern Recognition

Run pattern recognition algorithm on a symbol. Support double top/bottom, triple top/bottom, head and shoulders, triangle, wedge, channel, flag, and candlestick patterns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.

try {
    $result = $apiInstance->patternRecognition($symbol, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patternRecognition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |

### Return type

[**\Finnhub\Model\PatternRecognition**](../Model/PatternRecognition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pressReleases()`

```php
pressReleases($symbol, $from, $to): \Finnhub\Model\PressRelease
```

Major Press Releases

<p>Get latest major press releases of a company. This data can be used to highlight the most significant events comprised of mostly press releases sourced from the exchanges, BusinessWire, AccessWire, GlobeNewswire, Newsfile, and PRNewswire.</p><p>Full-text press releases data is available for Enterprise clients. <a href=\"mailto:support@finnhub.io\">Contact Us</a> to learn more.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Company symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From time: 2020-01-01.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To time: 2020-01-05.

try {
    $result = $apiInstance->pressReleases($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pressReleases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |
 **from** | **\DateTime**| From time: 2020-01-01. | [optional]
 **to** | **\DateTime**| To time: 2020-01-05. | [optional]

### Return type

[**\Finnhub\Model\PressRelease**](../Model/PressRelease.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceMetrics()`

```php
priceMetrics($symbol, $date): \Finnhub\Model\PriceMetrics
```

Price Metrics

Get company price performance statistics such as 52-week high/low, YTD return and much more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.
$date = 'date_example'; // string | Get data on a specific date in the past. The data is available weekly so your date will be automatically adjusted to the last day of that week.

try {
    $result = $apiInstance->priceMetrics($symbol, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->priceMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **date** | **string**| Get data on a specific date in the past. The data is available weekly so your date will be automatically adjusted to the last day of that week. | [optional]

### Return type

[**\Finnhub\Model\PriceMetrics**](../Model/PriceMetrics.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceTarget()`

```php
priceTarget($symbol): \Finnhub\Model\PriceTarget
```

Price Target

Get latest price target consensus.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.

try {
    $result = $apiInstance->priceTarget($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->priceTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |

### Return type

[**\Finnhub\Model\PriceTarget**](../Model/PriceTarget.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quote()`

```php
quote($symbol): \Finnhub\Model\Quote
```

Quote

<p>Get real-time quote data for US stocks. Constant polling is not recommended. Use websocket if you need real-time updates.</p><p>Real-time stock prices for international markets are supported for Enterprise clients via our partner's feed. <a href=\"mailto:support@finnhub.io\">Contact Us</a> to learn more.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol

try {
    $result = $apiInstance->quote($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->quote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol |

### Return type

[**\Finnhub\Model\Quote**](../Model/Quote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recommendationTrends()`

```php
recommendationTrends($symbol): \Finnhub\Model\RecommendationTrend[]
```

Recommendation Trends

Get latest analyst recommendation trends for a company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL.

try {
    $result = $apiInstance->recommendationTrends($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendationTrends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |

### Return type

[**\Finnhub\Model\RecommendationTrend[]**](../Model/RecommendationTrend.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revenueBreakdown()`

```php
revenueBreakdown($symbol, $cik): \Finnhub\Model\RevenueBreakdown
```

Revenue Breakdown

Get revenue breakdown by product. This dataset is only available for US companies which disclose their revenue breakdown in the annual or quarterly reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$cik = 'cik_example'; // string | CIK.

try {
    $result = $apiInstance->revenueBreakdown($symbol, $cik);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->revenueBreakdown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. | [optional]
 **cik** | **string**| CIK. | [optional]

### Return type

[**\Finnhub\Model\RevenueBreakdown**](../Model/RevenueBreakdown.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sectorMetric()`

```php
sectorMetric($region): \Finnhub\Model\SectorMetric
```

Sector Metrics

Get ratios for different sectors and regions/indices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = 'region_example'; // string | Region. A list of supported values for this field can be found <a href=\"https://docs.google.com/spreadsheets/d/1afedyv7yWJ-z7pMjaAZK-f6ENY3mI3EBCk95QffpoHw/edit?usp=sharing\" target=\"_blank\">here</a>.

try {
    $result = $apiInstance->sectorMetric($region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sectorMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region** | **string**| Region. A list of supported values for this field can be found &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1afedyv7yWJ-z7pMjaAZK-f6ENY3mI3EBCk95QffpoHw/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt;. |

### Return type

[**\Finnhub\Model\SectorMetric**](../Model/SectorMetric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarityIndex()`

```php
similarityIndex($symbol, $cik, $freq): \Finnhub\Model\SimilarityIndex
```

Similarity Index

<p>Calculate the textual difference between a company's 10-K / 10-Q reports and the same type of report in the previous year using Cosine Similarity. For example, this endpoint compares 2019's 10-K with 2018's 10-K. Companies breaking from its routines in disclosure of financial condition and risk analysis section can signal a significant change in the company's stock price in the upcoming 4 quarters.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol. Required if cik is empty
$cik = 'cik_example'; // string | CIK. Required if symbol is empty
$freq = 'freq_example'; // string | <code>annual</code> or <code>quarterly</code>. Default to <code>annual</code>

try {
    $result = $apiInstance->similarityIndex($symbol, $cik, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->similarityIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. Required if cik is empty | [optional]
 **cik** | **string**| CIK. Required if symbol is empty | [optional]
 **freq** | **string**| &lt;code&gt;annual&lt;/code&gt; or &lt;code&gt;quarterly&lt;/code&gt;. Default to &lt;code&gt;annual&lt;/code&gt; | [optional]

### Return type

[**\Finnhub\Model\SimilarityIndex**](../Model/SimilarityIndex.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `socialSentiment()`

```php
socialSentiment($symbol, $from, $to): \Finnhub\Model\SocialSentiment
```

Social Sentiment

<p>Get social sentiment for stocks on Reddit and Twitter.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Company symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->socialSentiment($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->socialSentiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. | [optional]
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. | [optional]

### Return type

[**\Finnhub\Model\SocialSentiment**](../Model/SocialSentiment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockBasicDividends()`

```php
stockBasicDividends($symbol): \Finnhub\Model\Dividends2
```

Dividends 2 (Basic)

Get global dividends data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.

try {
    $result = $apiInstance->stockBasicDividends($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockBasicDividends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |

### Return type

[**\Finnhub\Model\Dividends2**](../Model/Dividends2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockBidask()`

```php
stockBidask($symbol): \Finnhub\Model\LastBidAsk
```

Last Bid-Ask

Get last bid/ask data for US stocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.

try {
    $result = $apiInstance->stockBidask($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockBidask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |

### Return type

[**\Finnhub\Model\LastBidAsk**](../Model/LastBidAsk.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockCandles()`

```php
stockCandles($symbol, $resolution, $from, $to): \Finnhub\Model\StockCandles
```

Stock Candles

<p>Get candlestick data (OHLCV) for stocks.</p><p>Daily data will be adjusted for Splits. Intraday data will remain unadjusted. Only 1 month of intraday will be returned at a time. If you need more historical intraday data, please use the from and to params iteratively to request more data.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.
$from = 56; // int | UNIX timestamp. Interval initial value.
$to = 56; // int | UNIX timestamp. Interval end value.

try {
    $result = $apiInstance->stockCandles($symbol, $resolution, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockCandles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |

### Return type

[**\Finnhub\Model\StockCandles**](../Model/StockCandles.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockDividends()`

```php
stockDividends($symbol, $from, $to): \Finnhub\Model\Dividends[]
```

Dividends

Get dividends data for common stocks going back 30 years.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DD.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DD.

try {
    $result = $apiInstance->stockDividends($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockDividends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| YYYY-MM-DD. |
 **to** | **\DateTime**| YYYY-MM-DD. |

### Return type

[**\Finnhub\Model\Dividends[]**](../Model/Dividends.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockLobbying()`

```php
stockLobbying($symbol, $from, $to): \Finnhub\Model\LobbyingResult
```

Senate Lobbying

Get a list of reported lobbying activities in the Senate and the House.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->stockLobbying($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockLobbying: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\LobbyingResult**](../Model/LobbyingResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockNbbo()`

```php
stockNbbo($symbol, $date, $limit, $skip): \Finnhub\Model\HistoricalNBBO
```

Historical NBBO

<p>Get historical best bid and offer for US stocks, LSE, TSX, Euronext and Deutsche Borse.</p><p>For US market, this endpoint only serves historical NBBO from the beginning of 2020. To download more historical data, please visit our bulk download page in the Dashboard <a target=\"_blank\" href=\"/dashboard/download\",>here</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date: 2020-04-02.
$limit = 56; // int | Limit number of ticks returned. Maximum value: <code>25000</code>
$skip = 56; // int | Number of ticks to skip. Use this parameter to loop through the entire data.

try {
    $result = $apiInstance->stockNbbo($symbol, $date, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockNbbo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **date** | **\DateTime**| Date: 2020-04-02. |
 **limit** | **int**| Limit number of ticks returned. Maximum value: &lt;code&gt;25000&lt;/code&gt; |
 **skip** | **int**| Number of ticks to skip. Use this parameter to loop through the entire data. |

### Return type

[**\Finnhub\Model\HistoricalNBBO**](../Model/HistoricalNBBO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockSplits()`

```php
stockSplits($symbol, $from, $to): \Finnhub\Model\Split[]
```

Splits

Get splits data for stocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DD.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DD.

try {
    $result = $apiInstance->stockSplits($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockSplits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| YYYY-MM-DD. |
 **to** | **\DateTime**| YYYY-MM-DD. |

### Return type

[**\Finnhub\Model\Split[]**](../Model/Split.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockSymbols()`

```php
stockSymbols($exchange, $mic, $security_type, $currency): \Finnhub\Model\StockSymbol[]
```

Stock Symbol

List supported stocks. We use the following symbology to identify stocks on Finnhub <code>Exchange_Ticker.Exchange_Code</code>. A list of supported exchange codes can be found <a href=\"https://docs.google.com/spreadsheets/d/1I3pBxjfXB056-g_JYf_6o3Rns3BV2kMGG1nCatb91ls/edit?usp=sharing\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = 'exchange_example'; // string | Exchange you want to get the list of symbols from. List of exchange codes can be found <a href=\"https://docs.google.com/spreadsheets/d/1I3pBxjfXB056-g_JYf_6o3Rns3BV2kMGG1nCatb91ls/edit?usp=sharing\" target=\"_blank\">here</a>.
$mic = 'mic_example'; // string | Filter by MIC code.
$security_type = 'security_type_example'; // string | Filter by security type used by OpenFigi standard.
$currency = 'currency_example'; // string | Filter by currency.

try {
    $result = $apiInstance->stockSymbols($exchange, $mic, $security_type, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockSymbols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange you want to get the list of symbols from. List of exchange codes can be found &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1I3pBxjfXB056-g_JYf_6o3Rns3BV2kMGG1nCatb91ls/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt;. |
 **mic** | **string**| Filter by MIC code. | [optional]
 **security_type** | **string**| Filter by security type used by OpenFigi standard. | [optional]
 **currency** | **string**| Filter by currency. | [optional]

### Return type

[**\Finnhub\Model\StockSymbol[]**](../Model/StockSymbol.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockTick()`

```php
stockTick($symbol, $date, $limit, $skip): \Finnhub\Model\TickData
```

Tick Data

<p>Get historical tick data for global exchanges. You can send the request directly to our tick server at <a href=\"https://tick.finnhub.io/\">https://tick.finnhub.io/</a> with the same path and parameters or get redirected there if you call our main server.</p><p>For more historical tick data, you can visit our bulk download page in the Dashboard <a target=\"_blank\" href=\"/dashboard/download\",>here</a> to speed up the download process.</p><table class=\"table table-hover\">   <thead>     <tr>       <th>Exchange</th>       <th>Segment</th>       <th>Delay</th>     </tr>   </thead>   <tbody>     <tr>       <td class=\"text-blue\">US CTA/UTP</th>       <td>Full SIP</td>       <td>End-of-day</td>     </tr>     <tr>       <td class=\"text-blue\">TSX</th>       <td><ul><li>TSX</li><li>TSX Venture</li><li>Index</li></ul></td>       <td>End-of-day</td>     </tr>     <tr>       <td class=\"text-blue\">LSE</th>       <td><ul><li>London Stock Exchange (L)</li><li>LSE International (L)</li><li>LSE European (L)</li></ul></td>       <td>15 minute</td>     </tr>     <tr>       <td class=\"text-blue\">Euronext</th>       <td><ul> <li>Euronext Paris (PA)</li> <li>Euronext Amsterdam (AS)</li> <li>Euronext Lisbon (LS)</li> <li>Euronext Brussels (BR)</li> <li>Euronext Oslo (OL)</li> <li>Euronext London (LN)</li> <li>Euronext Dublin (IR)</li> <li>Index</li> <li>Warrant</li></ul></td>       <td>End-of-day</td>     </tr>     <tr>       <td class=\"text-blue\">Deutsche Börse</th>       <td><ul> <li>Frankfurt (F)</li> <li>Xetra (DE)</li> <li>Duesseldorf (DU)</li> <li>Hamburg (HM)</li> <li>Berlin (BE)</li> <li>Hanover (HA)</li> <li>Stoxx (SX)</li> <li>TradeGate (TG)</li> <li>Zertifikate (SC)</li> <li>Index</li> <li>Warrant</li></ul></td>       <td>End-of-day</td>     </tr>   </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date: 2020-04-02.
$limit = 56; // int | Limit number of ticks returned. Maximum value: <code>25000</code>
$skip = 56; // int | Number of ticks to skip. Use this parameter to loop through the entire data.

try {
    $result = $apiInstance->stockTick($symbol, $date, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockTick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **date** | **\DateTime**| Date: 2020-04-02. |
 **limit** | **int**| Limit number of ticks returned. Maximum value: &lt;code&gt;25000&lt;/code&gt; |
 **skip** | **int**| Number of ticks to skip. Use this parameter to loop through the entire data. |

### Return type

[**\Finnhub\Model\TickData**](../Model/TickData.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockUsaSpending()`

```php
stockUsaSpending($symbol, $from, $to): \Finnhub\Model\UsaSpendingResult
```

USA Spending

Get a list of government's spending activities from USASpending dataset for public companies. This dataset can help you identify companies that win big government contracts which is extremely important for industries such as Defense, Aerospace, and Education.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>. Filter for <code>actionDate</code>
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>. Filter for <code>actionDate</code>

try {
    $result = $apiInstance->stockUsaSpending($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockUsaSpending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter for &lt;code&gt;actionDate&lt;/code&gt; |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter for &lt;code&gt;actionDate&lt;/code&gt; |

### Return type

[**\Finnhub\Model\UsaSpendingResult**](../Model/UsaSpendingResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockUsptoPatent()`

```php
stockUsptoPatent($symbol, $from, $to): \Finnhub\Model\UsptoPatentResult
```

USPTO Patents

List USPTO patents for companies. Limit to 250 records per API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->stockUsptoPatent($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockUsptoPatent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\UsptoPatentResult**](../Model/UsptoPatentResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockVisaApplication()`

```php
stockVisaApplication($symbol, $from, $to): \Finnhub\Model\VisaApplicationResult
```

H1-B Visa Application

Get a list of H1-B and Permanent visa applications for companies from the DOL. The data is updated quarterly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date <code>YYYY-MM-DD</code>. Filter on the <code>beginDate</code> column.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date <code>YYYY-MM-DD</code>. Filter on the <code>beginDate</code> column.

try {
    $result = $apiInstance->stockVisaApplication($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockVisaApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter on the &lt;code&gt;beginDate&lt;/code&gt; column. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. Filter on the &lt;code&gt;beginDate&lt;/code&gt; column. |

### Return type

[**\Finnhub\Model\VisaApplicationResult**](../Model/VisaApplicationResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplyChainRelationships()`

```php
supplyChainRelationships($symbol): \Finnhub\Model\SupplyChainRelationships
```

Supply Chain Relationships

<p>This endpoint provides an overall map of public companies' key customers and suppliers. The data offers a deeper look into a company's supply chain and how products are created. The data will help investors manage risk, limit exposure or generate alpha-generating ideas and trading insights.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol.

try {
    $result = $apiInstance->supplyChainRelationships($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supplyChainRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |

### Return type

[**\Finnhub\Model\SupplyChainRelationships**](../Model/SupplyChainRelationships.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supportResistance()`

```php
supportResistance($symbol, $resolution): \Finnhub\Model\SupportResistance
```

Support/Resistance

Get support and resistance levels for a symbol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.

try {
    $result = $apiInstance->supportResistance($symbol, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supportResistance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |

### Return type

[**\Finnhub\Model\SupportResistance**](../Model/SupportResistance.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolChange()`

```php
symbolChange($from, $to): \Finnhub\Model\SymbolChange
```

Symbol Change

Get a list of symbol changes for US-listed, EU-listed, NSE and ASX securities. Limit to 2000 events at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | From date <code>YYYY-MM-DD</code>.
$to = 'to_example'; // string | To date <code>YYYY-MM-DD</code>.

try {
    $result = $apiInstance->symbolChange($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->symbolChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **string**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\SymbolChange**](../Model/SymbolChange.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolSearch()`

```php
symbolSearch($q): \Finnhub\Model\SymbolLookup
```

Symbol Lookup

Search for best-matching symbols based on your query. You can input anything from symbol, security's name to ISIN and Cusip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Query text can be symbol, name, isin, or cusip.

try {
    $result = $apiInstance->symbolSearch($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->symbolSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Query text can be symbol, name, isin, or cusip. |

### Return type

[**\Finnhub\Model\SymbolLookup**](../Model/SymbolLookup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `technicalIndicator()`

```php
technicalIndicator($symbol, $resolution, $from, $to, $indicator, $indicator_fields): object
```

Technical Indicators

Return technical indicator with price data. List of supported indicators can be found <a href=\"https://docs.google.com/spreadsheets/d/1ylUvKHVYN2E87WdwIza8ROaCpd48ggEl1k5i5SgA29k/edit?usp=sharing\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | symbol
$resolution = 'resolution_example'; // string | Supported resolution includes <code>1, 5, 15, 30, 60, D, W, M </code>.Some timeframes might not be available depending on the exchange.
$from = 56; // int | UNIX timestamp. Interval initial value.
$to = 56; // int | UNIX timestamp. Interval end value.
$indicator = 'indicator_example'; // string | Indicator name. Full list can be found <a href=\"https://docs.google.com/spreadsheets/d/1ylUvKHVYN2E87WdwIza8ROaCpd48ggEl1k5i5SgA29k/edit?usp=sharing\" target=\"_blank\">here</a>.
$indicator_fields = new \stdClass; // object | Check out <a href=\"https://docs.google.com/spreadsheets/d/1ylUvKHVYN2E87WdwIza8ROaCpd48ggEl1k5i5SgA29k/edit?usp=sharing\" target=\"_blank\">this page</a> to see which indicators and params are supported.

try {
    $result = $apiInstance->technicalIndicator($symbol, $resolution, $from, $to, $indicator, $indicator_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->technicalIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |
 **indicator** | **string**| Indicator name. Full list can be found &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1ylUvKHVYN2E87WdwIza8ROaCpd48ggEl1k5i5SgA29k/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt;. |
 **indicator_fields** | **object**| Check out &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1ylUvKHVYN2E87WdwIza8ROaCpd48ggEl1k5i5SgA29k/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot;&gt;this page&lt;/a&gt; to see which indicators and params are supported. | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transcripts()`

```php
transcripts($id): \Finnhub\Model\EarningsCallTranscripts
```

Earnings Call Transcripts

<p>Get earnings call transcripts, audio and participants' list. Data is available for US, UK, European, Australian and Canadian companies.<p>15+ years of data is available with 220,000+ audio which add up to 7TB in size.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Transcript's id obtained with <a href=\"#transcripts-list\">Transcripts List endpoint</a>.

try {
    $result = $apiInstance->transcripts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transcripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transcript&#39;s id obtained with &lt;a href&#x3D;\&quot;#transcripts-list\&quot;&gt;Transcripts List endpoint&lt;/a&gt;. |

### Return type

[**\Finnhub\Model\EarningsCallTranscripts**](../Model/EarningsCallTranscripts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transcriptsList()`

```php
transcriptsList($symbol): \Finnhub\Model\EarningsCallTranscriptsList
```

Earnings Call Transcripts List

List earnings call transcripts' metadata. This endpoint is available for US, UK, European, Australian and Canadian companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Company symbol: AAPL. Leave empty to list the latest transcripts

try {
    $result = $apiInstance->transcriptsList($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transcriptsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol: AAPL. Leave empty to list the latest transcripts |

### Return type

[**\Finnhub\Model\EarningsCallTranscriptsList**](../Model/EarningsCallTranscriptsList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeDowngrade()`

```php
upgradeDowngrade($symbol, $from, $to): \Finnhub\Model\UpgradeDowngrade[]
```

Stock Upgrade/Downgrade

Get latest stock upgrade and downgrade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Finnhub\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Finnhub\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Symbol of the company: AAPL. If left blank, the API will return latest stock upgrades/downgrades.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: 2000-03-15.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: 2020-03-16.

try {
    $result = $apiInstance->upgradeDowngrade($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upgradeDowngrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. If left blank, the API will return latest stock upgrades/downgrades. | [optional]
 **from** | **\DateTime**| From date: 2000-03-15. | [optional]
 **to** | **\DateTime**| To date: 2020-03-16. | [optional]

### Return type

[**\Finnhub\Model\UpgradeDowngrade[]**](../Model/UpgradeDowngrade.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
