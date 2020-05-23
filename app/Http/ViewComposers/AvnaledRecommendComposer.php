<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledRecommendComposer
{
    public function compose(View $view)
    {

        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $product_recommends = Product::where('is_show', 1)->whereIn('cat_id', array_values($productCategory->toArray()))
            ->orderByDesc('cat_sort')->limit(3)->get();
        $article_recommends = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_AVNALED, DomainConfig::DOMAIN_ALL])
            ->orderByDesc('cat_sort')->limit(10)->get();
        $view->with(compact('product_recommends', 'article_recommends'));
    }

}