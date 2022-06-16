<?php

namespace Test\LegacyToLambda\Scripts;

use PHPUnit\Framework\TestCase;

class GreetScriptTest extends TestCase
{
    public function testItShouldRunGreetingScript(): void
    {
        ob_start();

        require 'scripts/GreetScript.php';

        $cliOutput = ob_get_clean();

        $this->assertSame('Hello World!!!!', $cliOutput);
    }
}