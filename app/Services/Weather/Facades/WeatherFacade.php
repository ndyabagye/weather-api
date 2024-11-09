<?php

namespace App\Services\Weather\Facades;

use App\Services\Weather\Repositories\WeatherInterface;
use Illuminate\Support\Facades\Facade;

class WeatherFacade extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return WeatherInterface::class;
    }
}
