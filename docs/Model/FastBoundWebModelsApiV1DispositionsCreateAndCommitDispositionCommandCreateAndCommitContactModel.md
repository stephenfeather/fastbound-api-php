# FastBoundWebModelsApiV1DispositionsCreateAndCommitDispositionCommandCreateAndCommitContactModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** |  | [optional] 
**ffl_number** | **string** | We&#x27;re allowing more characters in case the caller sends a formatted FFL number with hyphens. | [optional] 
**ffl_expires** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lookup_ffl** | **bool** |  | [optional] 
**license_name** | **string** |  | [optional] 
**trade_name** | **string** |  | [optional] 
**sotein** | **string** |  | [optional] 
**sot_class** | **string** | NOTE: this is a string because the default model binder returns the field name and a blank error message  if the caller sends an invalid enum value. At least this way, they&#x27;ll get a better error message. | [optional] 
**business_type** | **string** | NOTE: this is a string because the default model binder returns the field name and a blank error message  if the caller sends an invalid enum value. At least this way, they&#x27;ll get a better error message. | [optional] 
**organization_name** | **string** |  | [optional] 
**first_name** | **string** |  | [optional] 
**middle_name** | **string** |  | [optional] 
**last_name** | **string** |  | [optional] 
**premise_address1** | **string** |  | [optional] 
**premise_address2** | **string** |  | [optional] 
**premise_city** | **string** |  | [optional] 
**premise_county** | **string** |  | [optional] 
**premise_state** | **string** |  | [optional] 
**premise_zip_code** | **string** |  | [optional] 
**premise_country** | **string** |  | [optional] 
**phone_number** | **string** |  | [optional] 
**fax** | **string** |  | [optional] 
**email_address** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

