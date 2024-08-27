# Swagger\Client\DispositionsV1Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountNumApiDispositionsCreateAndCommitPost**](DispositionsV1Api.md#accountnumapidispositionscreateandcommitpost) | **POST** /{accountNum}/api/Dispositions/CreateAndCommit | Create and commit a disposition in a single request.
[**accountNumApiDispositionsDestroyedPost**](DispositionsV1Api.md#accountnumapidispositionsdestroyedpost) | **POST** /{accountNum}/api/Dispositions/Destroyed | Creates a new Destroyed disposition.
[**accountNumApiDispositionsDispositionExternalIdItemsAddByExternalIdPost**](DispositionsV1Api.md#accountnumapidispositionsdispositionexternaliditemsaddbyexternalidpost) | **POST** /{accountNum}/api/Dispositions/{dispositionExternalId}/Items/AddByExternalId | Add items to the specified disposition, using external identifiers.
[**accountNumApiDispositionsDispositionExternalIdItemsAddBySearchPost**](DispositionsV1Api.md#accountnumapidispositionsdispositionexternaliditemsaddbysearchpost) | **POST** /{accountNum}/api/Dispositions/{dispositionExternalId}/Items/AddBySearch | Add items to the specified disposition using search parameters. If multiple items match, you must specify  whether to use the first or last matching item (by Acquire Date). Search parameters must match exactly.
[**accountNumApiDispositionsDispositionExternalIdItemsPost**](DispositionsV1Api.md#accountnumapidispositionsdispositionexternaliditemspost) | **POST** /{accountNum}/api/Dispositions/{dispositionExternalId}/Items | Add items to the specified disposition, using external identifiers.
[**accountNumApiDispositionsExternalIdGet**](DispositionsV1Api.md#accountnumapidispositionsexternalidget) | **GET** /{accountNum}/api/Dispositions/{externalId} | Retrieves the specified disposition by External ID.
[**accountNumApiDispositionsGet**](DispositionsV1Api.md#accountnumapidispositionsget) | **GET** /{accountNum}/api/Dispositions | Retrieves the account&#x27;s dispositions.
[**accountNumApiDispositionsGetByExternalIdExternalIdGet**](DispositionsV1Api.md#accountnumapidispositionsgetbyexternalidexternalidget) | **GET** /{accountNum}/api/Dispositions/GetByExternalId/{externalId} | Retrieves the specified disposition by External ID.
[**accountNumApiDispositionsIdAttachContactContactIdPut**](DispositionsV1Api.md#accountnumapidispositionsidattachcontactcontactidput) | **PUT** /{accountNum}/api/Dispositions/{id}/AttachContact/{contactId} | Attaches a contact to the specified disposition.
[**accountNumApiDispositionsIdCommitPost**](DispositionsV1Api.md#accountnumapidispositionsidcommitpost) | **POST** /{accountNum}/api/Dispositions/{id}/Commit | Commits the specified disposition.
[**accountNumApiDispositionsIdDelete**](DispositionsV1Api.md#accountnumapidispositionsiddelete) | **DELETE** /{accountNum}/api/Dispositions/{id} | Deletes the specified disposition.
[**accountNumApiDispositionsIdGet**](DispositionsV1Api.md#accountnumapidispositionsidget) | **GET** /{accountNum}/api/Dispositions/{id} | Retrieves the specified disposition by unique ID.
[**accountNumApiDispositionsIdItemsDispositionItemIdDelete**](DispositionsV1Api.md#accountnumapidispositionsiditemsdispositionitemiddelete) | **DELETE** /{accountNum}/api/Dispositions/{id}/Items/{dispositionItemId} | Removes an item from a disposition by disposition item ID.
[**accountNumApiDispositionsIdItemsDispositionItemIdPut**](DispositionsV1Api.md#accountnumapidispositionsiditemsdispositionitemidput) | **PUT** /{accountNum}/api/Dispositions/{id}/Items/{dispositionItemId} | Edits an item&#x27;s price for the specified disposition.
[**accountNumApiDispositionsIdItemsGet**](DispositionsV1Api.md#accountnumapidispositionsiditemsget) | **GET** /{accountNum}/api/Dispositions/{id}/Items | Retrieves the items for the specified disposition.
[**accountNumApiDispositionsIdItemsPost**](DispositionsV1Api.md#accountnumapidispositionsiditemspost) | **POST** /{accountNum}/api/Dispositions/{id}/Items | Add items to the specified disposition.
[**accountNumApiDispositionsIdItemsRemoveByExternalIdItemExternalIdDelete**](DispositionsV1Api.md#accountnumapidispositionsiditemsremovebyexternaliditemexternaliddelete) | **DELETE** /{accountNum}/api/Dispositions/{id}/Items/RemoveByExternalId/{itemExternalId} | Removes an item from a disposition by item ExternalId.
[**accountNumApiDispositionsIdItemsRemoveItemIdDelete**](DispositionsV1Api.md#accountnumapidispositionsiditemsremoveitemiddelete) | **DELETE** /{accountNum}/api/Dispositions/{id}/Items/Remove/{itemId} | Removes an item from a disposition by item ID.
[**accountNumApiDispositionsIdPut**](DispositionsV1Api.md#accountnumapidispositionsidput) | **PUT** /{accountNum}/api/Dispositions/{id} | Edits the specified disposition.
[**accountNumApiDispositionsLockByExternalIdExternalIdPut**](DispositionsV1Api.md#accountnumapidispositionslockbyexternalidexternalidput) | **PUT** /{accountNum}/api/Dispositions/LockByExternalId/{externalId} | Creates a new 4473 and attaches the pending disposition to it.
[**accountNumApiDispositionsLockIdPut**](DispositionsV1Api.md#accountnumapidispositionslockidput) | **PUT** /{accountNum}/api/Dispositions/Lock/{id} | Creates a new 4473 and assigns the pending disposition to it.
[**accountNumApiDispositionsNFAPost**](DispositionsV1Api.md#accountnumapidispositionsnfapost) | **POST** /{accountNum}/api/Dispositions/NFA | Creates a new NFA disposition.
[**accountNumApiDispositionsOnly4473sGet**](DispositionsV1Api.md#accountnumapidispositionsonly4473sget) | **GET** /{accountNum}/api/Dispositions/Only4473s | Retrieves the account&#x27;s dispositions that are tied to 4473s. Regular dispositions are not included.
[**accountNumApiDispositionsPost**](DispositionsV1Api.md#accountnumapidispositionspost) | **POST** /{accountNum}/api/Dispositions | Creates a new disposition.
[**accountNumApiDispositionsTheftLossPost**](DispositionsV1Api.md#accountnumapidispositionstheftlosspost) | **POST** /{accountNum}/api/Dispositions/TheftLoss | Creates a new Theft/Loss disposition.

# **accountNumApiDispositionsCreateAndCommitPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandResultCommittedDispositionModel accountNumApiDispositionsCreateAndCommitPost($account_num, $x_audit_user, $list_disposed_items)

Create and commit a disposition in a single request.

<br>If committing a manufacturing disposition succeeds, we return a X-FastBound-PendingAcquisitionUrl              response header containing the URL of the API endpoint representing the corresponding pending acquisition               created during the commit.  <br>If committing a non-manufacturing disposition succeeds and results in a new pending acquisition in              the disposition contact's account, we return the following headers that point to the newly-created acquisition              and account:  <br>* X-FastBound-AcquisitionAccount: The account number of the account where the pending acquisition was created.  <br>* X-FastBound-AcquisitionId: The Id (a GUID) of the newly-created pending acquisition.  <br>* X-FastBound-AcquisitionUrl: The web application UI URL of the newly-created pending acquisition.  <br>If committing a non-manufacturing disposition succeeds, we return the following multiple sale report-related,              headers:  <br>* X-FastBound-MultipleSale: true if committing the disposition generated one or more multiple sale reports; false otherwise.  <br>* X-FastBound-MultipleSaleUrl: If committing the disposition generated one multiple sale report, this contains the web application              UI URL of the multiple sale report. If committing the disposition generated two or more multiple sale reports, this               contains the web application UI URL of the multiple sale reports index page. If no multiple sale reports were generated,              this header is not returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.
$list_disposed_items = true; // bool | <br>If true, returns an array of the disposed items, as well as the disposition Id and contact Id (if any).               Upon success, the response is a 200 OK.  <br>If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content.

try {
    $result = $apiInstance->accountNumApiDispositionsCreateAndCommitPost($account_num, $x_audit_user, $list_disposed_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsCreateAndCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |
 **list_disposed_items** | **bool**| &lt;br&gt;If true, returns an array of the disposed items, as well as the disposition Id and contact Id (if any).               Upon success, the response is a 200 OK.  &lt;br&gt;If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandResultCommittedDispositionModel**](../Model/FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandResultCommittedDispositionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsDestroyedPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsDestroyedPost($account_num, $x_audit_user)

Creates a new Destroyed disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsDestroyedPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsDestroyedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsDispositionExternalIdItemsAddByExternalIdPost**
> accountNumApiDispositionsDispositionExternalIdItemsAddByExternalIdPost($disposition_external_id, $account_num, $x_audit_user)

Add items to the specified disposition, using external identifiers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$disposition_external_id = "disposition_external_id_example"; // string | The external ID of the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsDispositionExternalIdItemsAddByExternalIdPost($disposition_external_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsDispositionExternalIdItemsAddByExternalIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disposition_external_id** | **string**| The external ID of the disposition. |
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

# **accountNumApiDispositionsDispositionExternalIdItemsAddBySearchPost**
> accountNumApiDispositionsDispositionExternalIdItemsAddBySearchPost($disposition_external_id, $account_num, $x_audit_user)

Add items to the specified disposition using search parameters. If multiple items match, you must specify  whether to use the first or last matching item (by Acquire Date). Search parameters must match exactly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$disposition_external_id = "disposition_external_id_example"; // string | The external ID of the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsDispositionExternalIdItemsAddBySearchPost($disposition_external_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsDispositionExternalIdItemsAddBySearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disposition_external_id** | **string**| The external ID of the disposition. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsDispositionExternalIdItemsPost**
> accountNumApiDispositionsDispositionExternalIdItemsPost($disposition_external_id, $account_num, $x_audit_user)

Add items to the specified disposition, using external identifiers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$disposition_external_id = "disposition_external_id_example"; // string | The external ID of the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsDispositionExternalIdItemsPost($disposition_external_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsDispositionExternalIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disposition_external_id** | **string**| The external ID of the disposition. |
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

# **accountNumApiDispositionsExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsExternalIdGet($external_id, $account_num)

Retrieves the specified disposition by External ID.

DEPRECATED. Please use /{accountNum}/api/Dispositions/GetByExternalId/{externalId} instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the disposition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiDispositionsExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the disposition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetAllCommand accountNumApiDispositionsGet($account_num, $take, $skip, $include4473, $id, $external_id, $type, $ttsn, $otsn, $purchase_order_number, $invoice_number, $shipment_tracking_number, $is_manufacturing_disposition, $disposed_to_contact_id, $disposed_to_contact_external_id, $item_id, $item_external_id)

Retrieves the account's dispositions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$take = 56; // int | Optional query parameter to specify the number of dispositions to return.
$skip = 56; // int | Optional query parameter to specify how many pages to skip.
$include4473 = true; // bool | If true, return both pending dispositions and dispositions tied to 4473s; otherwise, only return pending (non-4473) dispositions. Default is false.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for a disposition with a specific identifier.
$external_id = "external_id_example"; // string | Optional query parameter to search for a disposition with a specific external identifier.
$type = "type_example"; // string | Optional query parameter to search for dispositions with a specific disposition type.
$ttsn = "ttsn_example"; // string | Optional query parameter to search for dispositions with a specific TTSN.
$otsn = "otsn_example"; // string | Optional query parameter to search for dispositions with a specific OTSN.
$purchase_order_number = "purchase_order_number_example"; // string | Optional query parameter to search for dispositions with a specific purchase order number.
$invoice_number = "invoice_number_example"; // string | Optional query parameter to search for dispositions with a specific invoice number
$shipment_tracking_number = "shipment_tracking_number_example"; // string | Optional query parameter to search for dispositions with a specific shipment tracking number.
$is_manufacturing_disposition = true; // bool | Optional query parameter to specify whether an disposition is a manufacturing disposition.              true means search for manufacturing dispositions; false means search for non-manufacturing dispositions.
$disposed_to_contact_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for dispositions by the dispose contact identifier.
$disposed_to_contact_external_id = "disposed_to_contact_external_id_example"; // string | Optional query parameter to search for dispositions by the dispose contact external identifier.
$item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Optional query parameter to search for a disposition containing the item with the given identifier.
$item_external_id = "item_external_id_example"; // string | Optional query parameter to search for a disposition containing the item with the given external identifier.

try {
    $result = $apiInstance->accountNumApiDispositionsGet($account_num, $take, $skip, $include4473, $id, $external_id, $type, $ttsn, $otsn, $purchase_order_number, $invoice_number, $shipment_tracking_number, $is_manufacturing_disposition, $disposed_to_contact_id, $disposed_to_contact_external_id, $item_id, $item_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **take** | **int**| Optional query parameter to specify the number of dispositions to return. | [optional]
 **skip** | **int**| Optional query parameter to specify how many pages to skip. | [optional]
 **include4473** | **bool**| If true, return both pending dispositions and dispositions tied to 4473s; otherwise, only return pending (non-4473) dispositions. Default is false. | [optional]
 **id** | [**string**](../Model/.md)| Optional query parameter to search for a disposition with a specific identifier. | [optional]
 **external_id** | **string**| Optional query parameter to search for a disposition with a specific external identifier. | [optional]
 **type** | **string**| Optional query parameter to search for dispositions with a specific disposition type. | [optional]
 **ttsn** | **string**| Optional query parameter to search for dispositions with a specific TTSN. | [optional]
 **otsn** | **string**| Optional query parameter to search for dispositions with a specific OTSN. | [optional]
 **purchase_order_number** | **string**| Optional query parameter to search for dispositions with a specific purchase order number. | [optional]
 **invoice_number** | **string**| Optional query parameter to search for dispositions with a specific invoice number | [optional]
 **shipment_tracking_number** | **string**| Optional query parameter to search for dispositions with a specific shipment tracking number. | [optional]
 **is_manufacturing_disposition** | **bool**| Optional query parameter to specify whether an disposition is a manufacturing disposition.              true means search for manufacturing dispositions; false means search for non-manufacturing dispositions. | [optional]
 **disposed_to_contact_id** | [**string**](../Model/.md)| Optional query parameter to search for dispositions by the dispose contact identifier. | [optional]
 **disposed_to_contact_external_id** | **string**| Optional query parameter to search for dispositions by the dispose contact external identifier. | [optional]
 **item_id** | [**string**](../Model/.md)| Optional query parameter to search for a disposition containing the item with the given identifier. | [optional]
 **item_external_id** | **string**| Optional query parameter to search for a disposition containing the item with the given external identifier. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetAllCommand**](../Model/FastBoundWebModelsApiV1DispositionsGetAllCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsGetByExternalIdExternalIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsGetByExternalIdExternalIdGet($external_id, $account_num)

Retrieves the specified disposition by External ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The External ID of the disposition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiDispositionsGetByExternalIdExternalIdGet($external_id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsGetByExternalIdExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The External ID of the disposition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsIdAttachContactContactIdPut**
> accountNumApiDispositionsIdAttachContactContactIdPut($id, $contact_id, $account_num, $x_audit_user)

Attaches a contact to the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$contact_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the contact to attach to the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdAttachContactContactIdPut($id, $contact_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdAttachContactContactIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **contact_id** | [**string**](../Model/.md)| The ID of the contact to attach to the disposition. |
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

# **accountNumApiDispositionsIdCommitPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCommitDispositionCommandResultCommittedDispositionModel accountNumApiDispositionsIdCommitPost($id, $account_num, $x_audit_user, $list_disposed_items)

Commits the specified disposition.

<br>If committing a manufacturing disposition succeeds, we return a X-FastBound-PendingAcquisitionUrl              response header containing the URL of the API endpoint representing the corresponding pending acquisition               created during the commit.  <br>If committing a non-manufacturing disposition succeeds and results in a new pending acquisition in              the disposition contact's account, we return the following headers that point to the newly-created acquisition              and account:  <br>* X-FastBound-AcquisitionAccount: The account number of the account where the pending acquisition was created.  <br>* X-FastBound-AcquisitionId: The Id (a GUID) of the newly-created pending acquisition.  <br>* X-FastBound-AcquisitionUrl: The web application UI URL of the newly-created pending acquisition.  <br>If committing a non-manufacturing disposition succeeds, we return the following multiple sale report-related,              headers:  <br>* X-FastBound-MultipleSale: true if committing the disposition generated one or more multiple sale reports; false otherwise.  <br>* X-FastBound-MultipleSaleUrl: If committing the disposition generated one multiple sale report, this contains the web application              UI URL of the multiple sale report. If committing the disposition generated two or more multiple sale reports, this               contains the web application UI URL of the multiple sale reports index page. If no multiple sale reports were generated,              this header is not returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition to commit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.
$list_disposed_items = true; // bool | <br>If true, returns an array of the disposed items, as well as the disposition Id and contact Id (if any).               Upon success, the response is a 200 OK.  <br>If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content.

try {
    $result = $apiInstance->accountNumApiDispositionsIdCommitPost($id, $account_num, $x_audit_user, $list_disposed_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition to commit. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |
 **list_disposed_items** | **bool**| &lt;br&gt;If true, returns an array of the disposed items, as well as the disposition Id and contact Id (if any).               Upon success, the response is a 200 OK.  &lt;br&gt;If false or not present in the query string, returns no response body. Upon success, the response              is a 204 No Content. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCommitDispositionCommandResultCommittedDispositionModel**](../Model/FastBoundWebModelsApiV1DispositionsCommitDispositionCommandResultCommittedDispositionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsIdDelete**
> accountNumApiDispositionsIdDelete($id, $account_num, $x_audit_user)

Deletes the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition to delete.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdDelete($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition to delete. |
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

# **accountNumApiDispositionsIdGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsIdGet($id, $account_num)

Retrieves the specified disposition by unique ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition to retrieve.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiDispositionsIdGet($id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition to retrieve. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsIdItemsDispositionItemIdDelete**
> accountNumApiDispositionsIdItemsDispositionItemIdDelete($id, $disposition_item_id, $account_num, $x_audit_user)

Removes an item from a disposition by disposition item ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$disposition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The disposition item ID of the item to remove from the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdItemsDispositionItemIdDelete($id, $disposition_item_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsDispositionItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **disposition_item_id** | [**string**](../Model/.md)| The disposition item ID of the item to remove from the disposition. |
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

# **accountNumApiDispositionsIdItemsDispositionItemIdPut**
> accountNumApiDispositionsIdItemsDispositionItemIdPut($id, $disposition_item_id, $account_num, $x_audit_user)

Edits an item's price for the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$disposition_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdItemsDispositionItemIdPut($id, $disposition_item_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsDispositionItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **disposition_item_id** | [**string**](../Model/.md)| The ID of the item to edit. |
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

# **accountNumApiDispositionsIdItemsGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetItemsCommand accountNumApiDispositionsIdItemsGet($id, $account_num)

Retrieves the items for the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$account_num = "account_num_example"; // string | The assigned account number.

try {
    $result = $apiInstance->accountNumApiDispositionsIdItemsGet($id, $account_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **account_num** | **string**| The assigned account number. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetItemsCommand**](../Model/FastBoundWebModelsApiV1DispositionsGetItemsCommand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsIdItemsPost**
> accountNumApiDispositionsIdItemsPost($id, $account_num, $x_audit_user)

Add items to the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdItemsPost($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
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

# **accountNumApiDispositionsIdItemsRemoveByExternalIdItemExternalIdDelete**
> accountNumApiDispositionsIdItemsRemoveByExternalIdItemExternalIdDelete($id, $item_external_id, $account_num, $x_audit_user)

Removes an item from a disposition by item ExternalId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$item_external_id = "item_external_id_example"; // string | The ExternalId of the item to remove from the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdItemsRemoveByExternalIdItemExternalIdDelete($id, $item_external_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsRemoveByExternalIdItemExternalIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **item_external_id** | **string**| The ExternalId of the item to remove from the disposition. |
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

# **accountNumApiDispositionsIdItemsRemoveItemIdDelete**
> accountNumApiDispositionsIdItemsRemoveItemIdDelete($id, $item_id, $account_num, $x_audit_user)

Removes an item from a disposition by item ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition.
$item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the item to remove from the disposition.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdItemsRemoveItemIdDelete($id, $item_id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdItemsRemoveItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition. |
 **item_id** | [**string**](../Model/.md)| The ID of the item to remove from the disposition. |
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

# **accountNumApiDispositionsIdPut**
> accountNumApiDispositionsIdPut($id, $account_num, $x_audit_user)

Edits the specified disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the disposition to edit.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $apiInstance->accountNumApiDispositionsIdPut($id, $account_num, $x_audit_user);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the disposition to edit. |
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

# **accountNumApiDispositionsLockByExternalIdExternalIdPut**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel accountNumApiDispositionsLockByExternalIdExternalIdPut($external_id, $account_num, $x_audit_user)

Creates a new 4473 and attaches the pending disposition to it.

<br>The pending disposition to assign must exist, and it must have at least one item attached to it. The              disposition cannot already be attached to another 4473.  <br>The disposition cannot be a Theft/Loss, Destroyed, or Manufacturing disposition.  <br>If the disposition has a contact attached, the contact must be an individual, and not a licensee               or organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The ExternalId of the disposition to attach to the newly-created 4473.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsLockByExternalIdExternalIdPut($external_id, $account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsLockByExternalIdExternalIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The ExternalId of the disposition to attach to the newly-created 4473. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel**](../Model/FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsLockIdPut**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel accountNumApiDispositionsLockIdPut($id, $account_num, $x_audit_user)

Creates a new 4473 and assigns the pending disposition to it.

<br>The pending disposition to assign must exist, and it must have at least one item attached to it. The              disposition cannot already be attached to another 4473.  <br>The disposition cannot be a Theft/Loss, Destroyed, or Manufacturing disposition.  <br>If the disposition has a contact attached, the contact must be an individual, and not a licensee               or organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The Id of the disposition to attach to the newly-created 4473.
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsLockIdPut($id, $account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsLockIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The Id of the disposition to attach to the newly-created 4473. |
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel**](../Model/FastBoundWebModelsApiV1DispositionsLockDispositionCommandResultSuccessResultModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsNFAPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsNFAPost($account_num, $x_audit_user)

Creates a new NFA disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsNFAPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsNFAPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsOnly4473sGet**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetAll4473Command accountNumApiDispositionsOnly4473sGet($account_num, $take, $skip, $include_awaiting4473_completion)

Retrieves the account's dispositions that are tied to 4473s. Regular dispositions are not included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$take = 56; // int | Optional query parameter to specify the number of dispositions to return.
$skip = 56; // int | Optional query parameter to specify how many pages to skip.
$include_awaiting4473_completion = true; // bool | If true, return both Pending and Awaiting Form 4473 Completion dispositions tied to 4473s;              otherwise, only return Pending 4473 dispositions. Default is false.

try {
    $result = $apiInstance->accountNumApiDispositionsOnly4473sGet($account_num, $take, $skip, $include_awaiting4473_completion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsOnly4473sGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **take** | **int**| Optional query parameter to specify the number of dispositions to return. | [optional]
 **skip** | **int**| Optional query parameter to specify how many pages to skip. | [optional]
 **include_awaiting4473_completion** | **bool**| If true, return both Pending and Awaiting Form 4473 Completion dispositions tied to 4473s;              otherwise, only return Pending 4473 dispositions. Default is false. | [optional]

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetAll4473Command**](../Model/FastBoundWebModelsApiV1DispositionsGetAll4473Command.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsPost($account_num, $x_audit_user)

Creates a new disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountNumApiDispositionsTheftLossPost**
> \Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel accountNumApiDispositionsTheftLossPost($account_num, $x_audit_user)

Creates a new Theft/Loss disposition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispositionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_num = "account_num_example"; // string | The assigned account number.
$x_audit_user = "x_audit_user_example"; // string | Email address of a FastBound user who has access to the specified account for audit purposes.

try {
    $result = $apiInstance->accountNumApiDispositionsTheftLossPost($account_num, $x_audit_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsV1Api->accountNumApiDispositionsTheftLossPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_num** | **string**| The assigned account number. |
 **x_audit_user** | **string**| Email address of a FastBound user who has access to the specified account for audit purposes. |

### Return type

[**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel**](../Model/FastBoundWebModelsApiV1DispositionsGetDispositionResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

