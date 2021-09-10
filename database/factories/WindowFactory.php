<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Helpers\UniquePerIdGenerator;
use App\Models\Room;
use App\Models\Window;
use Illuminate\Database\Eloquent\Factories\Factory;

class WindowFactory extends Factory
{
    protected $model = Window::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'room_id' => $this->faker->numberBetween(1, SeedersConstants::ROOMS_COUNT),
        ];
    }
}
