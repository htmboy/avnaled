<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokNewsMenuComposer
{
    public function compose(View $view)
    {
        $articleCategories = Article::$articleMap;
        $view->with(compact('articleCategories'));
    }

}