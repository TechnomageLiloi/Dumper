<?php

namespace Liloi\Dumper\Domain\Atoms;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @todo: add tests
 */
class Entity extends AbstractEntity
{
    /**
     * Get exercise key.
     *
     * @return string Exercise key.
     */
    public function getKey(): string
    {
        return $this->getField('key_atom');
    }

    /**
     * Get description.
     *
     * @return string Exercise type.
     */
    public function getTitle(): string
    {
        return $this->getField('title');
    }

    /**
     * Set description.
     */
    public function setTitle(string $text_description): void
    {
        // @todo Add setField to php-tools
        $this->data['title'] = $text_description;
    }

    /**
     * Get description.
     *
     * @return string Exercise type.
     */
    public function getSummaryParse(): string
    {
        return Parser::parseString($this->getField('summary'));
    }

    /**
     * Get description.
     *
     * @return string Exercise type.
     */
    public function getSummary(): string
    {
        return $this->getField('summary');
    }

    /**
     * Set description.
     */
    public function setSummary(string $text_description): void
    {
        // @todo Add setField to php-tools
        $this->data['summary'] = $text_description;
    }

    /**
     * Get data.
     *
     * @return string Exercise type.
     */
    public function getData(): string
    {
        return $this->getField('data');
    }

    /**
     * Set data.
     */
    public function setData(string $json_data): void
    {
        // @todo Add setField to php-tools
        $this->data['data'] = $json_data;
    }
}