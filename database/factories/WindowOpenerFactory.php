<?php

namespace Database\Factories;

use App\Models\WindowOpener;
use App\Models\WindowSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class WindowOpenerFactory extends Factory
{
    protected $model = WindowOpener::class;

    public function definition(): array
    {
        return [
            'is_open' => $this->faker->boolean(),

            //unique(), потому что на одной секции может быть установлен
            //максимум один открыватель окон
            //(см. миграцию create_window_openers_table)
            'window_section_id' => $this->faker->unique()->numberBetween(
                1,
                WindowSection::all()->count()
            ),
        ];
    }
}
