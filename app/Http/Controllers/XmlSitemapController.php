<?php

namespace App\Http\Controllers;


use App\Models\CatalogMenu;
use App\Models\Menu;

class XmlSitemapController extends Controller
{

    /**
     * Главная страница
     *
     * @return mixed
     */
    public function index()
    {
        $menu = Menu::query()->whereNotNull('scroll_to')->get();

        $catalogMenu = CatalogMenu::query()->whereNotNull('scroll_to')->get();


        $oContents = view('xml-sitemap.index', compact(
            'menu',
            'catalogMenu',
        ));
        return response($oContents)->header('Content-Type', 'text/xml');
    }
}
