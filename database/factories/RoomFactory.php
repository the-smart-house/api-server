<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Helpers\UniquePerIdGenerator;
use App\Models\House;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),

            'house_id' => $this->faker->numberBetween(
                1,
                SeedersConstants::HOUSES_COUNT
            ),
        ];
    }
}
