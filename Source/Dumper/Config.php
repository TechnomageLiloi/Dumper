<?php

namespace Liloi\Dumper;

/**
 * Config constants.
 * @package Liloi\Dumper
 */
class Config
{
    /**
     * Project name.
     */
    public const NAME = 'Dumper';

    /**
     * Dumper version.
     */
    public const VERSION = '0.0.0';

    /**
     * Dumper author.
     */
    public const AUTHOR = 'Anton Lilôi Moskalenko';

    /**
     * @todo Add test
     * @return string
     */
    public static function getDumperDirectory(): string
    {
        return str_replace('phar://', '', dirname(__DIR__, 2));
    }
}