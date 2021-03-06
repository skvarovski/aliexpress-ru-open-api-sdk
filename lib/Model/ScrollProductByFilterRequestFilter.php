<?php
/**
 * ScrollProductByFilterRequestFilter
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * open-async-product-api api
 *
 * open-async-product-api
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
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
 * ScrollProductByFilterRequestFilter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ScrollProductByFilterRequestFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScrollProductByFilterRequestFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'top_category_ids' => 'string[]',
        'leaf_category_ids' => 'string[]',
        'owner_id' => 'string',
        'shipping_template_ids' => 'string[]',
        'status' => 'string',
        'group_ids' => 'string[]',
        'has_quantity' => 'bool',
        'search_content' => '\OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterSearchContentDTO',
        'time_range_condition' => '\OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO',
        'offline_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'top_category_ids' => 'uint64',
        'leaf_category_ids' => 'uint64',
        'owner_id' => 'uint64',
        'shipping_template_ids' => 'uint64',
        'status' => null,
        'group_ids' => 'uint64',
        'has_quantity' => null,
        'search_content' => null,
        'time_range_condition' => null,
        'offline_reason' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'top_category_ids' => 'top_category_ids',
        'leaf_category_ids' => 'leaf_category_ids',
        'owner_id' => 'owner_id',
        'shipping_template_ids' => 'shipping_template_ids',
        'status' => 'status',
        'group_ids' => 'group_ids',
        'has_quantity' => 'has_quantity',
        'search_content' => 'search_content',
        'time_range_condition' => 'time_range_condition',
        'offline_reason' => 'offline_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'top_category_ids' => 'setTopCategoryIds',
        'leaf_category_ids' => 'setLeafCategoryIds',
        'owner_id' => 'setOwnerId',
        'shipping_template_ids' => 'setShippingTemplateIds',
        'status' => 'setStatus',
        'group_ids' => 'setGroupIds',
        'has_quantity' => 'setHasQuantity',
        'search_content' => 'setSearchContent',
        'time_range_condition' => 'setTimeRangeCondition',
        'offline_reason' => 'setOfflineReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'top_category_ids' => 'getTopCategoryIds',
        'leaf_category_ids' => 'getLeafCategoryIds',
        'owner_id' => 'getOwnerId',
        'shipping_template_ids' => 'getShippingTemplateIds',
        'status' => 'getStatus',
        'group_ids' => 'getGroupIds',
        'has_quantity' => 'getHasQuantity',
        'search_content' => 'getSearchContent',
        'time_range_condition' => 'getTimeRangeCondition',
        'offline_reason' => 'getOfflineReason'
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
        $this->container['top_category_ids'] = $data['top_category_ids'] ?? null;
        $this->container['leaf_category_ids'] = $data['leaf_category_ids'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['shipping_template_ids'] = $data['shipping_template_ids'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['group_ids'] = $data['group_ids'] ?? null;
        $this->container['has_quantity'] = $data['has_quantity'] ?? null;
        $this->container['search_content'] = $data['search_content'] ?? null;
        $this->container['time_range_condition'] = $data['time_range_condition'] ?? null;
        $this->container['offline_reason'] = $data['offline_reason'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets top_category_ids
     *
     * @return string[]|null
     */
    public function getTopCategoryIds()
    {
        return $this->container['top_category_ids'];
    }

    /**
     * Sets top_category_ids
     *
     * @param string[]|null $top_category_ids ?????????????????? ???????????????? ????????????
     *
     * @return self
     */
    public function setTopCategoryIds($top_category_ids)
    {
        $this->container['top_category_ids'] = $top_category_ids;

        return $this;
    }

    /**
     * Gets leaf_category_ids
     *
     * @return string[]|null
     */
    public function getLeafCategoryIds()
    {
        return $this->container['leaf_category_ids'];
    }

    /**
     * Sets leaf_category_ids
     *
     * @param string[]|null $leaf_category_ids ??????????????????, ???? ?????????????? ????????????????????????
     *
     * @return self
     */
    public function setLeafCategoryIds($leaf_category_ids)
    {
        $this->container['leaf_category_ids'] = $leaf_category_ids;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id ID ?????????????????? ????????????????
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets shipping_template_ids
     *
     * @return string[]|null
     */
    public function getShippingTemplateIds()
    {
        return $this->container['shipping_template_ids'];
    }

    /**
     * Sets shipping_template_ids
     *
     * @param string[]|null $shipping_template_ids ???????????? ???????????????? ????????????????
     *
     * @return self
     */
    public function setShippingTemplateIds($shipping_template_ids)
    {
        $this->container['shipping_template_ids'] = $shipping_template_ids;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status ???????????? ????????????
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return string[]|null
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string[]|null $group_ids ID ?????????? ??????????????????
     *
     * @return self
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets has_quantity
     *
     * @return bool|null
     */
    public function getHasQuantity()
    {
        return $this->container['has_quantity'];
    }

    /**
     * Sets has_quantity
     *
     * @param bool|null $has_quantity ?? ??????????????
     *
     * @return self
     */
    public function setHasQuantity($has_quantity)
    {
        $this->container['has_quantity'] = $has_quantity;

        return $this;
    }

    /**
     * Gets search_content
     *
     * @return \OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterSearchContentDTO|null
     */
    public function getSearchContent()
    {
        return $this->container['search_content'];
    }

    /**
     * Sets search_content
     *
     * @param \OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterSearchContentDTO|null $search_content search_content
     *
     * @return self
     */
    public function setSearchContent($search_content)
    {
        $this->container['search_content'] = $search_content;

        return $this;
    }

    /**
     * Gets time_range_condition
     *
     * @return \OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO|null
     */
    public function getTimeRangeCondition()
    {
        return $this->container['time_range_condition'];
    }

    /**
     * Sets time_range_condition
     *
     * @param \OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO|null $time_range_condition time_range_condition
     *
     * @return self
     */
    public function setTimeRangeCondition($time_range_condition)
    {
        $this->container['time_range_condition'] = $time_range_condition;

        return $this;
    }

    /**
     * Gets offline_reason
     *
     * @return string|null
     */
    public function getOfflineReason()
    {
        return $this->container['offline_reason'];
    }

    /**
     * Sets offline_reason
     *
     * @param string|null $offline_reason offline_reason
     *
     * @return self
     */
    public function setOfflineReason($offline_reason)
    {
        $this->container['offline_reason'] = $offline_reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


