<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Models\PowerOutlet;
use App\Models\TemperatureSensor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PowerOutletFactory extends Factory
{
    protected $model = PowerOutlet::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'is_on' => $this->faker->boolean(),
            'room_id' => $this->faker->numberBetween(1, SeedersConstants::ROOMS_COUNT),
        ];
    }
}
