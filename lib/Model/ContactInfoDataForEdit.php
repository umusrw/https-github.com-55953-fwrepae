<?php
/**
 * ContactInfoDataForEdit
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
 * ContactInfoDataForEdit Class Doc Comment
 *
 * @category Class
 * @description Contains data for editing an existing public contact information
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactInfoDataForEdit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactInfoDataForEdit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_fields' => '\OpenAPI\Client\Model\CustomFieldDetailed[]',
        'addresses' => '\OpenAPI\Client\Model\Address[]',
        'phone_configuration' => '\OpenAPI\Client\Model\PhoneConfiguration',
        'user' => '\OpenAPI\Client\Model\User',
        'confirmation_password_input' => '\OpenAPI\Client\Model\PasswordInput',
        'contact_info' => '\OpenAPI\Client\Model\ContactInfoDataForEditAllOfContactInfo',
        'can_edit' => 'bool',
        'can_remove' => 'bool',
        'image' => '\OpenAPI\Client\Model\Image',
        'binary_values' => '\OpenAPI\Client\Model\ContactInfoDataForEditAllOfBinaryValues'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_fields' => null,
        'addresses' => null,
        'phone_configuration' => null,
        'user' => null,
        'confirmation_password_input' => null,
        'contact_info' => null,
        'can_edit' => null,
        'can_remove' => null,
        'image' => null,
        'binary_values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_fields' => false,
        'addresses' => false,
        'phone_configuration' => false,
        'user' => false,
        'confirmation_password_input' => false,
        'contact_info' => false,
        'can_edit' => false,
        'can_remove' => false,
        'image' => false,
        'binary_values' => false
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
        'custom_fields' => 'customFields',
        'addresses' => 'addresses',
        'phone_configuration' => 'phoneConfiguration',
        'user' => 'user',
        'confirmation_password_input' => 'confirmationPasswordInput',
        'contact_info' => 'contactInfo',
        'can_edit' => 'canEdit',
        'can_remove' => 'canRemove',
        'image' => 'image',
        'binary_values' => 'binaryValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_fields' => 'setCustomFields',
        'addresses' => 'setAddresses',
        'phone_configuration' => 'setPhoneConfiguration',
        'user' => 'setUser',
        'confirmation_password_input' => 'setConfirmationPasswordInput',
        'contact_info' => 'setContactInfo',
        'can_edit' => 'setCanEdit',
        'can_remove' => 'setCanRemove',
        'image' => 'setImage',
        'binary_values' => 'setBinaryValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_fields' => 'getCustomFields',
        'addresses' => 'getAddresses',
        'phone_configuration' => 'getPhoneConfiguration',
        'user' => 'getUser',
        'confirmation_password_input' => 'getConfirmationPasswordInput',
        'contact_info' => 'getContactInfo',
        'can_edit' => 'getCanEdit',
        'can_remove' => 'getCanRemove',
        'image' => 'getImage',
        'binary_values' => 'getBinaryValues'
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
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('phone_configuration', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('confirmation_password_input', $data ?? [], null);
        $this->setIfExists('contact_info', $data ?? [], null);
        $this->setIfExists('can_edit', $data ?? [], null);
        $this->setIfExists('can_remove', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('binary_values', $data ?? [], null);
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
     * Gets custom_fields
     *
     * @return \OpenAPI\Client\Model\CustomFieldDetailed[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \OpenAPI\Client\Model\CustomFieldDetailed[]|null $custom_fields The public contact information custom fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\Address[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\Address[]|null $addresses The available user addresses, which can be referenced by id
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_configuration
     *
     * @return \OpenAPI\Client\Model\PhoneConfiguration|null
     */
    public function getPhoneConfiguration()
    {
        return $this->container['phone_configuration'];
    }

    /**
     * Sets phone_configuration
     *
     * @param \OpenAPI\Client\Model\PhoneConfiguration|null $phone_configuration phone_configuration
     *
     * @return self
     */
    public function setPhoneConfiguration($phone_configuration)
    {
        if (is_null($phone_configuration)) {
            throw new \InvalidArgumentException('non-nullable phone_configuration cannot be null');
        }
        $this->container['phone_configuration'] = $phone_configuration;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\User|null $user user
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
     * Gets confirmation_password_input
     *
     * @return \OpenAPI\Client\Model\PasswordInput|null
     */
    public function getConfirmationPasswordInput()
    {
        return $this->container['confirmation_password_input'];
    }

    /**
     * Sets confirmation_password_input
     *
     * @param \OpenAPI\Client\Model\PasswordInput|null $confirmation_password_input confirmation_password_input
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
     * Gets contact_info
     *
     * @return \OpenAPI\Client\Model\ContactInfoDataForEditAllOfContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param \OpenAPI\Client\Model\ContactInfoDataForEditAllOfContactInfo|null $contact_info contact_info
     *
     * @return self
     */
    public function setContactInfo($contact_info)
    {
        if (is_null($contact_info)) {
            throw new \InvalidArgumentException('non-nullable contact_info cannot be null');
        }
        $this->container['contact_info'] = $contact_info;

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
     * @param bool|null $can_edit Indicates whether the current contact info can be edited by the currently authenticated used.
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
     * @param bool|null $can_remove Indicates whether the current contact info can be removed by the currently authenticated used.
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
     * Gets image
     *
     * @return \OpenAPI\Client\Model\Image|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\Image|null $image image
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
     * Gets binary_values
     *
     * @return \OpenAPI\Client\Model\ContactInfoDataForEditAllOfBinaryValues|null
     */
    public function getBinaryValues()
    {
        return $this->container['binary_values'];
    }

    /**
     * Sets binary_values
     *
     * @param \OpenAPI\Client\Model\ContactInfoDataForEditAllOfBinaryValues|null $binary_values binary_values
     *
     * @return self
     */
    public function setBinaryValues($binary_values)
    {
        if (is_null($binary_values)) {
            throw new \InvalidArgumentException('non-nullable binary_values cannot be null');
        }
        $this->container['binary_values'] = $binary_values;

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


