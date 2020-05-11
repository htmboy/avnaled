<?php

namespace App\Http\Controllers\Spectacle;

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

class IndexController extends Controller
{

    public function index()
    {
        list($title, $keywords, $description) = Setting::getSeo('index_seo');
        $carousels = Carousel::spectacle()->get();
        $productCategory = ProductCategory::spectacle()->where('pid', 1)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(8)->get();
        $conpany_news = Article::spectacle()->where('cat_id', 1)->limit(3)->get();
        $news = Article::spectacle()->where('cat_id', 2)->limit(3)->get();
        $answers = Article::spectacle()->where('cat_id', 3)->limit(10)->get();
        $cases = Article::spectacle()->where('cat_id', 4)->get();
        return view('spectacle.index', compact('carousels', 'title', 'keywords', 'description', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases'
        ));
    }

}