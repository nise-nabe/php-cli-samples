#!/usr/bin/env php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use Aura\Cli\CliFactory;

$cli_factory = new CliFactory;
$context = $cli_factory->newContext($GLOBALS);
$stdio = $cli_factory->newStdio();

$stdio->outln("\nThis is the default task and the default action \n");
$stdio->outln(memory_get_peak_usage(true));
