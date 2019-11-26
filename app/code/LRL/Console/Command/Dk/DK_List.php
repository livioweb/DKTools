<?php
namespace LRL\Console\Command\Dk;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;

class DK_List extends Command
{
    
    protected static $defaultName = "DK - MANAGER";

    protected function configure()
    {
#$this->ask("asdas");
        $this
            ->setName('dk:list')
            ->setDescription('List All Containers in Up State, and access us by name')          
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $helper = $this->getHelper('question');

        $output->writeln('List UP Containes');
        passthru("docker ps --all --format \"table {{.ID}}\t{{.Names}}\"");   
        
        $question = new Question('Enter Container Name to Enter: ');
        // if the users inputs 'elsa ' it will not be trimmed and you will get 'elsa ' as value
        $container = $helper->ask($input, $output, $question);

        $output->writeln("container : ". $container);



    }
}