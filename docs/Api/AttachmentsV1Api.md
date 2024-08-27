# Swagger\Client\AttachmentsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiAttachmentsDownloadAttachmentIdGet**](AttachmentsV1Api.md#accountnumapiattachmentsdownloadattachmentidget) | **GET** /{accountNum}/api/Attachments/Download/{attachmentId} | Returns the attachment file.

# **accountNumApiAttachmentsDownloadAttachmentIdGet**
> string accountNumApiAttachmentsDownloadAttachmentIdGet($attachment_id, $account_num)

Returns the attachment file.

NOTE: this endpoint requires the caller to send an X-AuditUser header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAttachmentsDownloadAttachmentIdGet($attachment_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsV1Api->accountNumApiAttachmentsDownloadAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)|  |
 **account_num** | **string**| The assigned account number. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

