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
        list($title, $keywords, $description) = ['title', 'keyword', 'description'];
        $productCategories = ProductCategory::where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategories->toArray()))->paginate(10);
        return view('pok.products', compact('title', 'keywords', 'description', 'products'));
    }

    public function productList($id)
    {
        list($title, $keywords, $description) = ['title', 'keyword', 'description'];
//        $productCategory = ProductCategory::where('map_id', $id)->get('id');
//        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->paginate(12);
        $products = Product::spectacle()->where('cat_id', $id)->paginate(12);
        return view('pok.productList', compact('title', 'keywords', 'description', 'products'));
    }

    public function productDetail(Product $product)
    {
//        $productCategory = ProductCategory::spectacle()->where('pid', 1)->get('id');
//        $product_recommends = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(4)->get();
//        $article_recommends = Article::spectacle()->limit(10)->get();
        return view('pok.productDetail', compact('product'));
    }

}
