<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokRecommendComposer
{

    protected $productCategoryServiceImpl;
    protected $articleServiceImpl;
    protected $productServiceImpl;

    public function __construct()
    {
        $this->productCategoryServiceImpl = new ProductCategoryServiceImpl;
        $this->articleServiceImpl = new ArticleServiceImpl;
        $this->productServiceImpl = new ProductServiceImpl;
    }

    public function compose(View $view)
    {

        $productCategory = $this->productCategoryServiceImpl->queryAll(ProductCategory::PRODUCT_FLOODLIGHT);

        $product_recommends = $this->productServiceImpl->queryLimit(array_values($productCategory->toArray()), 3);

        $article_recommends = $this->articleServiceImpl->queryLimit(DomainConfig::DOMAIN_POK, 10);

        $view->with(compact('product_recommends', 'article_recommends'));
    }

}