<?php

/**
 * Interface for Redirection 3xx
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes\Codes;

interface RedirectionInterface
{
    /**
     * 300 Multiple Choices
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.1
     */
    public const HTTP_MULTIPLE_CHOICES = '300';

    /**
     * 301 Moved Permanently
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.2
     */
    public const HTTP_MOVED_PERMANENTLY = '301';

    /**
     * 302 Found
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.3
     */
    public const HTTP_FOUND = '302';

    /**
     * 303 See Other
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.4
     */
    public const HTTP_SEE_OTHER = '303';

    /**
     * 304 Not Modified
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-4.1
     */
    public const HTTP_NOT_MODIFIED = '304';

    /**
     * 305 Use Proxy
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.5
     */
    public const HTTP_USE_PROXY = '305';

    /**
     * 307 Temporary Redirect
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.7
     */
    public const HTTP_TEMPORARY_REDIRECT = '307';
}//end interface
