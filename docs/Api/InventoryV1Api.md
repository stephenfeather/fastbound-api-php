# Swagger\Client\InventoryV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiInventoryBulkVerifyPut**](InventoryV1Api.md#accountnumapiinventorybulkverifyput) | **PUT** /{accountNum}/api/Inventory/BulkVerify | Mark a list of items in inventory as verified. Optionally specify a new location, too. You can verify up to  1,000 serials in a single call.

# **accountNumApiInventoryBulkVerifyPut**
> \Swagger\Client\Model\FastBoundWebModelsApiV1InventoryBulkVerifyCommandResult accountNumApiInventoryBulkVerifyPut($account_num, $x_audit_user)

Mark a list of items in inventory as verified. Optionally specify a new location, too. You can verify up to  1,000 serials in a single call.

<br>By default, FastBound will mark items as verified if there is an exact serial match. Serials with no match              or multiple matches will not be updated. To override this behavior and only save changes if all serials have an              exact match, set rollbackPartial to true.  <br>You can optionally update each item's location by setting updateLocation to true and specifying a location.  <br>The verified date must be the UTC date/time. It cannot be more than 15 days in the past or in the future.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiInventoryBulkVerifyPut($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryV1Api->accountNumApiInventoryBulkVerifyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1InventoryBulkVerifyCommandResult**](../Model/FastBoundWebModelsApiV1InventoryBulkVerifyCommandResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

