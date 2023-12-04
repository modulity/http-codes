<?php

/**
 * Interface for Client Error 4xx
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes\Codes;

interface ClientErrorInterface
{

    /**
     * 400 Bad Request
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.1
     */
    public const HTTP_BAD_REQUEST = '400';

    /**
     * 401 Unauthorized
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-3.1
     */
    public const HTTP_UNAUTHORIZED = '401';

    /**
     * 402 Payment Required
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.2
     */
    public const HTTP_PAYMENT_REQUIRED = '402';

    /**
     * 403 Forbidden
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.3
     */
    public const HTTP_FORBIDDEN = '403';

    /**
     * 404 Not Found
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.4
     */
    public const HTTP_NOT_FOUND = '404';

    /**
     * 405 Method Not Allowed
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.5
     */
    public const HTTP_METHOD_NOT_ALLOWED = '405';

    /**
     * 406 Not Acceptable
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.6
     */
    public const HTTP_NOT_ACCEPTABLE = '406';

    /**
     * 407 Proxy Authentication Required
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-3.2
     */
    public const HTTP_PROXY_AUTHENTICATION_REQUIRED = '407';

    /**
     * 408 Request Timeout
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.7
     */
    public const HTTP_REQUEST_TIMEOUT = '408';

    /**
     * 409 Conflict
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.8
     */
    public const HTTP_CONFLICT = '409';

    /**
     * 410 Gone
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.9
     */
    public const HTTP_GONE = '410';

    /**
     * 411 Length Required
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.10
     */
    public const HTTP_LENGTH_REQUIRED = '411';

    /**
     * 412 Precondition Failed
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-4.2
     */
    public const HTTP_PRECONDITION_FAILED = '412';

    /**
     * 413 Payload Too Large
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.11
     */
    public const HTTP_PAYLOAD_TOO_LARGE = '413';

    /**
     * 414 URI Too Long
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.12
     */
    public const HTTP_URI_TOO_LONG = '414';

    /**
     * 415 Unsupported Media Type
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.13
     */
    public const HTTP_UNSUPPORTED_MEDIA_TYPE = '415';

    /**
     * 416 Range Not Satisfiable
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-4.4
     */
    public const HTTP_RANGE_NOT_SATISFIABLE = '416';

    /**
     * 417 Expectation Failed
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.14
     */
    public const HTTP_EXPECTATION_FAILED = '417';

    /**
     * 426 Upgrade Required
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.15
     */
    public const HTTP_UPGRADE_REQUIRED = '426';
}//end interface
