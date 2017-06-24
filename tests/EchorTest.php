<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EchorTest extends TestCase
{
    public function testEcho()
    {
    	$echor = new \Garam\Echor;

        $this->assertEquals(
            $echor->echo('test'),
            'test'
        );
    }
}