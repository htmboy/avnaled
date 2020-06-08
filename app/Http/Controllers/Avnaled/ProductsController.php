<?php

namespace App\Http\Controllers\Avnaled;

use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Config;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ThemePoster;


class ProductsController extends Controller
{

    public function product(ThemePosterServiceImpl $posterServiceImpl,
                            ProductServiceImpl $productServiceImpl){
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, 0, $this->domain);
        $products = $productServiceImpl->queryAllPaginate( 9);

        return view('avnaled.product', array_merge(
            $this->SEOConfig['product'],
            compact('products', 'poster')
        ));
    }

    public function productList($cat, ThemePosterServiceImpl $posterServiceImpl, ProductServiceImpl $productServiceImpl)
    {
        $cat_col = ProductCategory::get(['name', 'id'])->keyBy('id')->map(function($item){
            return pin($item->name);
        });
        $cat_id = array_search($cat, $cat_col->toArray());
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $cat_id, $this->domain);

        $products = $productServiceImpl->queryPaginate([$cat_id], 9);

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

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);

        return view('avnaled.productDetail',
            compact('product', 'product_recommends', 'article_recommends', 'poster', 'settings'));
    }

}
