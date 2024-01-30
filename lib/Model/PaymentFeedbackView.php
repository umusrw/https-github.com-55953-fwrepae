<?php
/**
 * PaymentFeedbackView
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
 * PaymentFeedbackView Class Doc Comment
 *
 * @category Class
 * @description Details of a payment feedback
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentFeedbackView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentFeedbackView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'level' => '\OpenAPI\Client\Model\ReferenceLevelEnum',
        'comments' => 'string',
        'reply_comments' => 'string',
        'reply_comments_date' => '\DateTime',
        'can_edit' => 'bool',
        'can_give' => 'bool',
        'can_reply' => 'bool',
        'from' => '\OpenAPI\Client\Model\PaymentFeedbackViewAllOfFrom',
        'to' => '\OpenAPI\Client\Model\PaymentFeedbackViewAllOfTo',
        'manager_comments' => 'string',
        'manager_comments_date' => '\DateTime',
        'transaction' => '\OpenAPI\Client\Model\PaymentFeedbackViewAllOfTransaction'
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
        'date' => 'date-time',
        'level' => null,
        'comments' => null,
        'reply_comments' => null,
        'reply_comments_date' => 'date-time',
        'can_edit' => null,
        'can_give' => null,
        'can_reply' => null,
        'from' => null,
        'to' => null,
        'manager_comments' => null,
        'manager_comments_date' => 'date-time',
        'transaction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'date' => false,
        'level' => false,
        'comments' => false,
        'reply_comments' => false,
        'reply_comments_date' => false,
        'can_edit' => false,
        'can_give' => false,
        'can_reply' => false,
        'from' => false,
        'to' => false,
        'manager_comments' => false,
        'manager_comments_date' => false,
        'transaction' => false
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
        'date' => 'date',
        'level' => 'level',
        'comments' => 'comments',
        'reply_comments' => 'replyComments',
        'reply_comments_date' => 'replyCommentsDate',
        'can_edit' => 'canEdit',
        'can_give' => 'canGive',
        'can_reply' => 'canReply',
        'from' => 'from',
        'to' => 'to',
        'manager_comments' => 'managerComments',
        'manager_comments_date' => 'managerCommentsDate',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'level' => 'setLevel',
        'comments' => 'setComments',
        'reply_comments' => 'setReplyComments',
        'reply_comments_date' => 'setReplyCommentsDate',
        'can_edit' => 'setCanEdit',
        'can_give' => 'setCanGive',
        'can_reply' => 'setCanReply',
        'from' => 'setFrom',
        'to' => 'setTo',
        'manager_comments' => 'setManagerComments',
        'manager_comments_date' => 'setManagerCommentsDate',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'level' => 'getLevel',
        'comments' => 'getComments',
        'reply_comments' => 'getReplyComments',
        'reply_comments_date' => 'getReplyCommentsDate',
        'can_edit' => 'getCanEdit',
        'can_give' => 'getCanGive',
        'can_reply' => 'getCanReply',
        'from' => 'getFrom',
        'to' => 'getTo',
        'manager_comments' => 'getManagerComments',
        'manager_comments_date' => 'getManagerCommentsDate',
        'transaction' => 'getTransaction'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('reply_comments', $data ?? [], null);
        $this->setIfExists('reply_comments_date', $data ?? [], null);
        $this->setIfExists('can_edit', $data ?? [], null);
        $this->setIfExists('can_give', $data ?? [], null);
        $this->setIfExists('can_reply', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('manager_comments', $data ?? [], null);
        $this->setIfExists('manager_comments_date', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
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
     * @param \DateTime|null $date The date the reference/payment feedback was set
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
     * Gets level
     *
     * @return \OpenAPI\Client\Model\ReferenceLevelEnum|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param \OpenAPI\Client\Model\ReferenceLevelEnum|null $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments The reference/payment feedback comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets reply_comments
     *
     * @return string|null
     */
    public function getReplyComments()
    {
        return $this->container['reply_comments'];
    }

    /**
     * Sets reply_comments
     *
     * @param string|null $reply_comments The payment feedback reply comments
     *
     * @return self
     */
    public function setReplyComments($reply_comments)
    {
        if (is_null($reply_comments)) {
            throw new \InvalidArgumentException('non-nullable reply_comments cannot be null');
        }
        $this->container['reply_comments'] = $reply_comments;

        return $this;
    }

    /**
     * Gets reply_comments_date
     *
     * @return \DateTime|null
     */
    public function getReplyCommentsDate()
    {
        return $this->container['reply_comments_date'];
    }

    /**
     * Sets reply_comments_date
     *
     * @param \DateTime|null $reply_comments_date The payment feedback reply comments date
     *
     * @return self
     */
    public function setReplyCommentsDate($reply_comments_date)
    {
        if (is_null($reply_comments_date)) {
            throw new \InvalidArgumentException('non-nullable reply_comments_date cannot be null');
        }
        $this->container['reply_comments_date'] = $reply_comments_date;

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
     * @param bool|null $can_edit Indicates whether the feedback can be edited or removed if the authenticated user is a manager
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
     * Gets can_give
     *
     * @return bool|null
     */
    public function getCanGive()
    {
        return $this->container['can_give'];
    }

    /**
     * Sets can_give
     *
     * @param bool|null $can_give Indicates if feedback can be given also checking it's deadline
     *
     * @return self
     */
    public function setCanGive($can_give)
    {
        if (is_null($can_give)) {
            throw new \InvalidArgumentException('non-nullable can_give cannot be null');
        }
        $this->container['can_give'] = $can_give;

        return $this;
    }

    /**
     * Gets can_reply
     *
     * @return bool|null
     */
    public function getCanReply()
    {
        return $this->container['can_reply'];
    }

    /**
     * Sets can_reply
     *
     * @param bool|null $can_reply Indicates if feedback can be replied also checking it's deadline
     *
     * @return self
     */
    public function setCanReply($can_reply)
    {
        if (is_null($can_reply)) {
            throw new \InvalidArgumentException('non-nullable can_reply cannot be null');
        }
        $this->container['can_reply'] = $can_reply;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \OpenAPI\Client\Model\PaymentFeedbackViewAllOfFrom|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \OpenAPI\Client\Model\PaymentFeedbackViewAllOfFrom|null $from from
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
     * @return \OpenAPI\Client\Model\PaymentFeedbackViewAllOfTo|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \OpenAPI\Client\Model\PaymentFeedbackViewAllOfTo|null $to to
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
     * Gets manager_comments
     *
     * @return string|null
     */
    public function getManagerComments()
    {
        return $this->container['manager_comments'];
    }

    /**
     * Sets manager_comments
     *
     * @param string|null $manager_comments The admin/broker comments. Only returned if the authenticated user is a manager.
     *
     * @return self
     */
    public function setManagerComments($manager_comments)
    {
        if (is_null($manager_comments)) {
            throw new \InvalidArgumentException('non-nullable manager_comments cannot be null');
        }
        $this->container['manager_comments'] = $manager_comments;

        return $this;
    }

    /**
     * Gets manager_comments_date
     *
     * @return \DateTime|null
     */
    public function getManagerCommentsDate()
    {
        return $this->container['manager_comments_date'];
    }

    /**
     * Sets manager_comments_date
     *
     * @param \DateTime|null $manager_comments_date The admin/broker comments date. Only returned if the authenticated user is a manager.
     *
     * @return self
     */
    public function setManagerCommentsDate($manager_comments_date)
    {
        if (is_null($manager_comments_date)) {
            throw new \InvalidArgumentException('non-nullable manager_comments_date cannot be null');
        }
        $this->container['manager_comments_date'] = $manager_comments_date;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \OpenAPI\Client\Model\PaymentFeedbackViewAllOfTransaction|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \OpenAPI\Client\Model\PaymentFeedbackViewAllOfTransaction|null $transaction transaction
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        if (is_null($transaction)) {
            throw new \InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

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


