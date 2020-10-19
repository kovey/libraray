<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2020-10-19 16:42:47
 *
 */
namespace Kovey\Library\Exception;

use PHPUnit\Framework\TestCase;

class BusiExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(BusiException::class);
        $e = new BusiException();
        $this->assertInstanceOf(KoveyException::class, $e);
        throw $e;
    }
}
