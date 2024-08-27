# Swagger\Client\AcquisitionsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiAcquisitionsAcquisitionExternalIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsacquisitionexternalidget) | **GET** /{accountNum}/api/Acquisitions/{acquisitionExternalId} | Retrieves an acquisition by external ID.
[**accountNumApiAcquisitionsAcquisitionExternalIdItemsAcquisitionItemExternalIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsacquisitionexternaliditemsacquisitionitemexternalidget) | **GET** /{accountNum}/api/Acquisitions/{acquisitionExternalId}/Items/{acquisitionItemExternalId} | Retrieves an item by external ID.
[**accountNumApiAcquisitionsCreateAndCommitPost**](AcquisitionsV1Api.md#accountnumapiacquisitionscreateandcommitpost) | **POST** /{accountNum}/api/Acquisitions/CreateAndCommit | Create and commit an acquisition in a single request.
[**accountNumApiAcquisitionsExternalIdItemsAcquisitionItemIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsexternaliditemsacquisitionitemidget) | **GET** /{accountNum}/api/Acquisitions/{externalId}/Items/{acquisitionItemId} | Retrieves an item by ID and the acquisition&#x27;s external ID.
[**accountNumApiAcquisitionsGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsget) | **GET** /{accountNum}/api/Acquisitions | Retrieves the account&#x27;s acquisitions.
[**accountNumApiAcquisitionsGetByExternalIdAcquisitionExternalIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsgetbyexternalidacquisitionexternalidget) | **GET** /{accountNum}/api/Acquisitions/GetByExternalId/{acquisitionExternalId} | Retrieves an acquisition by external ID.
[**accountNumApiAcquisitionsIdAttachContactContactIdPut**](AcquisitionsV1Api.md#accountnumapiacquisitionsidattachcontactcontactidput) | **PUT** /{accountNum}/api/Acquisitions/{id}/AttachContact/{contactId} | Attaches a contact to an acquisition.
[**accountNumApiAcquisitionsIdCommitPost**](AcquisitionsV1Api.md#accountnumapiacquisitionsidcommitpost) | **POST** /{accountNum}/api/Acquisitions/{id}/Commit | Commits an acquisition.
[**accountNumApiAcquisitionsIdDelete**](AcquisitionsV1Api.md#accountnumapiacquisitionsiddelete) | **DELETE** /{accountNum}/api/Acquisitions/{id} | Deletes an acquisition.
[**accountNumApiAcquisitionsIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsidget) | **GET** /{accountNum}/api/Acquisitions/{id} | Retrieves an acquisition by ID.
[**accountNumApiAcquisitionsIdItemsAcquisitionItemIdDelete**](AcquisitionsV1Api.md#accountnumapiacquisitionsiditemsacquisitionitemiddelete) | **DELETE** /{accountNum}/api/Acquisitions/{id}/Items/{acquisitionItemId} | Deletes an item from an acquisition.
[**accountNumApiAcquisitionsIdItemsAcquisitionItemIdGet**](AcquisitionsV1Api.md#accountnumapiacquisitionsiditemsacquisitionitemidget) | **GET** /{accountNum}/api/Acquisitions/{id}/Items/{acquisitionItemId} | Retrieves an item by ID.
[**accountNumApiAcquisitionsIdItemsAcquisitionItemIdPut**](AcquisitionsV1Api.md#accountnumapiacquisitionsiditemsacquisitionitemidput) | **PUT** /{accountNum}/api/Acquisitions/{id}/Items/{acquisitionItemId} | Edits an item for an acquisition.
[**accountNumApiAcquisitionsIdItemsMultiplePost**](AcquisitionsV1Api.md#accountnumapiacquisitionsiditemsmultiplepost) | **POST** /{accountNum}/api/Acquisitions/{id}/Items/Multiple | Add multiple items to an acquisition.
[**accountNumApiAcquisitionsIdItemsPost**](AcquisitionsV1Api.md#accountnumapiacquisitionsiditemspost) | **POST** /{accountNum}/api/Acquisitions/{id}/Items | Creates a new item for an acquisition.
[**accountNumApiAcquisitionsIdPut**](AcquisitionsV1Api.md#accountnumapiacquisitionsidput) | **PUT** /{accountNum}/api/Acquisitions/{id} | Edits an acquisition.
[**accountNumApiAcquisitionsPost**](AcquisitionsV1Api.md#accountnumapiacquisitionspost) | **POST** /{accountNum}/api/Acquisitions | Creates a new acquisition.

# **accountNumApiAcquisitionsAcquisitionExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel accountNumApiAcquisitionsAcquisitionExternalIdGet($acquisition_external_id, $account_num)

Retrieves an acquisition by external ID.

DEPRECATED. Please use /{accountNum}/api/Acquisitions/GetByExternalId/{acquisitionExternalId} instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisition_external_id = "acquisition_external_id_example"; // string | The external ID of the acquisition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsAcquisitionExternalIdGet($acquisition_external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsAcquisitionExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_external_id** | **string**| The external ID of the acquisition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsAcquisitionExternalIdItemsAcquisitionItemExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand accountNumApiAcquisitionsAcquisitionExternalIdItemsAcquisitionItemExternalIdGet($acquisition_external_id, $acquisition_item_external_id, $account_num)

Retrieves an item by external ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisition_external_id = "acquisition_external_id_example"; // string | The external ID of the acquisition.
$acquisition_item_external_id = "acquisition_item_external_id_example"; // string | The external ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsAcquisitionExternalIdItemsAcquisitionItemExternalIdGet($acquisition_external_id, $acquisition_item_external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsAcquisitionExternalIdItemsAcquisitionItemExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_external_id** | **string**| The external ID of the acquisition. |
 **acquisition_item_external_id** | **string**| The external ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsCreateAndCommitPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandResultCommittedAcquisitionModel accountNumApiAcquisitionsCreateAndCommitPost($account_num, $x_audit_user, $list_acquired_items)

Create and commit an acquisition in a single request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.
$list_acquired_items = true; // bool | <br>If true, returns an array of the acquired items, as well as the acquisition Id and contact Id. Upon success,              the response is a 200 OK.  <br>If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content.

try {
    $result = $apiInstance->accountNumApiAcquisitionsCreateAndCommitPost($account_num, $x_audit_user, $list_acquired_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsCreateAndCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |
 **list_acquired_items** | **bool**| &lt;br&gt;If true, returns an array of the acquired items, as well as the acquisition Id and contact Id. Upon success,              the response is a 200 OK.  &lt;br&gt;If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandResultCommittedAcquisitionModel**](../Model/FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandResultCommittedAcquisitionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsExternalIdItemsAcquisitionItemIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemByIdAndByAcquisitionExternalIdCommand accountNumApiAcquisitionsExternalIdItemsAcquisitionItemIdGet($external_id, $acquisition_item_id, $account_num)

Retrieves an item by ID and the acquisition's external ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The external ID of the acquisition.
$acquisition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsExternalIdItemsAcquisitionItemIdGet($external_id, $acquisition_item_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsExternalIdItemsAcquisitionItemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The external ID of the acquisition. |
 **acquisition_item_id** | [**string**](../Model/.md)| The ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemByIdAndByAcquisitionExternalIdCommand**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemByIdAndByAcquisitionExternalIdCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAllCommand accountNumApiAcquisitionsGet($account_num, $take, $skip, $id, $external_id, $type, $purchase_order_number, $invoice_number, $shipment_tracking_number, $is_manufacturing_acquisition, $acquired_from_contact_id, $acquired_from_contact_external_id, $item_id, $item_external_id)

Retrieves the account's acquisitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$take = 56; // int | Optional query parameter to specify the number of acquisitions to return.
$skip = 56; // int | Optional query parameter to specify how many pages to skip.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for an acquisition with a specific identifier.
$external_id = "external_id_example"; // string | Optional query parameter to search for an acquisition with a specific external identifier.
$type = "type_example"; // string | Optional query parameter to search for acquisitions with a specific acquisition type.
$purchase_order_number = "purchase_order_number_example"; // string | Optional query parameter to search for acquisitions with a specific purchase order number.
$invoice_number = "invoice_number_example"; // string | Optional query parameter to search for acquisitions with a specific invoice number.
$shipment_tracking_number = "shipment_tracking_number_example"; // string | Optional query parameter to search for acquisitions with a specific shipment tracking number.
$is_manufacturing_acquisition = true; // bool | Optional query parameter to specify whether an acquisition is a manufacturing acquisition.              true means search for manufacturing acquisitions; false means search for non-manufacturing acquisitions.
$acquired_from_contact_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for acquisitions by the acquire contact identifier.
$acquired_from_contact_external_id = "acquired_from_contact_external_id_example"; // string | Optional query parameter to search for acquisitions by the acquire contact external identifier.
$item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for an acquisition containing the acquisition item with the given identifier.
$item_external_id = "item_external_id_example"; // string | Optional query parameter to search for an acquisition containing the acquisition item with the given external identifier.

try {
    $result = $apiInstance->accountNumApiAcquisitionsGet($account_num, $take, $skip, $id, $external_id, $type, $purchase_order_number, $invoice_number, $shipment_tracking_number, $is_manufacturing_acquisition, $acquired_from_contact_id, $acquired_from_contact_external_id, $item_id, $item_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **take** | **int**| Optional query parameter to specify the number of acquisitions to return. | [optional]
 **skip** | **int**| Optional query parameter to specify how many pages to skip. | [optional]
 **id** | [**string**](../Model/.md)| Optional query parameter to search for an acquisition with a specific identifier. | [optional]
 **external_id** | **string**| Optional query parameter to search for an acquisition with a specific external identifier. | [optional]
 **type** | **string**| Optional query parameter to search for acquisitions with a specific acquisition type. | [optional]
 **purchase_order_number** | **string**| Optional query parameter to search for acquisitions with a specific purchase order number. | [optional]
 **invoice_number** | **string**| Optional query parameter to search for acquisitions with a specific invoice number. | [optional]
 **shipment_tracking_number** | **string**| Optional query parameter to search for acquisitions with a specific shipment tracking number. | [optional]
 **is_manufacturing_acquisition** | **bool**| Optional query parameter to specify whether an acquisition is a manufacturing acquisition.              true means search for manufacturing acquisitions; false means search for non-manufacturing acquisitions. | [optional]
 **acquired_from_contact_id** | [**string**](../Model/.md)| Optional query parameter to search for acquisitions by the acquire contact identifier. | [optional]
 **acquired_from_contact_external_id** | **string**| Optional query parameter to search for acquisitions by the acquire contact external identifier. | [optional]
 **item_id** | [**string**](../Model/.md)| Optional query parameter to search for an acquisition containing the acquisition item with the given identifier. | [optional]
 **item_external_id** | **string**| Optional query parameter to search for an acquisition containing the acquisition item with the given external identifier. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAllCommand**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAllCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsGetByExternalIdAcquisitionExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel accountNumApiAcquisitionsGetByExternalIdAcquisitionExternalIdGet($acquisition_external_id, $account_num)

Retrieves an acquisition by external ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisition_external_id = "acquisition_external_id_example"; // string | The external ID of the acquisition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsGetByExternalIdAcquisitionExternalIdGet($acquisition_external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsGetByExternalIdAcquisitionExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_external_id** | **string**| The external ID of the acquisition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdAttachContactContactIdPut**
> accountNumApiAcquisitionsIdAttachContactContactIdPut($id, $contact_id, $account_num, $x_audit_user)

Attaches a contact to an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | <br>The ID of the acquisition.  <br>NOTE: changing the contact on a manufacturing acquisition is not allowed.
$contact_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to attach to the acquisition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdAttachContactContactIdPut($id, $contact_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdAttachContactContactIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| &lt;br&gt;The ID of the acquisition.  &lt;br&gt;NOTE: changing the contact on a manufacturing acquisition is not allowed. |
 **contact_id** | [**string**](../Model/.md)| The ID of the contact to attach to the acquisition. |
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

# **accountNumApiAcquisitionsIdCommitPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCommitAcquisitionCommandResultCommittedAcquisitionModel accountNumApiAcquisitionsIdCommitPost($id, $account_num, $x_audit_user, $list_acquired_items)

Commits an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition to commit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.
$list_acquired_items = true; // bool | <br>If true, returns an array of the acquired items, as well as the acquisition Id and contact Id. Upon success,              the response is a 200 OK.  <br>If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content.

try {
    $result = $apiInstance->accountNumApiAcquisitionsIdCommitPost($id, $account_num, $x_audit_user, $list_acquired_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition to commit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |
 **list_acquired_items** | **bool**| &lt;br&gt;If true, returns an array of the acquired items, as well as the acquisition Id and contact Id. Upon success,              the response is a 200 OK.  &lt;br&gt;If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCommitAcquisitionCommandResultCommittedAcquisitionModel**](../Model/FastBoundWebModelsApiV1AcquisitionsCommitAcquisitionCommandResultCommittedAcquisitionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdDelete**
> accountNumApiAcquisitionsIdDelete($id, $account_num, $x_audit_user)

Deletes an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdDelete($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition to delete. |
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

# **accountNumApiAcquisitionsIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel accountNumApiAcquisitionsIdGet($id, $account_num)

Retrieves an acquisition by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsIdGet($id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdItemsAcquisitionItemIdDelete**
> accountNumApiAcquisitionsIdItemsAcquisitionItemIdDelete($id, $acquisition_item_id, $account_num, $x_audit_user)

Deletes an item from an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition.
$acquisition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdItemsAcquisitionItemIdDelete($id, $acquisition_item_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdItemsAcquisitionItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition. |
 **acquisition_item_id** | [**string**](../Model/.md)| The ID of the item to delete. |
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

# **accountNumApiAcquisitionsIdItemsAcquisitionItemIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand accountNumApiAcquisitionsIdItemsAcquisitionItemIdGet($id, $acquisition_item_id, $account_num)

Retrieves an item by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition.
$acquisition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiAcquisitionsIdItemsAcquisitionItemIdGet($id, $acquisition_item_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdItemsAcquisitionItemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition. |
 **acquisition_item_id** | [**string**](../Model/.md)| The ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionItemCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdItemsAcquisitionItemIdPut**
> accountNumApiAcquisitionsIdItemsAcquisitionItemIdPut($id, $acquisition_item_id, $account_num, $x_audit_user)

Edits an item for an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition.
$acquisition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdItemsAcquisitionItemIdPut($id, $acquisition_item_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdItemsAcquisitionItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition. |
 **acquisition_item_id** | [**string**](../Model/.md)| The ID of the item to edit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdItemsMultiplePost**
> accountNumApiAcquisitionsIdItemsMultiplePost($id, $account_num, $x_audit_user)

Add multiple items to an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdItemsMultiplePost($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdItemsMultiplePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition. |
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

# **accountNumApiAcquisitionsIdItemsPost**
> accountNumApiAcquisitionsIdItemsPost($id, $account_num, $x_audit_user)

Creates a new item for an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdItemsPost($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsIdPut**
> accountNumApiAcquisitionsIdPut($id, $account_num, $x_audit_user)

Edits an acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the acquisition to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiAcquisitionsIdPut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the acquisition to edit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiAcquisitionsPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel accountNumApiAcquisitionsPost($account_num, $x_audit_user)

Creates a new acquisition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcquisitionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiAcquisitionsPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsV1Api->accountNumApiAcquisitionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel**](../Model/FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

