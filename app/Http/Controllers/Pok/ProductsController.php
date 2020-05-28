<?php

namespace App\Http\Controllers\Pok;

use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Config;
use App\Models\Product;
use App\Models\ThemePoster;

class ProductsController extends Controller
{

    public function product(ThemePosterServiceImpl $posterServiceImpl,
                            ProductCategoryServiceImpl $productCategoryServiceImpl,
                            ProductServiceImpl $productServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, 0, $this->productType);

        $products = $productServiceImpl->queryAllPaginate(10);

        return view('pok.products', array_merge(
            $this->SEOConfig['product'],
            compact('products', 'poster')
        ));
    }

    public function productList($id, ThemePosterServiceImpl $posterServiceImpl, ProductServiceImpl $productServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $id, $this->productType);

        $products = $productServiceImpl->queryPaginate([$id], 12);

        return view('pok.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products', 'poster')
        ));
    }

    public function productDetail(Product $product,
                                  ThemePosterServiceImpl $posterServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $product->cat_id, $this->productType);


        return view('pok.productDetail', compact('product', 'poster'));
    }

}
