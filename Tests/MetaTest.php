<?php

namespace Liloi\Dumper;

use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class MetaTest extends TestCase
{
    /**
     * Tests {@link Meta::getList()} exists.
     */
    public function testExist(): void
    {
        $this->assertTrue(method_exists('Liloi\Dumper\Meta', 'getList'));
    }

    /**
     * Tests {@link Meta::getList()} method.
     */
    public function testMethodResult(): void
    {
        $list = Meta::getList();
        $atom = reset($list); // @todo: $atom must be object also

        $this->assertEquals('Signum', $atom['title']);
        $this->assertEquals('My signum', $atom['description']);
        $this->assertEquals('file', $atom['type']); // @todo: add types as consts.
        $this->assertEquals('https://drive.google.com/uc?export=download&id=1vmPddaL8h9lYmBjXotK0f-iXAWgHKTSt', $atom['global']);
        $this->assertEquals('/Signum.png', $atom['local']);
    }
}