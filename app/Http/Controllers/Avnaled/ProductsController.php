<?php

namespace App\Http\Controllers\Avnaled;

use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Product;
use App\Models\ThemePoster;

class ProductsController extends Controller
{

    public function product(ThemePosterServiceImpl $posterServiceImpl,
                            ProductCategoryServiceImpl $productCategoryServiceImpl,
                            ProductServiceImpl $productServiceImpl){
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, 0, $this->productType);

        $productCategory = $productCategoryServiceImpl->queryAll($this->productType);

        $products = $productServiceImpl->queryPaginate(array_values($productCategory->toArray()), 9);

        return view('avnaled.product', array_merge(
            $this->SEOConfig['product'],
            compact('products', 'poster')
        ));
    }

    public function productList($id, ThemePosterServiceImpl $posterServiceImpl, ProductServiceImpl $productServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $id, $this->productType);

        $products = $productServiceImpl->queryPaginate([$id], 9);

        return view('avnaled.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products', 'poster')
        ));
    }

    public function productDetail(Product $product,
                                  ThemePosterServiceImpl $posterServiceImpl,
                                  ProductCategoryServiceImpl $productCategoryServiceImpl,
                                  ArticleServiceImpl $articleServiceImpl,
                                  ProductServiceImpl $productServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $product->cat_id, $this->productType);

        $productCategory = $productCategoryServiceImpl->queryAll($this->productType);

        $product_recommends = $productServiceImpl->queryLimit(array_values($productCategory->toArray()), 4);

        $article_recommends = $articleServiceImpl->queryAll($this->productType, 10);

        return view('avnaled.productDetail', compact('product', 'product_recommends', 'article_recommends', 'poster'));
    }

}
