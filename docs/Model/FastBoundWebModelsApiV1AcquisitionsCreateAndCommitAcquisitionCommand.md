# FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | If not null, the ID of a FastBound Contact to use as the Acquisition Contact. | [optional] 
**contact_external_id** | **string** | If not null, and ContactId is null, the External ID of a FastBound Contact to use as   the Acquisition Contact. | [optional] 
**contact** | [**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandCreateAndCommitContactModel**](FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandCreateAndCommitContactModel.md) |  | [optional] 
**items** | [**\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandCreateAndCommitAcquisitionItemModel[]**](FastBoundWebModelsApiV1AcquisitionsCreateAndCommitAcquisitionCommandCreateAndCommitAcquisitionItemModel.md) | List of items to commit to FastBound. | [optional] 
**is_manufacturing_acquisition** | **bool** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**type** | **string** |  | 
**note** | **string** |  | [optional] 
**purchase_order_number** | **string** |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**shipment_tracking_number** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

