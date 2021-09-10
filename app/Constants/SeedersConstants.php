<?php

namespace App\Constants;

class SeedersConstants
{
    public const USERS_COUNT = 10;
    public const HOUSES_COUNT = 100;
    public const ROOMS_COUNT = 200;

    public const WINDOWS_COUNT = 200;
    public const MAX_SECTIONS_COUNT_PER_WINDOW = 5;

    public const WINDOW_OPENERS_COUNT = self::WINDOWS_COUNT * 1 - 5;
    public const ROLLER_BLINDS_COUNT = self::WINDOWS_COUNT * 1 - 5;

    public const TEMPERATURE_SENSORS_COUNT = 100;
    public const WATER_LEAK_DETECTOS_COUNT = 70;

    public const LIGHT_SWITCHES_COUNT = 200;
    public const POWER_OUTLETS_COUNT = 300;
}
