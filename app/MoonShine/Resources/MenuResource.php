<?php

namespace App\MoonShine\Resources;

use App\Models\Category;
use App\Models\Menu;
use App\MoonShine\Category\CategoryIndexPage;
use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShineTree\Resources\TreeResource;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\DetailPage;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;

class MenuResource extends TreeResource
{
    protected string $model = Menu::class;

    protected string $title = 'Меню';

    protected string $column = 'title';

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    protected array $with = ['menu'];

    protected string $sortColumn = 'sorting';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected function pages(): array
    {
        return [
            CategoryIndexPage::make($this->title()),
            FormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            DetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function fields(): array
	{
		return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Menu')
                    ->nullable(),
                Text::make('Заголовок', 'title')->required(),
                Text::make('Ссылка', 'link'),
                Text::make('Скролл', 'scroll_to'),
            ])
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required', 'string', 'min:2'],
        ];
    }

    public function search(): array
    {
        return ['id', 'title'];
    }

    public function treeKey(): ?string
    {
        return 'menu_id';
    }

    public function sortKey(): string
    {
        return $this->sortColumn();
    }
}
