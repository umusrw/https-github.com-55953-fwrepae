<?php
/**
 * TicketProcessResultAllOfTransaction
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
 * TicketProcessResultAllOfTransaction Class Doc Comment
 *
 * @category Class
 * @description The generated payment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TicketProcessResultAllOfTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TicketProcessResult_allOf_transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'display' => 'string',
        'transaction_number' => 'string',
        'date' => '\DateTime',
        'amount' => 'float',
        'from' => '\OpenAPI\Client\Model\TransAllOfFrom',
        'to' => '\OpenAPI\Client\Model\TransAllOfTo',
        'type' => '\OpenAPI\Client\Model\TransAllOfType',
        'currency' => '\OpenAPI\Client\Model\TransAllOfCurrency',
        'ticket_number' => 'string',
        'from_name' => 'string',
        'to_name' => 'string',
        'description' => 'string',
        'kind' => '\OpenAPI\Client\Model\TransactionAllOfKind',
        'creation_type' => '\OpenAPI\Client\Model\TransactionAllOfCreationType',
        'authorization_status' => '\OpenAPI\Client\Model\TransactionAllOfAuthorizationStatus'
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
        'transaction_number' => null,
        'date' => 'date-time',
        'amount' => 'number',
        'from' => null,
        'to' => null,
        'type' => null,
        'currency' => null,
        'ticket_number' => null,
        'from_name' => null,
        'to_name' => null,
        'description' => null,
        'kind' => null,
        'creation_type' => null,
        'authorization_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'display' => false,
        'transaction_number' => false,
        'date' => false,
        'amount' => false,
        'from' => false,
        'to' => false,
        'type' => false,
        'currency' => false,
        'ticket_number' => false,
        'from_name' => false,
        'to_name' => false,
        'description' => false,
        'kind' => false,
        'creation_type' => false,
        'authorization_status' => false
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
        'transaction_number' => 'transactionNumber',
        'date' => 'date',
        'amount' => 'amount',
        'from' => 'from',
        'to' => 'to',
        'type' => 'type',
        'currency' => 'currency',
        'ticket_number' => 'ticketNumber',
        'from_name' => 'fromName',
        'to_name' => 'toName',
        'description' => 'description',
        'kind' => 'kind',
        'creation_type' => 'creationType',
        'authorization_status' => 'authorizationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'display' => 'setDisplay',
        'transaction_number' => 'setTransactionNumber',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'from' => 'setFrom',
        'to' => 'setTo',
        'type' => 'setType',
        'currency' => 'setCurrency',
        'ticket_number' => 'setTicketNumber',
        'from_name' => 'setFromName',
        'to_name' => 'setToName',
        'description' => 'setDescription',
        'kind' => 'setKind',
        'creation_type' => 'setCreationType',
        'authorization_status' => 'setAuthorizationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'display' => 'getDisplay',
        'transaction_number' => 'getTransactionNumber',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'from' => 'getFrom',
        'to' => 'getTo',
        'type' => 'getType',
        'currency' => 'getCurrency',
        'ticket_number' => 'getTicketNumber',
        'from_name' => 'getFromName',
        'to_name' => 'getToName',
        'description' => 'getDescription',
        'kind' => 'getKind',
        'creation_type' => 'getCreationType',
        'authorization_status' => 'getAuthorizationStatus'
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
        $this->setIfExists('transaction_number', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('ticket_number', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('to_name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('creation_type', $data ?? [], null);
        $this->setIfExists('authorization_status', $data ?? [], null);
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
     * @param string|null $display A display text for this transfer / transaction, according to the transaction type and currency configuration in Cyclos.
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
     * Gets transaction_number
     *
     * @return string|null
     */
    public function getTransactionNumber()
    {
        return $this->container['transaction_number'];
    }

    /**
     * Sets transaction_number
     *
     * @param string|null $transaction_number The transaction number identifying this transfer / transaction. The currency configuration has the definition on whether transaction numbers are enabled and which format they have.
     *
     * @return self
     */
    public function setTransactionNumber($transaction_number)
    {
        if (is_null($transaction_number)) {
            throw new \InvalidArgumentException('non-nullable transaction_number cannot be null');
        }
        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The creation date and time.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The transfer / transaction amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \OpenAPI\Client\Model\TransAllOfFrom|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \OpenAPI\Client\Model\TransAllOfFrom|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \OpenAPI\Client\Model\TransAllOfTo|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \OpenAPI\Client\Model\TransAllOfTo|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\TransAllOfType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\TransAllOfType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\TransAllOfCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\TransAllOfCurrency|null $currency currency
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
     * Gets ticket_number
     *
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->container['ticket_number'];
    }

    /**
     * Sets ticket_number
     *
     * @param string|null $ticket_number A 32-length alphanumeric ticket identifier. Only returned if kind is `ticket`.
     *
     * @return self
     */
    public function setTicketNumber($ticket_number)
    {
        if (is_null($ticket_number)) {
            throw new \InvalidArgumentException('non-nullable ticket_number cannot be null');
        }
        $this->container['ticket_number'] = $ticket_number;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string|null $from_name Contains an optional custom from name, which can be set when the transaction is performed.
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets to_name
     *
     * @return string|null
     */
    public function getToName()
    {
        return $this->container['to_name'];
    }

    /**
     * Sets to_name
     *
     * @param string|null $to_name Contains an optional custom to name, which can be set when the transaction is performed.
     *
     * @return self
     */
    public function setToName($to_name)
    {
        if (is_null($to_name)) {
            throw new \InvalidArgumentException('non-nullable to_name cannot be null');
        }
        $this->container['to_name'] = $to_name;

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
     * @param string|null $description The optional transaction description.
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
     * Gets kind
     *
     * @return \OpenAPI\Client\Model\TransactionAllOfKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \OpenAPI\Client\Model\TransactionAllOfKind|null $kind kind
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
     * Gets creation_type
     *
     * @return \OpenAPI\Client\Model\TransactionAllOfCreationType|null
     */
    public function getCreationType()
    {
        return $this->container['creation_type'];
    }

    /**
     * Sets creation_type
     *
     * @param \OpenAPI\Client\Model\TransactionAllOfCreationType|null $creation_type creation_type
     *
     * @return self
     */
    public function setCreationType($creation_type)
    {
        if (is_null($creation_type)) {
            throw new \InvalidArgumentException('non-nullable creation_type cannot be null');
        }
        $this->container['creation_type'] = $creation_type;

        return $this;
    }

    /**
     * Gets authorization_status
     *
     * @return \OpenAPI\Client\Model\TransactionAllOfAuthorizationStatus|null
     */
    public function getAuthorizationStatus()
    {
        return $this->container['authorization_status'];
    }

    /**
     * Sets authorization_status
     *
     * @param \OpenAPI\Client\Model\TransactionAllOfAuthorizationStatus|null $authorization_status authorization_status
     *
     * @return self
     */
    public function setAuthorizationStatus($authorization_status)
    {
        if (is_null($authorization_status)) {
            throw new \InvalidArgumentException('non-nullable authorization_status cannot be null');
        }
        $this->container['authorization_status'] = $authorization_status;

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


