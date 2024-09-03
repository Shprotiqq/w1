<?php

namespace App\MoonShine\Resources;

use App\Models\Setting;
use App\MoonShine\Fields\TinyMceAdv;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Enums\PageType;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

class OptionResource extends SettingsResource
{
    protected string $title = 'Опции';

    public static function getOptionType(): int
    {
        return Setting::TYPES['option'];
    }
}
