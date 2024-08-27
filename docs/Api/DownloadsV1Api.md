# Swagger\Client\DownloadsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiDownloadsBoundBookPost**](DownloadsV1Api.md#accountnumapidownloadsboundbookpost) | **POST** /{accountNum}/api/Downloads/BoundBook | Returns the current ATF Bound Book PDF file for the account.

# **accountNumApiDownloadsBoundBookPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DownloadsBoundBookDownloadDetailsModel accountNumApiDownloadsBoundBookPost($account_num, $x_audit_user)

Returns the current ATF Bound Book PDF file for the account.

<br>Returns a 200 OK if the current ATF Bound Book is located.  <br>Returns a 204 No Content if the account exists, but has not yet generated an ATF Bound Book PDF.  <br>Returns a 404 Not Found if the account does not exist.  <br>NOTE: this endpoint requires the caller to send an X-AuditUser header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DownloadsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDownloadsBoundBookPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsV1Api->accountNumApiDownloadsBoundBookPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DownloadsBoundBookDownloadDetailsModel**](../Model/FastBoundWebModelsApiV1DownloadsBoundBookDownloadDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

