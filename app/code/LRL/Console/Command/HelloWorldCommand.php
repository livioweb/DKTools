<?php
namespace LRL\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{
    protected static $defaultName = 'hello:world';

    protected function configure()
    {
        $this->setDescription('Outputs "Hello World"');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //var_dump($input);die;
        $output->writeln('Hello World');
    }
}