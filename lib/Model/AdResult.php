<?php
/**
 * AdResult
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
 * AdResult Class Doc Comment
 *
 * @category Class
 * @description Contains data returned when searching for advertisements
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'image' => '\OpenAPI\Client\Model\AdAllOfImage',
        'kind' => '\OpenAPI\Client\Model\AdKind',
        'status' => '\OpenAPI\Client\Model\AdStatusEnum',
        'price' => 'float',
        'product_number' => 'string',
        'description' => 'string',
        'user' => '\OpenAPI\Client\Model\AdDetailedAllOfUser',
        'publication_period' => '\OpenAPI\Client\Model\DatePeriod',
        'stock_quantity' => 'float',
        'unlimited_stock' => 'bool',
        'max_allowed_in_cart' => 'float',
        'min_allowed_in_cart' => 'float',
        'promotional_price' => 'float',
        'address' => '\OpenAPI\Client\Model\AdResultAllOfAddress',
        'distance' => 'float',
        'categories' => 'string[]',
        'currency' => 'string',
        'editable' => 'bool',
        'can_add_to_cart' => 'bool',
        'favorite_for_viewer' => 'bool'
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
        'image' => null,
        'kind' => null,
        'status' => null,
        'price' => 'number',
        'product_number' => null,
        'description' => null,
        'user' => null,
        'publication_period' => null,
        'stock_quantity' => 'number',
        'unlimited_stock' => null,
        'max_allowed_in_cart' => 'number',
        'min_allowed_in_cart' => 'number',
        'promotional_price' => 'number',
        'address' => null,
        'distance' => 'double',
        'categories' => null,
        'currency' => null,
        'editable' => null,
        'can_add_to_cart' => null,
        'favorite_for_viewer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'image' => false,
        'kind' => false,
        'status' => false,
        'price' => false,
        'product_number' => false,
        'description' => false,
        'user' => false,
        'publication_period' => false,
        'stock_quantity' => false,
        'unlimited_stock' => false,
        'max_allowed_in_cart' => false,
        'min_allowed_in_cart' => false,
        'promotional_price' => false,
        'address' => false,
        'distance' => false,
        'categories' => false,
        'currency' => false,
        'editable' => false,
        'can_add_to_cart' => false,
        'favorite_for_viewer' => false
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
        'image' => 'image',
        'kind' => 'kind',
        'status' => 'status',
        'price' => 'price',
        'product_number' => 'productNumber',
        'description' => 'description',
        'user' => 'user',
        'publication_period' => 'publicationPeriod',
        'stock_quantity' => 'stockQuantity',
        'unlimited_stock' => 'unlimitedStock',
        'max_allowed_in_cart' => 'maxAllowedInCart',
        'min_allowed_in_cart' => 'minAllowedInCart',
        'promotional_price' => 'promotionalPrice',
        'address' => 'address',
        'distance' => 'distance',
        'categories' => 'categories',
        'currency' => 'currency',
        'editable' => 'editable',
        'can_add_to_cart' => 'canAddToCart',
        'favorite_for_viewer' => 'favoriteForViewer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'image' => 'setImage',
        'kind' => 'setKind',
        'status' => 'setStatus',
        'price' => 'setPrice',
        'product_number' => 'setProductNumber',
        'description' => 'setDescription',
        'user' => 'setUser',
        'publication_period' => 'setPublicationPeriod',
        'stock_quantity' => 'setStockQuantity',
        'unlimited_stock' => 'setUnlimitedStock',
        'max_allowed_in_cart' => 'setMaxAllowedInCart',
        'min_allowed_in_cart' => 'setMinAllowedInCart',
        'promotional_price' => 'setPromotionalPrice',
        'address' => 'setAddress',
        'distance' => 'setDistance',
        'categories' => 'setCategories',
        'currency' => 'setCurrency',
        'editable' => 'setEditable',
        'can_add_to_cart' => 'setCanAddToCart',
        'favorite_for_viewer' => 'setFavoriteForViewer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'image' => 'getImage',
        'kind' => 'getKind',
        'status' => 'getStatus',
        'price' => 'getPrice',
        'product_number' => 'getProductNumber',
        'description' => 'getDescription',
        'user' => 'getUser',
        'publication_period' => 'getPublicationPeriod',
        'stock_quantity' => 'getStockQuantity',
        'unlimited_stock' => 'getUnlimitedStock',
        'max_allowed_in_cart' => 'getMaxAllowedInCart',
        'min_allowed_in_cart' => 'getMinAllowedInCart',
        'promotional_price' => 'getPromotionalPrice',
        'address' => 'getAddress',
        'distance' => 'getDistance',
        'categories' => 'getCategories',
        'currency' => 'getCurrency',
        'editable' => 'getEditable',
        'can_add_to_cart' => 'getCanAddToCart',
        'favorite_for_viewer' => 'getFavoriteForViewer'
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
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('product_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('publication_period', $data ?? [], null);
        $this->setIfExists('stock_quantity', $data ?? [], null);
        $this->setIfExists('unlimited_stock', $data ?? [], null);
        $this->setIfExists('max_allowed_in_cart', $data ?? [], null);
        $this->setIfExists('min_allowed_in_cart', $data ?? [], null);
        $this->setIfExists('promotional_price', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('distance', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('editable', $data ?? [], null);
        $this->setIfExists('can_add_to_cart', $data ?? [], null);
        $this->setIfExists('favorite_for_viewer', $data ?? [], null);
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
     * Gets image
     *
     * @return \OpenAPI\Client\Model\AdAllOfImage|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\AdAllOfImage|null $image image
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
     * Gets kind
     *
     * @return \OpenAPI\Client\Model\AdKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \OpenAPI\Client\Model\AdKind|null $kind kind
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\AdStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\AdStatusEnum|null $status status
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
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price The regular price.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets product_number
     *
     * @return string|null
     */
    public function getProductNumber()
    {
        return $this->container['product_number'];
    }

    /**
     * Sets product_number
     *
     * @param string|null $product_number The product number according to the webshop settings.
     *
     * @return self
     */
    public function setProductNumber($product_number)
    {
        if (is_null($product_number)) {
            throw new \InvalidArgumentException('non-nullable product_number cannot be null');
        }
        $this->container['product_number'] = $product_number;

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
     * @param string|null $description The advertisement description content, formatted as HTML
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
     * Gets user
     *
     * @return \OpenAPI\Client\Model\AdDetailedAllOfUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\AdDetailedAllOfUser|null $user user
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
     * Gets publication_period
     *
     * @return \OpenAPI\Client\Model\DatePeriod|null
     */
    public function getPublicationPeriod()
    {
        return $this->container['publication_period'];
    }

    /**
     * Sets publication_period
     *
     * @param \OpenAPI\Client\Model\DatePeriod|null $publication_period publication_period
     *
     * @return self
     */
    public function setPublicationPeriod($publication_period)
    {
        if (is_null($publication_period)) {
            throw new \InvalidArgumentException('non-nullable publication_period cannot be null');
        }
        $this->container['publication_period'] = $publication_period;

        return $this;
    }

    /**
     * Gets stock_quantity
     *
     * @return float|null
     */
    public function getStockQuantity()
    {
        return $this->container['stock_quantity'];
    }

    /**
     * Sets stock_quantity
     *
     * @param float|null $stock_quantity The stock disponibility. Only if `unlimitedStock` is false and the  'Stock type' was not marked as 'Not available' (through the web  interface).
     *
     * @return self
     */
    public function setStockQuantity($stock_quantity)
    {
        if (is_null($stock_quantity)) {
            throw new \InvalidArgumentException('non-nullable stock_quantity cannot be null');
        }
        $this->container['stock_quantity'] = $stock_quantity;

        return $this;
    }

    /**
     * Gets unlimited_stock
     *
     * @return bool|null
     */
    public function getUnlimitedStock()
    {
        return $this->container['unlimited_stock'];
    }

    /**
     * Sets unlimited_stock
     *
     * @param bool|null $unlimited_stock If true then it means there is always disponibility of the webshop ad.
     *
     * @return self
     */
    public function setUnlimitedStock($unlimited_stock)
    {
        if (is_null($unlimited_stock)) {
            throw new \InvalidArgumentException('non-nullable unlimited_stock cannot be null');
        }
        $this->container['unlimited_stock'] = $unlimited_stock;

        return $this;
    }

    /**
     * Gets max_allowed_in_cart
     *
     * @return float|null
     */
    public function getMaxAllowedInCart()
    {
        return $this->container['max_allowed_in_cart'];
    }

    /**
     * Sets max_allowed_in_cart
     *
     * @param float|null $max_allowed_in_cart The maximum quantity that can be specified in the shopping cart.
     *
     * @return self
     */
    public function setMaxAllowedInCart($max_allowed_in_cart)
    {
        if (is_null($max_allowed_in_cart)) {
            throw new \InvalidArgumentException('non-nullable max_allowed_in_cart cannot be null');
        }
        $this->container['max_allowed_in_cart'] = $max_allowed_in_cart;

        return $this;
    }

    /**
     * Gets min_allowed_in_cart
     *
     * @return float|null
     */
    public function getMinAllowedInCart()
    {
        return $this->container['min_allowed_in_cart'];
    }

    /**
     * Sets min_allowed_in_cart
     *
     * @param float|null $min_allowed_in_cart The minimum quantity that can be specified in the shopping cart.
     *
     * @return self
     */
    public function setMinAllowedInCart($min_allowed_in_cart)
    {
        if (is_null($min_allowed_in_cart)) {
            throw new \InvalidArgumentException('non-nullable min_allowed_in_cart cannot be null');
        }
        $this->container['min_allowed_in_cart'] = $min_allowed_in_cart;

        return $this;
    }

    /**
     * Gets promotional_price
     *
     * @return float|null
     */
    public function getPromotionalPrice()
    {
        return $this->container['promotional_price'];
    }

    /**
     * Sets promotional_price
     *
     * @param float|null $promotional_price The promotional price, to be applied on the promotional period is active
     *
     * @return self
     */
    public function setPromotionalPrice($promotional_price)
    {
        if (is_null($promotional_price)) {
            throw new \InvalidArgumentException('non-nullable promotional_price cannot be null');
        }
        $this->container['promotional_price'] = $promotional_price;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\AdResultAllOfAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\AdResultAllOfAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return float|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float|null $distance Only returned when there is a base location to calculate the distance from. The unit (kilometers or miles) depends on configuration.
     *
     * @return self
     */
    public function setDistance($distance)
    {
        if (is_null($distance)) {
            throw new \InvalidArgumentException('non-nullable distance cannot be null');
        }
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Either internal name or id of categories this advertisement belongs to. In most cases an advertisement will have a single category, but this depends on the Cyclos configuration.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Either internal name or id of the advertisement's price currency
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
     * Gets editable
     *
     * @return bool|null
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool|null $editable Indicates if the advertisement can be edited according to the logged user's permissions and advertisement status.
     *
     * @return self
     */
    public function setEditable($editable)
    {
        if (is_null($editable)) {
            throw new \InvalidArgumentException('non-nullable editable cannot be null');
        }
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets can_add_to_cart
     *
     * @return bool|null
     */
    public function getCanAddToCart()
    {
        return $this->container['can_add_to_cart'];
    }

    /**
     * Sets can_add_to_cart
     *
     * @param bool|null $can_add_to_cart Indicates if the advertisement can be added to the cart.
     *
     * @return self
     */
    public function setCanAddToCart($can_add_to_cart)
    {
        if (is_null($can_add_to_cart)) {
            throw new \InvalidArgumentException('non-nullable can_add_to_cart cannot be null');
        }
        $this->container['can_add_to_cart'] = $can_add_to_cart;

        return $this;
    }

    /**
     * Gets favorite_for_viewer
     *
     * @return bool|null
     */
    public function getFavoriteForViewer()
    {
        return $this->container['favorite_for_viewer'];
    }

    /**
     * Sets favorite_for_viewer
     *
     * @param bool|null $favorite_for_viewer Indicates if the advertisement was already marked as favorite for the user viewing it. For administrators and guest this flag is always false.
     *
     * @return self
     */
    public function setFavoriteForViewer($favorite_for_viewer)
    {
        if (is_null($favorite_for_viewer)) {
            throw new \InvalidArgumentException('non-nullable favorite_for_viewer cannot be null');
        }
        $this->container['favorite_for_viewer'] = $favorite_for_viewer;

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


