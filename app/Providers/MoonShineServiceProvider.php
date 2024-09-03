<?php

namespace App\Providers;

use App\Models\Comment;
use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\Blocks\AboutCompanyResource;
use App\MoonShine\Resources\Blocks\CertificatesResource;
use App\MoonShine\Resources\Blocks\ConditionsResource;
use App\MoonShine\Resources\Blocks\DeliveryResource;
use App\MoonShine\Resources\Blocks\FirstScreenResource;
use App\MoonShine\Resources\Blocks\PortfolioResource;
use App\MoonShine\Resources\Blocks\PriceListResource;
use App\MoonShine\Resources\Blocks\PromotionsResource;
use App\MoonShine\Resources\Blocks\QuestionsResource;
use App\MoonShine\Resources\Blocks\QuizResource;
use App\MoonShine\Resources\Blocks\RatesResource;
use App\MoonShine\Resources\Blocks\RatingResource;
use App\MoonShine\Resources\Blocks\RequestForInstallmentsResource;
use App\MoonShine\Resources\Blocks\ReviewResource;
use App\MoonShine\Resources\Blocks\SendRequestResource;
use App\MoonShine\Resources\Blocks\SeoTextResource;
use App\MoonShine\Resources\Blocks\ShorCodesResource;
use App\MoonShine\Resources\Blocks\StockResource;
use App\MoonShine\Resources\Blocks\TeamResource;
use App\MoonShine\Resources\Blocks\VideoResource;
use App\MoonShine\Resources\CatalogMenuResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\CommentResource;
use App\MoonShine\Resources\DictionaryResource;
use App\MoonShine\Resources\BrandResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\SeoResource;
use App\MoonShine\Resources\UserResource;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    // app/Providers/MoonShineServiceProvider.php

    public function boot(): void
    {
        parent::boot();

        moonshineAssets()->add(['/vendor/moonshine/assets/minimalistic.css']);

        moonshineColors()
            ->primary('#1E96FC')
            ->secondary('#1D8A99')
            ->body('255, 255, 255')
            ->dark('30, 31, 67', 'DEFAULT')
            ->dark('249, 250, 251', 50)
            ->dark('243, 244, 246', 100)
            ->dark('229, 231, 235', 200)
            ->dark('209, 213, 219', 300)
            ->dark('156, 163, 175', 400)
            ->dark('107, 114, 128', 500)
            ->dark('75, 85, 99', 600)
            ->dark('55, 65, 81', 700)
            ->dark('31, 41, 55', 800)
            ->dark('17, 24, 39', 900)
            ->successBg('209, 255, 209')
            ->successText('15, 99, 15')
            ->warningBg('255, 246, 207')
            ->warningText('92, 77, 6')
            ->errorBg('255, 224, 224')
            ->errorText('81, 20, 20')
            ->infoBg('196, 224, 255')
            ->infoText('34, 65, 124');

        moonshineColors()
            ->body('27, 37, 59', dark: true)
            ->dark('83, 103, 132', 50, dark: true)
            ->dark('74, 90, 12', 100, dark: true)
            ->dark('65, 81, 114', 200, dark: true)
            ->dark('53, 69, 103', 300, dark: true)
            ->dark('48, 61, 93', 400, dark: true)
            ->dark('41, 53, 82', 500, dark: true)
            ->dark('40, 51, 78', 600, dark: true)
            ->dark('39, 45, 69', 700, dark: true)
            ->dark('27, 37, 59', 800, dark: true)
            ->dark('15, 23, 42', 900, dark: true)
            ->successBg('17, 157, 17', dark: true)
            ->successText('178, 255, 178', dark: true)
            ->warningBg('225, 169, 0', dark: true)
            ->warningText('255, 255, 199', dark: true)
            ->errorBg('190, 10, 10', dark: true)
            ->errorText('255, 197, 197', dark: true)
            ->infoBg('38, 93, 205', dark: true)
            ->infoText('179, 220, 255', dark: true);
    }

    protected function menu(): array
    {
        return [

            MenuItem::make('Брендирование', new BrandResource(), 'heroicons.outline.adjustments-vertical'),

            MenuItem::make('SEO и счетчики', new SeoResource(), 'heroicons.outline.adjustments-vertical'),

            MenuGroup::make('Блоки', [
                MenuItem::make('Акции', new StockResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Первый экран', new FirstScreenResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Портфолио', new PortfolioResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Видео', new VideoResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Отправить заявку', new SendRequestResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Прайс лист', new PriceListResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Тарифы', new RatesResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Заявка на рассрочку', new RequestForInstallmentsResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('О компании', new AboutCompanyResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Команда', new TeamResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Отзывы', new ReviewResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Сертификаты', new CertificatesResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Доставка', new DeliveryResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Условия', new ConditionsResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Скидки и акции', new PromotionsResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Сео текст', new SeoTextResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Вопрос-ответ', new QuestionsResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Квиз', new QuizResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Рейтинг товаров', new RatingResource(), 'heroicons.outline.adjustments-vertical'),
                MenuItem::make('Categories', new CategoryResource(), 'heroicons.outline.document'),
                MenuItem::make('Товары', new ArticleResource(), 'heroicons.outline.newspaper'),
                MenuItem::make('Comments', new CommentResource(), 'heroicons.outline.chat-bubble-left')
                    ->badge(fn () => (string) Comment::query()->count()),
            ], 'heroicons.outline.newspaper'),

            MenuItem::make('Меню', new MenuResource(), 'heroicons.outline.document'),

            MenuItem::make('Каталог меню', new CatalogMenuResource(), 'heroicons.outline.document'),

            MenuItem::make('Users', new UserResource(), 'heroicons.outline.users'),

            MenuItem::make('Dictionary', new DictionaryResource(), 'heroicons.outline.document-duplicate'),

            MenuItem::make('Опции', new OptionResource(), 'heroicons.outline.adjustments-vertical'),

            MenuItem::make('Шорткоды', new ShorCodesResource(), 'heroicons.outline.adjustments-vertical'),

            MenuGroup::make('System', [
                MenuItem::make('Admins', new MoonShineUserResource(), 'heroicons.outline.users'),
                MenuItem::make('Roles', new MoonShineUserRoleResource(), 'heroicons.outline.shield-exclamation'),
            ], 'heroicons.outline.user-group')->canSee(static function () {
                return auth('moonshine')->user()->moonshine_user_role_id === 1;
            }),

            MenuItem::make(
                'Documentation',
                'https://moonshine-laravel.com',
                'heroicons.outline.document-duplicate'
            )->badge(static fn () => 'New design'),
        ];
    }

    protected function theme(): array
    {
        return [
            'colors' => [
                'primary' => '#5190fe',
                'secondary' => '#b62982',
            ],
            'darkColors' => [
                'primary' => '#5190fe',
                'secondary' => '#b62982',
            ]
        ];
    }
}
