<?php
/**
 * ScopenAsyncProductApiProperty
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * ScopenAsyncProductApiProperty Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScopenAsyncProductApiProperty implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'scopen_async_product_apiProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'is_required' => 'bool',
        'is_key' => 'bool',
        'is_brand' => 'bool',
        'is_enum_prop' => 'bool',
        'is_multi_select' => 'bool',
        'is_input_prop' => 'bool',
        'has_unit' => 'bool',
        'has_customized_pic' => 'bool',
        'has_customized_name' => 'bool',
        'units' => '\OpenAPI\Client\Model\OpenAsyncProductApiUnit[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'is_required' => null,
        'is_key' => null,
        'is_brand' => null,
        'is_enum_prop' => null,
        'is_multi_select' => null,
        'is_input_prop' => null,
        'has_unit' => null,
        'has_customized_pic' => null,
        'has_customized_name' => null,
        'units' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'is_required' => false,
		'is_key' => false,
		'is_brand' => false,
		'is_enum_prop' => false,
		'is_multi_select' => false,
		'is_input_prop' => false,
		'has_unit' => false,
		'has_customized_pic' => false,
		'has_customized_name' => false,
		'units' => false
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
        'id' => 'id',
        'name' => 'name',
        'is_required' => 'is_required',
        'is_key' => 'is_key',
        'is_brand' => 'is_brand',
        'is_enum_prop' => 'is_enum_prop',
        'is_multi_select' => 'is_multi_select',
        'is_input_prop' => 'is_input_prop',
        'has_unit' => 'has_unit',
        'has_customized_pic' => 'has_customized_pic',
        'has_customized_name' => 'has_customized_name',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'is_required' => 'setIsRequired',
        'is_key' => 'setIsKey',
        'is_brand' => 'setIsBrand',
        'is_enum_prop' => 'setIsEnumProp',
        'is_multi_select' => 'setIsMultiSelect',
        'is_input_prop' => 'setIsInputProp',
        'has_unit' => 'setHasUnit',
        'has_customized_pic' => 'setHasCustomizedPic',
        'has_customized_name' => 'setHasCustomizedName',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'is_required' => 'getIsRequired',
        'is_key' => 'getIsKey',
        'is_brand' => 'getIsBrand',
        'is_enum_prop' => 'getIsEnumProp',
        'is_multi_select' => 'getIsMultiSelect',
        'is_input_prop' => 'getIsInputProp',
        'has_unit' => 'getHasUnit',
        'has_customized_pic' => 'getHasCustomizedPic',
        'has_customized_name' => 'getHasCustomizedName',
        'units' => 'getUnits'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('is_key', $data ?? [], null);
        $this->setIfExists('is_brand', $data ?? [], null);
        $this->setIfExists('is_enum_prop', $data ?? [], null);
        $this->setIfExists('is_multi_select', $data ?? [], null);
        $this->setIfExists('is_input_prop', $data ?? [], null);
        $this->setIfExists('has_unit', $data ?? [], null);
        $this->setIfExists('has_customized_pic', $data ?? [], null);
        $this->setIfExists('has_customized_name', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
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
     * @param string|null $id Идентификатор атрибута.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Название атрибута.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required Атрибут является обязательным.
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {

        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }

        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_key
     *
     * @return bool|null
     */
    public function getIsKey()
    {
        return $this->container['is_key'];
    }

    /**
     * Sets is_key
     *
     * @param bool|null $is_key Является ли ключевым атрибутом. Это значит, что его рекомендуется заполнить, так как он может влиять на выдачу в поиске и фильтры.
     *
     * @return self
     */
    public function setIsKey($is_key)
    {

        if (is_null($is_key)) {
            throw new \InvalidArgumentException('non-nullable is_key cannot be null');
        }

        $this->container['is_key'] = $is_key;

        return $this;
    }

    /**
     * Gets is_brand
     *
     * @return bool|null
     */
    public function getIsBrand()
    {
        return $this->container['is_brand'];
    }

    /**
     * Sets is_brand
     *
     * @param bool|null $is_brand Является ли атрибут брендом.
     *
     * @return self
     */
    public function setIsBrand($is_brand)
    {

        if (is_null($is_brand)) {
            throw new \InvalidArgumentException('non-nullable is_brand cannot be null');
        }

        $this->container['is_brand'] = $is_brand;

        return $this;
    }

    /**
     * Gets is_enum_prop
     *
     * @return bool|null
     */
    public function getIsEnumProp()
    {
        return $this->container['is_enum_prop'];
    }

    /**
     * Sets is_enum_prop
     *
     * @param bool|null $is_enum_prop Является ли атрибут справочным.
     *
     * @return self
     */
    public function setIsEnumProp($is_enum_prop)
    {

        if (is_null($is_enum_prop)) {
            throw new \InvalidArgumentException('non-nullable is_enum_prop cannot be null');
        }

        $this->container['is_enum_prop'] = $is_enum_prop;

        return $this;
    }

    /**
     * Gets is_multi_select
     *
     * @return bool|null
     */
    public function getIsMultiSelect()
    {
        return $this->container['is_multi_select'];
    }

    /**
     * Sets is_multi_select
     *
     * @param bool|null $is_multi_select Можно ли выбрать несколько значений атрибута.
     *
     * @return self
     */
    public function setIsMultiSelect($is_multi_select)
    {

        if (is_null($is_multi_select)) {
            throw new \InvalidArgumentException('non-nullable is_multi_select cannot be null');
        }

        $this->container['is_multi_select'] = $is_multi_select;

        return $this;
    }

    /**
     * Gets is_input_prop
     *
     * @return bool|null
     */
    public function getIsInputProp()
    {
        return $this->container['is_input_prop'];
    }

    /**
     * Sets is_input_prop
     *
     * @param bool|null $is_input_prop Является ли значение атрибута произвольным.
     *
     * @return self
     */
    public function setIsInputProp($is_input_prop)
    {

        if (is_null($is_input_prop)) {
            throw new \InvalidArgumentException('non-nullable is_input_prop cannot be null');
        }

        $this->container['is_input_prop'] = $is_input_prop;

        return $this;
    }

    /**
     * Gets has_unit
     *
     * @return bool|null
     */
    public function getHasUnit()
    {
        return $this->container['has_unit'];
    }

    /**
     * Sets has_unit
     *
     * @param bool|null $has_unit Есть единица измерения.
     *
     * @return self
     */
    public function setHasUnit($has_unit)
    {

        if (is_null($has_unit)) {
            throw new \InvalidArgumentException('non-nullable has_unit cannot be null');
        }

        $this->container['has_unit'] = $has_unit;

        return $this;
    }

    /**
     * Gets has_customized_pic
     *
     * @return bool|null
     */
    public function getHasCustomizedPic()
    {
        return $this->container['has_customized_pic'];
    }

    /**
     * Sets has_customized_pic
     *
     * @param bool|null $has_customized_pic Есть произвольное изображение.
     *
     * @return self
     */
    public function setHasCustomizedPic($has_customized_pic)
    {

        if (is_null($has_customized_pic)) {
            throw new \InvalidArgumentException('non-nullable has_customized_pic cannot be null');
        }

        $this->container['has_customized_pic'] = $has_customized_pic;

        return $this;
    }

    /**
     * Gets has_customized_name
     *
     * @return bool|null
     */
    public function getHasCustomizedName()
    {
        return $this->container['has_customized_name'];
    }

    /**
     * Sets has_customized_name
     *
     * @param bool|null $has_customized_name Может ли название быть произвольным.
     *
     * @return self
     */
    public function setHasCustomizedName($has_customized_name)
    {

        if (is_null($has_customized_name)) {
            throw new \InvalidArgumentException('non-nullable has_customized_name cannot be null');
        }

        $this->container['has_customized_name'] = $has_customized_name;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \OpenAPI\Client\Model\OpenAsyncProductApiUnit[]|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\OpenAsyncProductApiUnit[]|null $units Массив единиц измерения атрибута (для числовых).
     *
     * @return self
     */
    public function setUnits($units)
    {

        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }

        $this->container['units'] = $units;

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


