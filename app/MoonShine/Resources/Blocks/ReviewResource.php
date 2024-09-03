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

class ReviewResource extends SettingsResource
{
    protected string $title = 'Отзывы';

    protected bool $createInModal = false;
    protected bool $editInModal = false;

    public static function getOptionType(): int
    {
        return Setting::TYPES['review'];
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
                            ->dir('review'),

                        Json::make('Отзывы Табы', 'data')->fields([
                            Text::make('Название', 'name'),
                            Number::make('Оценка', 'rating')
                                ->hint('От 0 до 5')
                                ->min(0)
                                ->max(5)
                                ->stars(),
                            Json::make('Отзывы', 'data')->fields([
                                Text::make('ФИО', 'name'),
                                TinyMceAdv::make('Текст отзыва', 'text'),
                                Number::make('Оценка', 'rating')
                                    ->hint('От 0 до 5')
                                    ->min(0)
                                    ->max(5)
                                    ->stars(),
                                Date::make('Дата', 'date'),
                                Image::make('Фото', 'image')
                                    ->disk('public')
                                    ->dir('review'),
                            ])->hideOnIndex()->creatable()->removable(),
                        ])->hideOnIndex()->creatable()->removable(),
                    ]),
                ]),
            ]),
        ];
    }
}
