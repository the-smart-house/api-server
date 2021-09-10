<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Models\LightSwitch;
use Illuminate\Database\Eloquent\Factories\Factory;

class LightSwitchFactory extends Factory
{
    protected $model = LightSwitch::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'is_on' => $this->faker->boolean(),
            'room_id' => $this->faker->numberBetween(1, SeedersConstants::ROOMS_COUNT),
        ];
    }
}
