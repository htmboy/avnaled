<?php


namespace App\Http\ViewComposers;


use App\Common\GlobalConfiguration;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Config;
use App\Models\Links;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledHeaderComposer
{


    public function compose(View $view)
    {

        $typePro = Product::getCategoryMap();

        $typeArt = Article::getCategoryMap();

        $productCategories = (new ProductCategoryServiceImpl)->queryAll()->sortByDesc('map_id');

        $gongkuangdeng = (new ProductCategoryServiceImpl)->queryAll(ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->first();

        $articleCategories = $typeArt;

        $case = Article::getCategoryMap(Article::ARTICLE_CASES);

        $QA = Article::getCategoryMap(Article::ARTICLE_Q_AND_A);

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);

        $view->with(compact(
            'productCategories', 'gongkuangdeng', 'articleCategories', 'typePro', 'typeArt',
            'case', 'QA', 'settings'
        ));
    }

}