<?php
/**
 * MessageView
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
 * MessageView Class Doc Comment
 *
 * @category Class
 * @description Contains the details of a message
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessageView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessageView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'kind' => '\OpenAPI\Client\Model\MessageAllOfKind',
        'date' => '\DateTime',
        'subject' => 'string',
        'category' => '\OpenAPI\Client\Model\MessageCategory',
        'read' => 'bool',
        'replied' => 'bool',
        'from_owner_kind' => '\OpenAPI\Client\Model\MessageResultAllOfFromOwnerKind',
        'from_owner' => '\OpenAPI\Client\Model\MessageResultAllOfFromOwner',
        'to_groups' => '\OpenAPI\Client\Model\Group[]',
        'to_users' => '\OpenAPI\Client\Model\User[]',
        'destination' => '\OpenAPI\Client\Model\MessageResultAllOfDestination',
        'sent_by' => '\OpenAPI\Client\Model\MessageResultAllOfSentBy',
        'can_remove' => 'bool',
        'can_reply' => 'bool',
        'can_mark_unread' => 'bool',
        'can_move_to_trash' => 'bool',
        'can_restore' => 'bool',
        'owner_kind' => '\OpenAPI\Client\Model\MessageViewAllOfOwnerKind',
        'owner' => '\OpenAPI\Client\Model\MessageViewAllOfOwner',
        'removed_at' => '\DateTime',
        'body' => 'string',
        'reply_position' => 'int',
        'replies' => '\OpenAPI\Client\Model\Message[]'
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
        'kind' => null,
        'date' => 'date-time',
        'subject' => null,
        'category' => null,
        'read' => null,
        'replied' => null,
        'from_owner_kind' => null,
        'from_owner' => null,
        'to_groups' => null,
        'to_users' => null,
        'destination' => null,
        'sent_by' => null,
        'can_remove' => null,
        'can_reply' => null,
        'can_mark_unread' => null,
        'can_move_to_trash' => null,
        'can_restore' => null,
        'owner_kind' => null,
        'owner' => null,
        'removed_at' => 'date-time',
        'body' => null,
        'reply_position' => null,
        'replies' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'kind' => false,
        'date' => false,
        'subject' => false,
        'category' => false,
        'read' => false,
        'replied' => false,
        'from_owner_kind' => false,
        'from_owner' => false,
        'to_groups' => false,
        'to_users' => false,
        'destination' => false,
        'sent_by' => false,
        'can_remove' => false,
        'can_reply' => false,
        'can_mark_unread' => false,
        'can_move_to_trash' => false,
        'can_restore' => false,
        'owner_kind' => false,
        'owner' => false,
        'removed_at' => false,
        'body' => false,
        'reply_position' => false,
        'replies' => false
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
        'kind' => 'kind',
        'date' => 'date',
        'subject' => 'subject',
        'category' => 'category',
        'read' => 'read',
        'replied' => 'replied',
        'from_owner_kind' => 'fromOwnerKind',
        'from_owner' => 'fromOwner',
        'to_groups' => 'toGroups',
        'to_users' => 'toUsers',
        'destination' => 'destination',
        'sent_by' => 'sentBy',
        'can_remove' => 'canRemove',
        'can_reply' => 'canReply',
        'can_mark_unread' => 'canMarkUnread',
        'can_move_to_trash' => 'canMoveToTrash',
        'can_restore' => 'canRestore',
        'owner_kind' => 'ownerKind',
        'owner' => 'owner',
        'removed_at' => 'removedAt',
        'body' => 'body',
        'reply_position' => 'replyPosition',
        'replies' => 'replies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'kind' => 'setKind',
        'date' => 'setDate',
        'subject' => 'setSubject',
        'category' => 'setCategory',
        'read' => 'setRead',
        'replied' => 'setReplied',
        'from_owner_kind' => 'setFromOwnerKind',
        'from_owner' => 'setFromOwner',
        'to_groups' => 'setToGroups',
        'to_users' => 'setToUsers',
        'destination' => 'setDestination',
        'sent_by' => 'setSentBy',
        'can_remove' => 'setCanRemove',
        'can_reply' => 'setCanReply',
        'can_mark_unread' => 'setCanMarkUnread',
        'can_move_to_trash' => 'setCanMoveToTrash',
        'can_restore' => 'setCanRestore',
        'owner_kind' => 'setOwnerKind',
        'owner' => 'setOwner',
        'removed_at' => 'setRemovedAt',
        'body' => 'setBody',
        'reply_position' => 'setReplyPosition',
        'replies' => 'setReplies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'kind' => 'getKind',
        'date' => 'getDate',
        'subject' => 'getSubject',
        'category' => 'getCategory',
        'read' => 'getRead',
        'replied' => 'getReplied',
        'from_owner_kind' => 'getFromOwnerKind',
        'from_owner' => 'getFromOwner',
        'to_groups' => 'getToGroups',
        'to_users' => 'getToUsers',
        'destination' => 'getDestination',
        'sent_by' => 'getSentBy',
        'can_remove' => 'getCanRemove',
        'can_reply' => 'getCanReply',
        'can_mark_unread' => 'getCanMarkUnread',
        'can_move_to_trash' => 'getCanMoveToTrash',
        'can_restore' => 'getCanRestore',
        'owner_kind' => 'getOwnerKind',
        'owner' => 'getOwner',
        'removed_at' => 'getRemovedAt',
        'body' => 'getBody',
        'reply_position' => 'getReplyPosition',
        'replies' => 'getReplies'
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
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('read', $data ?? [], null);
        $this->setIfExists('replied', $data ?? [], null);
        $this->setIfExists('from_owner_kind', $data ?? [], null);
        $this->setIfExists('from_owner', $data ?? [], null);
        $this->setIfExists('to_groups', $data ?? [], null);
        $this->setIfExists('to_users', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('sent_by', $data ?? [], null);
        $this->setIfExists('can_remove', $data ?? [], null);
        $this->setIfExists('can_reply', $data ?? [], null);
        $this->setIfExists('can_mark_unread', $data ?? [], null);
        $this->setIfExists('can_move_to_trash', $data ?? [], null);
        $this->setIfExists('can_restore', $data ?? [], null);
        $this->setIfExists('owner_kind', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('removed_at', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('reply_position', $data ?? [], null);
        $this->setIfExists('replies', $data ?? [], null);
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
     * Gets kind
     *
     * @return \OpenAPI\Client\Model\MessageAllOfKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \OpenAPI\Client\Model\MessageAllOfKind|null $kind kind
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
     * @param \DateTime|null $date The message date
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \OpenAPI\Client\Model\MessageCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \OpenAPI\Client\Model\MessageCategory|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool|null
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool|null $read Whether the message was read or not
     *
     * @return self
     */
    public function setRead($read)
    {
        if (is_null($read)) {
            throw new \InvalidArgumentException('non-nullable read cannot be null');
        }
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets replied
     *
     * @return bool|null
     */
    public function getReplied()
    {
        return $this->container['replied'];
    }

    /**
     * Sets replied
     *
     * @param bool|null $replied Whether the message was replied or not
     *
     * @return self
     */
    public function setReplied($replied)
    {
        if (is_null($replied)) {
            throw new \InvalidArgumentException('non-nullable replied cannot be null');
        }
        $this->container['replied'] = $replied;

        return $this;
    }

    /**
     * Gets from_owner_kind
     *
     * @return \OpenAPI\Client\Model\MessageResultAllOfFromOwnerKind|null
     */
    public function getFromOwnerKind()
    {
        return $this->container['from_owner_kind'];
    }

    /**
     * Sets from_owner_kind
     *
     * @param \OpenAPI\Client\Model\MessageResultAllOfFromOwnerKind|null $from_owner_kind from_owner_kind
     *
     * @return self
     */
    public function setFromOwnerKind($from_owner_kind)
    {
        if (is_null($from_owner_kind)) {
            throw new \InvalidArgumentException('non-nullable from_owner_kind cannot be null');
        }
        $this->container['from_owner_kind'] = $from_owner_kind;

        return $this;
    }

    /**
     * Gets from_owner
     *
     * @return \OpenAPI\Client\Model\MessageResultAllOfFromOwner|null
     */
    public function getFromOwner()
    {
        return $this->container['from_owner'];
    }

    /**
     * Sets from_owner
     *
     * @param \OpenAPI\Client\Model\MessageResultAllOfFromOwner|null $from_owner from_owner
     *
     * @return self
     */
    public function setFromOwner($from_owner)
    {
        if (is_null($from_owner)) {
            throw new \InvalidArgumentException('non-nullable from_owner cannot be null');
        }
        $this->container['from_owner'] = $from_owner;

        return $this;
    }

    /**
     * Gets to_groups
     *
     * @return \OpenAPI\Client\Model\Group[]|null
     */
    public function getToGroups()
    {
        return $this->container['to_groups'];
    }

    /**
     * Sets to_groups
     *
     * @param \OpenAPI\Client\Model\Group[]|null $to_groups The list of groups the outgoing message was sent. Only returned if `kind` is `outgoing`.
     *
     * @return self
     */
    public function setToGroups($to_groups)
    {
        if (is_null($to_groups)) {
            throw new \InvalidArgumentException('non-nullable to_groups cannot be null');
        }
        $this->container['to_groups'] = $to_groups;

        return $this;
    }

    /**
     * Gets to_users
     *
     * @return \OpenAPI\Client\Model\User[]|null
     */
    public function getToUsers()
    {
        return $this->container['to_users'];
    }

    /**
     * Sets to_users
     *
     * @param \OpenAPI\Client\Model\User[]|null $to_users The list of users the outgoing message was sent. Only returned if `kind` is `outgoing`.
     *
     * @return self
     */
    public function setToUsers($to_users)
    {
        if (is_null($to_users)) {
            throw new \InvalidArgumentException('non-nullable to_users cannot be null');
        }
        $this->container['to_users'] = $to_users;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\MessageResultAllOfDestination|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\MessageResultAllOfDestination|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets sent_by
     *
     * @return \OpenAPI\Client\Model\MessageResultAllOfSentBy|null
     */
    public function getSentBy()
    {
        return $this->container['sent_by'];
    }

    /**
     * Sets sent_by
     *
     * @param \OpenAPI\Client\Model\MessageResultAllOfSentBy|null $sent_by sent_by
     *
     * @return self
     */
    public function setSentBy($sent_by)
    {
        if (is_null($sent_by)) {
            throw new \InvalidArgumentException('non-nullable sent_by cannot be null');
        }
        $this->container['sent_by'] = $sent_by;

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
     * @param bool|null $can_remove Whether the message can be removed or not.
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
     * @param bool|null $can_reply Whether the message can be replied.
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
     * Gets can_mark_unread
     *
     * @return bool|null
     */
    public function getCanMarkUnread()
    {
        return $this->container['can_mark_unread'];
    }

    /**
     * Sets can_mark_unread
     *
     * @param bool|null $can_mark_unread Whether the message can be marked as unread.
     *
     * @return self
     */
    public function setCanMarkUnread($can_mark_unread)
    {
        if (is_null($can_mark_unread)) {
            throw new \InvalidArgumentException('non-nullable can_mark_unread cannot be null');
        }
        $this->container['can_mark_unread'] = $can_mark_unread;

        return $this;
    }

    /**
     * Gets can_move_to_trash
     *
     * @return bool|null
     */
    public function getCanMoveToTrash()
    {
        return $this->container['can_move_to_trash'];
    }

    /**
     * Sets can_move_to_trash
     *
     * @param bool|null $can_move_to_trash Whether the message can be moved to trash box.
     *
     * @return self
     */
    public function setCanMoveToTrash($can_move_to_trash)
    {
        if (is_null($can_move_to_trash)) {
            throw new \InvalidArgumentException('non-nullable can_move_to_trash cannot be null');
        }
        $this->container['can_move_to_trash'] = $can_move_to_trash;

        return $this;
    }

    /**
     * Gets can_restore
     *
     * @return bool|null
     */
    public function getCanRestore()
    {
        return $this->container['can_restore'];
    }

    /**
     * Sets can_restore
     *
     * @param bool|null $can_restore Whether the message can be restored or not.
     *
     * @return self
     */
    public function setCanRestore($can_restore)
    {
        if (is_null($can_restore)) {
            throw new \InvalidArgumentException('non-nullable can_restore cannot be null');
        }
        $this->container['can_restore'] = $can_restore;

        return $this;
    }

    /**
     * Gets owner_kind
     *
     * @return \OpenAPI\Client\Model\MessageViewAllOfOwnerKind|null
     */
    public function getOwnerKind()
    {
        return $this->container['owner_kind'];
    }

    /**
     * Sets owner_kind
     *
     * @param \OpenAPI\Client\Model\MessageViewAllOfOwnerKind|null $owner_kind owner_kind
     *
     * @return self
     */
    public function setOwnerKind($owner_kind)
    {
        if (is_null($owner_kind)) {
            throw new \InvalidArgumentException('non-nullable owner_kind cannot be null');
        }
        $this->container['owner_kind'] = $owner_kind;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OpenAPI\Client\Model\MessageViewAllOfOwner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OpenAPI\Client\Model\MessageViewAllOfOwner|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets removed_at
     *
     * @return \DateTime|null
     */
    public function getRemovedAt()
    {
        return $this->container['removed_at'];
    }

    /**
     * Sets removed_at
     *
     * @param \DateTime|null $removed_at The remotion date (if any)
     *
     * @return self
     */
    public function setRemovedAt($removed_at)
    {
        if (is_null($removed_at)) {
            throw new \InvalidArgumentException('non-nullable removed_at cannot be null');
        }
        $this->container['removed_at'] = $removed_at;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body The message body
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets reply_position
     *
     * @return int|null
     */
    public function getReplyPosition()
    {
        return $this->container['reply_position'];
    }

    /**
     * Sets reply_position
     *
     * @param int|null $reply_position The reply position in the conversation or -1 when it is the first message sent.
     *
     * @return self
     */
    public function setReplyPosition($reply_position)
    {
        if (is_null($reply_position)) {
            throw new \InvalidArgumentException('non-nullable reply_position cannot be null');
        }
        $this->container['reply_position'] = $reply_position;

        return $this;
    }

    /**
     * Gets replies
     *
     * @return \OpenAPI\Client\Model\Message[]|null
     */
    public function getReplies()
    {
        return $this->container['replies'];
    }

    /**
     * Sets replies
     *
     * @param \OpenAPI\Client\Model\Message[]|null $replies The list with the replies to the message
     *
     * @return self
     */
    public function setReplies($replies)
    {
        if (is_null($replies)) {
            throw new \InvalidArgumentException('non-nullable replies cannot be null');
        }
        $this->container['replies'] = $replies;

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


