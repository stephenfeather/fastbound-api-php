# FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | &lt;br&gt;The type of disposition to create: regular, Manufacturing, NFA, Theft/Loss, or Destroyed. | 
**contact_id** | **string** | If not null, the ID of a FastBound Contact to use as the Disposition Contact. | [optional] 
**contact_external_id** | **string** | If not null, and ContactId is null, the External ID of a FastBound Contact to use as   the Disposition Contact. | [optional] 
**contact** | [**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandCreateAndCommitContactModel**](FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandCreateAndCommitContactModel.md) |  | [optional] 
**items** | [**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandItemModel[]**](FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandItemModel.md) | The items to dispose. | [optional] 
**manufacturing_changes** | [**\Swagger\Client\Model\FastBoundWebModelsApiV1DispositionsCommitManufacturingChangesModel**](FastBoundWebModelsApiV1DispositionsCommitManufacturingChangesModel.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Required. Date of disposal. | 
**type** | **string** | The disposition type. Required for Regular, Manufacturing, and NFA dispositions. | [optional] 
**note** | **string** |  | [optional] 
**ttsn** | **string** |  | [optional] 
**generate_ttsn** | **bool** |  | [optional] 
**otsn** | **string** |  | [optional] 
**purchase_order_number** | **string** |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**shipment_tracking_number** | **string** |  | [optional] 
**submission_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**theft_loss_discovered_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**theft_loss_type** | **string** |  | [optional] 
**theft_loss_atf_issued_incident_number** | **string** |  | [optional] 
**theft_loss_police_incident_number** | **string** |  | [optional] 
**destroyed_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**destroyed_description** | **string** |  | [optional] 
**destroyed_witness1** | **string** |  | [optional] 
**destroyed_witness2** | **string** |  | [optional] 
**other_transferee_emails** | **string[]** | Optional. Other transferee emails to use, in addition to the disposition contact, to try to find a FastBound   account in which to create a transfer acquisition. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

