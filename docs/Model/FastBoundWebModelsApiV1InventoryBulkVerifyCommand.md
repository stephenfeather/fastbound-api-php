# FastBoundWebModelsApiV1InventoryBulkVerifyCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serials** | **string[]** | The serials of items in inventory to verify. You can verify up to 1,000 items in a single call. | [optional] 
**rollback_partial** | **bool** | True to discard any changes if one or more serials have no matches or match multiple items; false  to commit changes to serials with exact matches, regardless of whether or not any other serials  had no matches or multiple matches. Default is false. | [optional] 
**update_location** | **bool** | True to update each matching item&#x27;s Location. False to leave the Location untouched. Default is false. | [optional] 
**location** | **string** | If FastBound.Web.Models.Api.V1.Inventory.BulkVerify.Command.UpdateLocation is true, the Location that Items will be updated to. Ignored if  FastBound.Web.Models.Api.V1.Inventory.BulkVerify.Command.UpdateLocation is false. | [optional] 
**verified_utc** | [**\DateTime**](\DateTime.md) | The UTC date/time of when the items were verified. Cannot be a future date, and cannot be more than  15 days in the past. Default is the current UTC date/time. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

