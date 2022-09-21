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
        $atom = reset($list);

        $this->assertEquals('Signum', $atom->getTitle());
        $this->assertEquals('My signum', $atom->getDescription());
        $this->assertEquals('file', $atom->getType()); // @todo: add types as consts.
        $this->assertEquals('https://drive.google.com/uc?export=download&id=1vmPddaL8h9lYmBjXotK0f-iXAWgHKTSt', $atom->getGlobal());
        $this->assertEquals('/Signum.png', $atom->getLocal());
    }

    /**
     * Tests {@link Meta::dump()} method (dynamically).
     */
    public function testDynamicallyDump(): void
    {
        Meta::dump([[
            "title" => "Signum",
            "description" => "My signum",
            "type" => "file",
            "global" => "https://drive.google.com/uc?export=download&id=1vmPddaL8h9lYmBjXotK0f-iXAWgHKTSt",
            "local" => "/Signum.png"
        ]], __DIR__);

        $this->assertTrue(file_exists(__DIR__ . '/Signum.png'));
    }
}