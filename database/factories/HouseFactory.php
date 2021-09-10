<?php

namespace Database\Factories;

use App\Constants\SeedersConstants;
use App\Helpers\UniquePerIdGenerator;
use App\Models\House;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class HouseFactory extends Factory
{
    protected $model = House::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),

            'user_id' => $this->faker->numberBetween(
                1,
                SeedersConstants::USERS_COUNT
            ),
        ];
    }
}
