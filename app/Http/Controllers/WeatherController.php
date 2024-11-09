<?php

namespace App\Http\Controllers;

use App\Services\Weather\Exceptions\WeatherException;
use App\Services\Weather\Facades\WeatherFacade;

class WeatherController extends Controller
{
    public function getWeather($city)
    {
        try {
            /** @var \App\Services\Weather\DTOs\WeatherData */
            $weather = WeatherFacade::getByCity($city);
        } catch (WeatherException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }


        return response()->json([
            'city' => $weather->location,
            'temperature' => $weather->temperature,
            'condition' => $weather->condition,
        ]);
    }
}
