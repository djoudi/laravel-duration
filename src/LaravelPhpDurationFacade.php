<?php

namespace Djoudi\LaravelPhpDuration;

use Illuminate\Support\Facades\Facade;

class LaravelPhpDurationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-php-duration';
    }
}