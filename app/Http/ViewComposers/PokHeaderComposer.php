<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokHeaderComposer
{
    public function compose(View $view)
    {
        $typePro = Product::$typeMap;
        $typeArt = Article::$typeMap;
        $fanguangdengCategories = ProductCategory::spectacle()->where('pid', 2)->get();
        $productCategories = ProductCategory::spectacle()->where('pid', 0)->get();
        $articleCategories = ArticleCategory::spectacle()->get();
        $view->with(compact(
            'fanguangdengCategories', 'productCategories', 'articleCategories', 'typePro', 'typeArt'
        ));
    }

}