<?php

namespace App\MoonShine\Resources\Blocks;

use App\Models\Setting;
use App\MoonShine\Fields\TinyMceAdv;
use App\MoonShine\Resources\SettingsResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;

class PriceListResource extends SettingsResource
{
    protected string $title = 'Прайс лист';

    protected bool $editInModal = false;

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
                        Json::make('Цены', 'data')->fields([
                            Text::make('Название таба', 'name'),
                            Json::make('Названия столбцов', 'columns_names')->fields([
                                Text::make('Название столбца', 'name'),
                            ])->creatable()->removable(),
                            Json::make('Строки', 'rows')->fields([
                                Json::make('Столбцы', 'columns')->fields([
                                    Text::make('Текст', 'column_text'),
                                ])->creatable()->removable(),
                            ])->creatable()->removable(),
                        ])->vertical()->hideOnIndex()->creatable()->removable(),
                    ]),
                ]),
            ]),
        ];
    }

    public static function getOptionType(): int
    {
        return Setting::TYPES['price-list'];
    }
}
