<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokRecommendComposer
{
    public function compose(View $view)
    {

        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get('id');
        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(3)->get();
        $article_recommends = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->limit(10)->get();
        $view->with(compact('product_recommends', 'article_recommends'));
    }

}