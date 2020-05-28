<?php


namespace App\Http\ViewComposers;


use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokSidebarShowComposer
{
    public function compose(View $view)
    {
        $productCategories = (new ProductCategoryServiceImpl)->queryAll()->sortByDesc('map_id');

        $view->with(compact('productCategories'));

    }

}