<?php
/**
 * UserWithBalanceResult
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
 * UserWithBalanceResult Class Doc Comment
 *
 * @category Class
 * @description Result of a user search with balance
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserWithBalanceResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserWithBalanceResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'display' => 'string',
        'image' => '\OpenAPI\Client\Model\UserAllOfImage',
        'user' => '\OpenAPI\Client\Model\UserAllOfUser',
        'locator' => 'string',
        'locator_principal' => '\OpenAPI\Client\Model\UserAllOfLocatorPrincipal',
        'name' => 'string',
        'username' => 'string',
        'email' => 'string',
        'address' => '\OpenAPI\Client\Model\UserResultAllOfAddress',
        'distance' => 'float',
        'custom_values' => 'array<string,string>',
        'phone' => 'string',
        'account_number' => 'string',
        'group' => '\OpenAPI\Client\Model\UserResultAllOfGroup',
        'group_set' => '\OpenAPI\Client\Model\UserResultAllOfGroupSet',
        'balance' => 'float',
        'negative_since' => '\DateTime',
        'balance_level' => '\OpenAPI\Client\Model\BalanceLevelEnum'
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
        'display' => null,
        'image' => null,
        'user' => null,
        'locator' => null,
        'locator_principal' => null,
        'name' => null,
        'username' => null,
        'email' => null,
        'address' => null,
        'distance' => 'double',
        'custom_values' => null,
        'phone' => null,
        'account_number' => null,
        'group' => null,
        'group_set' => null,
        'balance' => 'number',
        'negative_since' => 'date-time',
        'balance_level' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'display' => false,
        'image' => false,
        'user' => false,
        'locator' => false,
        'locator_principal' => false,
        'name' => false,
        'username' => false,
        'email' => false,
        'address' => false,
        'distance' => false,
        'custom_values' => false,
        'phone' => false,
        'account_number' => false,
        'group' => false,
        'group_set' => false,
        'balance' => false,
        'negative_since' => false,
        'balance_level' => false
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
        'display' => 'display',
        'image' => 'image',
        'user' => 'user',
        'locator' => 'locator',
        'locator_principal' => 'locatorPrincipal',
        'name' => 'name',
        'username' => 'username',
        'email' => 'email',
        'address' => 'address',
        'distance' => 'distance',
        'custom_values' => 'customValues',
        'phone' => 'phone',
        'account_number' => 'accountNumber',
        'group' => 'group',
        'group_set' => 'groupSet',
        'balance' => 'balance',
        'negative_since' => 'negativeSince',
        'balance_level' => 'balanceLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'display' => 'setDisplay',
        'image' => 'setImage',
        'user' => 'setUser',
        'locator' => 'setLocator',
        'locator_principal' => 'setLocatorPrincipal',
        'name' => 'setName',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'address' => 'setAddress',
        'distance' => 'setDistance',
        'custom_values' => 'setCustomValues',
        'phone' => 'setPhone',
        'account_number' => 'setAccountNumber',
        'group' => 'setGroup',
        'group_set' => 'setGroupSet',
        'balance' => 'setBalance',
        'negative_since' => 'setNegativeSince',
        'balance_level' => 'setBalanceLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'display' => 'getDisplay',
        'image' => 'getImage',
        'user' => 'getUser',
        'locator' => 'getLocator',
        'locator_principal' => 'getLocatorPrincipal',
        'name' => 'getName',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'address' => 'getAddress',
        'distance' => 'getDistance',
        'custom_values' => 'getCustomValues',
        'phone' => 'getPhone',
        'account_number' => 'getAccountNumber',
        'group' => 'getGroup',
        'group_set' => 'getGroupSet',
        'balance' => 'getBalance',
        'negative_since' => 'getNegativeSince',
        'balance_level' => 'getBalanceLevel'
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
        $this->setIfExists('display', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('locator', $data ?? [], null);
        $this->setIfExists('locator_principal', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('distance', $data ?? [], null);
        $this->setIfExists('custom_values', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('group_set', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('negative_since', $data ?? [], null);
        $this->setIfExists('balance_level', $data ?? [], null);
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
     * Gets display
     *
     * @return string|null
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param string|null $display Contains the formatting of the user according to the configuration. When this object is in the search result, this is only returned if no profile fields are marked to return in user list.
     *
     * @return self
     */
    public function setDisplay($display)
    {
        if (is_null($display)) {
            throw new \InvalidArgumentException('non-nullable display cannot be null');
        }
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\UserAllOfImage|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\UserAllOfImage|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\UserAllOfUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\UserAllOfUser|null $user user
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
     * Gets locator
     *
     * @return string|null
     */
    public function getLocator()
    {
        return $this->container['locator'];
    }

    /**
     * Sets locator
     *
     * @param string|null $locator Only returned if this user was located from a string value (login name, email, phone, account number, etc). Is the raw string value.
     *
     * @return self
     */
    public function setLocator($locator)
    {
        if (is_null($locator)) {
            throw new \InvalidArgumentException('non-nullable locator cannot be null');
        }
        $this->container['locator'] = $locator;

        return $this;
    }

    /**
     * Gets locator_principal
     *
     * @return \OpenAPI\Client\Model\UserAllOfLocatorPrincipal|null
     */
    public function getLocatorPrincipal()
    {
        return $this->container['locator_principal'];
    }

    /**
     * Sets locator_principal
     *
     * @param \OpenAPI\Client\Model\UserAllOfLocatorPrincipal|null $locator_principal locator_principal
     *
     * @return self
     */
    public function setLocatorPrincipal($locator_principal)
    {
        if (is_null($locator_principal)) {
            throw new \InvalidArgumentException('non-nullable locator_principal cannot be null');
        }
        $this->container['locator_principal'] = $locator_principal;

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
     * @param string|null $name The user's full name
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
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The user's login name
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The user's e-mail
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\UserResultAllOfAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\UserResultAllOfAddress|null $address address
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
     * Gets distance
     *
     * @return float|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float|null $distance Only returned when there is a base location to calculate the distance from. The unit (kilometers or miles) depends on configuration.
     *
     * @return self
     */
    public function setDistance($distance)
    {
        if (is_null($distance)) {
            throw new \InvalidArgumentException('non-nullable distance cannot be null');
        }
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets custom_values
     *
     * @return array<string,string>|null
     */
    public function getCustomValues()
    {
        return $this->container['custom_values'];
    }

    /**
     * Sets custom_values
     *
     * @param array<string,string>|null $custom_values Holds the values for custom fields, keyed by field internal name or id. The format of the value depends on the custom field type. Example: `{..., \"customValues\": {\"gender\": \"male\", \"birthDate\": \"1980-10-27\"}}`
     *
     * @return self
     */
    public function setCustomValues($custom_values)
    {
        if (is_null($custom_values)) {
            throw new \InvalidArgumentException('non-nullable custom_values cannot be null');
        }
        $this->container['custom_values'] = $custom_values;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone First phone number, used when phone is marked on products to be returned on user list
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number First account number, used when account number is marked on products to be returned on user list
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\Client\Model\UserResultAllOfGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\Client\Model\UserResultAllOfGroup|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets group_set
     *
     * @return \OpenAPI\Client\Model\UserResultAllOfGroupSet|null
     */
    public function getGroupSet()
    {
        return $this->container['group_set'];
    }

    /**
     * Sets group_set
     *
     * @param \OpenAPI\Client\Model\UserResultAllOfGroupSet|null $group_set group_set
     *
     * @return self
     */
    public function setGroupSet($group_set)
    {
        if (is_null($group_set)) {
            throw new \InvalidArgumentException('non-nullable group_set cannot be null');
        }
        $this->container['group_set'] = $group_set;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance The raw account balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets negative_since
     *
     * @return \DateTime|null
     */
    public function getNegativeSince()
    {
        return $this->container['negative_since'];
    }

    /**
     * Sets negative_since
     *
     * @param \DateTime|null $negative_since The date since the account has been negative
     *
     * @return self
     */
    public function setNegativeSince($negative_since)
    {
        if (is_null($negative_since)) {
            throw new \InvalidArgumentException('non-nullable negative_since cannot be null');
        }
        $this->container['negative_since'] = $negative_since;

        return $this;
    }

    /**
     * Gets balance_level
     *
     * @return \OpenAPI\Client\Model\BalanceLevelEnum|null
     */
    public function getBalanceLevel()
    {
        return $this->container['balance_level'];
    }

    /**
     * Sets balance_level
     *
     * @param \OpenAPI\Client\Model\BalanceLevelEnum|null $balance_level balance_level
     *
     * @return self
     */
    public function setBalanceLevel($balance_level)
    {
        if (is_null($balance_level)) {
            throw new \InvalidArgumentException('non-nullable balance_level cannot be null');
        }
        $this->container['balance_level'] = $balance_level;

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


