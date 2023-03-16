<?php
/**
 * FeatureSettingsTest
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * FeatureSettingsTest Class Doc Comment
 *
 * @category    Class
 * @description FeatureSettings allows users to apply fulfillment features to an order. To block an order from being shipped using Amazon Logistics (AMZL) and an AMZL tracking number, use featureName as BLOCK_AMZL and featureFulfillmentPolicy as Required. Blocking AMZL will incur an additional fee surcharge on your MCF orders and increase the risk of some of your orders being unfulfilled or delivered late if there are no alternative carriers available. Using BLOCK_AMZL in an order request will take precedence over your Seller Central account setting.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class FeatureSettingsTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "FeatureSettings"
     */
    public function testFeatureSettings()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "feature_name"
     */
    public function testPropertyFeatureName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "feature_fulfillment_policy"
     */
    public function testPropertyFeatureFulfillmentPolicy()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
