<?php

/**
 * Interface for Informational 1xx
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes\Codes;

interface InformationalInterface
{
    /**
     * 100 Continue
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.1
     */
    public const HTTP_CONTINUE = '100';

    /**
     * 101 Switching Protocols
     *
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.2
     */
    public const HTTP_SWITCHING_PROTOCOLS = '101';
}//end interface
