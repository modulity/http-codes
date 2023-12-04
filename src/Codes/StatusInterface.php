<?php

/**
 * Http Status Code Class Interface
 *
 * @author hfisaquiel <hfisaquiel@github.com>
 *
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes\Codes;

use Modulity\HttpCodes\StatusCode;

interface StatusInterface
{

    public const HTTP_CODE_100 = InformationalInterface::HTTP_CONTINUE;
    public const HTTP_CODE_101 = InformationalInterface::HTTP_SWITCHING_PROTOCOLS;
    public const HTTP_CODE_200 = SuccessfulInterface::HTTP_OK;
    public const HTTP_CODE_201 = SuccessfulInterface::HTTP_CREATED;
    public const HTTP_CODE_202 = SuccessfulInterface::HTTP_ACCEPTED;
    public const HTTP_CODE_203 = SuccessfulInterface::HTTP_NON_AUTHORITATIVE_INFORMATION;
    public const HTTP_CODE_204 = SuccessfulInterface::HTTP_NO_CONTENT;
    public const HTTP_CODE_205 = SuccessfulInterface::HTTP_RESET_CONTENT;
    public const HTTP_CODE_206 = SuccessfulInterface::HTTP_PARTIAL_CONTENT;
    public const HTTP_CODE_300 = RedirectionInterface::HTTP_MULTIPLE_CHOICES;
    public const HTTP_CODE_301 = RedirectionInterface::HTTP_MOVED_PERMANENTLY;
    public const HTTP_CODE_302 = RedirectionInterface::HTTP_FOUND;
    public const HTTP_CODE_303 = RedirectionInterface::HTTP_SEE_OTHER;
    public const HTTP_CODE_304 = RedirectionInterface::HTTP_NOT_MODIFIED;
    public const HTTP_CODE_305 = RedirectionInterface::HTTP_USE_PROXY;
    public const HTTP_CODE_307 = RedirectionInterface::HTTP_TEMPORARY_REDIRECT;
    public const HTTP_CODE_400 = ClientErrorInterface::HTTP_BAD_REQUEST;
    public const HTTP_CODE_401 = ClientErrorInterface::HTTP_UNAUTHORIZED;
    public const HTTP_CODE_402 = ClientErrorInterface::HTTP_PAYMENT_REQUIRED;
    public const HTTP_CODE_403 = ClientErrorInterface::HTTP_FORBIDDEN;
    public const HTTP_CODE_404 = ClientErrorInterface::HTTP_NOT_FOUND;
    public const HTTP_CODE_405 = ClientErrorInterface::HTTP_METHOD_NOT_ALLOWED;
    public const HTTP_CODE_406 = ClientErrorInterface::HTTP_NOT_ACCEPTABLE;
    public const HTTP_CODE_407 = ClientErrorInterface::HTTP_PROXY_AUTHENTICATION_REQUIRED;
    public const HTTP_CODE_408 = ClientErrorInterface::HTTP_REQUEST_TIMEOUT;
    public const HTTP_CODE_409 = ClientErrorInterface::HTTP_CONFLICT;
    public const HTTP_CODE_410 = ClientErrorInterface::HTTP_GONE;
    public const HTTP_CODE_411 = ClientErrorInterface::HTTP_LENGTH_REQUIRED;
    public const HTTP_CODE_412 = ClientErrorInterface::HTTP_PRECONDITION_FAILED;
    public const HTTP_CODE_413 = ClientErrorInterface::HTTP_PAYLOAD_TOO_LARGE;
    public const HTTP_CODE_414 = ClientErrorInterface::HTTP_URI_TOO_LONG;
    public const HTTP_CODE_415 = ClientErrorInterface::HTTP_UNSUPPORTED_MEDIA_TYPE;
    public const HTTP_CODE_416 = ClientErrorInterface::HTTP_RANGE_NOT_SATISFIABLE;
    public const HTTP_CODE_417 = ClientErrorInterface::HTTP_EXPECTATION_FAILED;
    public const HTTP_CODE_426 = ClientErrorInterface::HTTP_UPGRADE_REQUIRED;
    public const HTTP_CODE_500 = ServerErrorInterface::HTTP_INTERNAL_SERVER_ERROR;
    public const HTTP_CODE_501 = ServerErrorInterface::HTTP_NOT_IMPLEMENTED;
    public const HTTP_CODE_502 = ServerErrorInterface::HTTP_BAD_GATEWAY;
    public const HTTP_CODE_503 = ServerErrorInterface::HTTP_SERVICE_UNAVAILABLE;
    public const HTTP_CODE_504 = ServerErrorInterface::HTTP_GATEWAY_TIMEOUT;
    public const HTTP_CODE_505 = ServerErrorInterface::HTTP_HTTP_VERSION_NOT_SUPPORTED;


    /**
     * Check if $code is a valid HTTP Status Code
     *
     * @param integer $code number pretending be a status code
     *
     * @return boolean
     */
    public static function isValid(int $code): bool;


    /**
     * Respond a valid StatusCode objetc
     *
     * @param string $method static method name
     * @param mixed  $args   arguments
     *
     * @return StatusCode filled object
     */
    public static function __callStatic($method, $args): StatusCode;


}
