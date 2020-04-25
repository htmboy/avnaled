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

class SpectacleController extends Controller
{
    public function index()
    {
        $seo = Setting::find('index_seo');
        list($title, $keywords, $description) = explode("%/%", $seo->value);
        $gongkuandengCategories = ProductCategory::where('pid', 1)->orderBy('sort', 'desc')->get();
        $productCategories = ProductCategory::where('pid', 0)->orderBy('sort', 'desc')->get();
        $articleCategories = ArticleCategory::orderBy('sort', 'desc')->get();
        $xingmais = ProductCategory::find(4)->product;

        $links = Links::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $carousels = Carousel::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $products = IndexProduct::orderBy('sort', 'desc')->get();
        $conpany_news = Article::where('cat_id', 1)->orderBy('sort', 'desc')->limit(3)->get();
        $news = Article::where('cat_id', 2)->orderBy('sort', 'desc')->limit(3)->get();
        $answers = Article::where('cat_id', 3)->orderBy('sort', 'desc')->limit(10)->get();
        $cases = Article::where('cat_id', 4)->orderBy('sort', 'desc')->get();
        return view('spectacle.index', compact(
            'links', 'carousels', 'title', 'keywords', 'description', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases', 'gongkuandengCategories', 'productCategories',
            'xingmais', 'articleCategories'
        ));
    }

    public function cases()
    {
        $seo = Setting::find('index_seo');
        list($title, $keywords, $description) = explode("%/%", $seo->value);
        $cases = Article::where('cat_id', 2)->orderBy('sort', 'desc')->paginate(10);
        $gongkuandengCategories = ProductCategory::where('pid', 1)->orderBy('sort', 'desc')->get();
        $productCategories = ProductCategory::where('pid', 0)->orderBy('sort', 'desc')->get();
        $xingmais = ProductCategory::find(4)->product;
        $articleCategories = ArticleCategory::orderBy('sort', 'desc')->get();
        $links = Links::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $recommend = Product::where('cat_id', 4)->orderBy('sort', 'desc')->limit(3)->get();
        return view('spectacle.caseslist', compact(
            'title', 'keywords', 'description', 'cases', 'gongkuandengCategories', 'productCategories', 'xingmais',
            'articleCategories', 'links', 'recommend'
        ));
    }

    public function product()
    {
        return view('spectacle.product');
    }

    public function product_detail()
    {
        return view('spectacle.detail');
    }

    public function news()
    {
        return view('spectacle.news');
    }

    public function news_detail()
    {
        return view('spectacle.news_detail');
    }

    public function gsjj()
    {
        return view('sepctacle.gsjj');
    }

    public function fzlc()
    {
        return view('spectacle.fzlc');
    }

    public function contact()
    {
        return view('spectacle.contact');
    }
}
