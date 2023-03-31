# # BondTickData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Number of ticks skipped. | [optional]
**count** | **int** | Number of ticks returned. If &lt;code&gt;count&lt;/code&gt; &lt; &lt;code&gt;limit&lt;/code&gt;, all data for that date has been returned. | [optional]
**total** | **int** | Total number of ticks for that date. | [optional]
**v** | **float[]** | List of volume data. | [optional]
**p** | **float[]** | List of price data. | [optional]
**y** | **float[]** | List of yield data. | [optional]
**t** | **int[]** | List of timestamp in UNIX ms. | [optional]
**si** | **string[]** | List of values showing the side (Buy/sell) of each trade. List of supported values: &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp&#x3D;sharing\&quot;,&gt;here&lt;/a&gt; | [optional]
**cp** | **string[]** | List of values showing the counterparty of each trade. List of supported values: &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp&#x3D;sharing\&quot;,&gt;here&lt;/a&gt; | [optional]
**rp** | **string[]** | List of values showing the reporting party of each trade. List of supported values: &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp&#x3D;sharing\&quot;,&gt;here&lt;/a&gt; | [optional]
**ats** | **string[]** | ATS flag. Y or empty | [optional]
**c** | **string[][]** | List of trade conditions. A comprehensive list of trade conditions code can be found &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp&#x3D;sharing\&quot;&gt;here&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
