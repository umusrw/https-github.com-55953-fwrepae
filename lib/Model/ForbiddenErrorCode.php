<?php
/**
 * ForbiddenErrorCode
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * ForbiddenErrorCode Class Doc Comment
 *
 * @category Class
 * @description Error codes for 403 Forbidden HTTP status. Possible values are: - &#x60;blockedByTotp&#x60;: The user was blocked for exceeding the TOTP attempts. - &#x60;devicePinRemoved&#x60;: The device pin was removed by exceeding the allowed attempts. - &#x60;disabledPassword&#x60;: The password being used was disabled. - &#x60;expiredPassword&#x60;: The password being used has expired. - &#x60;illegalAction&#x60;: Attempt to perform an action that is not allowed on this context. - &#x60;inaccessibleChannel&#x60;: This channel cannot be accessed by the user. - &#x60;inaccessibleGroup&#x60;: An administrator logging in another user which is not of the managed groups. Should be handled generically, in case more group-specific login retrictions are added to Cyclos. - &#x60;inaccessibleNetwork&#x60;: A restricted global administrator is trying to login to a network they can&#39;t access. - &#x60;inaccessiblePrincipal&#x60;: The used identification method (principal type) cannot be used in this channel. - &#x60;indefinitelyBlocked&#x60;: The password was indefinitely blocked by exceeding the allowed attempts. - &#x60;invalidDeviceActivationCode&#x60;: The device activation code was no valid. - &#x60;invalidDeviceConfirmation&#x60;: The device confirmation being used is invalid (normally as a confirmation password). - &#x60;invalidPassword&#x60;: The password being used is invalid (normally the confirmation password). - &#x60;invalidTotp&#x60;: A given TOTP is invalid. - &#x60;loginConfirmation&#x60;: The user needs to confirm the login before proceeding. - &#x60;operatorWithPendingAgreements&#x60;: The operator cannot access because his owner member has pending agreements. - &#x60;otpInvalidated&#x60;: The OTP was invalidated. - &#x60;pendingAgreements&#x60;: There is at least one agreement which needs to be accepted in order to access the system. - &#x60;permissionDenied&#x60;: The operation was denied because a required permission was not granted. - &#x60;resetPassword&#x60;: The password being used was manually reset. - &#x60;temporarilyBlocked&#x60;: The password was temporarily blocked by exceeding the allowed attempts.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForbiddenErrorCode
{
    /**
     * Possible values of this enum
     */
    public const BLOCKED_BY_TOTP = 'blockedByTotp';

    public const DEVICE_PIN_REMOVED = 'devicePinRemoved';

    public const DISABLED_PASSWORD = 'disabledPassword';

    public const EXPIRED_PASSWORD = 'expiredPassword';

    public const ILLEGAL_ACTION = 'illegalAction';

    public const INACCESSIBLE_CHANNEL = 'inaccessibleChannel';

    public const INACCESSIBLE_GROUP = 'inaccessibleGroup';

    public const INACCESSIBLE_NETWORK = 'inaccessibleNetwork';

    public const INACCESSIBLE_PRINCIPAL = 'inaccessiblePrincipal';

    public const INDEFINITELY_BLOCKED = 'indefinitelyBlocked';

    public const INVALID_DEVICE_ACTIVATION_CODE = 'invalidDeviceActivationCode';

    public const INVALID_DEVICE_CONFIRMATION = 'invalidDeviceConfirmation';

    public const INVALID_PASSWORD = 'invalidPassword';

    public const INVALID_TOTP = 'invalidTotp';

    public const LOGIN_CONFIRMATION = 'loginConfirmation';

    public const OPERATOR_WITH_PENDING_AGREEMENTS = 'operatorWithPendingAgreements';

    public const OTP_INVALIDATED = 'otpInvalidated';

    public const PENDING_AGREEMENTS = 'pendingAgreements';

    public const PERMISSION_DENIED = 'permissionDenied';

    public const RESET_PASSWORD = 'resetPassword';

    public const TEMPORARILY_BLOCKED = 'temporarilyBlocked';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BLOCKED_BY_TOTP,
            self::DEVICE_PIN_REMOVED,
            self::DISABLED_PASSWORD,
            self::EXPIRED_PASSWORD,
            self::ILLEGAL_ACTION,
            self::INACCESSIBLE_CHANNEL,
            self::INACCESSIBLE_GROUP,
            self::INACCESSIBLE_NETWORK,
            self::INACCESSIBLE_PRINCIPAL,
            self::INDEFINITELY_BLOCKED,
            self::INVALID_DEVICE_ACTIVATION_CODE,
            self::INVALID_DEVICE_CONFIRMATION,
            self::INVALID_PASSWORD,
            self::INVALID_TOTP,
            self::LOGIN_CONFIRMATION,
            self::OPERATOR_WITH_PENDING_AGREEMENTS,
            self::OTP_INVALIDATED,
            self::PENDING_AGREEMENTS,
            self::PERMISSION_DENIED,
            self::RESET_PASSWORD,
            self::TEMPORARILY_BLOCKED
        ];
    }
}


