<?php

namespace Test\LegacyToLambda\Greet;

include_once 'model/HelloWorld.php';

use LegacyToLambda\Model\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testItShouldSayHelloWorld(): void
    {
        $helloWorld = new HelloWorld();
        $this->assertSame('Hello World!!!!', $helloWorld->greet());
    }
}
