<?php

/**
 * Interface for Successful 2xx
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */
namespace Modulity\HttpCodes\Codes;

interface SuccessfulInterface
{
    /**
     * 200 OK
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.1
     */
    public const HTTP_OK = '200';

    /**
     * 201 Created
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.2
     */
    public const HTTP_CREATED = '201';

    /**
     * 202 Accepted
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.3
     */
    public const HTTP_ACCEPTED = '202';

    /**
     * 203 Non-Authoritative Information
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.4
     */
    public const HTTP_NON_AUTHORITATIVE_INFORMATION = '203';

    /**
     * 204 No Content
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.5
     */
    public const HTTP_NO_CONTENT = '204';

    /**
     * 205 Reset Content
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.6
     */
    public const HTTP_RESET_CONTENT = '205';

    /**
     * 206 Partial Content
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-4.1
     */
    public const HTTP_PARTIAL_CONTENT = '206';
}//end interface
