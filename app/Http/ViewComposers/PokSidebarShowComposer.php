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
        $productCategories = (new ProductCategoryServiceImpl)->queryAll(ProductCategory::PRODUCT_FLOODLIGHT);

        $view->with(compact('productCategories'));

    }

}