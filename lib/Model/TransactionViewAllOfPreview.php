<?php
/**
 * TransactionViewAllOfPreview
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
 * TransactionViewAllOfPreview Class Doc Comment
 *
 * @category Class
 * @description Only returned if the &#x60;kind&#x60; is &#x60;ticket&#x60; and the ticket can be accepted. Is the payment preview if accepting the ticket. The preview will never contain a confirmation password input, because this object already contains it on the &#x60;confirmationPasswordInput&#x60; property, neither a payment to be sent back, as this payment is supposed to be confirmed by accepting the ticket. Also, the preview&#39;s currency is never sent, as it is the same one of the ticket.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionViewAllOfPreview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionView_allOf_preview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmation_message' => 'string',
        'confirmation_password_input' => '\OpenAPI\Client\Model\PasswordInput',
        'payment_type' => '\OpenAPI\Client\Model\TransferType',
        'currency' => '\OpenAPI\Client\Model\Currency',
        'from_account' => '\OpenAPI\Client\Model\AccountWithOwner',
        'from_operator' => '\OpenAPI\Client\Model\User',
        'total_amount' => 'float',
        'custom_values' => '\OpenAPI\Client\Model\CustomFieldValue[]',
        'pending_authorization' => 'bool',
        'to_account' => '\OpenAPI\Client\Model\AccountWithOwner',
        'to_operator' => '\OpenAPI\Client\Model\InternalTransactionPreviewAllOfToOperator',
        'main_amount' => 'float',
        'fees' => '\OpenAPI\Client\Model\TransferFeePreview[]',
        'installments' => '\OpenAPI\Client\Model\InstallmentPreview[]',
        'payment' => '\OpenAPI\Client\Model\PaymentPreviewAllOfPayment',
        'a_rate' => 'float',
        'd_rate' => 'float',
        'previous_d_rate' => 'float',
        'transfer_d_rate' => 'float',
        'skip_confirmation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmation_message' => null,
        'confirmation_password_input' => null,
        'payment_type' => null,
        'currency' => null,
        'from_account' => null,
        'from_operator' => null,
        'total_amount' => 'number',
        'custom_values' => null,
        'pending_authorization' => null,
        'to_account' => null,
        'to_operator' => null,
        'main_amount' => 'number',
        'fees' => null,
        'installments' => null,
        'payment' => null,
        'a_rate' => 'number',
        'd_rate' => 'number',
        'previous_d_rate' => 'number',
        'transfer_d_rate' => 'number',
        'skip_confirmation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'confirmation_message' => false,
        'confirmation_password_input' => false,
        'payment_type' => false,
        'currency' => false,
        'from_account' => false,
        'from_operator' => false,
        'total_amount' => false,
        'custom_values' => false,
        'pending_authorization' => false,
        'to_account' => false,
        'to_operator' => false,
        'main_amount' => false,
        'fees' => false,
        'installments' => false,
        'payment' => false,
        'a_rate' => false,
        'd_rate' => false,
        'previous_d_rate' => false,
        'transfer_d_rate' => false,
        'skip_confirmation' => false
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
        'confirmation_message' => 'confirmationMessage',
        'confirmation_password_input' => 'confirmationPasswordInput',
        'payment_type' => 'paymentType',
        'currency' => 'currency',
        'from_account' => 'fromAccount',
        'from_operator' => 'fromOperator',
        'total_amount' => 'totalAmount',
        'custom_values' => 'customValues',
        'pending_authorization' => 'pendingAuthorization',
        'to_account' => 'toAccount',
        'to_operator' => 'toOperator',
        'main_amount' => 'mainAmount',
        'fees' => 'fees',
        'installments' => 'installments',
        'payment' => 'payment',
        'a_rate' => 'ARate',
        'd_rate' => 'DRate',
        'previous_d_rate' => 'previousDRate',
        'transfer_d_rate' => 'transferDRate',
        'skip_confirmation' => 'skipConfirmation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmation_message' => 'setConfirmationMessage',
        'confirmation_password_input' => 'setConfirmationPasswordInput',
        'payment_type' => 'setPaymentType',
        'currency' => 'setCurrency',
        'from_account' => 'setFromAccount',
        'from_operator' => 'setFromOperator',
        'total_amount' => 'setTotalAmount',
        'custom_values' => 'setCustomValues',
        'pending_authorization' => 'setPendingAuthorization',
        'to_account' => 'setToAccount',
        'to_operator' => 'setToOperator',
        'main_amount' => 'setMainAmount',
        'fees' => 'setFees',
        'installments' => 'setInstallments',
        'payment' => 'setPayment',
        'a_rate' => 'setARate',
        'd_rate' => 'setDRate',
        'previous_d_rate' => 'setPreviousDRate',
        'transfer_d_rate' => 'setTransferDRate',
        'skip_confirmation' => 'setSkipConfirmation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmation_message' => 'getConfirmationMessage',
        'confirmation_password_input' => 'getConfirmationPasswordInput',
        'payment_type' => 'getPaymentType',
        'currency' => 'getCurrency',
        'from_account' => 'getFromAccount',
        'from_operator' => 'getFromOperator',
        'total_amount' => 'getTotalAmount',
        'custom_values' => 'getCustomValues',
        'pending_authorization' => 'getPendingAuthorization',
        'to_account' => 'getToAccount',
        'to_operator' => 'getToOperator',
        'main_amount' => 'getMainAmount',
        'fees' => 'getFees',
        'installments' => 'getInstallments',
        'payment' => 'getPayment',
        'a_rate' => 'getARate',
        'd_rate' => 'getDRate',
        'previous_d_rate' => 'getPreviousDRate',
        'transfer_d_rate' => 'getTransferDRate',
        'skip_confirmation' => 'getSkipConfirmation'
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
        $this->setIfExists('confirmation_message', $data ?? [], null);
        $this->setIfExists('confirmation_password_input', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('from_account', $data ?? [], null);
        $this->setIfExists('from_operator', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('custom_values', $data ?? [], null);
        $this->setIfExists('pending_authorization', $data ?? [], null);
        $this->setIfExists('to_account', $data ?? [], null);
        $this->setIfExists('to_operator', $data ?? [], null);
        $this->setIfExists('main_amount', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('installments', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('a_rate', $data ?? [], null);
        $this->setIfExists('d_rate', $data ?? [], null);
        $this->setIfExists('previous_d_rate', $data ?? [], null);
        $this->setIfExists('transfer_d_rate', $data ?? [], null);
        $this->setIfExists('skip_confirmation', $data ?? [], null);
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
     * Gets confirmation_message
     *
     * @return string|null
     */
    public function getConfirmationMessage()
    {
        return $this->container['confirmation_message'];
    }

    /**
     * Sets confirmation_message
     *
     * @param string|null $confirmation_message If configured in the payment type, is a message to be shown to the user before confirming the transaction
     *
     * @return self
     */
    public function setConfirmationMessage($confirmation_message)
    {
        if (is_null($confirmation_message)) {
            throw new \InvalidArgumentException('non-nullable confirmation_message cannot be null');
        }
        $this->container['confirmation_message'] = $confirmation_message;

        return $this;
    }

    /**
     * Gets confirmation_password_input
     *
     * @return \OpenAPI\Client\Model\PasswordInput|null
     */
    public function getConfirmationPasswordInput()
    {
        return $this->container['confirmation_password_input'];
    }

    /**
     * Sets confirmation_password_input
     *
     * @param \OpenAPI\Client\Model\PasswordInput|null $confirmation_password_input confirmation_password_input
     *
     * @return self
     */
    public function setConfirmationPasswordInput($confirmation_password_input)
    {
        if (is_null($confirmation_password_input)) {
            throw new \InvalidArgumentException('non-nullable confirmation_password_input cannot be null');
        }
        $this->container['confirmation_password_input'] = $confirmation_password_input;

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
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\Currency|null $currency currency
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
     * Gets from_account
     *
     * @return \OpenAPI\Client\Model\AccountWithOwner|null
     */
    public function getFromAccount()
    {
        return $this->container['from_account'];
    }

    /**
     * Sets from_account
     *
     * @param \OpenAPI\Client\Model\AccountWithOwner|null $from_account from_account
     *
     * @return self
     */
    public function setFromAccount($from_account)
    {
        if (is_null($from_account)) {
            throw new \InvalidArgumentException('non-nullable from_account cannot be null');
        }
        $this->container['from_account'] = $from_account;

        return $this;
    }

    /**
     * Gets from_operator
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getFromOperator()
    {
        return $this->container['from_operator'];
    }

    /**
     * Sets from_operator
     *
     * @param \OpenAPI\Client\Model\User|null $from_operator from_operator
     *
     * @return self
     */
    public function setFromOperator($from_operator)
    {
        if (is_null($from_operator)) {
            throw new \InvalidArgumentException('non-nullable from_operator cannot be null');
        }
        $this->container['from_operator'] = $from_operator;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount The final amount charged to the payer including fees.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets custom_values
     *
     * @return \OpenAPI\Client\Model\CustomFieldValue[]|null
     */
    public function getCustomValues()
    {
        return $this->container['custom_values'];
    }

    /**
     * Sets custom_values
     *
     * @param \OpenAPI\Client\Model\CustomFieldValue[]|null $custom_values The list of custom field values, in a detailed view
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
     * Gets pending_authorization
     *
     * @return bool|null
     */
    public function getPendingAuthorization()
    {
        return $this->container['pending_authorization'];
    }

    /**
     * Sets pending_authorization
     *
     * @param bool|null $pending_authorization Indicates whether the transaction would be initially pending authorization in order to be processed
     *
     * @return self
     */
    public function setPendingAuthorization($pending_authorization)
    {
        if (is_null($pending_authorization)) {
            throw new \InvalidArgumentException('non-nullable pending_authorization cannot be null');
        }
        $this->container['pending_authorization'] = $pending_authorization;

        return $this;
    }

    /**
     * Gets to_account
     *
     * @return \OpenAPI\Client\Model\AccountWithOwner|null
     */
    public function getToAccount()
    {
        return $this->container['to_account'];
    }

    /**
     * Sets to_account
     *
     * @param \OpenAPI\Client\Model\AccountWithOwner|null $to_account to_account
     *
     * @return self
     */
    public function setToAccount($to_account)
    {
        if (is_null($to_account)) {
            throw new \InvalidArgumentException('non-nullable to_account cannot be null');
        }
        $this->container['to_account'] = $to_account;

        return $this;
    }

    /**
     * Gets to_operator
     *
     * @return \OpenAPI\Client\Model\InternalTransactionPreviewAllOfToOperator|null
     */
    public function getToOperator()
    {
        return $this->container['to_operator'];
    }

    /**
     * Sets to_operator
     *
     * @param \OpenAPI\Client\Model\InternalTransactionPreviewAllOfToOperator|null $to_operator to_operator
     *
     * @return self
     */
    public function setToOperator($to_operator)
    {
        if (is_null($to_operator)) {
            throw new \InvalidArgumentException('non-nullable to_operator cannot be null');
        }
        $this->container['to_operator'] = $to_operator;

        return $this;
    }

    /**
     * Gets main_amount
     *
     * @return float|null
     */
    public function getMainAmount()
    {
        return $this->container['main_amount'];
    }

    /**
     * Sets main_amount
     *
     * @param float|null $main_amount This reflects the new transaction amount. Depending on the configured fees, it could happen that the fee amount is deducted from transaction amount. If no fees deduct, it will be the same as transaction amount.  E.g: payment from A to B by 100 units with two fees: 10 units deducted from payment amount and other of 15 not deducted. Then the `totalAmount` will be 115, 90 for the `mainAmount`, 10 for the first fee and 15 for  the other fee.
     *
     * @return self
     */
    public function setMainAmount($main_amount)
    {
        if (is_null($main_amount)) {
            throw new \InvalidArgumentException('non-nullable main_amount cannot be null');
        }
        $this->container['main_amount'] = $main_amount;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \OpenAPI\Client\Model\TransferFeePreview[]|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \OpenAPI\Client\Model\TransferFeePreview[]|null $fees Only returned for direct payments. Contains the fees that would be paid by the payer if the payment is confirmed.
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \OpenAPI\Client\Model\InstallmentPreview[]|null
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \OpenAPI\Client\Model\InstallmentPreview[]|null $installments Only returned for scheduled payments. Contains the previews of each installment, if the payment is confirmed.
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
     * Gets payment
     *
     * @return \OpenAPI\Client\Model\PaymentPreviewAllOfPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \OpenAPI\Client\Model\PaymentPreviewAllOfPayment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets a_rate
     *
     * @return float|null
     */
    public function getARate()
    {
        return $this->container['a_rate'];
    }

    /**
     * Sets a_rate
     *
     * @param float|null $a_rate The balance aging counter used for this payment
     *
     * @return self
     */
    public function setARate($a_rate)
    {
        if (is_null($a_rate)) {
            throw new \InvalidArgumentException('non-nullable a_rate cannot be null');
        }
        $this->container['a_rate'] = $a_rate;

        return $this;
    }

    /**
     * Gets d_rate
     *
     * @return float|null
     */
    public function getDRate()
    {
        return $this->container['d_rate'];
    }

    /**
     * Sets d_rate
     *
     * @param float|null $d_rate The balance maturity used for this payment
     *
     * @return self
     */
    public function setDRate($d_rate)
    {
        if (is_null($d_rate)) {
            throw new \InvalidArgumentException('non-nullable d_rate cannot be null');
        }
        $this->container['d_rate'] = $d_rate;

        return $this;
    }

    /**
     * Gets previous_d_rate
     *
     * @return float|null
     */
    public function getPreviousDRate()
    {
        return $this->container['previous_d_rate'];
    }

    /**
     * Sets previous_d_rate
     *
     * @param float|null $previous_d_rate The number of days until the present balance reaches its maturity
     *
     * @return self
     */
    public function setPreviousDRate($previous_d_rate)
    {
        if (is_null($previous_d_rate)) {
            throw new \InvalidArgumentException('non-nullable previous_d_rate cannot be null');
        }
        $this->container['previous_d_rate'] = $previous_d_rate;

        return $this;
    }

    /**
     * Gets transfer_d_rate
     *
     * @return float|null
     */
    public function getTransferDRate()
    {
        return $this->container['transfer_d_rate'];
    }

    /**
     * Sets transfer_d_rate
     *
     * @param float|null $transfer_d_rate The maturity used for this payment
     *
     * @return self
     */
    public function setTransferDRate($transfer_d_rate)
    {
        if (is_null($transfer_d_rate)) {
            throw new \InvalidArgumentException('non-nullable transfer_d_rate cannot be null');
        }
        $this->container['transfer_d_rate'] = $transfer_d_rate;

        return $this;
    }

    /**
     * Gets skip_confirmation
     *
     * @return bool|null
     */
    public function getSkipConfirmation()
    {
        return $this->container['skip_confirmation'];
    }

    /**
     * Sets skip_confirmation
     *
     * @param bool|null $skip_confirmation True if the payment should be performed directly without showing the preview. If there is a `confirmationPasswordInput` defined then this flag will be false regardless the setting in the transfer type.
     *
     * @return self
     */
    public function setSkipConfirmation($skip_confirmation)
    {
        if (is_null($skip_confirmation)) {
            throw new \InvalidArgumentException('non-nullable skip_confirmation cannot be null');
        }
        $this->container['skip_confirmation'] = $skip_confirmation;

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


