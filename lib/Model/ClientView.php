<?php
/**
 * ClientView
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
 * ClientView Class Doc Comment
 *
 * @category Class
 * @description Details on an access client
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'activation_date' => '\DateTime',
        'confirmation_password_input' => '\OpenAPI\Client\Model\ClientViewAllOfConfirmationPasswordInput',
        'can_get_activation_code' => 'bool',
        'can_unassign' => 'bool',
        'can_block' => 'bool',
        'can_unblock' => 'bool',
        'status' => '\OpenAPI\Client\Model\ClientStatusEnum',
        'user' => '\OpenAPI\Client\Model\ClientViewAllOfUser'
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
        'activation_date' => 'date-time',
        'confirmation_password_input' => null,
        'can_get_activation_code' => null,
        'can_unassign' => null,
        'can_block' => null,
        'can_unblock' => null,
        'status' => null,
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
        'activation_date' => false,
        'confirmation_password_input' => false,
        'can_get_activation_code' => false,
        'can_unassign' => false,
        'can_block' => false,
        'can_unblock' => false,
        'status' => false,
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
        'activation_date' => 'activationDate',
        'confirmation_password_input' => 'confirmationPasswordInput',
        'can_get_activation_code' => 'canGetActivationCode',
        'can_unassign' => 'canUnassign',
        'can_block' => 'canBlock',
        'can_unblock' => 'canUnblock',
        'status' => 'status',
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
        'activation_date' => 'setActivationDate',
        'confirmation_password_input' => 'setConfirmationPasswordInput',
        'can_get_activation_code' => 'setCanGetActivationCode',
        'can_unassign' => 'setCanUnassign',
        'can_block' => 'setCanBlock',
        'can_unblock' => 'setCanUnblock',
        'status' => 'setStatus',
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
        'activation_date' => 'getActivationDate',
        'confirmation_password_input' => 'getConfirmationPasswordInput',
        'can_get_activation_code' => 'getCanGetActivationCode',
        'can_unassign' => 'getCanUnassign',
        'can_block' => 'getCanBlock',
        'can_unblock' => 'getCanUnblock',
        'status' => 'getStatus',
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
        $this->setIfExists('activation_date', $data ?? [], null);
        $this->setIfExists('confirmation_password_input', $data ?? [], null);
        $this->setIfExists('can_get_activation_code', $data ?? [], null);
        $this->setIfExists('can_unassign', $data ?? [], null);
        $this->setIfExists('can_block', $data ?? [], null);
        $this->setIfExists('can_unblock', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets activation_date
     *
     * @return \DateTime|null
     */
    public function getActivationDate()
    {
        return $this->container['activation_date'];
    }

    /**
     * Sets activation_date
     *
     * @param \DateTime|null $activation_date The date the client was activated
     *
     * @return self
     */
    public function setActivationDate($activation_date)
    {
        if (is_null($activation_date)) {
            throw new \InvalidArgumentException('non-nullable activation_date cannot be null');
        }
        $this->container['activation_date'] = $activation_date;

        return $this;
    }

    /**
     * Gets confirmation_password_input
     *
     * @return \OpenAPI\Client\Model\ClientViewAllOfConfirmationPasswordInput|null
     */
    public function getConfirmationPasswordInput()
    {
        return $this->container['confirmation_password_input'];
    }

    /**
     * Sets confirmation_password_input
     *
     * @param \OpenAPI\Client\Model\ClientViewAllOfConfirmationPasswordInput|null $confirmation_password_input confirmation_password_input
     *
     * @return self
     */
    public function setConfirmationPasswordInput($confirmation_password_input)
    {
        if (is_null($confirmation_password_input)) {
            throw new \InvalidArgumentException('non-nullable confirmation_password_input cannot be null');
        }
        $this->container['confirmation_password_input'] = $confirmation_password_input;

        return $this;
    }

    /**
     * Gets can_get_activation_code
     *
     * @return bool|null
     */
    public function getCanGetActivationCode()
    {
        return $this->container['can_get_activation_code'];
    }

    /**
     * Sets can_get_activation_code
     *
     * @param bool|null $can_get_activation_code Can the authenticated user get the activation code, to later activate (assign) this client?
     *
     * @return self
     */
    public function setCanGetActivationCode($can_get_activation_code)
    {
        if (is_null($can_get_activation_code)) {
            throw new \InvalidArgumentException('non-nullable can_get_activation_code cannot be null');
        }
        $this->container['can_get_activation_code'] = $can_get_activation_code;

        return $this;
    }

    /**
     * Gets can_unassign
     *
     * @return bool|null
     */
    public function getCanUnassign()
    {
        return $this->container['can_unassign'];
    }

    /**
     * Sets can_unassign
     *
     * @param bool|null $can_unassign Can the authenticated user unassign this client?
     *
     * @return self
     */
    public function setCanUnassign($can_unassign)
    {
        if (is_null($can_unassign)) {
            throw new \InvalidArgumentException('non-nullable can_unassign cannot be null');
        }
        $this->container['can_unassign'] = $can_unassign;

        return $this;
    }

    /**
     * Gets can_block
     *
     * @return bool|null
     */
    public function getCanBlock()
    {
        return $this->container['can_block'];
    }

    /**
     * Sets can_block
     *
     * @param bool|null $can_block Can the authenticated user block this client?
     *
     * @return self
     */
    public function setCanBlock($can_block)
    {
        if (is_null($can_block)) {
            throw new \InvalidArgumentException('non-nullable can_block cannot be null');
        }
        $this->container['can_block'] = $can_block;

        return $this;
    }

    /**
     * Gets can_unblock
     *
     * @return bool|null
     */
    public function getCanUnblock()
    {
        return $this->container['can_unblock'];
    }

    /**
     * Sets can_unblock
     *
     * @param bool|null $can_unblock Can the authenticated user unblock this client?
     *
     * @return self
     */
    public function setCanUnblock($can_unblock)
    {
        if (is_null($can_unblock)) {
            throw new \InvalidArgumentException('non-nullable can_unblock cannot be null');
        }
        $this->container['can_unblock'] = $can_unblock;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\ClientStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\ClientStatusEnum|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\ClientViewAllOfUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\ClientViewAllOfUser|null $user user
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


