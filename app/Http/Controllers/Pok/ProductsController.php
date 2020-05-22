<?php

namespace App\Http\Controllers\Pok;

use App\Models\Carousel;
use App\Models\Article;
use App\Models\Links;
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
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $products = Product::spectacle()->paginate(10);
        return view('pok.products', compact('title', 'keywords', 'description', 'products'));
    }

    public function productList($id)
    {
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $productCategory = ProductCategory::spectacle()->where('pid', Product::$typeMap[$id])->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->paginate(12);
        return view('pok.productList', compact('title', 'keywords', 'description', 'products'));
    }
    public function productSecondaryList($id)
    {
        $category = ProductCategory::where('pid', 2)->get(['id', 'name'])->keyBy('id')->map(function ($item) {
            return implode('', pinyin($item->name, PINYIN_DEFAULT));
        });
        $category_id = array_search($id, $category->toArray());
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $products = Product::spectacle()->where('cat_id', $category_id)->paginate(10);
        return view('pok.productList', compact('title', 'keywords', 'description', 'products'));
    }


    public function productDetail(Product $product)
    {
        $productCategory = ProductCategory::spectacle()->where('pid', 1)->get('id');
        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(4)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
        return view('pok.productDetail', compact('product', 'product_recommends', 'article_recommends'));
    }

}