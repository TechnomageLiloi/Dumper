<?php

include_once dirname(__DIR__) . '/vendor/autoload.php';
include_once __DIR__ . '/Output.php';

use Liloi\Dumper\Config;
use Liloi\Dumper\Output;

Output::out('=-=-=-=-=-=-=-=-=-=-=-=-=-=');
Output::out(Config::NAME);
Output::out(Config::VERSION);
Output::out(Config::AUTHOR);
Output::out('=-=-=-=-=-=-=-=-=-=-=-=-=-=');