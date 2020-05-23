<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Carousel;
use App\Models\Article;
use App\Models\Link;
use App\Models\IndexProduct;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

    public function product(){
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $products = Product::whereIn('cat_id', array_values($productCategory->toArray()))->orderBy('cat_sort')->paginate(9);
//        $products = Product::spectacle()->where('')->paginate(10);
        return view('avnaled.product', compact('title', 'keywords', 'description', 'products'));
    }

    public function productList($id)
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $products = Product::where('cat_id', $id)->orderBy('cat_sort')->paginate(9);
        return view('avnaled.productList', compact('title', 'keywords', 'description', 'products'));
    }
//    public function productSecondaryList($id)
//    {
//        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
//        $products = Product::spectacle()->where('cat_id', $id)->paginate(10);
//        return view('avnaled.productList', compact('title', 'keywords', 'description', 'products'));
//    }


    public function productDetail(Product $product)
    {
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(4)->get();
        $article_recommends = Article::spectacle()->whereIn('map_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->limit(10)->get();
        return view('avnaled.productDetail', compact('product', 'product_recommends', 'article_recommends'));
    }

}
