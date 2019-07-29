<?php
use ConsoleConfigResolver\Factory\ConfigResolverFactory as CRF;
use LRL\Console\Command\HelloWorldCommand;
use LRL\Console\Command\DockerManager;
return [
    'LRL\Console' => [
        'commands' => [
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