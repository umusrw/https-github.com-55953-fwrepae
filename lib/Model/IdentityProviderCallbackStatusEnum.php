<?php
/**
 * IdentityProviderCallbackStatusEnum
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
 * IdentityProviderCallbackStatusEnum Class Doc Comment
 *
 * @category Class
 * @description The status the result of a callback from an identity provider. Possible values are: - &#x60;denied&#x60;: The user has denied the request. Generally nothing should be done, as the popup will be automatically closed. - &#x60;error&#x60;: There was an error. The &#x60;errorMessage&#x60; property is likely to contain the error description, though it can be empty. If so, a generic error message should be displayed. - &#x60;linked&#x60;: The currently logged user was successfully linked to the provider. - &#x60;loginEmail&#x60;: Successful login. No user was previously linked to this provider account, but a user was matched by e-mail and automatically linked.  The &#x60;sessionToken&#x60; is returned. - &#x60;loginLink&#x60;: Successful login with a user was previously linked to the provider. - &#x60;loginNoEmail&#x60;: Similar to &#x60;loginNoMatch&#x60;, except that the identity provider hasn&#39;t returned / disclosed the user&#39;s e-mail address. - &#x60;loginNoMatch&#x60;: No matching user, either linked or by e-mail. If on the next login the &#x60;requestId&#x60; value is passed in, a link will be automatically created, so the next time the login works directly.  The &#x60;sessionToken&#x60; is returned. - &#x60;registrationData&#x60;: The profile data was read and the available data has been returned. - &#x60;registrationDone&#x60;: The user was directly registered and logged-in. The &#x60;sessionToken&#x60; is returned. - &#x60;wizard&#x60;: The wizard execution has transitioned to the next step, and the identity provider information was stored on the server.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdentityProviderCallbackStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const DENIED = 'denied';

    public const ERROR = 'error';

    public const LINKED = 'linked';

    public const LOGIN_EMAIL = 'loginEmail';

    public const LOGIN_LINK = 'loginLink';

    public const LOGIN_NO_EMAIL = 'loginNoEmail';

    public const LOGIN_NO_MATCH = 'loginNoMatch';

    public const REGISTRATION_DATA = 'registrationData';

    public const REGISTRATION_DONE = 'registrationDone';

    public const WIZARD = 'wizard';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DENIED,
            self::ERROR,
            self::LINKED,
            self::LOGIN_EMAIL,
            self::LOGIN_LINK,
            self::LOGIN_NO_EMAIL,
            self::LOGIN_NO_MATCH,
            self::REGISTRATION_DATA,
            self::REGISTRATION_DONE,
            self::WIZARD
        ];
    }
}


