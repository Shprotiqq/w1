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

abstract class SettingsResource extends ModelResource
{
    protected string $model = Setting::class;

    protected string $title = 'Брендирование';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected bool $createInModal = true;
    protected bool $editInModal = true;

    abstract static function getOptionType(): int;

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
                    ]),
                ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required',
            'slug' => 'required',
        ];
    }

    public function beforeCreating(Model $item): Model
    {
        $item->type = static::getOptionType();

        return $item;
    }

    public function query(): Builder
    {
        return parent::query()
            ->where('type', static::getOptionType());
    }
}
