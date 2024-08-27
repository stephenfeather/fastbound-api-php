# Swagger\Client\ContactsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiContactsExternalIdGet**](ContactsV1Api.md#accountnumapicontactsexternalidget) | **GET** /{accountNum}/api/Contacts/{externalId} | Retrieves the specified contact by External ID.
[**accountNumApiContactsExternalIdLicensesLicenseIdGet**](ContactsV1Api.md#accountnumapicontactsexternalidlicenseslicenseidget) | **GET** /{accountNum}/api/Contacts/{externalId}/Licenses/{licenseId} | Retrieves a license for the specified contact by External ID.
[**accountNumApiContactsGet**](ContactsV1Api.md#accountnumapicontactsget) | **GET** /{accountNum}/api/Contacts | Retrieves the account&#x27;s contacts.
[**accountNumApiContactsGetByExternalIdExternalIdGet**](ContactsV1Api.md#accountnumapicontactsgetbyexternalidexternalidget) | **GET** /{accountNum}/api/Contacts/GetByExternalId/{externalId} | Retrieves the specified contact by External ID.
[**accountNumApiContactsIdDelete**](ContactsV1Api.md#accountnumapicontactsiddelete) | **DELETE** /{accountNum}/api/Contacts/{id} | Deletes the specified contact.
[**accountNumApiContactsIdGet**](ContactsV1Api.md#accountnumapicontactsidget) | **GET** /{accountNum}/api/Contacts/{id} | Retrieves the specified contact by unique ID.
[**accountNumApiContactsIdLicensesLicenseIdDelete**](ContactsV1Api.md#accountnumapicontactsidlicenseslicenseiddelete) | **DELETE** /{accountNum}/api/Contacts/{id}/Licenses/{licenseId} | Deletes a license for the specified contact.
[**accountNumApiContactsIdLicensesLicenseIdGet**](ContactsV1Api.md#accountnumapicontactsidlicenseslicenseidget) | **GET** /{accountNum}/api/Contacts/{id}/Licenses/{licenseId} | Retrieves a license for the specified contact by unique ID.
[**accountNumApiContactsIdLicensesLicenseIdPut**](ContactsV1Api.md#accountnumapicontactsidlicenseslicenseidput) | **PUT** /{accountNum}/api/Contacts/{id}/Licenses/{licenseId} | Edits a license for the specified contact.
[**accountNumApiContactsIdLicensesPost**](ContactsV1Api.md#accountnumapicontactsidlicensespost) | **POST** /{accountNum}/api/Contacts/{id}/Licenses | Creates a new license for the specified contact.
[**accountNumApiContactsIdPut**](ContactsV1Api.md#accountnumapicontactsidput) | **PUT** /{accountNum}/api/Contacts/{id} | Edits the specified contact.
[**accountNumApiContactsMergePost**](ContactsV1Api.md#accountnumapicontactsmergepost) | **POST** /{accountNum}/api/Contacts/Merge | Merges two contacts: the \&quot;winning\&quot; contact and the \&quot;losing\&quot; contact.
[**accountNumApiContactsPost**](ContactsV1Api.md#accountnumapicontactspost) | **POST** /{accountNum}/api/Contacts | Creates a new contact.

# **accountNumApiContactsExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel accountNumApiContactsExternalIdGet($external_id, $account_num)

Retrieves the specified contact by External ID.

DEPRECATED. Please use /{accountNum}/api/Contacts/GetByExternalId/{externalId} instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the contact to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiContactsExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the contact to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel**](../Model/FastBoundWebModelsApiV1ContactsGetContactResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsExternalIdLicensesLicenseIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactLicenseCommand accountNumApiContactsExternalIdLicensesLicenseIdGet($external_id, $license_id, $account_num)

Retrieves a license for the specified contact by External ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the contact.
$license_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the license to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiContactsExternalIdLicensesLicenseIdGet($external_id, $license_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsExternalIdLicensesLicenseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the contact. |
 **license_id** | [**string**](../Model/.md)| The ID of the license to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactLicenseCommand**](../Model/FastBoundWebModelsApiV1ContactsGetContactLicenseCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetAllCommand accountNumApiContactsGet($account_num, $license_name, $trade_name, $ffl_number, $organization_name, $first_name, $middle_name, $last_name, $take, $skip)

Retrieves the account's contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$license_name = "license_name_example"; // string | Optional query parameter to search for a specific license name.
$trade_name = "trade_name_example"; // string | Optional query parameter to search for a specific trade name.
$ffl_number = "ffl_number_example"; // string | Optional query parameter to search for a specific FFL number.
$organization_name = "organization_name_example"; // string | Optional query parameter to search for a specific organization name.
$first_name = "first_name_example"; // string | Optional query parameter to search for a specific first name.
$middle_name = "middle_name_example"; // string | Optional query parameter to search for a specific middle name.
$last_name = "last_name_example"; // string | Optional query parameter to search for a specific last name.
$take = 56; // int | Optional query parameter to specify the number of contacts to return.
$skip = 56; // int | Optional query parameter to specify how many pages to skip.

try {
    $result = $apiInstance->accountNumApiContactsGet($account_num, $license_name, $trade_name, $ffl_number, $organization_name, $first_name, $middle_name, $last_name, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **license_name** | **string**| Optional query parameter to search for a specific license name. | [optional]
 **trade_name** | **string**| Optional query parameter to search for a specific trade name. | [optional]
 **ffl_number** | **string**| Optional query parameter to search for a specific FFL number. | [optional]
 **organization_name** | **string**| Optional query parameter to search for a specific organization name. | [optional]
 **first_name** | **string**| Optional query parameter to search for a specific first name. | [optional]
 **middle_name** | **string**| Optional query parameter to search for a specific middle name. | [optional]
 **last_name** | **string**| Optional query parameter to search for a specific last name. | [optional]
 **take** | **int**| Optional query parameter to specify the number of contacts to return. | [optional]
 **skip** | **int**| Optional query parameter to specify how many pages to skip. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetAllCommand**](../Model/FastBoundWebModelsApiV1ContactsGetAllCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsGetByExternalIdExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel accountNumApiContactsGetByExternalIdExternalIdGet($external_id, $account_num)

Retrieves the specified contact by External ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the contact to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiContactsGetByExternalIdExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsGetByExternalIdExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the contact to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel**](../Model/FastBoundWebModelsApiV1ContactsGetContactResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdDelete**
> accountNumApiContactsIdDelete($id, $account_num, $x_audit_user)

Deletes the specified contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsIdDelete($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact to delete. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel accountNumApiContactsIdGet($id, $account_num)

Retrieves the specified contact by unique ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiContactsIdGet($id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel**](../Model/FastBoundWebModelsApiV1ContactsGetContactResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdLicensesLicenseIdDelete**
> accountNumApiContactsIdLicensesLicenseIdDelete($id, $license_id, $account_num, $x_audit_user)

Deletes a license for the specified contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact.
$license_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the license to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsIdLicensesLicenseIdDelete($id, $license_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdLicensesLicenseIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact. |
 **license_id** | [**string**](../Model/.md)| The ID of the license to delete. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdLicensesLicenseIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactLicenseCommand accountNumApiContactsIdLicensesLicenseIdGet($id, $license_id, $account_num)

Retrieves a license for the specified contact by unique ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact.
$license_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the license to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiContactsIdLicensesLicenseIdGet($id, $license_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdLicensesLicenseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact. |
 **license_id** | [**string**](../Model/.md)| The ID of the license to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactLicenseCommand**](../Model/FastBoundWebModelsApiV1ContactsGetContactLicenseCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdLicensesLicenseIdPut**
> accountNumApiContactsIdLicensesLicenseIdPut($id, $license_id, $account_num, $x_audit_user)

Edits a license for the specified contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact.
$license_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the license to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsIdLicensesLicenseIdPut($id, $license_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdLicensesLicenseIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact. |
 **license_id** | [**string**](../Model/.md)| The ID of the license to edit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdLicensesPost**
> accountNumApiContactsIdLicensesPost($id, $account_num, $x_audit_user)

Creates a new license for the specified contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsIdLicensesPost($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdLicensesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsIdPut**
> accountNumApiContactsIdPut($id, $account_num, $x_audit_user)

Edits the specified contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsIdPut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the contact to edit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsMergePost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel accountNumApiContactsMergePost($account_num, $x_audit_user)

Merges two contacts: the \"winning\" contact and the \"losing\" contact.

<br>Everything from the winning contact is kept. Any entities related to the losing contact are assigned               to the winning contact. Finally, the losing contact is deleted.  <br>NOTE: the \"losing\" contact can NOT be the account owner contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiContactsMergePost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsMergePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ContactsGetContactResponseModel**](../Model/FastBoundWebModelsApiV1ContactsGetContactResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiContactsPost**
> accountNumApiContactsPost($account_num, $x_audit_user)

Creates a new contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiContactsPost($account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ContactsV1Api->accountNumApiContactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

