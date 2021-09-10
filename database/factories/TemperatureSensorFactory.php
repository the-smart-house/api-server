<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Models\TemperatureSensor;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemperatureSensorFactory extends Factory
{
    protected $model = TemperatureSensor::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'room_id' => $this->faker->numberBetween(1, SeedersConstants::ROOMS_COUNT),
        ];
    }
}
