#!/usr/bin/env php
<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/MainTask.php';

use Symfony\Component\Console\Application;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;


$console = new Application();

$dispatcher = new EventDispatcher();
$dispatcher->addListener(ConsoleEvents::TERMINATE, function (ConsoleTerminateEvent $event) {
    $event->getOutput()->writeln(memory_get_peak_usage(true));
});

$console->setDispatcher($dispatcher);
$console->add(new MainTask);
$console->run();
