<?php

/**
 * Http Status Code Class
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

declare(strict_types=1);

namespace Modulity\HttpCodes;

use PHPUnit\Framework\TestCase;
use TypeError;

final class StatusTest extends TestCase
{


    /**
     * Test IsValidHTTPStatusCode
     *
     * @covers Status::isValid
     * @return void
     */
    public function testIsValidHTTPStatusCode(): void
    {
        $isValid = Status::isValid(500);

        $this->assertTrue($isValid);

    }


    /**
     * Test IsInvalidHTTPStatusCode
     *
     * @covers Status::isValid
     * @return void
     */
    public function testIsInvalidHTTPStatusCode(): void
    {
        $isValid = Status::isValid(800);

        $this->assertFalse($isValid);

    }


    /**
     * Test InvalidStringHTTPStatusCode
     *
     * @covers Status::isValid
     * @return void
     */
    public function testInvalidStringHTTPStatusCode(): void
    {
        $this->expectException(TypeError::class);

        Status::isValid('OK');

    }


    /**
     * Test GetValidDefaultHTTPStatusCodeObject
     *
     * @covers Status::__callStatic
     * @return void
     */
    public function testGetValidDefaultHTTPStatusCodeObject(): void
    {
        $accepted = Status::HTTP_ACCEPTED();

        $this->assertInstanceOf(StatusCode::class, $accepted);
        $this->assertSame(202, $accepted->getCode());
        $this->assertSame('Accepted', $accepted->getReasonPhrase());
    }


}
