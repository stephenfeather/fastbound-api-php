# Swagger\Client\SmartListsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiSmartListsAcquireTypeGet**](SmartListsV1Api.md#accountnumapismartlistsacquiretypeget) | **GET** /{accountNum}/api/SmartLists/AcquireType | Retrieves the Acquire Type smart list.
[**accountNumApiSmartListsCaliberGet**](SmartListsV1Api.md#accountnumapismartlistscaliberget) | **GET** /{accountNum}/api/SmartLists/Caliber | Retrieves the Caliber smart list.
[**accountNumApiSmartListsConditionGet**](SmartListsV1Api.md#accountnumapismartlistsconditionget) | **GET** /{accountNum}/api/SmartLists/Condition | Retrieves the Condition smart list.
[**accountNumApiSmartListsCountryOfManufactureGet**](SmartListsV1Api.md#accountnumapismartlistscountryofmanufactureget) | **GET** /{accountNum}/api/SmartLists/CountryOfManufacture | Retrieves the Country of Manufacture smart list.
[**accountNumApiSmartListsDeleteTypeGet**](SmartListsV1Api.md#accountnumapismartlistsdeletetypeget) | **GET** /{accountNum}/api/SmartLists/DeleteType | Retrieves the Delete Type smart list.
[**accountNumApiSmartListsDisposeTypeGet**](SmartListsV1Api.md#accountnumapismartlistsdisposetypeget) | **GET** /{accountNum}/api/SmartLists/DisposeType | Retrieves the Dispose Type smart list.
[**accountNumApiSmartListsImporterGet**](SmartListsV1Api.md#accountnumapismartlistsimporterget) | **GET** /{accountNum}/api/SmartLists/Importer | Retrieves the Importer smart list.
[**accountNumApiSmartListsItemTypeGet**](SmartListsV1Api.md#accountnumapismartlistsitemtypeget) | **GET** /{accountNum}/api/SmartLists/ItemType | Retrieves the Item Type smart list.
[**accountNumApiSmartListsLicenseTypeGet**](SmartListsV1Api.md#accountnumapismartlistslicensetypeget) | **GET** /{accountNum}/api/SmartLists/LicenseType | Retrieves the License Type smart list.
[**accountNumApiSmartListsLocationGet**](SmartListsV1Api.md#accountnumapismartlistslocationget) | **GET** /{accountNum}/api/SmartLists/Location | Retrieves the Location smart list.
[**accountNumApiSmartListsManufacturerGet**](SmartListsV1Api.md#accountnumapismartlistsmanufacturerget) | **GET** /{accountNum}/api/SmartLists/Manufacturer | Retrieves the Manufacturer smart list.
[**accountNumApiSmartListsManufacturingAcquireTypeGet**](SmartListsV1Api.md#accountnumapismartlistsmanufacturingacquiretypeget) | **GET** /{accountNum}/api/SmartLists/ManufacturingAcquireType | Retrieves the Manufacturing Acquire Type smart list.
[**accountNumApiSmartListsManufacturingDisposeTypeGet**](SmartListsV1Api.md#accountnumapismartlistsmanufacturingdisposetypeget) | **GET** /{accountNum}/api/SmartLists/ManufacturingDisposeType | Retrieves the Manufacturing Dispose Type smart list.
[**accountNumApiSmartListsTheftLossTypeGet**](SmartListsV1Api.md#accountnumapismartliststheftlosstypeget) | **GET** /{accountNum}/api/SmartLists/TheftLossType | Retrieves the Theft/Loss Type smart list.

# **accountNumApiSmartListsAcquireTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsAcquireTypeGet($account_num)

Retrieves the Acquire Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsAcquireTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsAcquireTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsCaliberGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsCaliberGet($account_num)

Retrieves the Caliber smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsCaliberGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsCaliberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsConditionGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsConditionGet($account_num)

Retrieves the Condition smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsConditionGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsConditionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsCountryOfManufactureGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsCountryOfManufactureGet($account_num)

Retrieves the Country of Manufacture smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsCountryOfManufactureGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsCountryOfManufactureGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsDeleteTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsDeleteTypeGet($account_num)

Retrieves the Delete Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsDeleteTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsDeleteTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsDisposeTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsDisposeTypeGet($account_num)

Retrieves the Dispose Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsDisposeTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsDisposeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsImporterGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsImporterGet($account_num)

Retrieves the Importer smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsImporterGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsImporterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsItemTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsItemTypeGet($account_num)

Retrieves the Item Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsItemTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsItemTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsLicenseTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsLicenseTypeGet($account_num)

Retrieves the License Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsLicenseTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsLicenseTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsLocationGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsLocationGet($account_num)

Retrieves the Location smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsLocationGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsLocationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsManufacturerGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsManufacturerGet($account_num)

Retrieves the Manufacturer smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsManufacturerGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsManufacturerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsManufacturingAcquireTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsManufacturingAcquireTypeGet($account_num)

Retrieves the Manufacturing Acquire Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsManufacturingAcquireTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsManufacturingAcquireTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsManufacturingDisposeTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsManufacturingDisposeTypeGet($account_num)

Retrieves the Manufacturing Dispose Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsManufacturingDisposeTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsManufacturingDisposeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiSmartListsTheftLossTypeGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand accountNumApiSmartListsTheftLossTypeGet($account_num)

Retrieves the Theft/Loss Type smart list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmartListsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiSmartListsTheftLossTypeGet($account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsV1Api->accountNumApiSmartListsTheftLossTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1SmartListsGetSmartListsCommand**](../Model/FastBoundWebModelsApiV1SmartListsGetSmartListsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

