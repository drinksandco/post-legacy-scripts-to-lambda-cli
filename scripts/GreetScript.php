<?php

use LegacyToLambda\Ui\Cli\GreetCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\BufferedOutput;

$application = new Application('echo', '1.0.0');
$output = new BufferedOutput();
$command = new GreetCommand();
$command->run(new ArgvInput([]), $output);

echo $output->fetch();
