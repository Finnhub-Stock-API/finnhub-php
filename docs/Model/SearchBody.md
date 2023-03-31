# # SearchBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Search query |
**isins** | **string** | List of isin to search, comma separated (Max: 50). | [optional]
**cusips** | **string** | List of cusip to search, comma separated (Max: 50). | [optional]
**ciks** | **string** | List of SEC Center Index Key to search, comma separated (Max: 50). | [optional]
**sedar_ids** | **string** | List of SEDAR issuer number to search, comma separated (Max: 50). | [optional]
**ch_ids** | **string** | List of Companies House number to search, comma separated (Max: 50). | [optional]
**symbols** | **string** | List of symbols to search, comma separated (Max: 50). | [optional]
**sedols** | **string** | List of sedols to search, comma separated (Max: 50). | [optional]
**sources** | **string** | List of sources to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**forms** | **string** | List of forms to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**gics** | **string** | List of gics to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**naics** | **string** | List of sources to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**exhibits** | **string** | List of exhibits to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**exchanges** | **string** | List of exchanges to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**countries** | **string** | List of sources to search, comma separated (Max: 50). Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**acts** | **string** | List of SEC&#39;s exchanges act to search, comma separated. Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**caps** | **string** | List of market capitalization to search, comma separated. Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**from_date** | **string** | Search from date in format: YYYY-MM-DD, default from the last 2 years | [optional]
**to_date** | **string** | Search to date in format: YYYY-MM-DD, default to today | [optional]
**page** | **string** | Use for pagination, default to page 1 | [optional]
**sort** | **string** | Sort result by, default: sortMostRecent. Look at &lt;code&gt;/filter&lt;/code&gt; endpoint to see all available values. | [optional]
**highlighted** | **bool** | Enable highlight in returned filings. If enabled, only return 10 results each time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
