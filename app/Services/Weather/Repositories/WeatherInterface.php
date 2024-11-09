<?php

namespace App\Services\Weather\Repositories;

use App\Services\Weather\DTOs\WeatherData;

interface WeatherInterface
{
    public function getByCity(string $city): WeatherData;
}
