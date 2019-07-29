<?php
namespace LRL\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

use Symfony\Component\Console\Input\InputArgument;

class DockerManager extends Command
{
    protected static $defaultName = "DK - MANAGER";

    protected function configure()
    {
        $this
            ->setName('DockerManger:dk')
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            )
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $text = 'Hi '.$input->getArgument('name');
        $oi = $input->getOption('yell');

        var_dump($oi);die;

        $output->writeln($text.'!');

        #var_dump($input);;
        #var_dump($output);die;
        $output->writeln('Hello World');
        // green text
        $output->writeln('<info>foo</info>');

// yellow text
        $output->writeln('<comment>foo</comment>');

// black text on a cyan background
        $output->writeln('<question>foo</question>');

// white text on a red background
        $output->writeln('<error>foo</error>');
    }
}