<?php

namespace App\Http\Controllers\Pok;

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
                            ProductCategoryServiceImpl $productCategoryServiceImpl,
                            ProductServiceImpl $productServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, 0, $this->domain);

        $products = $productServiceImpl->queryAllPaginate(10);

        return view('pok.products', array_merge(
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

        $products = $productServiceImpl->queryPaginate([$cat_id], 12);

        return view('pok.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products', 'poster')
        ));
    }

    public function productDetail(Product $product,
                                  ThemePosterServiceImpl $posterServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $product->cat_id, $this->domain);


        return view('pok.productDetail', compact('product', 'poster'));
    }

}
