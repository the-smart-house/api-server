<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Models\WaterLeakDetector;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaterLeakDetectorFactory extends Factory
{
    protected $model = WaterLeakDetector::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'is_active' => $this->faker->boolean(),
            'room_id' => $this->faker->numberBetween(1, SeedersConstants::ROOMS_COUNT),
        ];
    }
}
