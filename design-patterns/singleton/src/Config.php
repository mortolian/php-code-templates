<?php

namespace App;

/**
 * Applying the Singleton pattern to the configuration storage is a common
 * practice. Often you need to access application configurations from a lot of
 * different places of the program. Singleton gives you that.
 */
class Config extends Singleton
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}