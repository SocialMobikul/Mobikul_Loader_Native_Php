<?php

declare(strict_types=1);

namespace MobikulLoader\Facades;

use Illuminate\Support\Facades\Facade;

class MobikulLoader extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'mobikul-loader';
    }
}
