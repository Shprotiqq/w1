<?php

namespace App\MoonShine\Resources\Blocks;

use App\Models\Setting;
use App\MoonShine\Fields\TinyMceAdv;
use App\MoonShine\Resources\SettingsResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;

class RatesResource extends SettingsResource
{
    protected string $title = 'Тарифы';

    public static function getOptionType(): int
    {
        return Setting::TYPES['rates'];
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
                        TinyMceAdv::make('Значение', 'value')
                            ->commentAuthor(auth()->user()->name)
                            ->addPlugins('code codesample')
                            ->addToolbar(' | code codesample')
                            ->addConfig('force_p_newlines', false)
                            ->addConfig('forced_root_block ', ''),
                        Json::make('Тарфы', 'data')->fields([
                            Image::make('Картинка', 'image')
                                ->disk('public')
                                ->dir('rates'),
                            Text::make('Заголовок', 'title'),
                            Text::make('Подзаголовок', 'sub_title'),
                            Text::make('Текст', 'text'),
                            Text::make('Срок', 'time'),
                            Json::make('Подарки', 'presents')->fields([
                                Text::make('Название', 'text'),
                            ]),
                        ])->hideOnIndex()->creatable()->removable(),
                    ]),
                ]),
            ]),
        ];
    }
}
