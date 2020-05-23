<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokSidebarShowComposer
{
    public function compose(View $view)
    {
        $productCategories = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get();

        $view->with(compact('productCategories'));

    }

}