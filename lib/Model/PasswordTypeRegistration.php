<?php
/**
 * PasswordTypeRegistration
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
 * PasswordTypeRegistration Class Doc Comment
 *
 * @category Class
 * @description Data for a given password type to be used on user registration
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PasswordTypeRegistration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PasswordTypeRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'internal_name' => 'string',
        'mode' => '\OpenAPI\Client\Model\PasswordModeEnum',
        'global' => 'bool',
        'only_numeric' => 'bool',
        'min_length' => 'int',
        'max_length' => 'int',
        'lower_case_letters' => '\OpenAPI\Client\Model\PasswordTypeDetailedAllOfLowerCaseLetters',
        'upper_case_letters' => '\OpenAPI\Client\Model\PasswordTypeDetailedAllOfUpperCaseLetters',
        'numbers' => '\OpenAPI\Client\Model\PasswordTypeDetailedAllOfNumbers',
        'special_characters' => '\OpenAPI\Client\Model\PasswordTypeDetailedAllOfSpecialCharacters',
        'input_method' => '\OpenAPI\Client\Model\PasswordInputMethodEnum',
        'number_of_buttons' => 'int',
        'buttons_per_row' => 'int',
        'number_of_rows' => 'int',
        'allow_reuse_otp' => 'bool',
        'description' => 'string',
        'can_force_change' => 'bool'
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
        'internal_name' => null,
        'mode' => null,
        'global' => null,
        'only_numeric' => null,
        'min_length' => null,
        'max_length' => null,
        'lower_case_letters' => null,
        'upper_case_letters' => null,
        'numbers' => null,
        'special_characters' => null,
        'input_method' => null,
        'number_of_buttons' => null,
        'buttons_per_row' => null,
        'number_of_rows' => null,
        'allow_reuse_otp' => null,
        'description' => null,
        'can_force_change' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'internal_name' => false,
        'mode' => false,
        'global' => false,
        'only_numeric' => false,
        'min_length' => false,
        'max_length' => false,
        'lower_case_letters' => false,
        'upper_case_letters' => false,
        'numbers' => false,
        'special_characters' => false,
        'input_method' => false,
        'number_of_buttons' => false,
        'buttons_per_row' => false,
        'number_of_rows' => false,
        'allow_reuse_otp' => false,
        'description' => false,
        'can_force_change' => false
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
        'internal_name' => 'internalName',
        'mode' => 'mode',
        'global' => 'global',
        'only_numeric' => 'onlyNumeric',
        'min_length' => 'minLength',
        'max_length' => 'maxLength',
        'lower_case_letters' => 'lowerCaseLetters',
        'upper_case_letters' => 'upperCaseLetters',
        'numbers' => 'numbers',
        'special_characters' => 'specialCharacters',
        'input_method' => 'inputMethod',
        'number_of_buttons' => 'numberOfButtons',
        'buttons_per_row' => 'buttonsPerRow',
        'number_of_rows' => 'numberOfRows',
        'allow_reuse_otp' => 'allowReuseOtp',
        'description' => 'description',
        'can_force_change' => 'canForceChange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'internal_name' => 'setInternalName',
        'mode' => 'setMode',
        'global' => 'setGlobal',
        'only_numeric' => 'setOnlyNumeric',
        'min_length' => 'setMinLength',
        'max_length' => 'setMaxLength',
        'lower_case_letters' => 'setLowerCaseLetters',
        'upper_case_letters' => 'setUpperCaseLetters',
        'numbers' => 'setNumbers',
        'special_characters' => 'setSpecialCharacters',
        'input_method' => 'setInputMethod',
        'number_of_buttons' => 'setNumberOfButtons',
        'buttons_per_row' => 'setButtonsPerRow',
        'number_of_rows' => 'setNumberOfRows',
        'allow_reuse_otp' => 'setAllowReuseOtp',
        'description' => 'setDescription',
        'can_force_change' => 'setCanForceChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'internal_name' => 'getInternalName',
        'mode' => 'getMode',
        'global' => 'getGlobal',
        'only_numeric' => 'getOnlyNumeric',
        'min_length' => 'getMinLength',
        'max_length' => 'getMaxLength',
        'lower_case_letters' => 'getLowerCaseLetters',
        'upper_case_letters' => 'getUpperCaseLetters',
        'numbers' => 'getNumbers',
        'special_characters' => 'getSpecialCharacters',
        'input_method' => 'getInputMethod',
        'number_of_buttons' => 'getNumberOfButtons',
        'buttons_per_row' => 'getButtonsPerRow',
        'number_of_rows' => 'getNumberOfRows',
        'allow_reuse_otp' => 'getAllowReuseOtp',
        'description' => 'getDescription',
        'can_force_change' => 'getCanForceChange'
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
        $this->setIfExists('internal_name', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('global', $data ?? [], null);
        $this->setIfExists('only_numeric', $data ?? [], null);
        $this->setIfExists('min_length', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
        $this->setIfExists('lower_case_letters', $data ?? [], null);
        $this->setIfExists('upper_case_letters', $data ?? [], null);
        $this->setIfExists('numbers', $data ?? [], null);
        $this->setIfExists('special_characters', $data ?? [], null);
        $this->setIfExists('input_method', $data ?? [], null);
        $this->setIfExists('number_of_buttons', $data ?? [], null);
        $this->setIfExists('buttons_per_row', $data ?? [], null);
        $this->setIfExists('number_of_rows', $data ?? [], null);
        $this->setIfExists('allow_reuse_otp', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('can_force_change', $data ?? [], null);
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
     * Gets internal_name
     *
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string|null $internal_name The entity internal name, which can be seen as an extra identifier
     *
     * @return self
     */
    public function setInternalName($internal_name)
    {
        if (is_null($internal_name)) {
            throw new \InvalidArgumentException('non-nullable internal_name cannot be null');
        }
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \OpenAPI\Client\Model\PasswordModeEnum|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \OpenAPI\Client\Model\PasswordModeEnum|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets global
     *
     * @return bool|null
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     *
     * @param bool|null $global Indicates whether this password type is defined in global mode (`true`) or in a network (`false`)
     *
     * @return self
     */
    public function setGlobal($global)
    {
        if (is_null($global)) {
            throw new \InvalidArgumentException('non-nullable global cannot be null');
        }
        $this->container['global'] = $global;

        return $this;
    }

    /**
     * Gets only_numeric
     *
     * @return bool|null
     */
    public function getOnlyNumeric()
    {
        return $this->container['only_numeric'];
    }

    /**
     * Sets only_numeric
     *
     * @param bool|null $only_numeric Indicates whether this password type only allows numbers as possible characters
     *
     * @return self
     */
    public function setOnlyNumeric($only_numeric)
    {
        if (is_null($only_numeric)) {
            throw new \InvalidArgumentException('non-nullable only_numeric cannot be null');
        }
        $this->container['only_numeric'] = $only_numeric;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int|null $min_length Indicates the minimum length of characters allowed for a password definition
     *
     * @return self
     */
    public function setMinLength($min_length)
    {
        if (is_null($min_length)) {
            throw new \InvalidArgumentException('non-nullable min_length cannot be null');
        }
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int|null $max_length Indicates the maximum length of characters allowed for a password definition
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        if (is_null($max_length)) {
            throw new \InvalidArgumentException('non-nullable max_length cannot be null');
        }
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets lower_case_letters
     *
     * @return \OpenAPI\Client\Model\PasswordTypeDetailedAllOfLowerCaseLetters|null
     */
    public function getLowerCaseLetters()
    {
        return $this->container['lower_case_letters'];
    }

    /**
     * Sets lower_case_letters
     *
     * @param \OpenAPI\Client\Model\PasswordTypeDetailedAllOfLowerCaseLetters|null $lower_case_letters lower_case_letters
     *
     * @return self
     */
    public function setLowerCaseLetters($lower_case_letters)
    {
        if (is_null($lower_case_letters)) {
            throw new \InvalidArgumentException('non-nullable lower_case_letters cannot be null');
        }
        $this->container['lower_case_letters'] = $lower_case_letters;

        return $this;
    }

    /**
     * Gets upper_case_letters
     *
     * @return \OpenAPI\Client\Model\PasswordTypeDetailedAllOfUpperCaseLetters|null
     */
    public function getUpperCaseLetters()
    {
        return $this->container['upper_case_letters'];
    }

    /**
     * Sets upper_case_letters
     *
     * @param \OpenAPI\Client\Model\PasswordTypeDetailedAllOfUpperCaseLetters|null $upper_case_letters upper_case_letters
     *
     * @return self
     */
    public function setUpperCaseLetters($upper_case_letters)
    {
        if (is_null($upper_case_letters)) {
            throw new \InvalidArgumentException('non-nullable upper_case_letters cannot be null');
        }
        $this->container['upper_case_letters'] = $upper_case_letters;

        return $this;
    }

    /**
     * Gets numbers
     *
     * @return \OpenAPI\Client\Model\PasswordTypeDetailedAllOfNumbers|null
     */
    public function getNumbers()
    {
        return $this->container['numbers'];
    }

    /**
     * Sets numbers
     *
     * @param \OpenAPI\Client\Model\PasswordTypeDetailedAllOfNumbers|null $numbers numbers
     *
     * @return self
     */
    public function setNumbers($numbers)
    {
        if (is_null($numbers)) {
            throw new \InvalidArgumentException('non-nullable numbers cannot be null');
        }
        $this->container['numbers'] = $numbers;

        return $this;
    }

    /**
     * Gets special_characters
     *
     * @return \OpenAPI\Client\Model\PasswordTypeDetailedAllOfSpecialCharacters|null
     */
    public function getSpecialCharacters()
    {
        return $this->container['special_characters'];
    }

    /**
     * Sets special_characters
     *
     * @param \OpenAPI\Client\Model\PasswordTypeDetailedAllOfSpecialCharacters|null $special_characters special_characters
     *
     * @return self
     */
    public function setSpecialCharacters($special_characters)
    {
        if (is_null($special_characters)) {
            throw new \InvalidArgumentException('non-nullable special_characters cannot be null');
        }
        $this->container['special_characters'] = $special_characters;

        return $this;
    }

    /**
     * Gets input_method
     *
     * @return \OpenAPI\Client\Model\PasswordInputMethodEnum|null
     */
    public function getInputMethod()
    {
        return $this->container['input_method'];
    }

    /**
     * Sets input_method
     *
     * @param \OpenAPI\Client\Model\PasswordInputMethodEnum|null $input_method input_method
     *
     * @return self
     */
    public function setInputMethod($input_method)
    {
        if (is_null($input_method)) {
            throw new \InvalidArgumentException('non-nullable input_method cannot be null');
        }
        $this->container['input_method'] = $input_method;

        return $this;
    }

    /**
     * Gets number_of_buttons
     *
     * @return int|null
     */
    public function getNumberOfButtons()
    {
        return $this->container['number_of_buttons'];
    }

    /**
     * Sets number_of_buttons
     *
     * @param int|null $number_of_buttons Only for `virtualKeyboard`, is the number of buttons to be displayed
     *
     * @return self
     */
    public function setNumberOfButtons($number_of_buttons)
    {
        if (is_null($number_of_buttons)) {
            throw new \InvalidArgumentException('non-nullable number_of_buttons cannot be null');
        }
        $this->container['number_of_buttons'] = $number_of_buttons;

        return $this;
    }

    /**
     * Gets buttons_per_row
     *
     * @return int|null
     */
    public function getButtonsPerRow()
    {
        return $this->container['buttons_per_row'];
    }

    /**
     * Sets buttons_per_row
     *
     * @param int|null $buttons_per_row Only for `virtualKeyboard`, is the number of buttons that should be displayed on each row
     *
     * @return self
     */
    public function setButtonsPerRow($buttons_per_row)
    {
        if (is_null($buttons_per_row)) {
            throw new \InvalidArgumentException('non-nullable buttons_per_row cannot be null');
        }
        $this->container['buttons_per_row'] = $buttons_per_row;

        return $this;
    }

    /**
     * Gets number_of_rows
     *
     * @return int|null
     */
    public function getNumberOfRows()
    {
        return $this->container['number_of_rows'];
    }

    /**
     * Sets number_of_rows
     *
     * @param int|null $number_of_rows Only for `virtualKeyboard`, is the number of rows with buttons
     *
     * @return self
     */
    public function setNumberOfRows($number_of_rows)
    {
        if (is_null($number_of_rows)) {
            throw new \InvalidArgumentException('non-nullable number_of_rows cannot be null');
        }
        $this->container['number_of_rows'] = $number_of_rows;

        return $this;
    }

    /**
     * Gets allow_reuse_otp
     *
     * @return bool|null
     */
    public function getAllowReuseOtp()
    {
        return $this->container['allow_reuse_otp'];
    }

    /**
     * Sets allow_reuse_otp
     *
     * @param bool|null $allow_reuse_otp Only when `mode` is `otp`, indicates when the OTP is allowed to be reused (in this case is not strictly a 'one time password', but a temporary password with a small validity).
     *
     * @return self
     */
    public function setAllowReuseOtp($allow_reuse_otp)
    {
        if (is_null($allow_reuse_otp)) {
            throw new \InvalidArgumentException('non-nullable allow_reuse_otp cannot be null');
        }
        $this->container['allow_reuse_otp'] = $allow_reuse_otp;

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
     * @param string|null $description The description of the password type. Useful to know what a password must contain to meet the restrictions of this type.
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
     * Gets can_force_change
     *
     * @return bool|null
     */
    public function getCanForceChange()
    {
        return $this->container['can_force_change'];
    }

    /**
     * Sets can_force_change
     *
     * @param bool|null $can_force_change Whether the current user can set the password to be changed on the first user login
     *
     * @return self
     */
    public function setCanForceChange($can_force_change)
    {
        if (is_null($can_force_change)) {
            throw new \InvalidArgumentException('non-nullable can_force_change cannot be null');
        }
        $this->container['can_force_change'] = $can_force_change;

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

