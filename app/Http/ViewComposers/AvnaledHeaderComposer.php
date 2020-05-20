<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Links;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledHeaderComposer
{
    public function compose(View $view)
    {
        $typePro = Product::$typeMap;
        $typeArt = Article::$typeMap;
        $gongkuandengCategories = ProductCategory::spectacle()->where('pid', 1)->get();
        $xingmais = ProductCategory::find(4)->product;
        $productCategories = ProductCategory::spectacle()->where('pid', 0)->get();
        $articleCategories = ArticleCategory::spectacle()->get();
        $view->with(compact(
            'gongkuandengCategories', 'xingmais', 'productCategories', 'articleCategories', 'typePro', 'typeArt'
        ));
    }

}