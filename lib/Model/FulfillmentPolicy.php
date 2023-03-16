<?php
/**
 * FulfillmentPolicy
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FulfillmentPolicy Class Doc Comment
 *
 * @category Class
 * @description The FulfillmentPolicy value specified when you submitted the createFulfillmentOrder operation.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentPolicy
{
    /**
     * Possible values of this enum
     */
    public const FILL_OR_KILL = 'FillOrKill';

    public const FILL_ALL = 'FillAll';

    public const FILL_ALL_AVAILABLE = 'FillAllAvailable';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILL_OR_KILL,
            self::FILL_ALL,
            self::FILL_ALL_AVAILABLE
        ];
    }
}


