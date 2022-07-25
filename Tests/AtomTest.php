<?php

namespace Liloi\Dumper;

use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class AtomTest extends TestCase
{
    /**
     * Tests get atom parameters methods.
     */
    public function testMethodsResult(): void
    {
        $list = [
            'title' => 'Test',
            'data' => 'asd dsa'
        ];

        $atom = new Atom($list);

        $this->assertEquals($list['title'], $atom->getTitle());
        $this->assertEquals($list['data'], $atom->getData());
    }

    public function testParamDoesNotExist(): void
    {
        $this->expectException(\Judex\Checks\CheckTrue\Exception::class);
        $list = [
            'data' => 'Test'
        ];

        $atom = new Atom($list);
        $atom->getTitle(); // Must throw exception.
    }
}