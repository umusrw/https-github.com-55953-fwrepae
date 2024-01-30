<?php
/**
 * DeliveryMethodView
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inter TT API
 *
 * The Inter TT REST API is described using OpenAPI 3.0. The descriptor for the api can be downloaded in both [YAML](http://localhost:8080/cyclos/api/openapi.yaml) or [JSON](http://localhost:8080/cyclos/api/openapi.json) formats. These files can be used in tools that support the OpenAPI specification, such as the [OpenAPI Generator](https://openapi-generator.tech).  In the API, whenever some data is referenced, for example, a group, or payment type, either id or internal name can be used. When an user is to be referenced, the special word 'self' (sans quotes) always refers to the currently authenticated user, and any identification method (login name, e-mail, mobile phone, account number or custom field) that can be used on keywords search (as configured in the products) can also be used to identify users. Some specific data types have other identification fields, like accounts can have a number and payments can have a transaction number. This all depends on the current configuration.  -----------  Most of the operations that return data allow selecting which fields to include in the response. This is useful to avoid calculating data that finally won't be needed and also for reducing the transfer over the network. If nothing is set, all object fields are returned. Fields are handled in 3 modes. Given an example object `{\"a\": {\"x\": 1, \"y\": 2, \"z\": 3}, \"b\": 0}`, the modes are: - **Include**: the field is unprefixed or prefixed with `+`. All fields which   are not explicitly included are excluded from the result. Examples:   - `[\"a\"]` results in `{\"a\": {\"x\": 1, \"y\": 2, \"z\": 3}}`   - `[\"+b\"]` results in `{\"b\": 0}`   - `[\"a.x\"]` results in `{\"a\": {\"x\": 1}}`. This is a nested include. At root     level, includes only `a` then, on `a`'s level, includes only `x`.  - **Exclude**: the field is prefixed by `-` (or, for compatibility purposes,   `!`). Only explicitly excluded fields   are excluded from the result. Examples:   - `[\"-a\"]` results in `{\"b\": 0}`   - `[\"-b\"]` results in `{\"a\": {\"x\": 1, \"y\": 2, \"z\": 3}}`   - `[\"a.-x\"]` results in `{\"a\": {\"y\": 2, \"z\": 3}}`. In this example, `a` is     actually an include at the root level, hence, excludes `b`.  - **Nested only**: when a field is prefixed by `*` and has a nested path,   it only affects includes / excludes for the nested fields, without affecting   the current level. Only nested fields are configured.   Examples:   - `[\"*a.x\"]` results in `{\"a\": {\"x\": 1}, \"b\": 0}`. In this example, `a` is     configured to include only `x`. `b` is also included because, there is no     explicit includes at root level.   - `[\"*a.-x\"]` results in `{\"a\": {\"y\": 2, \"z\": 3}, \"b\": 0}`. In this example,     `a` is configured to exclude only `x`. `b` is also included because there     is no explicit includes at the root level.     For backwards compatibility, this can also be expressed in a special     syntax `-a.x`. Also, keep in mind that `-x.y.z` is equivalent to `*x.*y.-z`.  You cannot have the same field included and excluded at the same time - a HTTP `422` status will be returned. Also, when mixing nested excludes with explicit includes or excludes, the nested exclude will be ignored. For example, using `[\"*a.x\", \"a.y\"]` will ignore the `*a.x` definition, resulting in `{\"a\": {\"y\": 2}}`.  -----------  For details of the deprecated elements (operations and model) please visit the [deprecation notes page](https://documentation.cyclos.org/4.16.3/api-deprecation.html) for this version.
 *
 * The version of the OpenAPI document: 4.16.3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
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
 * DeliveryMethodView Class Doc Comment
 *
 * @category Class
 * @description Details of a webshop delivery method
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeliveryMethodView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryMethodView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'enabled' => 'bool',
        'charge_type' => '\OpenAPI\Client\Model\DeliveryMethodChargeTypeEnum',
        'delivery_type' => '\OpenAPI\Client\Model\DeliveryMethodTypeEnum',
        'min_delivery_time' => '\OpenAPI\Client\Model\DeliveryMethodAllOfMinDeliveryTime',
        'max_delivery_time' => '\OpenAPI\Client\Model\DeliveryMethodAllOfMaxDeliveryTime',
        'charge_amount' => 'float',
        'charge_currency' => '\OpenAPI\Client\Model\DeliveryMethodAllOfChargeCurrency',
        'address' => '\OpenAPI\Client\Model\DeliveryMethodAllOfAddress',
        'can_edit' => 'bool',
        'can_remove' => 'bool',
        'user' => '\OpenAPI\Client\Model\DeliveryMethodViewAllOfUser'
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
        'name' => null,
        'description' => null,
        'enabled' => null,
        'charge_type' => null,
        'delivery_type' => null,
        'min_delivery_time' => null,
        'max_delivery_time' => null,
        'charge_amount' => 'number',
        'charge_currency' => null,
        'address' => null,
        'can_edit' => null,
        'can_remove' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'description' => false,
        'enabled' => false,
        'charge_type' => false,
        'delivery_type' => false,
        'min_delivery_time' => false,
        'max_delivery_time' => false,
        'charge_amount' => false,
        'charge_currency' => false,
        'address' => false,
        'can_edit' => false,
        'can_remove' => false,
        'user' => false
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
        'description' => 'description',
        'enabled' => 'enabled',
        'charge_type' => 'chargeType',
        'delivery_type' => 'deliveryType',
        'min_delivery_time' => 'minDeliveryTime',
        'max_delivery_time' => 'maxDeliveryTime',
        'charge_amount' => 'chargeAmount',
        'charge_currency' => 'chargeCurrency',
        'address' => 'address',
        'can_edit' => 'canEdit',
        'can_remove' => 'canRemove',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'enabled' => 'setEnabled',
        'charge_type' => 'setChargeType',
        'delivery_type' => 'setDeliveryType',
        'min_delivery_time' => 'setMinDeliveryTime',
        'max_delivery_time' => 'setMaxDeliveryTime',
        'charge_amount' => 'setChargeAmount',
        'charge_currency' => 'setChargeCurrency',
        'address' => 'setAddress',
        'can_edit' => 'setCanEdit',
        'can_remove' => 'setCanRemove',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'enabled' => 'getEnabled',
        'charge_type' => 'getChargeType',
        'delivery_type' => 'getDeliveryType',
        'min_delivery_time' => 'getMinDeliveryTime',
        'max_delivery_time' => 'getMaxDeliveryTime',
        'charge_amount' => 'getChargeAmount',
        'charge_currency' => 'getChargeCurrency',
        'address' => 'getAddress',
        'can_edit' => 'getCanEdit',
        'can_remove' => 'getCanRemove',
        'user' => 'getUser'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('charge_type', $data ?? [], null);
        $this->setIfExists('delivery_type', $data ?? [], null);
        $this->setIfExists('min_delivery_time', $data ?? [], null);
        $this->setIfExists('max_delivery_time', $data ?? [], null);
        $this->setIfExists('charge_amount', $data ?? [], null);
        $this->setIfExists('charge_currency', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('can_edit', $data ?? [], null);
        $this->setIfExists('can_remove', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
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
     * @param string|null $id The internal entity identifier
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
     * @param string|null $name The entity name
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description on how this delivery method works.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Whether this delivery method is enabled for new sales.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodChargeTypeEnum|null
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodChargeTypeEnum|null $charge_type charge_type
     *
     * @return self
     */
    public function setChargeType($charge_type)
    {
        if (is_null($charge_type)) {
            throw new \InvalidArgumentException('non-nullable charge_type cannot be null');
        }
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodTypeEnum|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodTypeEnum|null $delivery_type delivery_type
     *
     * @return self
     */
    public function setDeliveryType($delivery_type)
    {
        if (is_null($delivery_type)) {
            throw new \InvalidArgumentException('non-nullable delivery_type cannot be null');
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets min_delivery_time
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodAllOfMinDeliveryTime|null
     */
    public function getMinDeliveryTime()
    {
        return $this->container['min_delivery_time'];
    }

    /**
     * Sets min_delivery_time
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodAllOfMinDeliveryTime|null $min_delivery_time min_delivery_time
     *
     * @return self
     */
    public function setMinDeliveryTime($min_delivery_time)
    {
        if (is_null($min_delivery_time)) {
            throw new \InvalidArgumentException('non-nullable min_delivery_time cannot be null');
        }
        $this->container['min_delivery_time'] = $min_delivery_time;

        return $this;
    }

    /**
     * Gets max_delivery_time
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodAllOfMaxDeliveryTime|null
     */
    public function getMaxDeliveryTime()
    {
        return $this->container['max_delivery_time'];
    }

    /**
     * Sets max_delivery_time
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodAllOfMaxDeliveryTime|null $max_delivery_time max_delivery_time
     *
     * @return self
     */
    public function setMaxDeliveryTime($max_delivery_time)
    {
        if (is_null($max_delivery_time)) {
            throw new \InvalidArgumentException('non-nullable max_delivery_time cannot be null');
        }
        $this->container['max_delivery_time'] = $max_delivery_time;

        return $this;
    }

    /**
     * Gets charge_amount
     *
     * @return float|null
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param float|null $charge_amount The amount to be charged. Only makes sense if `chargeType` is `fixed`.
     *
     * @return self
     */
    public function setChargeAmount($charge_amount)
    {
        if (is_null($charge_amount)) {
            throw new \InvalidArgumentException('non-nullable charge_amount cannot be null');
        }
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }

    /**
     * Gets charge_currency
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodAllOfChargeCurrency|null
     */
    public function getChargeCurrency()
    {
        return $this->container['charge_currency'];
    }

    /**
     * Sets charge_currency
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodAllOfChargeCurrency|null $charge_currency charge_currency
     *
     * @return self
     */
    public function setChargeCurrency($charge_currency)
    {
        if (is_null($charge_currency)) {
            throw new \InvalidArgumentException('non-nullable charge_currency cannot be null');
        }
        $this->container['charge_currency'] = $charge_currency;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodAllOfAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodAllOfAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets can_edit
     *
     * @return bool|null
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     *
     * @param bool|null $can_edit Can the authenticated user edit this delivery method?
     *
     * @return self
     */
    public function setCanEdit($can_edit)
    {
        if (is_null($can_edit)) {
            throw new \InvalidArgumentException('non-nullable can_edit cannot be null');
        }
        $this->container['can_edit'] = $can_edit;

        return $this;
    }

    /**
     * Gets can_remove
     *
     * @return bool|null
     */
    public function getCanRemove()
    {
        return $this->container['can_remove'];
    }

    /**
     * Sets can_remove
     *
     * @param bool|null $can_remove Can the authenticated user remove this delivery method?
     *
     * @return self
     */
    public function setCanRemove($can_remove)
    {
        if (is_null($can_remove)) {
            throw new \InvalidArgumentException('non-nullable can_remove cannot be null');
        }
        $this->container['can_remove'] = $can_remove;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\DeliveryMethodViewAllOfUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\DeliveryMethodViewAllOfUser|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

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


