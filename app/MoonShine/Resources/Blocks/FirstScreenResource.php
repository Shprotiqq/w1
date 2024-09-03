<?php

namespace App\MoonShine\Resources\Blocks;

use App\Models\Setting;
use App\MoonShine\Resources\SettingsResource;

class FirstScreenResource extends SettingsResource
{
    protected string $title = 'Первый экран';

    public static function getOptionType(): int
    {
        return Setting::TYPES['first_screen'];
    }
}
