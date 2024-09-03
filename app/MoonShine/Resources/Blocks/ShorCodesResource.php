<?php

namespace App\MoonShine\Resources\Blocks;

use App\Models\Setting;
use App\MoonShine\Fields\TinyMceAdv;
use App\MoonShine\Resources\SettingsResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;

class ShorCodesResource extends SettingsResource
{
    protected string $title = 'Шорткоды';

    protected bool $editInModal = false;

    public static function getOptionType(): int
    {
        return Setting::TYPES['short_codes'];
    }

    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make('Шорткоды', [
                        ID::make()->sortable(),
                        Text::make('Название','name'),
                        Text::make('Cлаг', 'slug'),
                        Json::make('Шорткоды', 'data')->fields([
                            Text::make('Ключ', 'key'),
                            Text::make('Значение', 'value'),
                        ])->hideOnIndex()->creatable()->removable()
                    ]),
                ]),
            ]),
        ];
    }
}
