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

final class StatusCodeTest extends TestCase
{


    /**
     * Test IsValidHTTPStatusCode
     *
     * @covers Status::isValid
     * @return void
     */
    public function testCreateStaticInstance(): void
    {
        $instance = StatusCode::create((int) StatusCode::HTTP_INTERNAL_SERVER_ERROR);

        $this->assertInstanceOf(StatusCode::class, $instance);

    }


}
