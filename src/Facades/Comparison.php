<?php

namespace Sophy\Comparison\Facades;

use Illuminate\Support\Facades\Facade;

class Comparison extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'comparison';
    }
}
