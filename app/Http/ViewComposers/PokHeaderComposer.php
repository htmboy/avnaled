<?php


namespace App\Http\ViewComposers;


use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\Article;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokHeaderComposer
{
    protected $productCategoryServiceImpl;
    public function __construct()
    {
        $this->productCategoryServiceImpl = new ProductCategoryServiceImpl;
    }

    public function compose(View $view)
    {
        $fanguangdengCategories = $this->productCategoryServiceImpl->queryAll(ProductCategory::PRODUCT_FLOODLIGHT);

        $articleCategories = Article::$articleMap;

        $view->with(compact(
            'fanguangdengCategories', 'articleCategories'
        ));
    }

}