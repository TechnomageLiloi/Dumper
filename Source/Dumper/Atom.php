<?php

namespace Liloi\Dumper;

use Liloi\Judex\Assert;

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
     *
     * @param array $data Atom parameters.
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Magic call for infinite 'get'.
     * Other methods are not allowed.
     *
     * @param string $nameMethod Method name.
     * @param array $data Method parameters.
     * @return mixed Some params.
     * @todo Realize: add exception, if other methods.
     *
     */
    public function __call(string $nameMethod, array $data)
    {
        Assert::true(strpos($nameMethod, 'get') === 0, 'Incorrect method', 'incorrect-method');

        $nameParam = strtolower(str_replace('get', '', $nameMethod));

        Assert::true(isset($this->data[$nameParam]), 'Parameter does not exist.', 'param-does-not-exist');

        return $this->data[$nameParam];
    }
}