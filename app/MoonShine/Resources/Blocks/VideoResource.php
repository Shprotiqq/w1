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

class VideoResource extends SettingsResource
{
    protected string $title = 'Видео';

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
                        Image::make('Картинка', 'image'),
                        Json::make('Видео', 'data')->fields([
                            Text::make('Ссылка на ютуб', 'link'),
                        ])->hideOnIndex()->creatable()->removable(),
                    ]),
                ]),
            ]),
        ];
    }

    public static function getOptionType(): int
    {
        return Setting::TYPES['video'];
    }
}
