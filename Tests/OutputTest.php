<?php

namespace Liloi\Dumper;

use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class OutputTest extends TestCase
{
    /**
     * Tests {@link Output::out()} exists.
     */
    public function testExist(): void
    {
        $this->assertTrue(method_exists('Liloi\Dumper\Output', 'out'));
    }

    /**
     * Tests {@link Output::out()} output.
     */
    public function testFormat(): void
    {
        $this->assertEquals('test', Output::out('test', false));
        $this->assertEquals("test\n", Output::out('test'));
        $this->assertEquals("test\n", Output::out('test', true));
    }
}