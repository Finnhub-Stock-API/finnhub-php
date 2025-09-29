<?php

namespace Finnhub\Api;

use Finnhub\Configuration;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Finnhub\ApiException;

class DefaultApi
{
    protected $client;
    protected $config;

    const API_URL = "https://finnhub.io/api/v1";

    public function __construct(?ClientInterface $client = null, ?Configuration $config = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
    }

    private function _request($method, $path, $params = [])
    {
        $url = self::API_URL . $path;

        $queryParams = [
            'token' => $this->config->getApiKey("token"),
        ];

        if (!empty($params)) {
            $queryParams = array_merge($queryParams, $params);
        }

        try {
            $response = $this->client->request($method, $url, [
                'query' => $queryParams,
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? (string) $e->getResponse()->getBody() : null
            );
        }
    }

    public function stockCandles($symbol, $resolution, $_from, $to)
    {
        return $this->_request('GET', '/stock/candle', [
            'symbol' => $symbol,
            'resolution' => $resolution,
            'from' => $_from,
            'to' => $to,
        ]);
    }

    public function aggregateIndicator($symbol, $resolution)
    {
        return $this->_request('GET', '/scan/technical-indicator', [
            'symbol' => $symbol,
            'resolution' => $resolution,
        ]);
    }

    public function companyBasicFinancials($symbol, $metric)
    {
        return $this->_request('GET', '/stock/metric', [
            'symbol' => $symbol,
            'metric' => $metric,
        ]);
    }

    public function companyEarnings($symbol, $limit = null)
    {
        return $this->_request('GET', '/stock/earnings', [
            'symbol' => $symbol,
            'limit' => $limit,
        ]);
    }

    public function companyEpsEstimates($symbol, $freq = null)
    {
        return $this->_request('GET', '/stock/eps-estimate', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function companyExecutive($symbol)
    {
        return $this->_request('GET', '/stock/executive', [
            'symbol' => $symbol,
        ]);
    }

    public function companyNews($symbol, $from, $to)
    {
        return $this->_request('GET', '/company-news', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function companyPeers($symbol)
    {
        return $this->_request('GET', '/stock/peers', [
            'symbol' => $symbol,
        ]);
    }

    public function companyProfile($symbol = null, $isin = null, $cusip = null)
    {
        return $this->_request('GET', '/stock/profile', [
            'symbol' => $symbol,
            'isin' => $isin,
            'cusip' => $cusip,
        ]);
    }

    public function companyProfile2($symbol = null, $isin = null, $cusip = null)
    {
        return $this->_request('GET', '/stock/profile2', [
            'symbol' => $symbol,
            'isin' => $isin,
            'cusip' => $cusip,
        ]);
    }

    public function companyRevenueEstimates($symbol, $freq = null)
    {
        return $this->_request('GET', '/stock/revenue-estimate', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function country()
    {
        return $this->_request('GET', '/country');
    }

    public function cryptoExchanges()
    {
        return $this->_request('GET', '/crypto/exchange');
    }

    public function cryptoSymbols($exchange)
    {
        return $this->_request('GET', '/crypto/symbol', [
            'exchange' => $exchange,
        ]);
    }

    public function economicData($code)
    {
        return $this->_request('GET', '/economic', [
            'code' => $code,
        ]);
    }

    public function filings($symbol = null, $from = null, $to = null)
    {
        return $this->_request('GET', '/stock/filings', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function financials($symbol, $statement, $freq, $preliminary=false)
    {
        return $this->_request('GET', '/stock/financials', [
            'symbol' => $symbol,
            'statement' => $statement,
            'freq' => $freq,
            'preliminary' => $preliminary,
        ]);
    }

    public function financialsReported($symbol, $freq = 'annual')
    {
        return $this->_request('GET', '/stock/financials-reported', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function forexExchanges()
    {
        return $this->_request('GET', '/forex/exchange');
    }

    public function forexRates($base)
    {
        return $this->_request('GET', '/forex/rates', [
            'base' => $base,
        ]);
    }

    public function forexSymbols($exchange)
    {
        return $this->_request('GET', '/forex/symbol', [
            'exchange' => $exchange,
        ]);
    }

    public function fundOwnership($symbol, $limit = null)
    {
        return $this->_request('GET', '/stock/fund-ownership', [
            'symbol' => $symbol,
            'limit' => $limit,
        ]);
    }

    public function marketNews($category, $minId = 0)
    {
        return $this->_request('GET', '/news', [
            'category' => $category,
            'minId' => $minId,
        ]);
    }

    public function ownership($symbol, $limit = null)
    {
        return $this->_request('GET', '/stock/ownership', [
            'symbol' => $symbol,
            'limit' => $limit,
        ]);
    }

    public function ipoCalendar($from, $to)
    {
        return $this->_request('GET', '/calendar/ipo', [
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function pressReleases($symbol, $from = null, $to = null)
    {
        return $this->_request('GET', '/press-releases', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function newsSentiment($symbol)
    {
        return $this->_request('GET', '/news-sentiment', [
            'symbol' => $symbol,
        ]);
    }

    public function patternRecognition($symbol, $resolution)
    {
        return $this->_request('GET', '/scan/pattern', [
            'symbol' => $symbol,
            'resolution' => $resolution,
        ]);
    }

    public function priceTarget($symbol)
    {
        return $this->_request('GET', '/stock/price-target', [
            'symbol' => $symbol,
        ]);
    }

    public function quote($symbol)
    {
        return $this->_request('GET', '/quote', [
            'symbol' => $symbol,
        ]);
    }

    public function recommendationTrends($symbol)
    {
        return $this->_request('GET', '/stock/recommendation', [
            'symbol' => $symbol,
        ]);
    }

    public function stockDividends($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/dividend', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function stockSymbols($exchange)
    {
        return $this->_request('GET', '/stock/symbol', [
            'exchange' => $exchange,
        ]);
    }

    public function transcripts($id)
    {
        return $this->_request('GET', '/stock/transcripts', [
            'id' => $id,
        ]);
    }

    public function transcriptsList($symbol)
    {
        return $this->_request('GET', '/stock/transcripts/list', [
            'symbol' => $symbol,
        ]);
    }

    public function earningsCalendar($from = null, $to = null, $symbol = null, $international = false)
    {
        return $this->_request('GET', '/calendar/earnings', [
            'from' => $from,
            'to' => $to,
            'symbol' => $symbol,
            'international' => $international,
        ]);
    }

    public function covid19()
    {
        return $this->_request('GET', '/covid19/us');
    }

    public function upgradeDowngrade($symbol = null, $from = null, $to = null)
    {
        return $this->_request('GET', '/stock/upgrade-downgrade', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function economicCode()
    {
        return $this->_request('GET', '/economic/code');
    }

    public function supportResistance($symbol, $resolution)
    {
        return $this->_request('GET', '/scan/support-resistance', [
            'symbol' => $symbol,
            'resolution' => $resolution,
        ]);
    }

    public function technicalIndicator($symbol, $resolution, $_from, $to, $indicator, $indicatorFields = null)
    {
        $params = [
            'symbol' => $symbol,
            'resolution' => $resolution,
            'from' => $_from,
            'to' => $to,
            'indicator' => $indicator,
        ];
        if ($indicatorFields) {
            $params['indicatorFields'] = $indicatorFields;
        }
        return $this->_request('GET', '/indicator', $params);
    }

    public function stockSplits($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/split', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function forexCandles($symbol, $resolution, $_from, $to)
    {
        return $this->_request('GET', '/forex/candle', [
            'symbol' => $symbol,
            'resolution' => $resolution,
            'from' => $_from,
            'to' => $to,
        ]);
    }

    public function cryptoCandles($symbol, $resolution, $_from, $to)
    {
        return $this->_request('GET', '/crypto/candle', [
            'symbol' => $symbol,
            'resolution' => $resolution,
            'from' => $_from,
            'to' => $to,
        ]);
    }

    public function stockTick($symbol, $date, $limit, $skip)
    {
        return $this->_request('GET', '/stock/tick', [
            'symbol' => $symbol,
            'date' => $date,
            'limit' => $limit,
            'skip' => $skip,
        ]);
    }

    public function indicesConstituents($symbol)
    {
        return $this->_request('GET', '/index/constituents', [
            'symbol' => $symbol,
        ]);
    }

    public function indicesHistoricalConstituents($symbol)
    {
        return $this->_request('GET', '/index/historical-constituents', [
            'symbol' => $symbol,
        ]);
    }

    public function etfsProfile($symbol)
    {
        return $this->_request('GET', '/etf/profile', [
            'symbol' => $symbol,
        ]);
    }

    public function etfsHoldings($symbol)
    {
        return $this->_request('GET', '/etf/holdings', [
            'symbol' => $symbol,
        ]);
    }

    public function etfsSectorExposure($symbol)
    {
        return $this->_request('GET', '/etf/sector-exposure', [
            'symbol' => $symbol,
        ]);
    }

    public function etfsCountryExposure($symbol)
    {
        return $this->_request('GET', '/etf/country-exposure', [
            'symbol' => $symbol,
        ]);
    }

    public function mutualFundProfile($symbol)
    {
        return $this->_request('GET', '/mutual-fund/profile', [
            'symbol' => $symbol,
        ]);
    }

    public function mutualFundHoldings($symbol)
    {
        return $this->_request('GET', '/mutual-fund/holdings', [
            'symbol' => $symbol,
        ]);
    }

    public function mutualFundSectorExposure($symbol)
    {
        return $this->_request('GET', '/mutual-fund/sector-exposure', [
            'symbol' => $symbol,
        ]);
    }

    public function mutualFundCountryExposure($symbol)
    {
        return $this->_request('GET', '/mutual-fund/country-exposure', [
            'symbol' => $symbol,
        ]);
    }

    public function revenueBreakdown($symbol)
    {
        return $this->_request('GET', '/stock/revenue-breakdown', [
            'symbol' => $symbol,
        ]);
    }

    public function socialSentiment($symbol)
    {
        return $this->_request('GET', '/stock/social-sentiment', [
            'symbol' => $symbol,
        ]);
    }

    public function investmentThemes($theme)
    {
        return $this->_request('GET', '/stock/investment-theme', [
            'theme' => $theme,
        ]);
    }

    public function supplyChainRelationships($symbol)
    {
        return $this->_request('GET', '/stock/supply-chain', [
            'symbol' => $symbol,
        ]);
    }

    public function insiderTransactions($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/insider-transactions', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function internationalFilings($symbol)
    {
        return $this->_request('GET', '/stock/international-filings', [
            'symbol' => $symbol,
        ]);
    }

    public function filingsSentiment($accessNumber)
    {
        return $this->_request('GET', '/stock/filings-sentiment', [
            'accessNumber' => $accessNumber,
        ]);
    }

    public function similarityIndex($symbol)
    {
        return $this->_request('GET', '/stock/similarity-index', [
            'symbol' => $symbol,
        ]);
    }

    public function symbolSearch($q)
    {
        return $this->_request('GET', '/search', [
            'q' => $q,
        ]);
    }

    public function companyEsgScore($symbol)
    {
        return $this->_request('GET', '/stock/esg', [
            'symbol' => $symbol,
        ]);
    }

    public function companyEarningsQualityScore($symbol, $freq)
    {
        return $this->_request('GET', '/stock/earnings-quality-score', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function cryptoProfile($symbol)
    {
        return $this->_request('GET', '/crypto/profile', [
            'symbol' => $symbol,
        ]);
    }

    public function companyEbitdaEstimates($symbol, $freq = 'quarterly')
    {
        return $this->_request('GET', '/stock/ebitda-estimates', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function companyEbitEstimates($symbol, $freq = 'quarterly')
    {
        return $this->_request('GET', '/stock/ebit-estimates', [
            'symbol' => $symbol,
            'freq' => $freq,
        ]);
    }

    public function stockUsptoPatent($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/uspto-patent', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function stockVisaApplication($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/visa-application', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function bankBranch($symbol)
    {
        return $this->_request('GET', '/bank-branch', [
            'symbol' => $symbol,
        ]);
    }

    public function bondTick($isin, $date, $limit, $skip, $exchange = 'trace', $format = 'json', $extra = [])
    {
        $params = array_merge([
            'isin' => $isin,
            'date' => $date,
            'limit' => $limit,
            'skip' => $skip,
            'exchange' => $exchange,
            'format' => $format,
        ], $extra);
        return $this->_request('GET', '/bond/tick', $params);
    }

    public function bondPrice($isin, $from, $to)
    {
        return $this->_request('GET', '/bond/price', [
            'isin' => $isin,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function bondProfile($params = [])
    {
        return $this->_request('GET', '/bond/profile', $params);
    }

    public function bondYieldCurve($code)
    {
        return $this->_request('GET', '/bond/yield-curve', [
            'code' => $code,
        ]);
    }

    public function airlinePriceIndex($airline, $from, $to)
    {
        return $this->_request('GET', '/airline/price-index', [
            'airline' => $airline,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function sectorMetric($region)
    {
        return $this->_request('GET', '/sector/metrics', [
            'region' => $region,
        ]);
    }

    public function stockUsaSpending($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/usa-spending', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function fdaCalendar()
    {
        return $this->_request('GET', '/fda-advisory-committee-calendar');
    }

    public function stockRevenueBreakdown2($symbol)
    {
        return $this->_request('GET', '/stock/revenue-breakdown2', [
            'symbol' => $symbol,
        ]);
    }

    public function marketStatus($exchange)
    {
        return $this->_request('GET', '/stock/market-status', [
            'exchange' => $exchange,
        ]);
    }

    public function marketHoliday($exchange)
    {
        return $this->_request('GET', '/stock/market-holiday', [
            'exchange' => $exchange,
        ]);
    }

    public function historicalEmployeeCount($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/historical-employee-count', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function earningsCallLive($from, $to, $symbol = '')
    {
        return $this->_request('GET', '/stock/earnings-call-live', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function stockPresentation($symbol)
    {
        return $this->_request('GET', '/stock/presentation', [
            'symbol' => $symbol,
        ]);
    }

    public function mutualFundEet($isin)
    {
        return $this->_request('GET', '/mutual-fund/eet', [
            'isin' => $isin,
        ]);
    }

    public function mutualFundEetPai($isin)
    {
        return $this->_request('GET', '/mutual-fund/eet-pai', [
            'isin' => $isin,
        ]);
    }

    public function institutionalProfile($cik = '')
    {
        return $this->_request('GET', '/institutional/profile', [
            'cik' => $cik,
        ]);
    }

    public function institutionalPortfolio($cik, $from, $to)
    {
        return $this->_request('GET', '/institutional/portfolio', [
            'cik' => $cik,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function institutionalOwnership($symbol, $cusip, $from, $to)
    {
        return $this->_request('GET', '/institutional/ownership', [
            'symbol' => $symbol,
            'cusip' => $cusip,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function congressionalTrading($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/congressional-trading', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function symbolChange($from, $to)
    {
        return $this->_request('GET', '/ca/symbol-change', [
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function isinChange($from, $to)
    {
        return $this->_request('GET', '/ca/isin-change', [
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function companyHistoricalEsgScore($symbol)
    {
        return $this->_request('GET', '/stock/historical-esg', [
            'symbol' => $symbol,
        ]);
    }

    public function lastBidAsk($symbol)
    {
        return $this->_request('GET', '/stock/bidask', [
            'symbol' => $symbol,
        ]);
    }

    public function stockInsiderSentiment($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/insider-sentiment', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function stockLobbying($symbol, $from, $to)
    {
        return $this->_request('GET', '/stock/lobbying', [
            'symbol' => $symbol,
            'from' => $from,
            'to' => $to,
        ]);
    }
} 