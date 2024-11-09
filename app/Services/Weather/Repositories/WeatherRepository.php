<?php

namespace App\Services\Weather\Repositories;

use App\Services\Weather\DTOs\WeatherData;
use App\Services\Weather\Exceptions\WeatherException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;

class WeatherRepository implements WeatherInterface
{
    private PendingRequest $http;

    public function __construct()
    {
//        Globally set the base url and accept json
        $this->http = Http::baseUrl('https://api.weatherapi.com')->acceptJson();
    }

    /**
     * @throws ConnectionException
     */
    public function getByCity(string $city): WeatherData
    {
        $response = $this->http->get('v1/current.json', [
            'key' => config('services.weather.key'),
            'q' => $city,
        ]);

        throw_if($response->failed(), WeatherException::class, 'Unable to fetch weather data');

        return WeatherData::from($response->json());
    }


}
