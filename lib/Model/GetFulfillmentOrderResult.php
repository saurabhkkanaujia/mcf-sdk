<?php
/**
 * GetFulfillmentOrderResult
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GetFulfillmentOrderResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFulfillmentOrderResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentOrderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_order' => '\OpenAPI\Client\Model\FulfillmentOrder',
        'fulfillment_order_items' => '\OpenAPI\Client\Model\FulfillmentOrderItem[]',
        'fulfillment_shipments' => '\OpenAPI\Client\Model\FulfillmentShipment[]',
        'return_items' => '\OpenAPI\Client\Model\ReturnItem[]',
        'return_authorizations' => '\OpenAPI\Client\Model\ReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillment_order' => null,
        'fulfillment_order_items' => null,
        'fulfillment_shipments' => null,
        'return_items' => null,
        'return_authorizations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillment_order' => false,
		'fulfillment_order_items' => false,
		'fulfillment_shipments' => false,
		'return_items' => false,
		'return_authorizations' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_order' => 'fulfillmentOrder',
        'fulfillment_order_items' => 'fulfillmentOrderItems',
        'fulfillment_shipments' => 'fulfillmentShipments',
        'return_items' => 'returnItems',
        'return_authorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
        'fulfillment_order_items' => 'setFulfillmentOrderItems',
        'fulfillment_shipments' => 'setFulfillmentShipments',
        'return_items' => 'setReturnItems',
        'return_authorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
        'fulfillment_order_items' => 'getFulfillmentOrderItems',
        'fulfillment_shipments' => 'getFulfillmentShipments',
        'return_items' => 'getReturnItems',
        'return_authorizations' => 'getReturnAuthorizations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillment_order', $data ?? [], null);
        $this->setIfExists('fulfillment_order_items', $data ?? [], null);
        $this->setIfExists('fulfillment_shipments', $data ?? [], null);
        $this->setIfExists('return_items', $data ?? [], null);
        $this->setIfExists('return_authorizations', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fulfillment_order'] === null) {
            $invalidProperties[] = "'fulfillment_order' can't be null";
        }
        if ($this->container['fulfillment_order_items'] === null) {
            $invalidProperties[] = "'fulfillment_order_items' can't be null";
        }
        if ($this->container['return_items'] === null) {
            $invalidProperties[] = "'return_items' can't be null";
        }
        if ($this->container['return_authorizations'] === null) {
            $invalidProperties[] = "'return_authorizations' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets fulfillment_order
     *
     * @return \OpenAPI\Client\Model\FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->container['fulfillment_order'];
    }

    /**
     * Sets fulfillment_order
     *
     * @param \OpenAPI\Client\Model\FulfillmentOrder $fulfillment_order fulfillment_order
     *
     * @return self
     */
    public function setFulfillmentOrder($fulfillment_order)
    {
        if (is_null($fulfillment_order)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order cannot be null');
        }
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }

    /**
     * Gets fulfillment_order_items
     *
     * @return \OpenAPI\Client\Model\FulfillmentOrderItem[]
     */
    public function getFulfillmentOrderItems()
    {
        return $this->container['fulfillment_order_items'];
    }

    /**
     * Sets fulfillment_order_items
     *
     * @param \OpenAPI\Client\Model\FulfillmentOrderItem[] $fulfillment_order_items An array of fulfillment order item information.
     *
     * @return self
     */
    public function setFulfillmentOrderItems($fulfillment_order_items)
    {
        if (is_null($fulfillment_order_items)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order_items cannot be null');
        }
        $this->container['fulfillment_order_items'] = $fulfillment_order_items;

        return $this;
    }

    /**
     * Gets fulfillment_shipments
     *
     * @return \OpenAPI\Client\Model\FulfillmentShipment[]|null
     */
    public function getFulfillmentShipments()
    {
        return $this->container['fulfillment_shipments'];
    }

    /**
     * Sets fulfillment_shipments
     *
     * @param \OpenAPI\Client\Model\FulfillmentShipment[]|null $fulfillment_shipments An array of fulfillment shipment information.
     *
     * @return self
     */
    public function setFulfillmentShipments($fulfillment_shipments)
    {
        if (is_null($fulfillment_shipments)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_shipments cannot be null');
        }
        $this->container['fulfillment_shipments'] = $fulfillment_shipments;

        return $this;
    }

    /**
     * Gets return_items
     *
     * @return \OpenAPI\Client\Model\ReturnItem[]
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items
     *
     * @param \OpenAPI\Client\Model\ReturnItem[] $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return self
     */
    public function setReturnItems($return_items)
    {
        if (is_null($return_items)) {
            throw new \InvalidArgumentException('non-nullable return_items cannot be null');
        }
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets return_authorizations
     *
     * @return \OpenAPI\Client\Model\ReturnAuthorization[]
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations
     *
     * @param \OpenAPI\Client\Model\ReturnAuthorization[] $return_authorizations An array of return authorization information.
     *
     * @return self
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        if (is_null($return_authorizations)) {
            throw new \InvalidArgumentException('non-nullable return_authorizations cannot be null');
        }
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


