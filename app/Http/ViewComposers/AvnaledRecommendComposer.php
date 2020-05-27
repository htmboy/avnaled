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

class AvnaledRecommendComposer
{
    protected $productCategoryServiceImpl;
    protected $productServiceImpl;
    protected $articleImpl;

    public function __construct(ProductServiceImpl $productServiceImpl,
                                ProductCategoryServiceImpl $productCategoryServiceImpl,
                                ArticleServiceImpl $articleServiceImpl)
    {
        $this->productCategoryServiceImpl = $productCategoryServiceImpl;
        $this->productServiceImpl = $productServiceImpl;
        $this->articleImpl = $articleServiceImpl;
    }

    public function compose(View $view)
    {

        $productCategory = $this->productCategoryServiceImpl->queryAll(ProductCategory::PRODUCT_HIGH_BAY_LIGHT);

        $product_recommends = $this->productServiceImpl->queryLimit(array_values($productCategory->toArray()), 3);

        $article_recommends = $this->articleImpl->queryLimit(DomainConfig::DOMAIN_AVNALED, 10);

        $view->with(compact('product_recommends', 'article_recommends'));
    }

}