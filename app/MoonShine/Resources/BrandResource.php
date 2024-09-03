<?php

namespace App\MoonShine\Resources;

use App\Models\Setting;

class BrandResource extends SettingsResource
{
    protected string $title = 'Брендирование';

    public static function getOptionType(): int
    {
        return Setting::TYPES['brand'];
    }
}
