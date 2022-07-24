<?php

namespace Liloi\Dumper;

/**
 * Atom class.
 * @package Liloi\Dumper
 */
class Atom
{
    /**
     * Atom parameters.
     *
     * @var array
     */
    private array $data = [];

    /**
     * Atom constructor.
     * @todo Realize: exception, if data is empty.
     * @param array $data Atom parameters.
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Magic call for infinite 'get'.
     * Other methods are not allowed.
     * @todo Realize: add exception, if other methods.
     *
     * @param string $name
     * @param array $data
     * @return mixed
     */
    public function __call(string $name, array $data)
    {
        return $this->data[strtolower(str_replace('get', '', $name))];
    }
}