<?php

namespace ShaungBhone\FilamentMinipos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ShaungBhone\FilamentMinipos\FilamentMinipos
 */
class FilamentMinipos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ShaungBhone\FilamentMinipos\FilamentMinipos::class;
    }
}
