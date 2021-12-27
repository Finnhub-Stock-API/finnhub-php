# # Transactions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol. | [optional]
**name** | **string** | Insider&#39;s name. | [optional]
**share** | **int** | Number of shares held after the transaction. | [optional]
**change** | **int** | Number of share changed from the last period. A positive value suggests a &lt;code&gt;BUY&lt;/code&gt; transaction. A negative value suggests a &lt;code&gt;SELL&lt;/code&gt; transaction. | [optional]
**filing_date** | [**\DateTime**](\DateTime.md) | Filing date. | [optional]
**transaction_date** | [**\DateTime**](\DateTime.md) | Transaction date. | [optional]
**transaction_price** | **float** | Average transaction price. | [optional]
**transaction_code** | **string** | Transaction code. A list of codes and their meanings can be found &lt;a href&#x3D;\&quot;https://www.sec.gov/about/forms/form4data.pdf\&quot; target&#x3D;\&quot;_blank\&quot; rel&#x3D;\&quot;noopener\&quot;&gt;here&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
