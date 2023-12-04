<?php

/**
 * Interface for Server Error 5xx
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes\Codes;

interface ServerErrorInterface
{
    /**
     * 500 Internal Server Error
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.1
     */
    public const HTTP_INTERNAL_SERVER_ERROR = '500';

    /**
     * 501 Not Implemented
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.2
     */
    public const HTTP_NOT_IMPLEMENTED = '501';

    /**
     * 502 Bad Gateway
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.3
     */
    public const HTTP_BAD_GATEWAY = '502';

    /**
     * 503 Service Unavailable
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.4
     */
    public const HTTP_SERVICE_UNAVAILABLE = '503';

    /**
     * 504 Gateway Timeout
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.5
     */
    public const HTTP_GATEWAY_TIMEOUT = '504';

    /**
     * 505 HTTP Version Not Supported
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.6
     */
    public const HTTP_HTTP_VERSION_NOT_SUPPORTED = '505';
}//end interface
