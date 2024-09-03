<?php

namespace App\MoonShine\Resources\Blocks;

use App\Models\Setting;
use App\MoonShine\Fields\TinyMceAdv;
use App\MoonShine\Resources\SettingsResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;

class CertificatesResource extends SettingsResource
{
    protected string $title = 'Сертификаты';


    public static function getOptionType(): int
    {
        return Setting::TYPES['certificates'];
    }

    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make('Contact information', [
                        ID::make()->sortable(),
                        Text::make('Название','name'),
                        Text::make('Cлаг', 'slug'),
                        TinyMceAdv::make('Значение', 'value'),
                        Image::make('Картинки', 'files')
                            ->multiple()
                            ->disk('public')
                            ->dir('certificates')
                            ->removable(),
                    ]),
                ]),
            ]),
        ];
    }
}
