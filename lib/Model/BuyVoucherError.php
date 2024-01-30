<?php
/**
 * BuyVoucherError
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
 * BuyVoucherError Class Doc Comment
 *
 * @category Class
 * @description Error when buying a voucher
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuyVoucherError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyVoucherError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exception_type' => 'string',
        'exception_message' => 'string',
        'kind' => '\OpenAPI\Client\Model\ErrorKind',
        'currency' => '\OpenAPI\Client\Model\BuyVoucherErrorAllOfCurrency',
        'amount_left_for_buying' => 'float',
        'date_allowed_again' => '\DateTime',
        'current_open_amount' => 'float',
        'max_open_amount' => 'float',
        'payment_error' => '\OpenAPI\Client\Model\BuyVoucherErrorAllOfPaymentError',
        'code' => '\OpenAPI\Client\Model\BuyVoucherErrorCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exception_type' => null,
        'exception_message' => null,
        'kind' => null,
        'currency' => null,
        'amount_left_for_buying' => 'number',
        'date_allowed_again' => 'date-time',
        'current_open_amount' => 'number',
        'max_open_amount' => 'number',
        'payment_error' => null,
        'code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exception_type' => false,
        'exception_message' => false,
        'kind' => false,
        'currency' => false,
        'amount_left_for_buying' => false,
        'date_allowed_again' => false,
        'current_open_amount' => false,
        'max_open_amount' => false,
        'payment_error' => false,
        'code' => false
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
        'exception_type' => 'exceptionType',
        'exception_message' => 'exceptionMessage',
        'kind' => 'kind',
        'currency' => 'currency',
        'amount_left_for_buying' => 'amountLeftForBuying',
        'date_allowed_again' => 'dateAllowedAgain',
        'current_open_amount' => 'currentOpenAmount',
        'max_open_amount' => 'maxOpenAmount',
        'payment_error' => 'paymentError',
        'code' => 'code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exception_type' => 'setExceptionType',
        'exception_message' => 'setExceptionMessage',
        'kind' => 'setKind',
        'currency' => 'setCurrency',
        'amount_left_for_buying' => 'setAmountLeftForBuying',
        'date_allowed_again' => 'setDateAllowedAgain',
        'current_open_amount' => 'setCurrentOpenAmount',
        'max_open_amount' => 'setMaxOpenAmount',
        'payment_error' => 'setPaymentError',
        'code' => 'setCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exception_type' => 'getExceptionType',
        'exception_message' => 'getExceptionMessage',
        'kind' => 'getKind',
        'currency' => 'getCurrency',
        'amount_left_for_buying' => 'getAmountLeftForBuying',
        'date_allowed_again' => 'getDateAllowedAgain',
        'current_open_amount' => 'getCurrentOpenAmount',
        'max_open_amount' => 'getMaxOpenAmount',
        'payment_error' => 'getPaymentError',
        'code' => 'getCode'
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
        $this->setIfExists('exception_type', $data ?? [], null);
        $this->setIfExists('exception_message', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount_left_for_buying', $data ?? [], null);
        $this->setIfExists('date_allowed_again', $data ?? [], null);
        $this->setIfExists('current_open_amount', $data ?? [], null);
        $this->setIfExists('max_open_amount', $data ?? [], null);
        $this->setIfExists('payment_error', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
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

        if ($this->container['exception_type'] === null) {
            $invalidProperties[] = "'exception_type' can't be null";
        }
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
     * Gets exception_type
     *
     * @return string
     */
    public function getExceptionType()
    {
        return $this->container['exception_type'];
    }

    /**
     * Sets exception_type
     *
     * @param string $exception_type The server exception class name. Not intended to be shown to final users. Only for logging purposes.
     *
     * @return self
     */
    public function setExceptionType($exception_type)
    {
        if (is_null($exception_type)) {
            throw new \InvalidArgumentException('non-nullable exception_type cannot be null');
        }
        $this->container['exception_type'] = $exception_type;

        return $this;
    }

    /**
     * Gets exception_message
     *
     * @return string|null
     */
    public function getExceptionMessage()
    {
        return $this->container['exception_message'];
    }

    /**
     * Sets exception_message
     *
     * @param string|null $exception_message The server exception message. Not intended to be shown to final users. Only for logging purposes.
     *
     * @return self
     */
    public function setExceptionMessage($exception_message)
    {
        if (is_null($exception_message)) {
            throw new \InvalidArgumentException('non-nullable exception_message cannot be null');
        }
        $this->container['exception_message'] = $exception_message;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return \OpenAPI\Client\Model\ErrorKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \OpenAPI\Client\Model\ErrorKind|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\BuyVoucherErrorAllOfCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\BuyVoucherErrorAllOfCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount_left_for_buying
     *
     * @return float|null
     */
    public function getAmountLeftForBuying()
    {
        return $this->container['amount_left_for_buying'];
    }

    /**
     * Sets amount_left_for_buying
     *
     * @param float|null $amount_left_for_buying Indicates the maximum amount the user can buy this time without exceeding the maximum. Only if `code` is `maxAmountForPeriod`.
     *
     * @return self
     */
    public function setAmountLeftForBuying($amount_left_for_buying)
    {
        if (is_null($amount_left_for_buying)) {
            throw new \InvalidArgumentException('non-nullable amount_left_for_buying cannot be null');
        }
        $this->container['amount_left_for_buying'] = $amount_left_for_buying;

        return $this;
    }

    /**
     * Gets date_allowed_again
     *
     * @return \DateTime|null
     */
    public function getDateAllowedAgain()
    {
        return $this->container['date_allowed_again'];
    }

    /**
     * Sets date_allowed_again
     *
     * @param \DateTime|null $date_allowed_again Indicates the date this user will be able to buy vouchers again for this type. Only if `code` is `maxAmountForPeriod`.
     *
     * @return self
     */
    public function setDateAllowedAgain($date_allowed_again)
    {
        if (is_null($date_allowed_again)) {
            throw new \InvalidArgumentException('non-nullable date_allowed_again cannot be null');
        }
        $this->container['date_allowed_again'] = $date_allowed_again;

        return $this;
    }

    /**
     * Gets current_open_amount
     *
     * @return float|null
     */
    public function getCurrentOpenAmount()
    {
        return $this->container['current_open_amount'];
    }

    /**
     * Sets current_open_amount
     *
     * @param float|null $current_open_amount Indicates the current total amount that is open. Only if `code` is `maxOpenAmount` or `maxTotalOpenAmount`.
     *
     * @return self
     */
    public function setCurrentOpenAmount($current_open_amount)
    {
        if (is_null($current_open_amount)) {
            throw new \InvalidArgumentException('non-nullable current_open_amount cannot be null');
        }
        $this->container['current_open_amount'] = $current_open_amount;

        return $this;
    }

    /**
     * Gets max_open_amount
     *
     * @return float|null
     */
    public function getMaxOpenAmount()
    {
        return $this->container['max_open_amount'];
    }

    /**
     * Sets max_open_amount
     *
     * @param float|null $max_open_amount Indicates the maximum total open amount. Only if `code` is `maxOpenAmount` or `maxTotalOpenAmount`.
     *
     * @return self
     */
    public function setMaxOpenAmount($max_open_amount)
    {
        if (is_null($max_open_amount)) {
            throw new \InvalidArgumentException('non-nullable max_open_amount cannot be null');
        }
        $this->container['max_open_amount'] = $max_open_amount;

        return $this;
    }

    /**
     * Gets payment_error
     *
     * @return \OpenAPI\Client\Model\BuyVoucherErrorAllOfPaymentError|null
     */
    public function getPaymentError()
    {
        return $this->container['payment_error'];
    }

    /**
     * Sets payment_error
     *
     * @param \OpenAPI\Client\Model\BuyVoucherErrorAllOfPaymentError|null $payment_error payment_error
     *
     * @return self
     */
    public function setPaymentError($payment_error)
    {
        if (is_null($payment_error)) {
            throw new \InvalidArgumentException('non-nullable payment_error cannot be null');
        }
        $this->container['payment_error'] = $payment_error;

        return $this;
    }

    /**
     * Gets code
     *
     * @return \OpenAPI\Client\Model\BuyVoucherErrorCode|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param \OpenAPI\Client\Model\BuyVoucherErrorCode|null $code code
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


