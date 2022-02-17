<?php
/**
 * OpenAsyncProductApiTask
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
 * OpenAsyncProductApiTask Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OpenAsyncProductApiTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'open_async_product_apiTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'group_id' => 'string',
        'action' => 'int',
        'status' => 'int',
        'product_id' => 'string',
        'sku_codes' => 'string[]',
        'error' => '\OpenAPI\Client\Model\OpenAsyncProductApiTaskError',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'warnings' => 'string[]',
        'batch_results' => 'map[string,\OpenAPI\Client\Model\OpenAsyncProductApiBatchItemResult]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uint64',
        'group_id' => 'uint64',
        'action' => 'int64',
        'status' => 'int64',
        'product_id' => 'uint64',
        'sku_codes' => null,
        'error' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'warnings' => null,
        'batch_results' => null
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
        'group_id' => 'group_id',
        'action' => 'action',
        'status' => 'status',
        'product_id' => 'product_id',
        'sku_codes' => 'sku_codes',
        'error' => 'error',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'warnings' => 'warnings',
        'batch_results' => 'batch_results'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_id' => 'setGroupId',
        'action' => 'setAction',
        'status' => 'setStatus',
        'product_id' => 'setProductId',
        'sku_codes' => 'setSkuCodes',
        'error' => 'setError',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'warnings' => 'setWarnings',
        'batch_results' => 'setBatchResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_id' => 'getGroupId',
        'action' => 'getAction',
        'status' => 'getStatus',
        'product_id' => 'getProductId',
        'sku_codes' => 'getSkuCodes',
        'error' => 'getError',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'warnings' => 'getWarnings',
        'batch_results' => 'getBatchResults'
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
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['sku_codes'] = $data['sku_codes'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['batch_results'] = $data['batch_results'] ?? null;
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
     * @param string|null $id Идентификатор задания на создание/обновление продукта
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id Идентификатор группы заданий на создание/обновление продукта
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return int|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param int|null $action Тип задачния (1 - создание; 2 - обноление)
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status Статус задания на создание/обновление продукта (1 - создано; 2 - обрабатывается; 3 - успех; 4 - ошибка)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id Идентификатор продукта
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku_codes
     *
     * @return string[]|null
     */
    public function getSkuCodes()
    {
        return $this->container['sku_codes'];
    }

    /**
     * Sets sku_codes
     *
     * @param string[]|null $sku_codes sku кода продукта (в случае задания на создание продукта)
     *
     * @return self
     */
    public function setSkuCodes($sku_codes)
    {
        $this->container['sku_codes'] = $sku_codes;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \OpenAPI\Client\Model\OpenAsyncProductApiTaskError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \OpenAPI\Client\Model\OpenAsyncProductApiTaskError|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Время создания задания на создание/обновление продукта
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Время последкнего обновления задания на создание/обновление продукта
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[]|null $warnings Некритичные ошибки, возникшие в процессе выполнения задач
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets batch_results
     *
     * @return map[string,\OpenAPI\Client\Model\OpenAsyncProductApiBatchItemResult]|null
     */
    public function getBatchResults()
    {
        return $this->container['batch_results'];
    }

    /**
     * Sets batch_results
     *
     * @param map[string,\OpenAPI\Client\Model\OpenAsyncProductApiBatchItemResult]|null $batch_results Результат пакетных операций
     *
     * @return self
     */
    public function setBatchResults($batch_results)
    {
        $this->container['batch_results'] = $batch_results;

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


