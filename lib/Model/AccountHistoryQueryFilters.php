<?php
/**
 * AccountHistoryQueryFilters
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
 * AccountHistoryQueryFilters Class Doc Comment
 *
 * @category Class
 * @description Parameters for searching an account&#39;s history
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountHistoryQueryFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountHistoryQueryFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page' => 'int',
        'page_size' => 'int',
        'skip_total_count' => 'bool',
        'date_period' => '\DateTime[]',
        'transfer_filters' => 'string[]',
        'transfer_types' => 'string[]',
        'transaction_number' => 'string',
        'user' => 'string',
        'groups' => 'string[]',
        'by' => 'string',
        'brokers' => 'string[]',
        'channels' => 'string[]',
        'excluded_ids' => 'string[]',
        'access_clients' => 'string[]',
        'include_generated_by_access_client' => 'bool',
        'from_current_access_client' => 'bool',
        'amount_range' => 'float[]',
        'order_by' => '\OpenAPI\Client\Model\TransOrderByEnum',
        'custom_fields' => 'string[]',
        'charged_back' => 'bool',
        'statuses' => 'string[]',
        'kinds' => '\OpenAPI\Client\Model\TransferKind[]',
        'direction' => '\OpenAPI\Client\Model\TransferDirectionEnum',
        'description' => 'string'
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
        'date_period' => 'date-time',
        'transfer_filters' => null,
        'transfer_types' => null,
        'transaction_number' => null,
        'user' => null,
        'groups' => null,
        'by' => null,
        'brokers' => null,
        'channels' => null,
        'excluded_ids' => null,
        'access_clients' => null,
        'include_generated_by_access_client' => null,
        'from_current_access_client' => null,
        'amount_range' => 'number',
        'order_by' => null,
        'custom_fields' => null,
        'charged_back' => null,
        'statuses' => null,
        'kinds' => null,
        'direction' => null,
        'description' => null
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
        'date_period' => false,
        'transfer_filters' => false,
        'transfer_types' => false,
        'transaction_number' => false,
        'user' => false,
        'groups' => false,
        'by' => false,
        'brokers' => false,
        'channels' => false,
        'excluded_ids' => false,
        'access_clients' => false,
        'include_generated_by_access_client' => false,
        'from_current_access_client' => false,
        'amount_range' => false,
        'order_by' => false,
        'custom_fields' => false,
        'charged_back' => false,
        'statuses' => false,
        'kinds' => false,
        'direction' => false,
        'description' => false
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
        'date_period' => 'datePeriod',
        'transfer_filters' => 'transferFilters',
        'transfer_types' => 'transferTypes',
        'transaction_number' => 'transactionNumber',
        'user' => 'user',
        'groups' => 'groups',
        'by' => 'by',
        'brokers' => 'brokers',
        'channels' => 'channels',
        'excluded_ids' => 'excludedIds',
        'access_clients' => 'accessClients',
        'include_generated_by_access_client' => 'includeGeneratedByAccessClient',
        'from_current_access_client' => 'fromCurrentAccessClient',
        'amount_range' => 'amountRange',
        'order_by' => 'orderBy',
        'custom_fields' => 'customFields',
        'charged_back' => 'chargedBack',
        'statuses' => 'statuses',
        'kinds' => 'kinds',
        'direction' => 'direction',
        'description' => 'description'
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
        'date_period' => 'setDatePeriod',
        'transfer_filters' => 'setTransferFilters',
        'transfer_types' => 'setTransferTypes',
        'transaction_number' => 'setTransactionNumber',
        'user' => 'setUser',
        'groups' => 'setGroups',
        'by' => 'setBy',
        'brokers' => 'setBrokers',
        'channels' => 'setChannels',
        'excluded_ids' => 'setExcludedIds',
        'access_clients' => 'setAccessClients',
        'include_generated_by_access_client' => 'setIncludeGeneratedByAccessClient',
        'from_current_access_client' => 'setFromCurrentAccessClient',
        'amount_range' => 'setAmountRange',
        'order_by' => 'setOrderBy',
        'custom_fields' => 'setCustomFields',
        'charged_back' => 'setChargedBack',
        'statuses' => 'setStatuses',
        'kinds' => 'setKinds',
        'direction' => 'setDirection',
        'description' => 'setDescription'
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
        'date_period' => 'getDatePeriod',
        'transfer_filters' => 'getTransferFilters',
        'transfer_types' => 'getTransferTypes',
        'transaction_number' => 'getTransactionNumber',
        'user' => 'getUser',
        'groups' => 'getGroups',
        'by' => 'getBy',
        'brokers' => 'getBrokers',
        'channels' => 'getChannels',
        'excluded_ids' => 'getExcludedIds',
        'access_clients' => 'getAccessClients',
        'include_generated_by_access_client' => 'getIncludeGeneratedByAccessClient',
        'from_current_access_client' => 'getFromCurrentAccessClient',
        'amount_range' => 'getAmountRange',
        'order_by' => 'getOrderBy',
        'custom_fields' => 'getCustomFields',
        'charged_back' => 'getChargedBack',
        'statuses' => 'getStatuses',
        'kinds' => 'getKinds',
        'direction' => 'getDirection',
        'description' => 'getDescription'
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
        $this->setIfExists('date_period', $data ?? [], null);
        $this->setIfExists('transfer_filters', $data ?? [], null);
        $this->setIfExists('transfer_types', $data ?? [], null);
        $this->setIfExists('transaction_number', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('by', $data ?? [], null);
        $this->setIfExists('brokers', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('excluded_ids', $data ?? [], null);
        $this->setIfExists('access_clients', $data ?? [], null);
        $this->setIfExists('include_generated_by_access_client', $data ?? [], null);
        $this->setIfExists('from_current_access_client', $data ?? [], null);
        $this->setIfExists('amount_range', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('charged_back', $data ?? [], null);
        $this->setIfExists('statuses', $data ?? [], null);
        $this->setIfExists('kinds', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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
     * Gets date_period
     *
     * @return \DateTime[]|null
     */
    public function getDatePeriod()
    {
        return $this->container['date_period'];
    }

    /**
     * Sets date_period
     *
     * @param \DateTime[]|null $date_period The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
     *
     * @return self
     */
    public function setDatePeriod($date_period)
    {
        if (is_null($date_period)) {
            throw new \InvalidArgumentException('non-nullable date_period cannot be null');
        }
        $this->container['date_period'] = $date_period;

        return $this;
    }

    /**
     * Gets transfer_filters
     *
     * @return string[]|null
     */
    public function getTransferFilters()
    {
        return $this->container['transfer_filters'];
    }

    /**
     * Sets transfer_filters
     *
     * @param string[]|null $transfer_filters Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
     *
     * @return self
     */
    public function setTransferFilters($transfer_filters)
    {
        if (is_null($transfer_filters)) {
            throw new \InvalidArgumentException('non-nullable transfer_filters cannot be null');
        }
        $this->container['transfer_filters'] = $transfer_filters;

        return $this;
    }

    /**
     * Gets transfer_types
     *
     * @return string[]|null
     */
    public function getTransferTypes()
    {
        return $this->container['transfer_types'];
    }

    /**
     * Sets transfer_types
     *
     * @param string[]|null $transfer_types Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
     *
     * @return self
     */
    public function setTransferTypes($transfer_types)
    {
        if (is_null($transfer_types)) {
            throw new \InvalidArgumentException('non-nullable transfer_types cannot be null');
        }
        $this->container['transfer_types'] = $transfer_types;

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
     * @param string|null $transaction_number The transaction number of the matching transfer
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
     * @param string|null $user Reference a user that should have either received / performed the transfer.
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
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
     *
     * @return self
     */
    public function setGroups($groups)
    {
        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets by
     *
     * @return string|null
     */
    public function getBy()
    {
        return $this->container['by'];
    }

    /**
     * Sets by
     *
     * @param string|null $by Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
     *
     * @return self
     */
    public function setBy($by)
    {
        if (is_null($by)) {
            throw new \InvalidArgumentException('non-nullable by cannot be null');
        }
        $this->container['by'] = $by;

        return $this;
    }

    /**
     * Gets brokers
     *
     * @return string[]|null
     */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
     * Sets brokers
     *
     * @param string[]|null $brokers Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
     *
     * @return self
     */
    public function setBrokers($brokers)
    {
        if (is_null($brokers)) {
            throw new \InvalidArgumentException('non-nullable brokers cannot be null');
        }
        $this->container['brokers'] = $brokers;

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
     * @param string[]|null $channels Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
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
     * Gets excluded_ids
     *
     * @return string[]|null
     */
    public function getExcludedIds()
    {
        return $this->container['excluded_ids'];
    }

    /**
     * Sets excluded_ids
     *
     * @param string[]|null $excluded_ids List of transfers ids to be excluded from the result.
     *
     * @return self
     */
    public function setExcludedIds($excluded_ids)
    {
        if (is_null($excluded_ids)) {
            throw new \InvalidArgumentException('non-nullable excluded_ids cannot be null');
        }
        $this->container['excluded_ids'] = $excluded_ids;

        return $this;
    }

    /**
     * Gets access_clients
     *
     * @return string[]|null
     */
    public function getAccessClients()
    {
        return $this->container['access_clients'];
    }

    /**
     * Sets access_clients
     *
     * @param string[]|null $access_clients References to access clients (id or token) used to perform / receive the transfer.
     *
     * @return self
     */
    public function setAccessClients($access_clients)
    {
        if (is_null($access_clients)) {
            throw new \InvalidArgumentException('non-nullable access_clients cannot be null');
        }
        $this->container['access_clients'] = $access_clients;

        return $this;
    }

    /**
     * Gets include_generated_by_access_client
     *
     * @return bool|null
     */
    public function getIncludeGeneratedByAccessClient()
    {
        return $this->container['include_generated_by_access_client'];
    }

    /**
     * Sets include_generated_by_access_client
     *
     * @param bool|null $include_generated_by_access_client Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
     *
     * @return self
     */
    public function setIncludeGeneratedByAccessClient($include_generated_by_access_client)
    {
        if (is_null($include_generated_by_access_client)) {
            throw new \InvalidArgumentException('non-nullable include_generated_by_access_client cannot be null');
        }
        $this->container['include_generated_by_access_client'] = $include_generated_by_access_client;

        return $this;
    }

    /**
     * Gets from_current_access_client
     *
     * @return bool|null
     */
    public function getFromCurrentAccessClient()
    {
        return $this->container['from_current_access_client'];
    }

    /**
     * Sets from_current_access_client
     *
     * @param bool|null $from_current_access_client Flag indicating whether to include only transfers by the current access client.
     *
     * @return self
     */
    public function setFromCurrentAccessClient($from_current_access_client)
    {
        if (is_null($from_current_access_client)) {
            throw new \InvalidArgumentException('non-nullable from_current_access_client cannot be null');
        }
        $this->container['from_current_access_client'] = $from_current_access_client;

        return $this;
    }

    /**
     * Gets amount_range
     *
     * @return float[]|null
     */
    public function getAmountRange()
    {
        return $this->container['amount_range'];
    }

    /**
     * Sets amount_range
     *
     * @param float[]|null $amount_range The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
     *
     * @return self
     */
    public function setAmountRange($amount_range)
    {
        if (is_null($amount_range)) {
            throw new \InvalidArgumentException('non-nullable amount_range cannot be null');
        }
        $this->container['amount_range'] = $amount_range;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \OpenAPI\Client\Model\TransOrderByEnum|null
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \OpenAPI\Client\Model\TransOrderByEnum|null $order_by order_by
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return string[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param string[]|null $custom_fields Transaction custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, `customFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields=field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `customFields=rank:bronze|silver,documentDate:2000-01-01|2001-12-31` would match results whose custom field with internal name `rank` is either `bronze` or `silver`, and whose `documentDate` is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `customFields=documentDate:|2001-12-31`. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the  corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `customFields=dynamic:a|b|c`. However, it is also possible to perform a partial-match search using the dynamic value label. In this case a single value, prefixed or enclosed by single quotes should be used. For example: `customFields=dynamic:'business` or `customFields=dynamic:'business'`.
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
     * Gets charged_back
     *
     * @return bool|null
     */
    public function getChargedBack()
    {
        return $this->container['charged_back'];
    }

    /**
     * Sets charged_back
     *
     * @param bool|null $charged_back When set to either `true` will only return transfers that were charged-back. When set to `false`, will only return transfers that were not charged-back. When left blank will not filter by this creterion.
     *
     * @return self
     */
    public function setChargedBack($charged_back)
    {
        if (is_null($charged_back)) {
            throw new \InvalidArgumentException('non-nullable charged_back cannot be null');
        }
        $this->container['charged_back'] = $charged_back;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return string[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[]|null $statuses Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, `loan.open` would be a valid internal name.
     *
     * @return self
     */
    public function setStatuses($statuses)
    {
        if (is_null($statuses)) {
            throw new \InvalidArgumentException('non-nullable statuses cannot be null');
        }
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets kinds
     *
     * @return \OpenAPI\Client\Model\TransferKind[]|null
     */
    public function getKinds()
    {
        return $this->container['kinds'];
    }

    /**
     * Sets kinds
     *
     * @param \OpenAPI\Client\Model\TransferKind[]|null $kinds The kind of transfers to return
     *
     * @return self
     */
    public function setKinds($kinds)
    {
        if (is_null($kinds)) {
            throw new \InvalidArgumentException('non-nullable kinds cannot be null');
        }
        $this->container['kinds'] = $kinds;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \OpenAPI\Client\Model\TransferDirectionEnum|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \OpenAPI\Client\Model\TransferDirectionEnum|null $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            throw new \InvalidArgumentException('non-nullable direction cannot be null');
        }
        $this->container['direction'] = $direction;

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
     * @param string|null $description The description to search for.
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


