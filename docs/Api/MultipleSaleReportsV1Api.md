# Swagger\Client\MultipleSaleReportsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiMultipleSaleReportsDownloadMultipleSaleReportIdAAttachmentIdGet**](MultipleSaleReportsV1Api.md#accountnumapimultiplesalereportsdownloadmultiplesalereportidaattachmentidget) | **GET** /{accountNum}/api/MultipleSaleReports/Download/{multipleSaleReportId}/a/{attachmentId} | Returns the Multiple Sale Report&#x27;s transmitted PDF file.

# **accountNumApiMultipleSaleReportsDownloadMultipleSaleReportIdAAttachmentIdGet**
> accountNumApiMultipleSaleReportsDownloadMultipleSaleReportIdAAttachmentIdGet($multiple_sale_report_id, $attachment_id, $account_num)

Returns the Multiple Sale Report's transmitted PDF file.

<br>NOTE: this endpoint requires the caller to send an X-AuditUser header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultipleSaleReportsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$multiple_sale_report_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $apiInstance->accountNumApiMultipleSaleReportsDownloadMultipleSaleReportIdAAttachmentIdGet($multiple_sale_report_id, $attachment_id, $account_num);
} catch (Exception $e) {
    echo 'Exception when calling MultipleSaleReportsV1Api->accountNumApiMultipleSaleReportsDownloadMultipleSaleReportIdAAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multiple_sale_report_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |
 **account_num** | **string**| The assigned account number. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

