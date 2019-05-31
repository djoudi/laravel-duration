<?php

namespace Djoudi\LaravelPhpDuration;

use Illuminate\Support\Facades\Facade;

class DurationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'duration';
    }
}
