# Swagger\Client\WebhooksV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiWebhooksEventsGet**](WebhooksV1Api.md#accountnumapiwebhookseventsget) | **GET** /{accountNum}/api/Webhooks/Events | Retrieves a list of all available webhook events to which an account can subscribe.
[**accountNumApiWebhooksNameDelete**](WebhooksV1Api.md#accountnumapiwebhooksnamedelete) | **DELETE** /{accountNum}/api/Webhooks/{name} | Deletes a webhook.
[**accountNumApiWebhooksNameGet**](WebhooksV1Api.md#accountnumapiwebhooksnameget) | **GET** /{accountNum}/api/Webhooks/{name} | Retrieves a webhook by Name.
[**accountNumApiWebhooksNamePut**](WebhooksV1Api.md#accountnumapiwebhooksnameput) | **PUT** /{accountNum}/api/Webhooks/{name} | Edits a webhook.
[**accountNumApiWebhooksPost**](WebhooksV1Api.md#accountnumapiwebhookspost) | **POST** /{accountNum}/api/Webhooks | Creates a new webhook.

# **accountNumApiWebhooksEventsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksGetAllEventsCommand accountNumApiWebhooksEventsGet($account_num)

Retrieves a list of all available webhook events to which an account can subscribe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiWebhooksEventsGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksV1Api->accountNumApiWebhooksEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksGetAllEventsCommand**](../Model/FastBoundWebModelsApiV1WebhooksGetAllEventsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiWebhooksNameDelete**
> accountNumApiWebhooksNameDelete($name, $account_num, $x_audit_user)

Deletes a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the webhook to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiWebhooksNameDelete($name, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksV1Api->accountNumApiWebhooksNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the webhook to delete. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiWebhooksNameGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksGetWebhookResponseModel accountNumApiWebhooksNameGet($name, $account_num)

Retrieves a webhook by Name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the webhook to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiWebhooksNameGet($name, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksV1Api->accountNumApiWebhooksNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the webhook to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksGetWebhookResponseModel**](../Model/FastBoundWebModelsApiV1WebhooksGetWebhookResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiWebhooksNamePut**
> accountNumApiWebhooksNamePut($name, $account_num, $x_audit_user)

Edits a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the webhook to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiWebhooksNamePut($name, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksV1Api->accountNumApiWebhooksNamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the webhook to edit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiWebhooksPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksCreateWebhookCommandResultCreateWehookResponseModel accountNumApiWebhooksPost($account_num, $x_audit_user)

Creates a new webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiWebhooksPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksV1Api->accountNumApiWebhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1WebhooksCreateWebhookCommandResultCreateWehookResponseModel**](../Model/FastBoundWebModelsApiV1WebhooksCreateWebhookCommandResultCreateWehookResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

