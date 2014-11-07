#!/usr/bin/env php
<?php

use Phalcon\DI\FactoryDefault\CLI as DI;
use Phalcon\CLI\Console as ConsoleApp;
use Phalcon\CLI\Dispatcher;
use Phalcon\CLI\Router;
use Phalcon\Events\Manager as EventsManager;

define('APPLICATION_PATH', __DIR__.'/../src');

$eventsManager = new EventsManager();
$eventsManager->attach('loader', function($event, $loader, $path) {
    if ($event->getType() === 'pathFound') {
        if (Phar::running()) {
            require_once $path;
        }
    }
});

$loader = new \Phalcon\Loader();
$loader->setEventsManager($eventsManager);
$loader->registerDirs([
    APPLICATION_PATH.'/tasks',
]);
$loader->register();

$di = new DI();

$console = new ConsoleApp();
$console->setDI($di);

try {
    $console->handle();
}
catch (\Phalcon\Exception $e) {
    echo $e->getMessage();
    exit(255);
}

echo memory_get_peak_usage(true)."\n";
