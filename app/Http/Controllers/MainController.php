<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CatalogMenu;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request): View\Factory|View\View|Application
    {
        $articles = Article::query()
            ->with(['categories', 'author'])
            ->latest()
            ->paginate(100);

        if ($request->filled('order')) {
            $articles->setCollection($articles->getCollection()->sortBy(static function(Article $article) use ($request) {
                return $article->data->firstWhere($request->get('order'));
            }, SORT_REGULAR, $request->get('order_by') === 'DESC'));
        }

        $menu = Menu::query()->whereNull('menu_id')->with('items')->get();

        $catalogMenu = CatalogMenu::query()->whereNull('catalog_menu_id')->with('items')->get();

        $settings = Setting::all()->keyBy('slug');

        return view('home', compact('settings', 'articles', 'menu', 'catalogMenu'));
    }

    public function privacyPolicy(): View\Factory|View\View|Application
    {

        $menu = Menu::query()->whereNull('menu_id')->with('items')->get();

        $catalogMenu = CatalogMenu::query()->whereNull('catalog_menu_id')->with('items')->get();

        $settings = Setting::all()->keyBy('slug');

        $siteName = request()->getHttpHost();

        return view('privacy-policy', compact('settings', 'menu', 'catalogMenu', 'siteName'));
    }
}
