<?php
/**
 * SessionQueryFilters
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
 * SessionQueryFilters Class Doc Comment
 *
 * @category Class
 * @description Search filters for sessions
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SessionQueryFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SessionQueryFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page' => 'int',
        'page_size' => 'int',
        'skip_total_count' => 'bool',
        'broker' => 'string',
        'channels' => 'string[]',
        'exclude_current_session' => 'bool',
        'operators_of' => 'string',
        'roles' => '\OpenAPI\Client\Model\RoleEnum[]',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page' => null,
        'page_size' => null,
        'skip_total_count' => null,
        'broker' => null,
        'channels' => null,
        'exclude_current_session' => null,
        'operators_of' => null,
        'roles' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page' => false,
        'page_size' => false,
        'skip_total_count' => false,
        'broker' => false,
        'channels' => false,
        'exclude_current_session' => false,
        'operators_of' => false,
        'roles' => false,
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
        'page' => 'page',
        'page_size' => 'pageSize',
        'skip_total_count' => 'skipTotalCount',
        'broker' => 'broker',
        'channels' => 'channels',
        'exclude_current_session' => 'excludeCurrentSession',
        'operators_of' => 'operatorsOf',
        'roles' => 'roles',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page' => 'setPage',
        'page_size' => 'setPageSize',
        'skip_total_count' => 'setSkipTotalCount',
        'broker' => 'setBroker',
        'channels' => 'setChannels',
        'exclude_current_session' => 'setExcludeCurrentSession',
        'operators_of' => 'setOperatorsOf',
        'roles' => 'setRoles',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page' => 'getPage',
        'page_size' => 'getPageSize',
        'skip_total_count' => 'getSkipTotalCount',
        'broker' => 'getBroker',
        'channels' => 'getChannels',
        'exclude_current_session' => 'getExcludeCurrentSession',
        'operators_of' => 'getOperatorsOf',
        'roles' => 'getRoles',
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
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('skip_total_count', $data ?? [], null);
        $this->setIfExists('broker', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('exclude_current_session', $data ?? [], null);
        $this->setIfExists('operators_of', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
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
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page The page number (zero-based) of the search. The default value is zero.
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets skip_total_count
     *
     * @return bool|null
     */
    public function getSkipTotalCount()
    {
        return $this->container['skip_total_count'];
    }

    /**
     * Sets skip_total_count
     *
     * @param bool|null $skip_total_count When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
     *
     * @return self
     */
    public function setSkipTotalCount($skip_total_count)
    {
        if (is_null($skip_total_count)) {
            throw new \InvalidArgumentException('non-nullable skip_total_count cannot be null');
        }
        $this->container['skip_total_count'] = $skip_total_count;

        return $this;
    }

    /**
     * Gets broker
     *
     * @return string|null
     */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
     * Sets broker
     *
     * @param string|null $broker Either id or a principal (login name, e-mail, etc) of a broker. Used to filter the sessions of users brokered by the given broker.
     *
     * @return self
     */
    public function setBroker($broker)
    {
        if (is_null($broker)) {
            throw new \InvalidArgumentException('non-nullable broker cannot be null');
        }
        $this->container['broker'] = $broker;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return string[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param string[]|null $channels Internal names of the sessions channels that can be returned.
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets exclude_current_session
     *
     * @return bool|null
     */
    public function getExcludeCurrentSession()
    {
        return $this->container['exclude_current_session'];
    }

    /**
     * Sets exclude_current_session
     *
     * @param bool|null $exclude_current_session Whether to exclude or not the current session.
     *
     * @return self
     */
    public function setExcludeCurrentSession($exclude_current_session)
    {
        if (is_null($exclude_current_session)) {
            throw new \InvalidArgumentException('non-nullable exclude_current_session cannot be null');
        }
        $this->container['exclude_current_session'] = $exclude_current_session;

        return $this;
    }

    /**
     * Gets operators_of
     *
     * @return string|null
     */
    public function getOperatorsOf()
    {
        return $this->container['operators_of'];
    }

    /**
     * Sets operators_of
     *
     * @param string|null $operators_of Either id or a principal (login name, e-mail, etc) of a user. The owner member of the operators sessions Used to filter the operator sessions of the given user.
     *
     * @return self
     */
    public function setOperatorsOf($operators_of)
    {
        if (is_null($operators_of)) {
            throw new \InvalidArgumentException('non-nullable operators_of cannot be null');
        }
        $this->container['operators_of'] = $operators_of;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \OpenAPI\Client\Model\RoleEnum[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \OpenAPI\Client\Model\RoleEnum[]|null $roles The role of the logged user in the sessions.
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user Either id or a principal (login name, e-mail, etc) of the sessions owner.
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

