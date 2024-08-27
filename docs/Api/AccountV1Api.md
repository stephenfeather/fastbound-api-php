# Swagger\Client\AccountV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountV1Api.md#getaccount) | **GET** /{accountNum}/api/Account | Retrieves a basic subset of account properties and settings.

# **getAccount**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AccountGetAccountCommand getAccount($account_num)

Retrieves a basic subset of account properties and settings.

<br>For descriptions of duplicate check types, visit our <a href=\"https://fastbound.link/duplicate-item-check\">Duplicate Item Check</a> help page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->getAccount($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountV1Api->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AccountGetAccountCommand**](../Model/FastBoundWebModelsApiV1AccountGetAccountCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

