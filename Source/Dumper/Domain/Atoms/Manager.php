<?php

namespace Liloi\Dumper\Domain\Atoms;

use Liloi\Artifact\Engine\Domain\Manager as DomainManager;

/**
 * @todo: add docs
 * @todo: add tests
 */
class Manager extends DomainManager
{
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'dump_atoms';
    }
}