<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Links;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('spectacle.common.header', function($view){
            $param = [
                'gongkuangdeng' => 1,
                'fanguangdeng' => 2,
                'touguangdeng' => 3
            ];
            $gongkuandengCategories = ProductCategory::where('pid', 1)->orderBy('sort', 'desc')->get();
            $xingmais = ProductCategory::find(4)->product;
            $productCategories = ProductCategory::where('pid', 0)->orderBy('sort', 'desc')->get();
            $articleCategories = ArticleCategory::orderBy('sort', 'desc')->get();
            $view->with(compact(
                'gongkuandengCategories', 'xingmais', 'productCategories', 'articleCategories', 'param'
            ));
        });

        View::composer('spectacle.common.footer', function ($view){
            $links = Links::where('is_show', 1)->orderBy('sort', 'desc')->get();
            $view->with(compact(
                'links'
            ));
        });

        View::composer('spectacle.common.leftBar', function ($view){
            $productCategories = ProductCategory::where('pid', '>', 0)->orderBy('sort', 'desc')->get();
            $view->with(compact('productCategories'));
        });

        View::composer('spectacle.common.recommended', function ($view){
            $product_recommends = Product::where('cat_id', 1)->orderBy('sort', 'desc')->limit(3)->get();
            $article_recommends = Article::orderBy('sort', 'desc')->limit(10)->get();
            $view->with(compact('product_recommends', 'article_recommends'));
        });
    }
}
