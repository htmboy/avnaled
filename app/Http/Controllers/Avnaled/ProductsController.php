<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ThemePoster;

class ProductsController extends Controller
{

    public function product(){
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', 0], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $products = Product::whereIn('cat_id', array_values($productCategory->toArray()))->orderBy('cat_sort')->paginate(9);
        return view('avnaled.product', array_merge(
            $this->SEOConfig['product'],
            compact('products', 'poster')
        ));
    }

    public function productList($id)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $products = Product::where('cat_id', $id)->orderBy('cat_sort')->paginate(9);
        return view('avnaled.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products', 'poster')
        ));
    }

    public function productDetail(Product $product)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $product->cat_id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(4)->get();
        $article_recommends = Article::spectacle()->whereIn('map_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->limit(10)->get();
        return view('avnaled.productDetail', compact('product', 'product_recommends', 'article_recommends', 'poster'));
    }

}
