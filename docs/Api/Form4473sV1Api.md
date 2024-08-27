# Swagger\Client\Form4473sV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiForm4473sDownloadForm4473IdGet**](Form4473sV1Api.md#accountnumapiform4473sdownloadform4473idget) | **GET** /{accountNum}/api/Form4473s/Download/{form4473Id} | Returns the 4473&#x27;s last printed / previewed PDF file. The 4473 must have been completed by the seller or marked as  Void / No Transfer.

# **accountNumApiForm4473sDownloadForm4473IdGet**
> accountNumApiForm4473sDownloadForm4473IdGet($form4473_id, $account_num)

Returns the 4473's last printed / previewed PDF file. The 4473 must have been completed by the seller or marked as  Void / No Transfer.

<br>NOTE: this endpoint requires the caller to send an X-AuditUser header.  <br>NOTE: if the account uses a third party for electronic storage of 4473s, this endpoint will NOT return anything.               They may have edited the 4473 via the third party, so they must download the 4473 directly from the third party.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\Form4473sV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form4473_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $apiInstance->accountNumApiForm4473sDownloadForm4473IdGet($form4473_id, $account_num);
} catch (Exception $e) {
    echo 'Exception when calling Form4473sV1Api->accountNumApiForm4473sDownloadForm4473IdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form4473_id** | [**string**](../Model/.md)|  |
 **account_num** | **string**| The assigned account number. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

