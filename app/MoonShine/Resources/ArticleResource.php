<?php

namespace App\MoonShine\Resources;

use App\Models\Article;
use App\Models\Comment;
use App\MoonShine\Controllers\ArticleController;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\View\ComponentAttributeBag;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Collapse;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Heading;
use MoonShine\Decorations\LineBreak;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Decorations\TextBlock;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Color;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\File;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\HiddenIds;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Preview;
use MoonShine\Fields\RangeSlider;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Relationships\HasOne;
use MoonShine\Fields\Slug;
use MoonShine\Fields\StackFields;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Url;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Metrics\ValueMetric;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;
use MoonShine\Resources\MoonShineUserResource;

class ArticleResource extends ModelResource
{
    public string $model = Article::class;

    public string $title = 'Товары';

    public string $sortColumn = 'created_at';

    public bool $withPolicy = true;

    public array $with = [
        'author',
        'comments',
    ];

    public string $column = 'title';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public function fields(): array
    {
        return [
            ID::make()
                ->useOnImport()
                ->showOnExport()
                ->sortable(),

            Grid::make([
                Column::make([
                    Block::make('Main information', [

                        LineBreak::make(),

                        Collapse::make('Title/Slug', [
                            Heading::make('Title/Slug'),

                            Flex::make('flex-titles', [
                                Text::make('Title')
                                    ->withoutWrapper()
                                    ->required(),

                                Slug::make('Slug')
                                    ->from('title')
                                    ->unique()
                                    ->separator('-')
                                    ->hideOnIndex()
                                    ->withoutWrapper()
                                    ->required(),
                            ])
                                ->justifyAlign('start')
                                ->itemsAlign('start'),
                        ]),



                        Text::make('Префикс', 'prefix')
                            ->required()
                            ->hideOnIndex(),


                        Number::make('Цена', 'price'),

                        StackFields::make('Files')->fields([
                            Image::make('Thumbnail')
                                ->removable()
                                ->disk('public')
                                ->dir('articles'),

                            Image::make('Картинки', 'Files')
                                ->disk('public')
                                ->multiple()
                                ->removable()
                                ->dir('articles'),
                        ]),

                        Number::make('Рейтинг', 'rating')
                            ->hint('От 0 до 5')
                            ->min(0)
                            ->max(5)
                            ->stars(),

                        //Code::make('Code'),

                        Json::make('Характеристики', 'data')->fields([
                            Text::make('Название', 'title'),
                            Text::make('Значение', 'value'),
                            Switcher::make('Активный', 'active'),
                        ])->hideOnIndex()->creatable()->removable(),

                        Switcher::make('Сопутствующий', 'active'),
                    ]),
                ])->columnSpan(6),

                Column::make([
                    Block::make('Seo and categories', [
                        Tabs::make([
                            Tab::make('Categories', [
                                BelongsToMany::make('Categories')
                                    ->tree('category_id')
                                    ->hideOnIndex(),
                            ]),
                        ]),
                    ]),
                ])->columnSpan(6),
            ]),

            HasMany::make('Comments', resource: new CommentResource())
                ->async()
                ->creatable()
                ->hideOnDetail()
                ->hideOnIndex(),


            HasOne::make('Comment', resource: new CommentResource())
                ->async()
                ->hideOnDetail()
                ->hideOnIndex(),
        ];
    }

    public function query(): Builder
    {
        return parent::query()
            ->withCount('comments')
            ->when(
                auth()->user()->moonshine_user_role_id !== 1,
                fn ($q) => $q->where('author_id', auth()->id())
            );
    }

    public function trAttributes(): Closure
    {
        return function (mixed $data, int $row, ComponentAttributeBag $attr): ComponentAttributeBag {
            return $attr->when(
                $data->author?->moonshine_user_role_id !== 1,
                fn (ComponentAttributeBag $a) => $a->merge(['class' => 'bgc-gray'])
            );
        };
    }

    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'min:2'],
            'slug' => ['required', 'string', 'min:1'],
            'thumbnail' => ['image'],
        ];
    }

    protected function beforeCreating(Model $item): Model
    {
        if (auth()->user()->moonshine_user_role_id !== 1) {
            request()->merge([
                'author_id' => auth()->id(),
            ]);
        }

        return $item;
    }

    protected function beforeUpdating(Model $item): Model
    {
        if (auth()->user()->moonshine_user_role_id !== 1) {
            request()->merge([
                'author_id' => auth()->id(),
            ]);
        }

        return $item;
    }

    public function search(): array
    {
        return ['id', 'title'];
    }

    public function filters(): array
    {
        return [
            Text::make('Title'),

            BelongsTo::make('Author', resource: new UserResource())
                ->nullable()
                ->canSee(fn () => auth()->user()->moonshine_user_role_id === 1),

            Slug::make('Slug'),

            BelongsToMany::make('Categories')
                ->selectMode(),

            Switcher::make('Сопутствующий', 'active'),
        ];
    }

    public function buttons(): array
    {
        return [
            ActionButton::make('Active', route('moonshine.articles.mass-active', $this->uriKey()))
                ->inModal(fn () => 'Active', fn (): string => (string) form(
                    route('moonshine.articles.mass-active', $this->uriKey()),
                    fields: [
                        HiddenIds::make(),
                        TextBlock::make('', __('moonshine::ui.confirm_message')),
                        Text::make('To confirm, write "yes"', 'confirm')
                            ->customAttributes(['placeholder' => 'Or no']),
                    ]
                )
                    ->async()
                    ->submit(__('moonshine::ui.delete'), ['class' => 'btn-secondary']))
                ->bulk(),
        ];
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    protected function resolveRoutes(): void
    {
        parent::resolveRoutes();

        Route::post('mass-active', [ArticleController::class, 'massActive'])
            ->name('articles.mass-active');
    }
}
