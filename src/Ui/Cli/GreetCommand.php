<?php

namespace LegacyToLambda\Ui\Cli;

use LegacyToLambda\Model\HelloWorld;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends Command
{
    private HelloWorld $service;

    public function __construct()
    {
        parent::__construct();
        $this->service = new HelloWorld();
    }

    protected function configure()
    {
        $this->setName('greet');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->write($this->service->greet());

        return Command::SUCCESS;
    }
}
