# Finnhub\DefaultApi

All URIs are relative to *https://finnhub.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateIndicator**](DefaultApi.md#aggregateIndicator) | **GET** /scan/technical-indicator | Aggregate Indicators
[**companyBasicFinancials**](DefaultApi.md#companyBasicFinancials) | **GET** /stock/metric | Basic Financials
[**companyEarnings**](DefaultApi.md#companyEarnings) | **GET** /stock/earnings | Earnings Surprises
[**companyEpsEstimates**](DefaultApi.md#companyEpsEstimates) | **GET** /stock/eps-estimate | Earnings Estimates
[**companyExecutive**](DefaultApi.md#companyExecutive) | **GET** /stock/executive | Company Executive
[**companyNews**](DefaultApi.md#companyNews) | **GET** /company-news | Company News
[**companyPeers**](DefaultApi.md#companyPeers) | **GET** /stock/peers | Peers
[**companyProfile**](DefaultApi.md#companyProfile) | **GET** /stock/profile | Company Profile
[**companyProfile2**](DefaultApi.md#companyProfile2) | **GET** /stock/profile2 | Company Profile 2
[**companyRevenueEstimates**](DefaultApi.md#companyRevenueEstimates) | **GET** /stock/revenue-estimate | Revenue Estimates
[**country**](DefaultApi.md#country) | **GET** /country | Country Metadata
[**covid19**](DefaultApi.md#covid19) | **GET** /covid19/us | COVID-19
[**cryptoCandles**](DefaultApi.md#cryptoCandles) | **GET** /crypto/candle | Crypto Candles
[**cryptoExchanges**](DefaultApi.md#cryptoExchanges) | **GET** /crypto/exchange | Crypto Exchanges
[**cryptoSymbols**](DefaultApi.md#cryptoSymbols) | **GET** /crypto/symbol | Crypto Symbol
[**earningsCalendar**](DefaultApi.md#earningsCalendar) | **GET** /calendar/earnings | Earnings Calendar
[**economicCode**](DefaultApi.md#economicCode) | **GET** /economic/code | Economic Code
[**economicData**](DefaultApi.md#economicData) | **GET** /economic | Economic Data
[**filings**](DefaultApi.md#filings) | **GET** /stock/filings | Filings
[**financials**](DefaultApi.md#financials) | **GET** /stock/financials | Financial Statements
[**financialsReported**](DefaultApi.md#financialsReported) | **GET** /stock/financials-reported | Financials As Reported
[**forexCandles**](DefaultApi.md#forexCandles) | **GET** /forex/candle | Forex Candles
[**forexExchanges**](DefaultApi.md#forexExchanges) | **GET** /forex/exchange | Forex Exchanges
[**forexRates**](DefaultApi.md#forexRates) | **GET** /forex/rates | Forex rates
[**forexSymbols**](DefaultApi.md#forexSymbols) | **GET** /forex/symbol | Forex Symbol
[**fundOwnership**](DefaultApi.md#fundOwnership) | **GET** /stock/fund-ownership | Fund Ownership
[**generalNews**](DefaultApi.md#generalNews) | **GET** /news | General News
[**investorsOwnership**](DefaultApi.md#investorsOwnership) | **GET** /stock/investor-ownership | Investors Ownership
[**ipoCalendar**](DefaultApi.md#ipoCalendar) | **GET** /calendar/ipo | IPO Calendar
[**majorDevelopments**](DefaultApi.md#majorDevelopments) | **GET** /major-development | Major Developments
[**newsSentiment**](DefaultApi.md#newsSentiment) | **GET** /news-sentiment | News Sentiment
[**patternRecognition**](DefaultApi.md#patternRecognition) | **GET** /scan/pattern | Pattern Recognition
[**priceTarget**](DefaultApi.md#priceTarget) | **GET** /stock/price-target | Price Target
[**quote**](DefaultApi.md#quote) | **GET** /quote | Quote
[**recommendationTrends**](DefaultApi.md#recommendationTrends) | **GET** /stock/recommendation | Recommendation Trends
[**stockBidask**](DefaultApi.md#stockBidask) | **GET** /stock/bidask | Last Bid-Ask
[**stockCandles**](DefaultApi.md#stockCandles) | **GET** /stock/candle | Stock Candles
[**stockDividends**](DefaultApi.md#stockDividends) | **GET** /stock/dividend | Dividends
[**stockSplits**](DefaultApi.md#stockSplits) | **GET** /stock/split | Splits
[**stockSymbols**](DefaultApi.md#stockSymbols) | **GET** /stock/symbol | Stock Symbol
[**stockTick**](DefaultApi.md#stockTick) | **GET** /stock/tick | Tick Data
[**supportResistance**](DefaultApi.md#supportResistance) | **GET** /scan/support-resistance | Support/Resistance
[**technicalIndicator**](DefaultApi.md#technicalIndicator) | **POST** /indicator | Technical Indicators
[**transcripts**](DefaultApi.md#transcripts) | **GET** /stock/transcripts | Earnings Call Transcripts
[**transcriptsList**](DefaultApi.md#transcriptsList) | **GET** /stock/transcripts/list | Earnings Call Transcripts List
[**upgradeDowngrade**](DefaultApi.md#upgradeDowngrade) | **GET** /stock/upgrade-downgrade | Stock Upgrade/Downgrade



## aggregateIndicator

> \Finnhub\Model\AggregateIndicators aggregateIndicator($symbol, $resolution)

Aggregate Indicators

Get aggregate signal of multiple technical indicators such as MACD, RSI, Moving Average v.v.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyBasicFinancials

> \Finnhub\Model\BasicFinancials companyBasicFinancials($symbol, $metric)

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
$metric = 'metric_example'; // string | Metric type. Can be 1 of the following values <code>all, price, valuation, margin</code>

try {
    $result = $apiInstance->companyBasicFinancials($symbol, $metric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyBasicFinancials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **metric** | **string**| Metric type. Can be 1 of the following values &lt;code&gt;all, price, valuation, margin&lt;/code&gt; |

### Return type

[**\Finnhub\Model\BasicFinancials**](../Model/BasicFinancials.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyEarnings

> \Finnhub\Model\EarningResult[] companyEarnings($symbol, $limit)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyEpsEstimates

> \Finnhub\Model\EarningsEstimates companyEpsEstimates($symbol, $freq)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyExecutive

> \Finnhub\Model\CompanyExecutive companyExecutive($symbol)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyNews

> \Finnhub\Model\News[] companyNews($symbol, $from, $to)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |
 **from** | **\DateTime**| From date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |
 **to** | **\DateTime**| To date &lt;code&gt;YYYY-MM-DD&lt;/code&gt;. |

### Return type

[**\Finnhub\Model\News[]**](../Model/News.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyPeers

> string[] companyPeers($symbol)

Peers

Get company peers. Return a list of peers in the same country and GICS sub-industry

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
    $result = $apiInstance->companyPeers($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyPeers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyProfile

> \Finnhub\Model\CompanyProfile companyProfile($symbol, $isin, $cusip)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyProfile2

> \Finnhub\Model\CompanyProfile2 companyProfile2($symbol, $isin, $cusip)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## companyRevenueEstimates

> \Finnhub\Model\RevenueEstimates companyRevenueEstimates($symbol, $freq)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## country

> \Finnhub\Model\CountryMetadata[] country()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\CountryMetadata[]**](../Model/CountryMetadata.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## covid19

> \Finnhub\Model\CovidInfo[] covid19()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\CovidInfo[]**](../Model/CovidInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cryptoCandles

> \Finnhub\Model\CryptoCandles cryptoCandles($symbol, $resolution, $from, $to)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cryptoExchanges

> string[] cryptoExchanges()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cryptoSymbols

> \Finnhub\Model\CryptoSymbol[] cryptoSymbols($exchange)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## earningsCalendar

> \Finnhub\Model\EarningsCalendar earningsCalendar($from, $to, $symbol, $international)

Earnings Calendar

Get historical and coming earnings release dating back to 2003. You can setup <a href=\"#webhook\">webhook</a> to receive real-time earnings update.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## economicCode

> \Finnhub\Model\EconomicCode[] economicCode()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Finnhub\Model\EconomicCode[]**](../Model/EconomicCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## economicData

> \Finnhub\Model\EconomicData economicData($code)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filings

> \Finnhub\Model\Filing[] filings($symbol, $cik, $access_number, $form, $from, $to)

Filings

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financials

> \Finnhub\Model\FinancialStatements financials($symbol, $statement, $freq)

Financial Statements

Get standardized balance sheet, income statement and cash flow for global companies going back 30+ years.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financialsReported

> \Finnhub\Model\FinancialsAsReported financialsReported($symbol, $cik, $access_number, $freq)

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

try {
    $result = $apiInstance->financialsReported($symbol, $cik, $access_number, $freq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financialsReported: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. | [optional]
 **cik** | **string**| CIK. | [optional]
 **access_number** | **string**| Access number of a specific report you want to retrieve financials from. | [optional]
 **freq** | **string**| Frequency. Can be either &lt;code&gt;annual&lt;/code&gt; or &lt;code&gt;quarterly&lt;/code&gt;. Default to &lt;code&gt;annual&lt;/code&gt;. | [optional]

### Return type

[**\Finnhub\Model\FinancialsAsReported**](../Model/FinancialsAsReported.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## forexCandles

> \Finnhub\Model\ForexCandles forexCandles($symbol, $resolution, $from, $to)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## forexExchanges

> string[] forexExchanges()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## forexRates

> \Finnhub\Model\Forexrates forexRates($base)

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

try {
    $result = $apiInstance->forexRates($base);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->forexRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base** | **string**| Base currency. Default to EUR. | [optional]

### Return type

[**\Finnhub\Model\Forexrates**](../Model/Forexrates.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## forexSymbols

> \Finnhub\Model\ForexSymbol[] forexSymbols($exchange)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## fundOwnership

> \Finnhub\Model\FundOwnership fundOwnership($symbol, $limit)

Fund Ownership

Get a full list fund and institutional investors of a company in descending order of the number of shares held.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## generalNews

> \Finnhub\Model\News[] generalNews($category, $min_id)

General News

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
$min_id = 'min_id_example'; // string | Use this field to get only news after this ID. Default to 0

try {
    $result = $apiInstance->generalNews($category, $min_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generalNews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| This parameter can be 1 of the following values &lt;code&gt;general, forex, crypto, merger&lt;/code&gt;. |
 **min_id** | **string**| Use this field to get only news after this ID. Default to 0 | [optional]

### Return type

[**\Finnhub\Model\News[]**](../Model/News.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## investorsOwnership

> \Finnhub\Model\InvestorsOwnership investorsOwnership($symbol, $limit)

Investors Ownership

Get a full list of shareholders/investors of a company in descending order of the number of shares held.

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
    $result = $apiInstance->investorsOwnership($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->investorsOwnership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol of the company: AAPL. |
 **limit** | **int**| Limit number of results. Leave empty to get the full list. | [optional]

### Return type

[**\Finnhub\Model\InvestorsOwnership**](../Model/InvestorsOwnership.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ipoCalendar

> \Finnhub\Model\IPOCalendar ipoCalendar($from, $to)

IPO Calendar

Get recent and coming IPO.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## majorDevelopments

> \Finnhub\Model\MajorDevelopments majorDevelopments($symbol, $from, $to)

Major Developments

List latest major developments of a company going back 20 years with 12M+ data points. This data can be used to highlight the most significant events.

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
    $result = $apiInstance->majorDevelopments($symbol, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->majorDevelopments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Company symbol. |
 **from** | **\DateTime**| From time: 2020-01-01. | [optional]
 **to** | **\DateTime**| To time: 2020-01-05. | [optional]

### Return type

[**\Finnhub\Model\MajorDevelopments**](../Model/MajorDevelopments.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## newsSentiment

> \Finnhub\Model\NewsSentiment newsSentiment($symbol)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patternRecognition

> \Finnhub\Model\PatternRecognition patternRecognition($symbol, $resolution)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## priceTarget

> \Finnhub\Model\PriceTarget priceTarget($symbol)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## quote

> \Finnhub\Model\Quote quote($symbol)

Quote

<p>Get real-time quote data for US stocks. Constant polling is not recommended. Use websocket if you need real-time update.</p><p>Real-time stock prices for international markets are supported for Enterprise clients via our partner's feed. <a href=\"mailto:support@finnhub.io\">Contact Us</a> to learn more.</p>

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## recommendationTrends

> \Finnhub\Model\RecommendationTrend[] recommendationTrends($symbol)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockBidask

> \Finnhub\Model\LastBidAsk stockBidask($symbol)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockCandles

> \Finnhub\Model\StockCandles stockCandles($symbol, $resolution, $from, $to, $adjusted)

Stock Candles

<p>Get candlestick data for stocks going back 25 years for US stocks.</p><p>Real-time stock prices for international markets are supported for Enterprise clients via our partner's feed. <a href=\"mailto:support@finnhub.io\">Contact Us</a> to learn more.</p>

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
$adjusted = 'adjusted_example'; // string | By default, <code>adjusted=false</code>. Use <code>true</code> to get adjusted data.

try {
    $result = $apiInstance->stockCandles($symbol, $resolution, $from, $to, $adjusted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockCandles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol. |
 **resolution** | **string**| Supported resolution includes &lt;code&gt;1, 5, 15, 30, 60, D, W, M &lt;/code&gt;.Some timeframes might not be available depending on the exchange. |
 **from** | **int**| UNIX timestamp. Interval initial value. |
 **to** | **int**| UNIX timestamp. Interval end value. |
 **adjusted** | **string**| By default, &lt;code&gt;adjusted&#x3D;false&lt;/code&gt;. Use &lt;code&gt;true&lt;/code&gt; to get adjusted data. | [optional]

### Return type

[**\Finnhub\Model\StockCandles**](../Model/StockCandles.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockDividends

> \Finnhub\Model\Dividends[] stockDividends($symbol, $from, $to)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockSplits

> \Finnhub\Model\Split[] stockSplits($symbol, $from, $to)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockSymbols

> \Finnhub\Model\Stock[] stockSymbols($exchange)

Stock Symbol

List supported stocks.

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
$exchange = 'exchange_example'; // string | Exchange you want to get the list of symbols from. List of exchanges with fundamental data can be found <a href=\"https://docs.google.com/spreadsheets/d/1I3pBxjfXB056-g_JYf_6o3Rns3BV2kMGG1nCatb91ls/edit?usp=sharing\" target=\"_blank\">here</a>.

try {
    $result = $apiInstance->stockSymbols($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stockSymbols: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**| Exchange you want to get the list of symbols from. List of exchanges with fundamental data can be found &lt;a href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1I3pBxjfXB056-g_JYf_6o3Rns3BV2kMGG1nCatb91ls/edit?usp&#x3D;sharing\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt;. |

### Return type

[**\Finnhub\Model\Stock[]**](../Model/Stock.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stockTick

> \Finnhub\Model\TickData stockTick($symbol, $date, $limit, $skip)

Tick Data

<p>Get historical tick data for US stocks from all 13 exchanges. You can send the request directly to our tick server at <a href=\"https://tick.finnhub.io/\">https://tick.finnhub.io/</a> with the same path and parameters or get redirected there if you call our main server. Data is updated at the end of each trading day.</p><p>Tick data from 1985 is available for Enterprise clients. <a href=\"mailto:support@finnhub.io\">Contact us</a> to learn more.</p>

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## supportResistance

> \Finnhub\Model\SupportResistance supportResistance($symbol, $resolution)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## technicalIndicator

> object technicalIndicator($symbol, $resolution, $from, $to, $indicator, $indicator_fields)

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
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transcripts

> \Finnhub\Model\EarningsCallTranscripts transcripts($id)

Earnings Call Transcripts

<p>Get earnings call transcripts, audio and participants' list. This endpoint is only available for US companies. <p>17+ years of data is available with 170,000+ audio which add up to 6TB in size.</p>

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transcriptsList

> \Finnhub\Model\EarningsCallTranscriptsList transcriptsList($symbol)

Earnings Call Transcripts List

List earnings call transcripts' metadata. This endpoint is only available for US companies.

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## upgradeDowngrade

> \Finnhub\Model\UpgradeDowngrade[] upgradeDowngrade($symbol, $from, $to)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

