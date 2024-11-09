<?php

namespace App\Services\Weather\DTOs;

use Spatie\LaravelData\Data;

class WeatherData extends Data
{
    public function __construct(
        public string $location,
        public string $temperature,
        public string $condition,
    ){}

    public static function fromArray(array $data):self
    {
        return new self(
            $data['location']['name'],
            $data['current']['temp_c'],
            $data['current']['condition']['text'],
        );
    }
}
