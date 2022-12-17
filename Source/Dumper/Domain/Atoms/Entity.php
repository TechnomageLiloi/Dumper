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

    public function getVersionKey(): string
    {
        return $this->getField('key_version');
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
    public function getType(): string
    {
        return $this->getField('type');
    }

    /**
     * Set description.
     */
    public function setType(string $value): void
    {
        // @todo Add setField to php-tools
        $this->data['type'] = $value;
    }

    /**
     * Get description.
     *
     * @return string Exercise type.
     */
    public function getStatus(): string
    {
        return $this->getField('status');
    }

    /**
     * Set description.
     */
    public function setStatus(string $value): void
    {
        // @todo Add setField to php-tools
        $this->data['status'] = $value;
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

    public function getLocal(): string
    {
        return $this->getField('local');
    }

    public function setLocal(string $value): void
    {
        // @todo Add setField to php-tools
        $this->data['local'] = $value;
    }

    public function getGlobal(): string
    {
        return $this->getField('global');
    }

    public function setGlobal(string $value): void
    {
        // @todo Add setField to php-tools
        $this->data['global'] = $value;
    }
}