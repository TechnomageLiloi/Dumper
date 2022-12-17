<?php

namespace Liloi\Dumper\Domain;

use Liloi\Tools\Manager as DomainManager;

/**
 * @todo: add docs
 * @todo: add tests
 */
class Manager extends DomainManager
{
    public static function getTablePrefix(): string
    {
        return 'rune_';
    }
}