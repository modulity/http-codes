<?php

/**
 * Http Status Code Class
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes;

use InvalidArgumentException;
use Modulity\HttpCodes\StatusCode;
use Modulity\HttpCodes\Codes\StatusInterface;

class Status implements StatusInterface
{


    /**
     * Check if $code is a valid HTTP Status Code
     *
     * @param integer $code number pretending be a status code
     *
     * @return boolean
     */
    public static function isValid(int $code): bool
    {
        return defined(self::class."::HTTP_CODE_".$code);
    }


    /**
     * Check if $reason is an of HTTP_<REASON> constant
     *
     * @param string $reason A constant declared in ./Codes/<Group>Interface
     *
     * @return boolean
     */
    public static function isValidReason(string $reason): bool
    {
        return defined(StatusCode::class."::".$reason);
    }


    /**
     * Return a valid StatusCode object
     *
     * @param string $method some of HTTP_<REASON>
     * @param mixed  $args   ununsed
     *
     * @return StatusCode
     */
    public static function __callStatic($method, $args): StatusCode
    {
        $isValidReason = self::isValidReason($method);

        if ($isValidReason === false) {
            throw new InvalidArgumentException('Invalid HTTP Code');
        }

        $code = constant(StatusCode::class.'::'.$method);
        return StatusCode::create($code);
    }


}
