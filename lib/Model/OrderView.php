<?php
/**
 * OrderView
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
 * OrderView Class Doc Comment
 *
 * @category Class
 * @description Detailed information when viewing an order
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'creation_date' => '\DateTime',
        'currency' => '\OpenAPI\Client\Model\OrderResultAllOfCurrency',
        'number' => 'string',
        'total_price' => 'float',
        'image' => '\OpenAPI\Client\Model\OrderResultAllOfImage',
        'status' => '\OpenAPI\Client\Model\OrderStatusEnum',
        'buyer' => '\OpenAPI\Client\Model\OrderViewAllOfBuyer',
        'seller' => '\OpenAPI\Client\Model\OrderViewAllOfSeller',
        'delivery_address' => '\OpenAPI\Client\Model\SimpleAddress',
        'delivery_method' => '\OpenAPI\Client\Model\OrderDeliveryMethod',
        'payment_type' => '\OpenAPI\Client\Model\TransferType',
        'items' => '\OpenAPI\Client\Model\OrderItem[]',
        'remarks' => 'string',
        'sale' => 'bool',
        'can_accept' => 'bool',
        'can_reject' => 'bool',
        'can_set_delivery_information' => 'bool',
        'history' => '\OpenAPI\Client\Model\OrderLog[]',
        'export_formats' => '\OpenAPI\Client\Model\ExportFormat[]'
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
        'creation_date' => 'date-time',
        'currency' => null,
        'number' => null,
        'total_price' => 'number',
        'image' => null,
        'status' => null,
        'buyer' => null,
        'seller' => null,
        'delivery_address' => null,
        'delivery_method' => null,
        'payment_type' => null,
        'items' => null,
        'remarks' => null,
        'sale' => null,
        'can_accept' => null,
        'can_reject' => null,
        'can_set_delivery_information' => null,
        'history' => null,
        'export_formats' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'creation_date' => false,
        'currency' => false,
        'number' => false,
        'total_price' => false,
        'image' => false,
        'status' => false,
        'buyer' => false,
        'seller' => false,
        'delivery_address' => false,
        'delivery_method' => false,
        'payment_type' => false,
        'items' => false,
        'remarks' => false,
        'sale' => false,
        'can_accept' => false,
        'can_reject' => false,
        'can_set_delivery_information' => false,
        'history' => false,
        'export_formats' => false
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
        'creation_date' => 'creationDate',
        'currency' => 'currency',
        'number' => 'number',
        'total_price' => 'totalPrice',
        'image' => 'image',
        'status' => 'status',
        'buyer' => 'buyer',
        'seller' => 'seller',
        'delivery_address' => 'deliveryAddress',
        'delivery_method' => 'deliveryMethod',
        'payment_type' => 'paymentType',
        'items' => 'items',
        'remarks' => 'remarks',
        'sale' => 'sale',
        'can_accept' => 'canAccept',
        'can_reject' => 'canReject',
        'can_set_delivery_information' => 'canSetDeliveryInformation',
        'history' => 'history',
        'export_formats' => 'exportFormats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'currency' => 'setCurrency',
        'number' => 'setNumber',
        'total_price' => 'setTotalPrice',
        'image' => 'setImage',
        'status' => 'setStatus',
        'buyer' => 'setBuyer',
        'seller' => 'setSeller',
        'delivery_address' => 'setDeliveryAddress',
        'delivery_method' => 'setDeliveryMethod',
        'payment_type' => 'setPaymentType',
        'items' => 'setItems',
        'remarks' => 'setRemarks',
        'sale' => 'setSale',
        'can_accept' => 'setCanAccept',
        'can_reject' => 'setCanReject',
        'can_set_delivery_information' => 'setCanSetDeliveryInformation',
        'history' => 'setHistory',
        'export_formats' => 'setExportFormats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'currency' => 'getCurrency',
        'number' => 'getNumber',
        'total_price' => 'getTotalPrice',
        'image' => 'getImage',
        'status' => 'getStatus',
        'buyer' => 'getBuyer',
        'seller' => 'getSeller',
        'delivery_address' => 'getDeliveryAddress',
        'delivery_method' => 'getDeliveryMethod',
        'payment_type' => 'getPaymentType',
        'items' => 'getItems',
        'remarks' => 'getRemarks',
        'sale' => 'getSale',
        'can_accept' => 'getCanAccept',
        'can_reject' => 'getCanReject',
        'can_set_delivery_information' => 'getCanSetDeliveryInformation',
        'history' => 'getHistory',
        'export_formats' => 'getExportFormats'
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
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('total_price', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('delivery_address', $data ?? [], null);
        $this->setIfExists('delivery_method', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('sale', $data ?? [], null);
        $this->setIfExists('can_accept', $data ?? [], null);
        $this->setIfExists('can_reject', $data ?? [], null);
        $this->setIfExists('can_set_delivery_information', $data ?? [], null);
        $this->setIfExists('history', $data ?? [], null);
        $this->setIfExists('export_formats', $data ?? [], null);
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
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date The creation date corresponding to the date when the first item of  this order was added to the shopping cart.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\OrderResultAllOfCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\OrderResultAllOfCurrency|null $currency currency
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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The generated order number according to the webshop settings.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float|null $total_price The total price of the order, i.e the sum of the total price of all  of its `items` and the delivery method (if any).
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        if (is_null($total_price)) {
            throw new \InvalidArgumentException('non-nullable total_price cannot be null');
        }
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\OrderResultAllOfImage|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\OrderResultAllOfImage|null $image image
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\OrderStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\OrderStatusEnum|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\OrderViewAllOfBuyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\OrderViewAllOfBuyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \OpenAPI\Client\Model\OrderViewAllOfSeller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \OpenAPI\Client\Model\OrderViewAllOfSeller|null $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \OpenAPI\Client\Model\SimpleAddress|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \OpenAPI\Client\Model\SimpleAddress|null $delivery_address delivery_address
     *
     * @return self
     */
    public function setDeliveryAddress($delivery_address)
    {
        if (is_null($delivery_address)) {
            throw new \InvalidArgumentException('non-nullable delivery_address cannot be null');
        }
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets delivery_method
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->container['delivery_method'];
    }

    /**
     * Sets delivery_method
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryMethod|null $delivery_method delivery_method
     *
     * @return self
     */
    public function setDeliveryMethod($delivery_method)
    {
        if (is_null($delivery_method)) {
            throw new \InvalidArgumentException('non-nullable delivery_method cannot be null');
        }
        $this->container['delivery_method'] = $delivery_method;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return \OpenAPI\Client\Model\TransferType|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param \OpenAPI\Client\Model\TransferType|null $payment_type payment_type
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\OrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\OrderItem[]|null $items The order items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks The current order remarks (i.e those for check-out, accept or reject).
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        if (is_null($remarks)) {
            throw new \InvalidArgumentException('non-nullable remarks cannot be null');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets sale
     *
     * @return bool|null
     */
    public function getSale()
    {
        return $this->container['sale'];
    }

    /**
     * Sets sale
     *
     * @param bool|null $sale Is it a sale (initiated by the seller)?
     *
     * @return self
     */
    public function setSale($sale)
    {
        if (is_null($sale)) {
            throw new \InvalidArgumentException('non-nullable sale cannot be null');
        }
        $this->container['sale'] = $sale;

        return $this;
    }

    /**
     * Gets can_accept
     *
     * @return bool|null
     */
    public function getCanAccept()
    {
        return $this->container['can_accept'];
    }

    /**
     * Sets can_accept
     *
     * @param bool|null $can_accept An order can be accepted only for the following statuses:  - `draft`: only if the authenticated user is the seller meaning the seller can submit the sale to the buyer. - `pendingBuyer`: only if the authenticated user is the buyer - `pendingSeller`: only if the authenticated user is the seller and the order has a delivery method already set
     *
     * @return self
     */
    public function setCanAccept($can_accept)
    {
        if (is_null($can_accept)) {
            throw new \InvalidArgumentException('non-nullable can_accept cannot be null');
        }
        $this->container['can_accept'] = $can_accept;

        return $this;
    }

    /**
     * Gets can_reject
     *
     * @return bool|null
     */
    public function getCanReject()
    {
        return $this->container['can_reject'];
    }

    /**
     * Sets can_reject
     *
     * @param bool|null $can_reject An order can be rejected only for the following statuses:  - `pendingBuyer`: only if the authenticated user is the buyer or the seller - `pendingSeller`: only if the authenticated user is the seller
     *
     * @return self
     */
    public function setCanReject($can_reject)
    {
        if (is_null($can_reject)) {
            throw new \InvalidArgumentException('non-nullable can_reject cannot be null');
        }
        $this->container['can_reject'] = $can_reject;

        return $this;
    }

    /**
     * Gets can_set_delivery_information
     *
     * @return bool|null
     */
    public function getCanSetDeliveryInformation()
    {
        return $this->container['can_set_delivery_information'];
    }

    /**
     * Sets can_set_delivery_information
     *
     * @param bool|null $can_set_delivery_information Delivery information can be set only for the following statuses:  - `draft`: only if the authenticated user is the seller - `pendingSeller`: only if the authenticated user is the seller and a delivery method was not already set
     *
     * @return self
     */
    public function setCanSetDeliveryInformation($can_set_delivery_information)
    {
        if (is_null($can_set_delivery_information)) {
            throw new \InvalidArgumentException('non-nullable can_set_delivery_information cannot be null');
        }
        $this->container['can_set_delivery_information'] = $can_set_delivery_information;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \OpenAPI\Client\Model\OrderLog[]|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \OpenAPI\Client\Model\OrderLog[]|null $history Contains the history entries for all order status changes
     *
     * @return self
     */
    public function setHistory($history)
    {
        if (is_null($history)) {
            throw new \InvalidArgumentException('non-nullable history cannot be null');
        }
        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets export_formats
     *
     * @return \OpenAPI\Client\Model\ExportFormat[]|null
     */
    public function getExportFormats()
    {
        return $this->container['export_formats'];
    }

    /**
     * Sets export_formats
     *
     * @param \OpenAPI\Client\Model\ExportFormat[]|null $export_formats The formats which the ordercan be exported
     *
     * @return self
     */
    public function setExportFormats($export_formats)
    {
        if (is_null($export_formats)) {
            throw new \InvalidArgumentException('non-nullable export_formats cannot be null');
        }
        $this->container['export_formats'] = $export_formats;

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


