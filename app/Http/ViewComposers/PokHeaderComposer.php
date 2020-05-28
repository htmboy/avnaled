<?php


namespace App\Http\ViewComposers;


use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\Article;
use App\Models\Config;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokHeaderComposer
{
    protected $productCategoryServiceImpl;
    public function __construct()
    {
        $this->productCategoryServiceImpl = new ProductCategoryServiceImpl;
    }

    public function compose(View $view)
    {
        $fanguangdengCategories = (new ProductCategoryServiceImpl)->queryAll()->sortByDesc('map_id');

        $articleCategories = Article::$articleMap;

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);

        $view->with(compact(
            'fanguangdengCategories', 'articleCategories', 'settings'
        ));
    }

}