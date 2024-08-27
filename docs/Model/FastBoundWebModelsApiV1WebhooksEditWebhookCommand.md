# FastBoundWebModelsApiV1WebhooksEditWebhookCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Required. The Name for the webhook. Max length of 50 characters. Characters must be a-z, A-Z, 0-9, -, or _.  Must be unique within the account. | [optional] 
**url** | **string** | Required. The destination URL for webhook events. Max length of 255 characters. Must be unique within the account. | [optional] 
**description** | **string** | A brief description of the purpose of the webhook. Max length of 100 characters. | [optional] 
**events** | **string[]** | At least one event required. The list of event names to which to subscribe. Must be a valid event name. Call   the Webhooks/Events endpoint to get a list of currently-supported event names. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

