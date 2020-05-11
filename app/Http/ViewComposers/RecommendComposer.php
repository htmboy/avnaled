<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class RecommendComposer
{
    public function compose(View $view)
    {

        $productCategory = ProductCategory::spectacle()->where('pid', 1)->get('id');
        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(3)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
        $view->with(compact('product_recommends', 'article_recommends'));
    }

}