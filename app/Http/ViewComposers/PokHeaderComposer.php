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
        $fanguangdengCategories = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get();
        $productCategories = ProductCategory::spectacle()->get();
        $articleCategories = Article::$articleMap;
        $view->with(compact(
            'fanguangdengCategories', 'productCategories', 'articleCategories'
        ));
    }

}