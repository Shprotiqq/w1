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

class RatingResource extends SettingsResource
{
    protected string $title = 'Рейтинг товаров';

    public static function getOptionType(): int
    {
        return Setting::TYPES['products_rating'];
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
                        Image::make('Картинка', 'image')
                            ->disk('public')
                            ->dir('rating'),

                        Json::make('Товары', 'data')->fields([
                            Text::make('ID товара', 'product_id'),
                        ])->hideOnIndex()->creatable()->removable()
                    ]),
                ]),
            ]),
        ];
    }
}
