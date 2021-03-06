<?php
/**
 * OpenAsyncProductApiGetProductsByIDDataSKU
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
 * OpenAsyncProductApiGetProductsByIDDataSKU Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OpenAsyncProductApiGetProductsByIDDataSKU implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'open_async_product_apiGetProductsByIDDataSKU';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'ali_id' => 'string',
        'code' => 'string',
        'property' => '\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataProperty[]',
        'price' => 'string',
        'discount_price' => 'string',
        'barcode' => 'string',
        'currency_code' => 'string',
        'ipm_sku_stock' => 'string',
        'stock' => 'bool',
        'sku_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'ali_id' => null,
        'code' => null,
        'property' => null,
        'price' => null,
        'discount_price' => null,
        'barcode' => null,
        'currency_code' => null,
        'ipm_sku_stock' => 'int64',
        'stock' => null,
        'sku_id' => 'int64'
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
        'id' => 'id',
        'ali_id' => 'ali_id',
        'code' => 'code',
        'property' => 'property',
        'price' => 'price',
        'discount_price' => 'discount_price',
        'barcode' => 'barcode',
        'currency_code' => 'currency_code',
        'ipm_sku_stock' => 'ipm_sku_stock',
        'stock' => 'stock',
        'sku_id' => 'sku_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ali_id' => 'setAliId',
        'code' => 'setCode',
        'property' => 'setProperty',
        'price' => 'setPrice',
        'discount_price' => 'setDiscountPrice',
        'barcode' => 'setBarcode',
        'currency_code' => 'setCurrencyCode',
        'ipm_sku_stock' => 'setIpmSkuStock',
        'stock' => 'setStock',
        'sku_id' => 'setSkuId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ali_id' => 'getAliId',
        'code' => 'getCode',
        'property' => 'getProperty',
        'price' => 'getPrice',
        'discount_price' => 'getDiscountPrice',
        'barcode' => 'getBarcode',
        'currency_code' => 'getCurrencyCode',
        'ipm_sku_stock' => 'getIpmSkuStock',
        'stock' => 'getStock',
        'sku_id' => 'getSkuId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ali_id'] = $data['ali_id'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['property'] = $data['property'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['discount_price'] = $data['discount_price'] ?? null;
        $this->container['barcode'] = $data['barcode'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['ipm_sku_stock'] = $data['ipm_sku_stock'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['sku_id'] = $data['sku_id'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ali_id
     *
     * @return string|null
     */
    public function getAliId()
    {
        return $this->container['ali_id'];
    }

    /**
     * Sets ali_id
     *
     * @param string|null $ali_id ali_id
     *
     * @return self
     */
    public function setAliId($ali_id)
    {
        $this->container['ali_id'] = $ali_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets property
     *
     * @return \OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataProperty[]|null
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     *
     * @param \OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataProperty[]|null $property property
     *
     * @return self
     */
    public function setProperty($property)
    {
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets discount_price
     *
     * @return string|null
     */
    public function getDiscountPrice()
    {
        return $this->container['discount_price'];
    }

    /**
     * Sets discount_price
     *
     * @param string|null $discount_price discount_price
     *
     * @return self
     */
    public function setDiscountPrice($discount_price)
    {
        $this->container['discount_price'] = $discount_price;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets ipm_sku_stock
     *
     * @return string|null
     */
    public function getIpmSkuStock()
    {
        return $this->container['ipm_sku_stock'];
    }

    /**
     * Sets ipm_sku_stock
     *
     * @param string|null $ipm_sku_stock ipm_sku_stock
     *
     * @return self
     */
    public function setIpmSkuStock($ipm_sku_stock)
    {
        $this->container['ipm_sku_stock'] = $ipm_sku_stock;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return bool|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param bool|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string|null $sku_id sku_id
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

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


