<?php

namespace Database\Factories;

use App\Models\RollerBlind;
use App\Models\WindowSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class RollerBlindFactory extends Factory
{
    protected $model = RollerBlind::class;

    public function definition(): array
    {
        return [
            'lowering_percent' => $this->faker->numberBetween(0, 100),

            //unique(), потому что на одной секции окна может быть максимум
            //одна штора
            'window_section_id' => $this->faker->unique()->numberBetween(
                1,
                WindowSection::all()->count()
            ),
        ];
    }
}
