<?php
/**
 * NestedErrorAllOfUnauthorizedError
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
 * NestedErrorAllOfUnauthorizedError Class Doc Comment
 *
 * @category Class
 * @description The nested error when &#x60;UnauthorizedError&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NestedErrorAllOfUnauthorizedError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NestedError_allOf_unauthorizedError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'missing_login_confirmation_credentials' => '\OpenAPI\Client\Model\CredentialTypeEnum[]',
        'missing_login_confirmation_password_type' => '\OpenAPI\Client\Model\PasswordType',
        'invalid_device_confirmation' => '\OpenAPI\Client\Model\InvalidDeviceConfirmationEnum',
        'code' => '\OpenAPI\Client\Model\UnauthorizedErrorCode',
        'user_status' => '\OpenAPI\Client\Model\UserStatusEnum',
        'password_status' => '\OpenAPI\Client\Model\PasswordStatusEnum',
        'error' => 'string',
        'missing_secondary_password' => '\OpenAPI\Client\Model\PasswordType',
        'secondary_device_allowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'missing_login_confirmation_credentials' => null,
        'missing_login_confirmation_password_type' => null,
        'invalid_device_confirmation' => null,
        'code' => null,
        'user_status' => null,
        'password_status' => null,
        'error' => null,
        'missing_secondary_password' => null,
        'secondary_device_allowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'missing_login_confirmation_credentials' => false,
        'missing_login_confirmation_password_type' => false,
        'invalid_device_confirmation' => false,
        'code' => false,
        'user_status' => false,
        'password_status' => false,
        'error' => false,
        'missing_secondary_password' => false,
        'secondary_device_allowed' => false
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
        'missing_login_confirmation_credentials' => 'missingLoginConfirmationCredentials',
        'missing_login_confirmation_password_type' => 'missingLoginConfirmationPasswordType',
        'invalid_device_confirmation' => 'invalidDeviceConfirmation',
        'code' => 'code',
        'user_status' => 'userStatus',
        'password_status' => 'passwordStatus',
        'error' => 'error',
        'missing_secondary_password' => 'missingSecondaryPassword',
        'secondary_device_allowed' => 'secondaryDeviceAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'missing_login_confirmation_credentials' => 'setMissingLoginConfirmationCredentials',
        'missing_login_confirmation_password_type' => 'setMissingLoginConfirmationPasswordType',
        'invalid_device_confirmation' => 'setInvalidDeviceConfirmation',
        'code' => 'setCode',
        'user_status' => 'setUserStatus',
        'password_status' => 'setPasswordStatus',
        'error' => 'setError',
        'missing_secondary_password' => 'setMissingSecondaryPassword',
        'secondary_device_allowed' => 'setSecondaryDeviceAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'missing_login_confirmation_credentials' => 'getMissingLoginConfirmationCredentials',
        'missing_login_confirmation_password_type' => 'getMissingLoginConfirmationPasswordType',
        'invalid_device_confirmation' => 'getInvalidDeviceConfirmation',
        'code' => 'getCode',
        'user_status' => 'getUserStatus',
        'password_status' => 'getPasswordStatus',
        'error' => 'getError',
        'missing_secondary_password' => 'getMissingSecondaryPassword',
        'secondary_device_allowed' => 'getSecondaryDeviceAllowed'
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
        $this->setIfExists('missing_login_confirmation_credentials', $data ?? [], null);
        $this->setIfExists('missing_login_confirmation_password_type', $data ?? [], null);
        $this->setIfExists('invalid_device_confirmation', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('user_status', $data ?? [], null);
        $this->setIfExists('password_status', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('missing_secondary_password', $data ?? [], null);
        $this->setIfExists('secondary_device_allowed', $data ?? [], null);
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
     * Gets missing_login_confirmation_credentials
     *
     * @return \OpenAPI\Client\Model\CredentialTypeEnum[]|null
     */
    public function getMissingLoginConfirmationCredentials()
    {
        return $this->container['missing_login_confirmation_credentials'];
    }

    /**
     * Sets missing_login_confirmation_credentials
     *
     * @param \OpenAPI\Client\Model\CredentialTypeEnum[]|null $missing_login_confirmation_credentials If a user logs in and is required to confirm the login with a credential, this array is the credentials the user can use to confirm the login, but don't have any
     *
     * @return self
     */
    public function setMissingLoginConfirmationCredentials($missing_login_confirmation_credentials)
    {
        if (is_null($missing_login_confirmation_credentials)) {
            throw new \InvalidArgumentException('non-nullable missing_login_confirmation_credentials cannot be null');
        }
        $this->container['missing_login_confirmation_credentials'] = $missing_login_confirmation_credentials;

        return $this;
    }

    /**
     * Gets missing_login_confirmation_password_type
     *
     * @return \OpenAPI\Client\Model\PasswordType|null
     */
    public function getMissingLoginConfirmationPasswordType()
    {
        return $this->container['missing_login_confirmation_password_type'];
    }

    /**
     * Sets missing_login_confirmation_password_type
     *
     * @param \OpenAPI\Client\Model\PasswordType|null $missing_login_confirmation_password_type missing_login_confirmation_password_type
     *
     * @return self
     */
    public function setMissingLoginConfirmationPasswordType($missing_login_confirmation_password_type)
    {
        if (is_null($missing_login_confirmation_password_type)) {
            throw new \InvalidArgumentException('non-nullable missing_login_confirmation_password_type cannot be null');
        }
        $this->container['missing_login_confirmation_password_type'] = $missing_login_confirmation_password_type;

        return $this;
    }

    /**
     * Gets invalid_device_confirmation
     *
     * @return \OpenAPI\Client\Model\InvalidDeviceConfirmationEnum|null
     */
    public function getInvalidDeviceConfirmation()
    {
        return $this->container['invalid_device_confirmation'];
    }

    /**
     * Sets invalid_device_confirmation
     *
     * @param \OpenAPI\Client\Model\InvalidDeviceConfirmationEnum|null $invalid_device_confirmation invalid_device_confirmation
     *
     * @return self
     */
    public function setInvalidDeviceConfirmation($invalid_device_confirmation)
    {
        if (is_null($invalid_device_confirmation)) {
            throw new \InvalidArgumentException('non-nullable invalid_device_confirmation cannot be null');
        }
        $this->container['invalid_device_confirmation'] = $invalid_device_confirmation;

        return $this;
    }

    /**
     * Gets code
     *
     * @return \OpenAPI\Client\Model\UnauthorizedErrorCode|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param \OpenAPI\Client\Model\UnauthorizedErrorCode|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return \OpenAPI\Client\Model\UserStatusEnum|null
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param \OpenAPI\Client\Model\UserStatusEnum|null $user_status user_status
     *
     * @return self
     */
    public function setUserStatus($user_status)
    {
        if (is_null($user_status)) {
            throw new \InvalidArgumentException('non-nullable user_status cannot be null');
        }
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets password_status
     *
     * @return \OpenAPI\Client\Model\PasswordStatusEnum|null
     */
    public function getPasswordStatus()
    {
        return $this->container['password_status'];
    }

    /**
     * Sets password_status
     *
     * @param \OpenAPI\Client\Model\PasswordStatusEnum|null $password_status password_status
     *
     * @return self
     */
    public function setPasswordStatus($password_status)
    {
        if (is_null($password_status)) {
            throw new \InvalidArgumentException('non-nullable password_status cannot be null');
        }
        $this->container['password_status'] = $password_status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error Is the OAuth2 / OpenID Connect required error message. Is only returned when `code` is `invalidAccessToken`.
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets missing_secondary_password
     *
     * @return \OpenAPI\Client\Model\PasswordType|null
     * @deprecated
     */
    public function getMissingSecondaryPassword()
    {
        return $this->container['missing_secondary_password'];
    }

    /**
     * Sets missing_secondary_password
     *
     * @param \OpenAPI\Client\Model\PasswordType|null $missing_secondary_password missing_secondary_password
     *
     * @return self
     * @deprecated
     */
    public function setMissingSecondaryPassword($missing_secondary_password)
    {
        if (is_null($missing_secondary_password)) {
            throw new \InvalidArgumentException('non-nullable missing_secondary_password cannot be null');
        }
        $this->container['missing_secondary_password'] = $missing_secondary_password;

        return $this;
    }

    /**
     * Gets secondary_device_allowed
     *
     * @return bool|null
     * @deprecated
     */
    public function getSecondaryDeviceAllowed()
    {
        return $this->container['secondary_device_allowed'];
    }

    /**
     * Sets secondary_device_allowed
     *
     * @param bool|null $secondary_device_allowed Use `missingLoginConfirmationCredentials` instead, which should contain `device`.
     *
     * @return self
     * @deprecated
     */
    public function setSecondaryDeviceAllowed($secondary_device_allowed)
    {
        if (is_null($secondary_device_allowed)) {
            throw new \InvalidArgumentException('non-nullable secondary_device_allowed cannot be null');
        }
        $this->container['secondary_device_allowed'] = $secondary_device_allowed;

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


