<?php

namespace Test\LegacyToLambda\Ui\Cli;

use LegacyToLambda\Ui\Cli\GreetCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class GreetScriptTest extends TestCase
{
    public function testItShouldRunGreetingScriptFromSymfonyConsole(): void
    {
        $command = new GreetCommand();
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $commandTester->assertCommandIsSuccessful();

        // the output of the command in the console
        $cliOutput = $commandTester->getDisplay();
        $this->assertSame('Hello World!!!!', $cliOutput);
    }
}
