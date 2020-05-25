<?php


namespace App\Http\ViewComposers;


use App\Common\GlobalConfiguration;
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
        $typePro = Product::getCategoryMap();
        $typeArt = Article::$articleMap;
        $gongkuandengCategories = ProductCategory::where([
            ['map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT],
            ['is_show', 1],
        ])->get();
        $gongkuangdeng = ProductCategory::where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->orderByDesc('sort')->with('product')->first();
        $productCategories = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get();

//        dd($productCategories);
        $articleCategories = Article::$articleMap;
        $case_id = Article::ARTICLE_CASES;
        $QA_id = Article::ARTICLE_Q_AND_A;
        $view->with(compact(
            'gongkuandengCategories', 'gongkuangdeng', 'productCategories', 'articleCategories', 'typePro', 'typeArt',
            'case_id', 'QA_id'
        ));
    }

}