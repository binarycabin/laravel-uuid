<?php

namespace BinaryCabin\LaravelUUID\Traits;

trait UUIDIsPrimaryKey
{
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
