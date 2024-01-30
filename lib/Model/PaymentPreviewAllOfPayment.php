<?php
/**
 * PaymentPreviewAllOfPayment
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
 * PaymentPreviewAllOfPayment Class Doc Comment
 *
 * @category Class
 * @description Depending on the configuration, some script might alter the payment object, for example, filling in custom fields. This object can be used to show the actual data to the user, and to be posted again to the &#x60;POST /{owner}/payments/&#x60; path.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentPreviewAllOfPayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentPreview_allOf_payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'description' => 'string',
        'currency' => 'string',
        'type' => 'string',
        'custom_values' => 'array<string,string>',
        'subject' => 'string',
        'from_name' => 'string',
        'to_name' => 'string',
        'installments_count' => 'int',
        'first_installment_date' => '\DateTime',
        'installments' => '\OpenAPI\Client\Model\PerformInstallment[]',
        'occurrences_count' => 'int',
        'first_occurrence_date' => '\DateTime',
        'occurrence_interval' => '\OpenAPI\Client\Model\PerformPaymentAllOfOccurrenceInterval',
        'nfc_challence' => 'string',
        'scheduling' => '\OpenAPI\Client\Model\PaymentSchedulingEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'number',
        'description' => null,
        'currency' => null,
        'type' => null,
        'custom_values' => null,
        'subject' => null,
        'from_name' => null,
        'to_name' => null,
        'installments_count' => null,
        'first_installment_date' => 'date-time',
        'installments' => null,
        'occurrences_count' => null,
        'first_occurrence_date' => 'date-time',
        'occurrence_interval' => null,
        'nfc_challence' => null,
        'scheduling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'description' => false,
        'currency' => false,
        'type' => false,
        'custom_values' => false,
        'subject' => false,
        'from_name' => false,
        'to_name' => false,
        'installments_count' => false,
        'first_installment_date' => false,
        'installments' => false,
        'occurrences_count' => false,
        'first_occurrence_date' => false,
        'occurrence_interval' => false,
        'nfc_challence' => false,
        'scheduling' => false
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
        'amount' => 'amount',
        'description' => 'description',
        'currency' => 'currency',
        'type' => 'type',
        'custom_values' => 'customValues',
        'subject' => 'subject',
        'from_name' => 'fromName',
        'to_name' => 'toName',
        'installments_count' => 'installmentsCount',
        'first_installment_date' => 'firstInstallmentDate',
        'installments' => 'installments',
        'occurrences_count' => 'occurrencesCount',
        'first_occurrence_date' => 'firstOccurrenceDate',
        'occurrence_interval' => 'occurrenceInterval',
        'nfc_challence' => 'nfcChallence',
        'scheduling' => 'scheduling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'type' => 'setType',
        'custom_values' => 'setCustomValues',
        'subject' => 'setSubject',
        'from_name' => 'setFromName',
        'to_name' => 'setToName',
        'installments_count' => 'setInstallmentsCount',
        'first_installment_date' => 'setFirstInstallmentDate',
        'installments' => 'setInstallments',
        'occurrences_count' => 'setOccurrencesCount',
        'first_occurrence_date' => 'setFirstOccurrenceDate',
        'occurrence_interval' => 'setOccurrenceInterval',
        'nfc_challence' => 'setNfcChallence',
        'scheduling' => 'setScheduling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'type' => 'getType',
        'custom_values' => 'getCustomValues',
        'subject' => 'getSubject',
        'from_name' => 'getFromName',
        'to_name' => 'getToName',
        'installments_count' => 'getInstallmentsCount',
        'first_installment_date' => 'getFirstInstallmentDate',
        'installments' => 'getInstallments',
        'occurrences_count' => 'getOccurrencesCount',
        'first_occurrence_date' => 'getFirstOccurrenceDate',
        'occurrence_interval' => 'getOccurrenceInterval',
        'nfc_challence' => 'getNfcChallence',
        'scheduling' => 'getScheduling'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('custom_values', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('to_name', $data ?? [], null);
        $this->setIfExists('installments_count', $data ?? [], null);
        $this->setIfExists('first_installment_date', $data ?? [], null);
        $this->setIfExists('installments', $data ?? [], null);
        $this->setIfExists('occurrences_count', $data ?? [], null);
        $this->setIfExists('first_occurrence_date', $data ?? [], null);
        $this->setIfExists('occurrence_interval', $data ?? [], null);
        $this->setIfExists('nfc_challence', $data ?? [], null);
        $this->setIfExists('scheduling', $data ?? [], null);
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

        if (!is_null($this->container['installments_count']) && ($this->container['installments_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'installments_count', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['occurrences_count']) && ($this->container['occurrences_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'occurrences_count', must be bigger than or equal to 1.";
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
     * @param float|null $amount The transaction amount
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
     * @param string|null $description The (optional) transaction description
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
     * @param string|null $currency The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type.
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The payment type, either the id or qualified internal name (in the form `fromAccountType.paymentType`). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned.
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
     * Gets custom_values
     *
     * @return array<string,string>|null
     */
    public function getCustomValues()
    {
        return $this->container['custom_values'];
    }

    /**
     * Sets custom_values
     *
     * @param array<string,string>|null $custom_values Holds the custom field values, keyed by field internal name or id. The format of the value depends on the custom field type.
     *
     * @return self
     */
    public function setCustomValues($custom_values)
    {
        if (is_null($custom_values)) {
            throw new \InvalidArgumentException('non-nullable custom_values cannot be null');
        }
        $this->container['custom_values'] = $custom_values;

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
     * @param string|null $subject The payment destination (in case of perform payment) or payer (in case of receive payment). Either a user principal (id, login name,  etc) or the word `system` when the payment is to be performed to / from a system account. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`.
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
     * @param string|null $from_name If the payment type allows setting a custom name for the origin account, is its name. If not allowed, is ignored. For example, integration with other systems could use 'Bank account [IBAN]'.
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
     * @param string|null $to_name If the payment type allows setting a custom name for the destination account, is its name. If not allowed, is ignored. For example, integration with other systems could use 'Bank account [IBAN]'.
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
     * Gets installments_count
     *
     * @return int|null
     */
    public function getInstallmentsCount()
    {
        return $this->container['installments_count'];
    }

    /**
     * Sets installments_count
     *
     * @param int|null $installments_count Represents the number of installments. When not specified, assumes a single installment. Used only if `scheduling` is `scheduled`. Can be used together with `installmentsCount` as an alternative to providing individual `installments` definitions.
     *
     * @return self
     */
    public function setInstallmentsCount($installments_count)
    {
        if (is_null($installments_count)) {
            throw new \InvalidArgumentException('non-nullable installments_count cannot be null');
        }

        if (($installments_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $installments_count when calling PaymentPreviewAllOfPayment., must be bigger than or equal to 1.');
        }

        $this->container['installments_count'] = $installments_count;

        return $this;
    }

    /**
     * Gets first_installment_date
     *
     * @return \DateTime|null
     */
    public function getFirstInstallmentDate()
    {
        return $this->container['first_installment_date'];
    }

    /**
     * Sets first_installment_date
     *
     * @param \DateTime|null $first_installment_date Represents the first installment date. When not specified, assumes the first installment is processed instantly. Used only if `scheduling` is `scheduled`. Can be used together with `installmentsCount` as an alternative to providing individual `installments` definitions.
     *
     * @return self
     */
    public function setFirstInstallmentDate($first_installment_date)
    {
        if (is_null($first_installment_date)) {
            throw new \InvalidArgumentException('non-nullable first_installment_date cannot be null');
        }
        $this->container['first_installment_date'] = $first_installment_date;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \OpenAPI\Client\Model\PerformInstallment[]|null
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \OpenAPI\Client\Model\PerformInstallment[]|null $installments An array containing individual installments definitions, allowing full control over generated installments. Used only if `scheduling` is `scheduled`.
     *
     * @return self
     */
    public function setInstallments($installments)
    {
        if (is_null($installments)) {
            throw new \InvalidArgumentException('non-nullable installments cannot be null');
        }
        $this->container['installments'] = $installments;

        return $this;
    }

    /**
     * Gets occurrences_count
     *
     * @return int|null
     */
    public function getOccurrencesCount()
    {
        return $this->container['occurrences_count'];
    }

    /**
     * Sets occurrences_count
     *
     * @param int|null $occurrences_count Represents the number of occurrences in a recurring payment. When not provided, the payment will be repeated until it is manually canceled. Used only if `scheduling` is `recurring`.
     *
     * @return self
     */
    public function setOccurrencesCount($occurrences_count)
    {
        if (is_null($occurrences_count)) {
            throw new \InvalidArgumentException('non-nullable occurrences_count cannot be null');
        }

        if (($occurrences_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $occurrences_count when calling PaymentPreviewAllOfPayment., must be bigger than or equal to 1.');
        }

        $this->container['occurrences_count'] = $occurrences_count;

        return $this;
    }

    /**
     * Gets first_occurrence_date
     *
     * @return \DateTime|null
     */
    public function getFirstOccurrenceDate()
    {
        return $this->container['first_occurrence_date'];
    }

    /**
     * Sets first_occurrence_date
     *
     * @param \DateTime|null $first_occurrence_date Represents the first occurrence date for a recurring payment. If none is given, it is assumed that the first occurrence is immediate. Used only if `scheduling` is `recurring`.
     *
     * @return self
     */
    public function setFirstOccurrenceDate($first_occurrence_date)
    {
        if (is_null($first_occurrence_date)) {
            throw new \InvalidArgumentException('non-nullable first_occurrence_date cannot be null');
        }
        $this->container['first_occurrence_date'] = $first_occurrence_date;

        return $this;
    }

    /**
     * Gets occurrence_interval
     *
     * @return \OpenAPI\Client\Model\PerformPaymentAllOfOccurrenceInterval|null
     */
    public function getOccurrenceInterval()
    {
        return $this->container['occurrence_interval'];
    }

    /**
     * Sets occurrence_interval
     *
     * @param \OpenAPI\Client\Model\PerformPaymentAllOfOccurrenceInterval|null $occurrence_interval occurrence_interval
     *
     * @return self
     */
    public function setOccurrenceInterval($occurrence_interval)
    {
        if (is_null($occurrence_interval)) {
            throw new \InvalidArgumentException('non-nullable occurrence_interval cannot be null');
        }
        $this->container['occurrence_interval'] = $occurrence_interval;

        return $this;
    }

    /**
     * Gets nfc_challence
     *
     * @return string|null
     */
    public function getNfcChallence()
    {
        return $this->container['nfc_challence'];
    }

    /**
     * Sets nfc_challence
     *
     * @param string|null $nfc_challence If this payment is performed with a NFC token, must be the challenge (as returned by the server) encrypted by the NFC chip, encoded in HEX form (2 hex chars per byte).
     *
     * @return self
     */
    public function setNfcChallence($nfc_challence)
    {
        if (is_null($nfc_challence)) {
            throw new \InvalidArgumentException('non-nullable nfc_challence cannot be null');
        }
        $this->container['nfc_challence'] = $nfc_challence;

        return $this;
    }

    /**
     * Gets scheduling
     *
     * @return \OpenAPI\Client\Model\PaymentSchedulingEnum|null
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     *
     * @param \OpenAPI\Client\Model\PaymentSchedulingEnum|null $scheduling scheduling
     *
     * @return self
     */
    public function setScheduling($scheduling)
    {
        if (is_null($scheduling)) {
            throw new \InvalidArgumentException('non-nullable scheduling cannot be null');
        }
        $this->container['scheduling'] = $scheduling;

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


