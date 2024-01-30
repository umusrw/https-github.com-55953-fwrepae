<?php
/**
 * OperatorGroupDataForNew
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
 * OperatorGroupDataForNew Class Doc Comment
 *
 * @category Class
 * @description Contains data for creating a new operator group
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OperatorGroupDataForNew implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperatorGroupDataForNew';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => '\OpenAPI\Client\Model\User',
        'can_chargeback_payments' => 'bool',
        'can_receive_payments' => 'bool',
        'can_request_payments' => 'bool',
        'can_perform_voucher_transactions' => 'bool',
        'can_view_advertisements' => 'bool',
        'can_manage_advertisements' => 'bool',
        'can_block_token' => 'bool',
        'can_cancel_token' => 'bool',
        'can_enable_token' => 'bool',
        'can_unblock_token' => 'bool',
        'broker' => 'bool',
        'can_have_messages' => 'bool',
        'can_have_notifications' => 'bool',
        'operations' => '\OpenAPI\Client\Model\Operation[]',
        'record_types' => '\OpenAPI\Client\Model\RecordType[]',
        'account_types' => '\OpenAPI\Client\Model\AccountType[]',
        'payment_types' => '\OpenAPI\Client\Model\TransferTypeWithCurrency[]',
        'top_up_enabled' => 'bool',
        'can_redeem_vouchers' => 'bool',
        'operator_group' => '\OpenAPI\Client\Model\OperatorGroupDataForNewAllOfOperatorGroup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user' => null,
        'can_chargeback_payments' => null,
        'can_receive_payments' => null,
        'can_request_payments' => null,
        'can_perform_voucher_transactions' => null,
        'can_view_advertisements' => null,
        'can_manage_advertisements' => null,
        'can_block_token' => null,
        'can_cancel_token' => null,
        'can_enable_token' => null,
        'can_unblock_token' => null,
        'broker' => null,
        'can_have_messages' => null,
        'can_have_notifications' => null,
        'operations' => null,
        'record_types' => null,
        'account_types' => null,
        'payment_types' => null,
        'top_up_enabled' => null,
        'can_redeem_vouchers' => null,
        'operator_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user' => false,
        'can_chargeback_payments' => false,
        'can_receive_payments' => false,
        'can_request_payments' => false,
        'can_perform_voucher_transactions' => false,
        'can_view_advertisements' => false,
        'can_manage_advertisements' => false,
        'can_block_token' => false,
        'can_cancel_token' => false,
        'can_enable_token' => false,
        'can_unblock_token' => false,
        'broker' => false,
        'can_have_messages' => false,
        'can_have_notifications' => false,
        'operations' => false,
        'record_types' => false,
        'account_types' => false,
        'payment_types' => false,
        'top_up_enabled' => false,
        'can_redeem_vouchers' => false,
        'operator_group' => false
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
        'user' => 'user',
        'can_chargeback_payments' => 'canChargebackPayments',
        'can_receive_payments' => 'canReceivePayments',
        'can_request_payments' => 'canRequestPayments',
        'can_perform_voucher_transactions' => 'canPerformVoucherTransactions',
        'can_view_advertisements' => 'canViewAdvertisements',
        'can_manage_advertisements' => 'canManageAdvertisements',
        'can_block_token' => 'canBlockToken',
        'can_cancel_token' => 'canCancelToken',
        'can_enable_token' => 'canEnableToken',
        'can_unblock_token' => 'canUnblockToken',
        'broker' => 'broker',
        'can_have_messages' => 'canHaveMessages',
        'can_have_notifications' => 'canHaveNotifications',
        'operations' => 'operations',
        'record_types' => 'recordTypes',
        'account_types' => 'accountTypes',
        'payment_types' => 'paymentTypes',
        'top_up_enabled' => 'topUpEnabled',
        'can_redeem_vouchers' => 'canRedeemVouchers',
        'operator_group' => 'operatorGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'can_chargeback_payments' => 'setCanChargebackPayments',
        'can_receive_payments' => 'setCanReceivePayments',
        'can_request_payments' => 'setCanRequestPayments',
        'can_perform_voucher_transactions' => 'setCanPerformVoucherTransactions',
        'can_view_advertisements' => 'setCanViewAdvertisements',
        'can_manage_advertisements' => 'setCanManageAdvertisements',
        'can_block_token' => 'setCanBlockToken',
        'can_cancel_token' => 'setCanCancelToken',
        'can_enable_token' => 'setCanEnableToken',
        'can_unblock_token' => 'setCanUnblockToken',
        'broker' => 'setBroker',
        'can_have_messages' => 'setCanHaveMessages',
        'can_have_notifications' => 'setCanHaveNotifications',
        'operations' => 'setOperations',
        'record_types' => 'setRecordTypes',
        'account_types' => 'setAccountTypes',
        'payment_types' => 'setPaymentTypes',
        'top_up_enabled' => 'setTopUpEnabled',
        'can_redeem_vouchers' => 'setCanRedeemVouchers',
        'operator_group' => 'setOperatorGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'can_chargeback_payments' => 'getCanChargebackPayments',
        'can_receive_payments' => 'getCanReceivePayments',
        'can_request_payments' => 'getCanRequestPayments',
        'can_perform_voucher_transactions' => 'getCanPerformVoucherTransactions',
        'can_view_advertisements' => 'getCanViewAdvertisements',
        'can_manage_advertisements' => 'getCanManageAdvertisements',
        'can_block_token' => 'getCanBlockToken',
        'can_cancel_token' => 'getCanCancelToken',
        'can_enable_token' => 'getCanEnableToken',
        'can_unblock_token' => 'getCanUnblockToken',
        'broker' => 'getBroker',
        'can_have_messages' => 'getCanHaveMessages',
        'can_have_notifications' => 'getCanHaveNotifications',
        'operations' => 'getOperations',
        'record_types' => 'getRecordTypes',
        'account_types' => 'getAccountTypes',
        'payment_types' => 'getPaymentTypes',
        'top_up_enabled' => 'getTopUpEnabled',
        'can_redeem_vouchers' => 'getCanRedeemVouchers',
        'operator_group' => 'getOperatorGroup'
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
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('can_chargeback_payments', $data ?? [], null);
        $this->setIfExists('can_receive_payments', $data ?? [], null);
        $this->setIfExists('can_request_payments', $data ?? [], null);
        $this->setIfExists('can_perform_voucher_transactions', $data ?? [], null);
        $this->setIfExists('can_view_advertisements', $data ?? [], null);
        $this->setIfExists('can_manage_advertisements', $data ?? [], null);
        $this->setIfExists('can_block_token', $data ?? [], null);
        $this->setIfExists('can_cancel_token', $data ?? [], null);
        $this->setIfExists('can_enable_token', $data ?? [], null);
        $this->setIfExists('can_unblock_token', $data ?? [], null);
        $this->setIfExists('broker', $data ?? [], null);
        $this->setIfExists('can_have_messages', $data ?? [], null);
        $this->setIfExists('can_have_notifications', $data ?? [], null);
        $this->setIfExists('operations', $data ?? [], null);
        $this->setIfExists('record_types', $data ?? [], null);
        $this->setIfExists('account_types', $data ?? [], null);
        $this->setIfExists('payment_types', $data ?? [], null);
        $this->setIfExists('top_up_enabled', $data ?? [], null);
        $this->setIfExists('can_redeem_vouchers', $data ?? [], null);
        $this->setIfExists('operator_group', $data ?? [], null);
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
     * Gets can_chargeback_payments
     *
     * @return bool|null
     */
    public function getCanChargebackPayments()
    {
        return $this->container['can_chargeback_payments'];
    }

    /**
     * Sets can_chargeback_payments
     *
     * @param bool|null $can_chargeback_payments Can the permission to chargeback payments be granted?
     *
     * @return self
     */
    public function setCanChargebackPayments($can_chargeback_payments)
    {
        if (is_null($can_chargeback_payments)) {
            throw new \InvalidArgumentException('non-nullable can_chargeback_payments cannot be null');
        }
        $this->container['can_chargeback_payments'] = $can_chargeback_payments;

        return $this;
    }

    /**
     * Gets can_receive_payments
     *
     * @return bool|null
     */
    public function getCanReceivePayments()
    {
        return $this->container['can_receive_payments'];
    }

    /**
     * Sets can_receive_payments
     *
     * @param bool|null $can_receive_payments Can the permission to receive payments be granted?
     *
     * @return self
     */
    public function setCanReceivePayments($can_receive_payments)
    {
        if (is_null($can_receive_payments)) {
            throw new \InvalidArgumentException('non-nullable can_receive_payments cannot be null');
        }
        $this->container['can_receive_payments'] = $can_receive_payments;

        return $this;
    }

    /**
     * Gets can_request_payments
     *
     * @return bool|null
     */
    public function getCanRequestPayments()
    {
        return $this->container['can_request_payments'];
    }

    /**
     * Sets can_request_payments
     *
     * @param bool|null $can_request_payments Can the permission to request payments be granted?
     *
     * @return self
     */
    public function setCanRequestPayments($can_request_payments)
    {
        if (is_null($can_request_payments)) {
            throw new \InvalidArgumentException('non-nullable can_request_payments cannot be null');
        }
        $this->container['can_request_payments'] = $can_request_payments;

        return $this;
    }

    /**
     * Gets can_perform_voucher_transactions
     *
     * @return bool|null
     */
    public function getCanPerformVoucherTransactions()
    {
        return $this->container['can_perform_voucher_transactions'];
    }

    /**
     * Sets can_perform_voucher_transactions
     *
     * @param bool|null $can_perform_voucher_transactions Can the permission to redeem / top-up vouchers and view voucher transactions be granted?
     *
     * @return self
     */
    public function setCanPerformVoucherTransactions($can_perform_voucher_transactions)
    {
        if (is_null($can_perform_voucher_transactions)) {
            throw new \InvalidArgumentException('non-nullable can_perform_voucher_transactions cannot be null');
        }
        $this->container['can_perform_voucher_transactions'] = $can_perform_voucher_transactions;

        return $this;
    }

    /**
     * Gets can_view_advertisements
     *
     * @return bool|null
     */
    public function getCanViewAdvertisements()
    {
        return $this->container['can_view_advertisements'];
    }

    /**
     * Sets can_view_advertisements
     *
     * @param bool|null $can_view_advertisements Can the permission to view advertisements be granted?
     *
     * @return self
     */
    public function setCanViewAdvertisements($can_view_advertisements)
    {
        if (is_null($can_view_advertisements)) {
            throw new \InvalidArgumentException('non-nullable can_view_advertisements cannot be null');
        }
        $this->container['can_view_advertisements'] = $can_view_advertisements;

        return $this;
    }

    /**
     * Gets can_manage_advertisements
     *
     * @return bool|null
     */
    public function getCanManageAdvertisements()
    {
        return $this->container['can_manage_advertisements'];
    }

    /**
     * Sets can_manage_advertisements
     *
     * @param bool|null $can_manage_advertisements Can the permission to manage advertisements be granted?
     *
     * @return self
     */
    public function setCanManageAdvertisements($can_manage_advertisements)
    {
        if (is_null($can_manage_advertisements)) {
            throw new \InvalidArgumentException('non-nullable can_manage_advertisements cannot be null');
        }
        $this->container['can_manage_advertisements'] = $can_manage_advertisements;

        return $this;
    }

    /**
     * Gets can_block_token
     *
     * @return bool|null
     */
    public function getCanBlockToken()
    {
        return $this->container['can_block_token'];
    }

    /**
     * Sets can_block_token
     *
     * @param bool|null $can_block_token Can the permission to block tokens (cards) be granted?
     *
     * @return self
     */
    public function setCanBlockToken($can_block_token)
    {
        if (is_null($can_block_token)) {
            throw new \InvalidArgumentException('non-nullable can_block_token cannot be null');
        }
        $this->container['can_block_token'] = $can_block_token;

        return $this;
    }

    /**
     * Gets can_cancel_token
     *
     * @return bool|null
     */
    public function getCanCancelToken()
    {
        return $this->container['can_cancel_token'];
    }

    /**
     * Sets can_cancel_token
     *
     * @param bool|null $can_cancel_token Can the permission to cancel tokens (cards) be granted?
     *
     * @return self
     */
    public function setCanCancelToken($can_cancel_token)
    {
        if (is_null($can_cancel_token)) {
            throw new \InvalidArgumentException('non-nullable can_cancel_token cannot be null');
        }
        $this->container['can_cancel_token'] = $can_cancel_token;

        return $this;
    }

    /**
     * Gets can_enable_token
     *
     * @return bool|null
     */
    public function getCanEnableToken()
    {
        return $this->container['can_enable_token'];
    }

    /**
     * Sets can_enable_token
     *
     * @param bool|null $can_enable_token Can the permission to enable tokens (cards) be granted?
     *
     * @return self
     */
    public function setCanEnableToken($can_enable_token)
    {
        if (is_null($can_enable_token)) {
            throw new \InvalidArgumentException('non-nullable can_enable_token cannot be null');
        }
        $this->container['can_enable_token'] = $can_enable_token;

        return $this;
    }

    /**
     * Gets can_unblock_token
     *
     * @return bool|null
     */
    public function getCanUnblockToken()
    {
        return $this->container['can_unblock_token'];
    }

    /**
     * Sets can_unblock_token
     *
     * @param bool|null $can_unblock_token Can the permission to unblock tokens (cards) be granted?
     *
     * @return self
     */
    public function setCanUnblockToken($can_unblock_token)
    {
        if (is_null($can_unblock_token)) {
            throw new \InvalidArgumentException('non-nullable can_unblock_token cannot be null');
        }
        $this->container['can_unblock_token'] = $can_unblock_token;

        return $this;
    }

    /**
     * Gets broker
     *
     * @return bool|null
     */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
     * Sets broker
     *
     * @param bool|null $broker Indicates whether the owner user is a broker. If so, can delegate brokering operations to operators.
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
     * Gets can_have_messages
     *
     * @return bool|null
     */
    public function getCanHaveMessages()
    {
        return $this->container['can_have_messages'];
    }

    /**
     * Sets can_have_messages
     *
     * @param bool|null $can_have_messages Can the permission over messages be granted?
     *
     * @return self
     */
    public function setCanHaveMessages($can_have_messages)
    {
        if (is_null($can_have_messages)) {
            throw new \InvalidArgumentException('non-nullable can_have_messages cannot be null');
        }
        $this->container['can_have_messages'] = $can_have_messages;

        return $this;
    }

    /**
     * Gets can_have_notifications
     *
     * @return bool|null
     */
    public function getCanHaveNotifications()
    {
        return $this->container['can_have_notifications'];
    }

    /**
     * Sets can_have_notifications
     *
     * @param bool|null $can_have_notifications Can the permission over notificationsto be granted?
     *
     * @return self
     */
    public function setCanHaveNotifications($can_have_notifications)
    {
        if (is_null($can_have_notifications)) {
            throw new \InvalidArgumentException('non-nullable can_have_notifications cannot be null');
        }
        $this->container['can_have_notifications'] = $can_have_notifications;

        return $this;
    }

    /**
     * Gets operations
     *
     * @return \OpenAPI\Client\Model\Operation[]|null
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param \OpenAPI\Client\Model\Operation[]|null $operations Custom operations that can be granted
     *
     * @return self
     */
    public function setOperations($operations)
    {
        if (is_null($operations)) {
            throw new \InvalidArgumentException('non-nullable operations cannot be null');
        }
        $this->container['operations'] = $operations;

        return $this;
    }

    /**
     * Gets record_types
     *
     * @return \OpenAPI\Client\Model\RecordType[]|null
     */
    public function getRecordTypes()
    {
        return $this->container['record_types'];
    }

    /**
     * Sets record_types
     *
     * @param \OpenAPI\Client\Model\RecordType[]|null $record_types Record types that can be granted
     *
     * @return self
     */
    public function setRecordTypes($record_types)
    {
        if (is_null($record_types)) {
            throw new \InvalidArgumentException('non-nullable record_types cannot be null');
        }
        $this->container['record_types'] = $record_types;

        return $this;
    }

    /**
     * Gets account_types
     *
     * @return \OpenAPI\Client\Model\AccountType[]|null
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param \OpenAPI\Client\Model\AccountType[]|null $account_types Account types details for the account settings
     *
     * @return self
     */
    public function setAccountTypes($account_types)
    {
        if (is_null($account_types)) {
            throw new \InvalidArgumentException('non-nullable account_types cannot be null');
        }
        $this->container['account_types'] = $account_types;

        return $this;
    }

    /**
     * Gets payment_types
     *
     * @return \OpenAPI\Client\Model\TransferTypeWithCurrency[]|null
     */
    public function getPaymentTypes()
    {
        return $this->container['payment_types'];
    }

    /**
     * Sets payment_types
     *
     * @param \OpenAPI\Client\Model\TransferTypeWithCurrency[]|null $payment_types Payment types details for the payment settings
     *
     * @return self
     */
    public function setPaymentTypes($payment_types)
    {
        if (is_null($payment_types)) {
            throw new \InvalidArgumentException('non-nullable payment_types cannot be null');
        }
        $this->container['payment_types'] = $payment_types;

        return $this;
    }

    /**
     * Gets top_up_enabled
     *
     * @return bool|null
     */
    public function getTopUpEnabled()
    {
        return $this->container['top_up_enabled'];
    }

    /**
     * Sets top_up_enabled
     *
     * @param bool|null $top_up_enabled Indicates whether there is a voucher configuration supporting top-up which is enabled for this user and visible for the authenticated user. This flag is not related to the top-up permission.
     *
     * @return self
     */
    public function setTopUpEnabled($top_up_enabled)
    {
        if (is_null($top_up_enabled)) {
            throw new \InvalidArgumentException('non-nullable top_up_enabled cannot be null');
        }
        $this->container['top_up_enabled'] = $top_up_enabled;

        return $this;
    }

    /**
     * Gets can_redeem_vouchers
     *
     * @return bool|null
     * @deprecated
     */
    public function getCanRedeemVouchers()
    {
        return $this->container['can_redeem_vouchers'];
    }

    /**
     * Sets can_redeem_vouchers
     *
     * @param bool|null $can_redeem_vouchers Use `canPerformVoucherTransactions` instead
     *
     * @return self
     * @deprecated
     */
    public function setCanRedeemVouchers($can_redeem_vouchers)
    {
        if (is_null($can_redeem_vouchers)) {
            throw new \InvalidArgumentException('non-nullable can_redeem_vouchers cannot be null');
        }
        $this->container['can_redeem_vouchers'] = $can_redeem_vouchers;

        return $this;
    }

    /**
     * Gets operator_group
     *
     * @return \OpenAPI\Client\Model\OperatorGroupDataForNewAllOfOperatorGroup|null
     */
    public function getOperatorGroup()
    {
        return $this->container['operator_group'];
    }

    /**
     * Sets operator_group
     *
     * @param \OpenAPI\Client\Model\OperatorGroupDataForNewAllOfOperatorGroup|null $operator_group operator_group
     *
     * @return self
     */
    public function setOperatorGroup($operator_group)
    {
        if (is_null($operator_group)) {
            throw new \InvalidArgumentException('non-nullable operator_group cannot be null');
        }
        $this->container['operator_group'] = $operator_group;

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


