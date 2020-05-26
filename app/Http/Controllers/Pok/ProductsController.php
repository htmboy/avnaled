<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ThemePoster;

class ProductsController extends Controller
{

    public function product(){
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', 0], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $productCategories = ProductCategory::where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategories->toArray()))->paginate(10);
        return view('pok.products', array_merge(
            $this->SEOConfig['product'],
            compact('products', 'poster')
        ));
    }

    public function productList($id)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $id], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $products = Product::spectacle()->where('cat_id', $id)->paginate(12);
        return view('pok.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products', 'poster')
        ));
    }

    public function productDetail(Product $product)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $product->cat_id], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        return view('pok.productDetail', compact('product', 'poster'));
    }

}
