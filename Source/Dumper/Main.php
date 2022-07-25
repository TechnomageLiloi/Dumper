<?php

include_once dirname(__DIR__) . '/vendor/autoload.php';

use Liloi\Dumper\Config;
use Liloi\Dumper\Output;
use Liloi\Dumper\Meta;
use Liloi\Dumper\Atom;

Output::out('=-=-=-=-=-=-=-=-=-=-=-=-=-=');
Output::out(Config::NAME);
Output::out(Config::VERSION);
Output::out(Config::AUTHOR);
Output::out('=-=-=-=-=-=-=-=-=-=-=-=-=-=');