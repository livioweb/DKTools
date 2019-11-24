<?php
use ConsoleConfigResolver\Factory\ConfigResolverFactory as CRF;
use LRL\Console\Command\HelloWorldCommand;
use LRL\Console\Command\DockerManager;
use LRL\Console\Command\Dk\DK_List;
use LRL\Console\Command\Dk\DK_02;

return [
    'LRL\Console' => [
        'commands' => [
            DK_List::class,
            DK_02::class,
            HelloWorldCommand::class,
            DockerManager::class
            #MyConsoleCommandClass::class
        ]
    ],
    'dependencies' => [
        'factories' => [
            'LRL\Console' => CRF::class
        ]
    ]
];