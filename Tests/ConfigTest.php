<?php

namespace Liloi\Dumper;

use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class ConfigTest extends TestCase
{
    /**
     * Tests constants exists.
     */
    public function testExist(): void
    {
        $this->assertTrue(defined('Liloi\Dumper\Config::NAME'));
        $this->assertTrue(defined('Liloi\Dumper\Config::VERSION'));
        $this->assertTrue(defined('Liloi\Dumper\Config::AUTHOR'));
    }
}