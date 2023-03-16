# OpenAPIClient-php

The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.

For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->cancelFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->cancelFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FbaOutboundApi* | [**cancelFulfillmentOrder**](docs/Api/FbaOutboundApi.md#cancelfulfillmentorder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel | 
*FbaOutboundApi* | [**createFulfillmentOrder**](docs/Api/FbaOutboundApi.md#createfulfillmentorder) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders | 
*FbaOutboundApi* | [**createFulfillmentReturn**](docs/Api/FbaOutboundApi.md#createfulfillmentreturn) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return | 
*FbaOutboundApi* | [**getFeatureInventory**](docs/Api/FbaOutboundApi.md#getfeatureinventory) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName} | 
*FbaOutboundApi* | [**getFeatureSKU**](docs/Api/FbaOutboundApi.md#getfeaturesku) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku} | 
*FbaOutboundApi* | [**getFeatures**](docs/Api/FbaOutboundApi.md#getfeatures) | **GET** /fba/outbound/2020-07-01/features | 
*FbaOutboundApi* | [**getFulfillmentOrder**](docs/Api/FbaOutboundApi.md#getfulfillmentorder) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} | 
*FbaOutboundApi* | [**getFulfillmentPreview**](docs/Api/FbaOutboundApi.md#getfulfillmentpreview) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders/preview | 
*FbaOutboundApi* | [**getPackageTrackingDetails**](docs/Api/FbaOutboundApi.md#getpackagetrackingdetails) | **GET** /fba/outbound/2020-07-01/tracking | 
*FbaOutboundApi* | [**listAllFulfillmentOrders**](docs/Api/FbaOutboundApi.md#listallfulfillmentorders) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders | 
*FbaOutboundApi* | [**listReturnReasonCodes**](docs/Api/FbaOutboundApi.md#listreturnreasoncodes) | **GET** /fba/outbound/2020-07-01/returnReasonCodes | 
*FbaOutboundApi* | [**updateFulfillmentOrder**](docs/Api/FbaOutboundApi.md#updatefulfillmentorder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} | 

## Models

- [AdditionalLocationInfo](docs/Model/AdditionalLocationInfo.md)
- [Address](docs/Model/Address.md)
- [CODSettings](docs/Model/CODSettings.md)
- [CancelFulfillmentOrderResponse](docs/Model/CancelFulfillmentOrderResponse.md)
- [CreateFulfillmentOrderItem](docs/Model/CreateFulfillmentOrderItem.md)
- [CreateFulfillmentOrderRequest](docs/Model/CreateFulfillmentOrderRequest.md)
- [CreateFulfillmentOrderResponse](docs/Model/CreateFulfillmentOrderResponse.md)
- [CreateFulfillmentReturnRequest](docs/Model/CreateFulfillmentReturnRequest.md)
- [CreateFulfillmentReturnResponse](docs/Model/CreateFulfillmentReturnResponse.md)
- [CreateFulfillmentReturnResult](docs/Model/CreateFulfillmentReturnResult.md)
- [CreateReturnItem](docs/Model/CreateReturnItem.md)
- [CurrentStatus](docs/Model/CurrentStatus.md)
- [DeliveryWindow](docs/Model/DeliveryWindow.md)
- [Error](docs/Model/Error.md)
- [EventCode](docs/Model/EventCode.md)
- [Feature](docs/Model/Feature.md)
- [FeatureSettings](docs/Model/FeatureSettings.md)
- [FeatureSku](docs/Model/FeatureSku.md)
- [Fee](docs/Model/Fee.md)
- [FulfillmentAction](docs/Model/FulfillmentAction.md)
- [FulfillmentOrder](docs/Model/FulfillmentOrder.md)
- [FulfillmentOrderItem](docs/Model/FulfillmentOrderItem.md)
- [FulfillmentOrderStatus](docs/Model/FulfillmentOrderStatus.md)
- [FulfillmentPolicy](docs/Model/FulfillmentPolicy.md)
- [FulfillmentPreview](docs/Model/FulfillmentPreview.md)
- [FulfillmentPreviewItem](docs/Model/FulfillmentPreviewItem.md)
- [FulfillmentPreviewShipment](docs/Model/FulfillmentPreviewShipment.md)
- [FulfillmentReturnItemStatus](docs/Model/FulfillmentReturnItemStatus.md)
- [FulfillmentShipment](docs/Model/FulfillmentShipment.md)
- [FulfillmentShipmentItem](docs/Model/FulfillmentShipmentItem.md)
- [FulfillmentShipmentPackage](docs/Model/FulfillmentShipmentPackage.md)
- [GetFeatureInventoryResponse](docs/Model/GetFeatureInventoryResponse.md)
- [GetFeatureInventoryResult](docs/Model/GetFeatureInventoryResult.md)
- [GetFeatureSkuResponse](docs/Model/GetFeatureSkuResponse.md)
- [GetFeatureSkuResult](docs/Model/GetFeatureSkuResult.md)
- [GetFeaturesResponse](docs/Model/GetFeaturesResponse.md)
- [GetFeaturesResult](docs/Model/GetFeaturesResult.md)
- [GetFulfillmentOrderResponse](docs/Model/GetFulfillmentOrderResponse.md)
- [GetFulfillmentOrderResult](docs/Model/GetFulfillmentOrderResult.md)
- [GetFulfillmentPreviewItem](docs/Model/GetFulfillmentPreviewItem.md)
- [GetFulfillmentPreviewRequest](docs/Model/GetFulfillmentPreviewRequest.md)
- [GetFulfillmentPreviewResponse](docs/Model/GetFulfillmentPreviewResponse.md)
- [GetFulfillmentPreviewResult](docs/Model/GetFulfillmentPreviewResult.md)
- [GetPackageTrackingDetailsResponse](docs/Model/GetPackageTrackingDetailsResponse.md)
- [InvalidItemReason](docs/Model/InvalidItemReason.md)
- [InvalidItemReasonCode](docs/Model/InvalidItemReasonCode.md)
- [InvalidReturnItem](docs/Model/InvalidReturnItem.md)
- [ListAllFulfillmentOrdersResponse](docs/Model/ListAllFulfillmentOrdersResponse.md)
- [ListAllFulfillmentOrdersResult](docs/Model/ListAllFulfillmentOrdersResult.md)
- [ListReturnReasonCodesResponse](docs/Model/ListReturnReasonCodesResponse.md)
- [ListReturnReasonCodesResult](docs/Model/ListReturnReasonCodesResult.md)
- [Money](docs/Model/Money.md)
- [PackageTrackingDetails](docs/Model/PackageTrackingDetails.md)
- [ReasonCodeDetails](docs/Model/ReasonCodeDetails.md)
- [ReturnAuthorization](docs/Model/ReturnAuthorization.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [ReturnItemDisposition](docs/Model/ReturnItemDisposition.md)
- [ScheduledDeliveryInfo](docs/Model/ScheduledDeliveryInfo.md)
- [ShippingSpeedCategory](docs/Model/ShippingSpeedCategory.md)
- [TrackingAddress](docs/Model/TrackingAddress.md)
- [TrackingEvent](docs/Model/TrackingEvent.md)
- [UnfulfillablePreviewItem](docs/Model/UnfulfillablePreviewItem.md)
- [UpdateFulfillmentOrderItem](docs/Model/UpdateFulfillmentOrderItem.md)
- [UpdateFulfillmentOrderRequest](docs/Model/UpdateFulfillmentOrderRequest.md)
- [UpdateFulfillmentOrderResponse](docs/Model/UpdateFulfillmentOrderResponse.md)
- [Weight](docs/Model/Weight.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2020-07-01`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
