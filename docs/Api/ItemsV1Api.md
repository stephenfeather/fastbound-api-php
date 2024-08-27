# Swagger\Client\ItemsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiItemsExternalIdGet**](ItemsV1Api.md#accountnumapiitemsexternalidget) | **GET** /{accountNum}/api/Items/{externalId} | Retrieves the specified item by External ID.
[**accountNumApiItemsGet**](ItemsV1Api.md#accountnumapiitemsget) | **GET** /{accountNum}/api/Items | Retrieves the account&#x27;s items.
[**accountNumApiItemsGetByExternalIdExternalIdGet**](ItemsV1Api.md#accountnumapiitemsgetbyexternalidexternalidget) | **GET** /{accountNum}/api/Items/GetByExternalId/{externalId} | Retrieves the specified item by External ID.
[**accountNumApiItemsIdAcquisitionContactContactIdPut**](ItemsV1Api.md#accountnumapiitemsidacquisitioncontactcontactidput) | **PUT** /{accountNum}/api/Items/{id}/AcquisitionContact/{contactId} | Change an item&#x27;s acquisition contact.
[**accountNumApiItemsIdDelete**](ItemsV1Api.md#accountnumapiitemsiddelete) | **DELETE** /{accountNum}/api/Items/{id} | Deletes the specified item.
[**accountNumApiItemsIdGet**](ItemsV1Api.md#accountnumapiitemsidget) | **GET** /{accountNum}/api/Items/{id} | Retrieves the specified item by unique ID.
[**accountNumApiItemsIdPut**](ItemsV1Api.md#accountnumapiitemsidput) | **PUT** /{accountNum}/api/Items/{id} | Edits the specified item.
[**accountNumApiItemsIdSetExternalIdPut**](ItemsV1Api.md#accountnumapiitemsidsetexternalidput) | **PUT** /{accountNum}/api/Items/{id}/SetExternalId | Sets the ExternalId of the specified item.
[**accountNumApiItemsIdUndisposePut**](ItemsV1Api.md#accountnumapiitemsidundisposeput) | **PUT** /{accountNum}/api/Items/{id}/Undispose | Undisposes the specified item.
[**accountNumApiItemsSetExternalIdsPut**](ItemsV1Api.md#accountnumapiitemssetexternalidsput) | **PUT** /{accountNum}/api/Items/SetExternalIds | Sets the ExternalId of each of the specified items.

# **accountNumApiItemsExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand accountNumApiItemsExternalIdGet($external_id, $account_num)

Retrieves the specified item by External ID.

DEPRECATED. Please use /{accountNum}/api/Items/GetByExternalId/{externalId} instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiItemsExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand**](../Model/FastBoundWebModelsApiV1ItemsGetItemCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiItemsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetAllCommand accountNumApiItemsGet($account_num, $search, $item_number, $serial, $manufacturer, $importer, $model, $type, $caliber, $location, $condition, $mpn, $upc, $sku, $is_theft_loss, $is_destroyed, $do_not_dispose, $disposition_id, $status, $acquired_on_or_after, $acquired_on_or_before, $acquire_purchase_order_number, $acquire_invoice_number, $acquire_shipment_tracking_number, $disposed_on_or_after, $disposed_on_or_before, $dispose_purchase_order_number, $dispose_invoice_number, $dispose_shipment_tracking_number, $has_external_id, $acquisition_type, $take, $skip)

Retrieves the account's items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$search = "search_example"; // string | Optional query parameter to search for items. When set, other search parameters (e.g., serial) are ignored.
$item_number = "item_number_example"; // string | Optional query parameter to search for a specific item number. Ignored if search is set.
$serial = "serial_example"; // string | Optional query parameter to search for a specific serial. Ignored if search is set.
$manufacturer = "manufacturer_example"; // string | Optional query parameter to search for a specific manufacturer. Ignored if search is set.
$importer = "importer_example"; // string | Optional query parameter to search for a specific importer. Ignored if search is set.
$model = "model_example"; // string | Optional query parameter to search for a specific model. Ignored if search is set.
$type = array("type_example"); // string[] | Optional query parameter to search for a specific type. Ignored if search is set. Add multiple to the query string to               search by multiple types (e.g., type=Pistol&type=Revolver).
$caliber = "caliber_example"; // string | Optional query parameter to search for a specific caliber. Ignored if search is set.
$location = "location_example"; // string | Optional query parameter to search for a specific location. Ignored if search is set.
$condition = array("condition_example"); // string[] | Optional query parameter to search for a specific condition. Ignored if search is set. Add multiple to the query              string to search by multiple types (e.g., condition=New&condition=Used).
$mpn = "mpn_example"; // string | Optional query parameter to search for a specific MPN. Ignored if search is set.
$upc = "upc_example"; // string | Optional query parameter to search for a specific UPC. Ignored if search is set.
$sku = "sku_example"; // string | Optional query parameter to search for a specific SKU. Ignored if search is set.
$is_theft_loss = true; // bool | Optional query parameter to search for items with a disposition type of Theft/Loss. If true,              returns items whose Disposition Type was Theft/Loss. If false, returns items whose Disposition Type was not Theft/Loss. If              not set, does not modify the query. Ignored if search is set.
$is_destroyed = true; // bool | Optional query parameter to search for items with a disposition type of Destroyed. If true,              returns items whose Disposition Type was Destroyed. If false, returns items whose Disposition Type was not Destroyed. If              not set, does not modify the query. Ignored if search is set.
$do_not_dispose = true; // bool | Optional query parameter to search for items marked as Do Not Dispose. If true, returns items marked as Do              Not Dispose. If false, returns items not marked as Do Not Dispose. If not set, does not modify the query. Ignored if search is set.
$disposition_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for a specific disposition. Ignored if search is set.
$status = new \Swagger\Client\Model\FastBoundDataEnumsItemStatuses(); // \Swagger\Client\Model\FastBoundDataEnumsItemStatuses | Optional query parameter to filter results by status. Valid values are 1 (Available), 2 (Pending Disposal), 3 (Disposed), and 4 (Deleted).
$acquired_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional query parameter to return items acquired on or after this date in the account's time zone. Ignored if search is set.
$acquired_on_or_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional query parameter to return items acquired on or before this date in the account's time zone. Ignored if search is set.
$acquire_purchase_order_number = "acquire_purchase_order_number_example"; // string | Optional query parameter to search for a specific acquisition purchase order number. Ignored if search is set.
$acquire_invoice_number = "acquire_invoice_number_example"; // string | Optional query parameter to search for a specific acquisition invoice number. Ignored if search is set.
$acquire_shipment_tracking_number = "acquire_shipment_tracking_number_example"; // string | Optional query parameter to search for a specific acquisition shipment tracking number. Ignored if search is set.
$disposed_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional query parameter to return items disposed on or after this date in the account's time zone. Ignored if search is set.
$disposed_on_or_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional query parameter to return items disposed on or before this date in the account's time zone. Ignored if search is set.
$dispose_purchase_order_number = "dispose_purchase_order_number_example"; // string | Optional query parameter to search for a specific disposition purchase order number. Ignored if search is set.
$dispose_invoice_number = "dispose_invoice_number_example"; // string | Optional query parameter to search for a specific disposition invoice number. Ignored if search is set.
$dispose_shipment_tracking_number = "dispose_shipment_tracking_number_example"; // string | Optional query parameter to search for a specific disposition shipment tracking number. Ignored if search is set.
$has_external_id = true; // bool | Optional query parameter to filter results by presence or absence of an ExternalId. true returns only items with an ExternalId; false returns              only items with no ExternalId. Unset doesn't filter by ExternalId at all.
$acquisition_type = array("acquisition_type_example"); // string[] | Optional query parameter to search for a specific acquisition type. Ignored if search is set. Add multiple to the query              string to search by multiple types (e.g., acquisitionType=Purchase&acquisitionType=Consignment).
$take = 56; // int | Optional query parameter to specify the number of items to return.
$skip = 56; // int | Optional query parameter to specify how many pages to skip.

try {
    $result = $apiInstance->accountNumApiItemsGet($account_num, $search, $item_number, $serial, $manufacturer, $importer, $model, $type, $caliber, $location, $condition, $mpn, $upc, $sku, $is_theft_loss, $is_destroyed, $do_not_dispose, $disposition_id, $status, $acquired_on_or_after, $acquired_on_or_before, $acquire_purchase_order_number, $acquire_invoice_number, $acquire_shipment_tracking_number, $disposed_on_or_after, $disposed_on_or_before, $dispose_purchase_order_number, $dispose_invoice_number, $dispose_shipment_tracking_number, $has_external_id, $acquisition_type, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **search** | **string**| Optional query parameter to search for items. When set, other search parameters (e.g., serial) are ignored. | [optional]
 **item_number** | **string**| Optional query parameter to search for a specific item number. Ignored if search is set. | [optional]
 **serial** | **string**| Optional query parameter to search for a specific serial. Ignored if search is set. | [optional]
 **manufacturer** | **string**| Optional query parameter to search for a specific manufacturer. Ignored if search is set. | [optional]
 **importer** | **string**| Optional query parameter to search for a specific importer. Ignored if search is set. | [optional]
 **model** | **string**| Optional query parameter to search for a specific model. Ignored if search is set. | [optional]
 **type** | [**string[]**](../Model/string.md)| Optional query parameter to search for a specific type. Ignored if search is set. Add multiple to the query string to               search by multiple types (e.g., type&#x3D;Pistol&amp;type&#x3D;Revolver). | [optional]
 **caliber** | **string**| Optional query parameter to search for a specific caliber. Ignored if search is set. | [optional]
 **location** | **string**| Optional query parameter to search for a specific location. Ignored if search is set. | [optional]
 **condition** | [**string[]**](../Model/string.md)| Optional query parameter to search for a specific condition. Ignored if search is set. Add multiple to the query              string to search by multiple types (e.g., condition&#x3D;New&amp;condition&#x3D;Used). | [optional]
 **mpn** | **string**| Optional query parameter to search for a specific MPN. Ignored if search is set. | [optional]
 **upc** | **string**| Optional query parameter to search for a specific UPC. Ignored if search is set. | [optional]
 **sku** | **string**| Optional query parameter to search for a specific SKU. Ignored if search is set. | [optional]
 **is_theft_loss** | **bool**| Optional query parameter to search for items with a disposition type of Theft/Loss. If true,              returns items whose Disposition Type was Theft/Loss. If false, returns items whose Disposition Type was not Theft/Loss. If              not set, does not modify the query. Ignored if search is set. | [optional]
 **is_destroyed** | **bool**| Optional query parameter to search for items with a disposition type of Destroyed. If true,              returns items whose Disposition Type was Destroyed. If false, returns items whose Disposition Type was not Destroyed. If              not set, does not modify the query. Ignored if search is set. | [optional]
 **do_not_dispose** | **bool**| Optional query parameter to search for items marked as Do Not Dispose. If true, returns items marked as Do              Not Dispose. If false, returns items not marked as Do Not Dispose. If not set, does not modify the query. Ignored if search is set. | [optional]
 **disposition_id** | [**string**](../Model/.md)| Optional query parameter to search for a specific disposition. Ignored if search is set. | [optional]
 **status** | [**\Swagger\Client\Model\FastBoundDataEnumsItemStatuses**](../Model/.md)| Optional query parameter to filter results by status. Valid values are 1 (Available), 2 (Pending Disposal), 3 (Disposed), and 4 (Deleted). | [optional]
 **acquired_on_or_after** | **\DateTime**| Optional query parameter to return items acquired on or after this date in the account&#x27;s time zone. Ignored if search is set. | [optional]
 **acquired_on_or_before** | **\DateTime**| Optional query parameter to return items acquired on or before this date in the account&#x27;s time zone. Ignored if search is set. | [optional]
 **acquire_purchase_order_number** | **string**| Optional query parameter to search for a specific acquisition purchase order number. Ignored if search is set. | [optional]
 **acquire_invoice_number** | **string**| Optional query parameter to search for a specific acquisition invoice number. Ignored if search is set. | [optional]
 **acquire_shipment_tracking_number** | **string**| Optional query parameter to search for a specific acquisition shipment tracking number. Ignored if search is set. | [optional]
 **disposed_on_or_after** | **\DateTime**| Optional query parameter to return items disposed on or after this date in the account&#x27;s time zone. Ignored if search is set. | [optional]
 **disposed_on_or_before** | **\DateTime**| Optional query parameter to return items disposed on or before this date in the account&#x27;s time zone. Ignored if search is set. | [optional]
 **dispose_purchase_order_number** | **string**| Optional query parameter to search for a specific disposition purchase order number. Ignored if search is set. | [optional]
 **dispose_invoice_number** | **string**| Optional query parameter to search for a specific disposition invoice number. Ignored if search is set. | [optional]
 **dispose_shipment_tracking_number** | **string**| Optional query parameter to search for a specific disposition shipment tracking number. Ignored if search is set. | [optional]
 **has_external_id** | **bool**| Optional query parameter to filter results by presence or absence of an ExternalId. true returns only items with an ExternalId; false returns              only items with no ExternalId. Unset doesn&#x27;t filter by ExternalId at all. | [optional]
 **acquisition_type** | [**string[]**](../Model/string.md)| Optional query parameter to search for a specific acquisition type. Ignored if search is set. Add multiple to the query              string to search by multiple types (e.g., acquisitionType&#x3D;Purchase&amp;acquisitionType&#x3D;Consignment). | [optional]
 **take** | **int**| Optional query parameter to specify the number of items to return. | [optional]
 **skip** | **int**| Optional query parameter to specify how many pages to skip. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetAllCommand**](../Model/FastBoundWebModelsApiV1ItemsGetAllCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiItemsGetByExternalIdExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand accountNumApiItemsGetByExternalIdExternalIdGet($external_id, $account_num)

Retrieves the specified item by External ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiItemsGetByExternalIdExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsGetByExternalIdExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand**](../Model/FastBoundWebModelsApiV1ItemsGetItemCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiItemsIdAcquisitionContactContactIdPut**
> accountNumApiItemsIdAcquisitionContactContactIdPut($id, $contact_id, $account_num, $x_audit_user)

Change an item's acquisition contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item on which to change the acquisition contact.
$contact_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to use as the item's acquisition contact.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiItemsIdAcquisitionContactContactIdPut($id, $contact_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdAcquisitionContactContactIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item on which to change the acquisition contact. |
 **contact_id** | [**string**](../Model/.md)| The ID of the contact to use as the item&#x27;s acquisition contact. |
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

# **accountNumApiItemsIdDelete**
> accountNumApiItemsIdDelete($id, $account_num, $x_audit_user)

Deletes the specified item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiItemsIdDelete($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item to delete. |
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

# **accountNumApiItemsIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand accountNumApiItemsIdGet($id, $account_num)

Retrieves the specified item by unique ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiItemsIdGet($id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1ItemsGetItemCommand**](../Model/FastBoundWebModelsApiV1ItemsGetItemCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiItemsIdPut**
> accountNumApiItemsIdPut($id, $account_num, $x_audit_user)

Edits the specified item.

<br>The Note property is added to the audit log entry created whenever an item's Do Not Dispose property changes. Otherwise,              it is ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiItemsIdPut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item to edit. |
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

# **accountNumApiItemsIdSetExternalIdPut**
> accountNumApiItemsIdSetExternalIdPut($id, $account_num, $x_audit_user)

Sets the ExternalId of the specified item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item whose ExternalId to set.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiItemsIdSetExternalIdPut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdSetExternalIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item whose ExternalId to set. |
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

# **accountNumApiItemsIdUndisposePut**
> accountNumApiItemsIdUndisposePut($id, $account_num, $x_audit_user)

Undisposes the specified item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to undispose.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiItemsIdUndisposePut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsIdUndisposePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the item to undispose. |
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

# **accountNumApiItemsSetExternalIdsPut**
> accountNumApiItemsSetExternalIdsPut($account_num, $x_audit_user, $id)

Sets the ExternalId of each of the specified items.

<br>Each item in the request must exist in the database.  <br>Do not send the same item more than once in a single request.  <br>Multiple items in the account can have a NULL ExternalId. Non-null ExternalIds must be unique per account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->accountNumApiItemsSetExternalIdsPut($account_num, $x_audit_user, $id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsV1Api->accountNumApiItemsSetExternalIdsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |
 **id** | [**string**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

