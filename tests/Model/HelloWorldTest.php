<?php

namespace Test\LegacyToLambda\Model;

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
