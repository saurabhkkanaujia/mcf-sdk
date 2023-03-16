# # FulfillmentPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\OpenAPI\Client\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**scheduled_delivery_info** | [**\OpenAPI\Client\Model\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional]
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. |
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). |
**estimated_shipping_weight** | [**\OpenAPI\Client\Model\Weight**](Weight.md) |  | [optional]
**estimated_fees** | [**\OpenAPI\Client\Model\Fee[]**](Fee.md) | An array of fee type and cost pairs. | [optional]
**fulfillment_preview_shipments** | [**\OpenAPI\Client\Model\FulfillmentPreviewShipment[]**](FulfillmentPreviewShipment.md) | An array of fulfillment preview shipment information. | [optional]
**unfulfillable_preview_items** | [**\OpenAPI\Client\Model\UnfulfillablePreviewItem[]**](UnfulfillablePreviewItem.md) | An array of unfulfillable preview item information. | [optional]
**order_unfulfillable_reasons** | **string[]** |  | [optional]
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. |
**feature_constraints** | [**\OpenAPI\Client\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
