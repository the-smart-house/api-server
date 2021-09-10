<?php

namespace Database\Seeders;

use App\Constants\SeedersConstants;
use App\Models\House;
use App\Models\LightSwitch;
use App\Models\PowerOutlet;
use App\Models\RollerBlind;
use App\Models\Room;
use App\Models\TemperatureSensor;
use App\Models\User;
use App\Models\WaterLeakDetector;
use App\Models\Window;
use App\Models\WindowOpener;
use App\Models\WindowSection;
use Database\Factories\HouseFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(SeedersConstants::USERS_COUNT)->create();
        House::factory(SeedersConstants::HOUSES_COUNT)->create();
        Room::factory(SeedersConstants::ROOMS_COUNT)->create();

        $this->createWindowsWithSections();

        WindowOpener::factory(SeedersConstants::WINDOW_OPENERS_COUNT)->create();
        RollerBlind::factory(SeedersConstants::ROLLER_BLINDS_COUNT)->create();

        TemperatureSensor::factory(SeedersConstants::TEMPERATURE_SENSORS_COUNT)
            ->create();

        WaterLeakDetector::factory(SeedersConstants::WATER_LEAK_DETECTOS_COUNT)
            ->create();

        LightSwitch::factory(SeedersConstants::LIGHT_SWITCHES_COUNT)->create();
        PowerOutlet::factory(SeedersConstants::POWER_OUTLETS_COUNT)->create();
    }

    private function createWindowsWithSections() {
        $windows = Window::factory(SeedersConstants::WINDOWS_COUNT)->create();

        foreach ($windows as $window) {
            $sectionsCount = rand(
                1,
                SeedersConstants::MAX_SECTIONS_COUNT_PER_WINDOW
            );

            for (
                $sectionNumber = 0;
                $sectionNumber < $sectionsCount;
                ++$sectionNumber
            ) {
                $section = new WindowSection();

                $section->window()->associate($window);
                $section->number = $sectionNumber;

                $section->save();
            }
        }
    }
}
