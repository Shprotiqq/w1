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

class TeamResource extends SettingsResource
{
    protected string $title = 'Команда';

    public static function getOptionType(): int
    {
        return Setting::TYPES['team'];
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
                        Image::make('Картинка', 'image')
                            ->disk('public')
                            ->dir('team'),

                        Json::make('Команда', 'data')->fields([
                            Text::make('Имя', 'name'),
                            Text::make('Должность', 'job_title'),
                            Text::make('Стаж', 'exp'),
                            Image::make('Картинка', 'image')
                                ->disk('public')
                                ->dir('team'),
                        ])->hideOnIndex()->creatable()->removable(),
                    ]),
                ]),
            ]),
        ];
    }
}
