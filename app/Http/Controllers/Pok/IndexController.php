<?php

namespace App\Http\Controllers\Pok;

use App\Http\Services\CategoryService;
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
use Overtrue\Pinyin\Pinyin;

class IndexController extends Controller
{

    public function index()
    {

        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $carousels = Carousel::spectacle()->get();
        $productCategories = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get();
        $products = Product::where('is_show', 1)->whereIn('cat_id', array_values($productCategories->toArray()))
            ->orderByDesc('cat_sort')->limit(8)->get();
        $conpany_news = Article::spectacle()->where('map_id', Article::ARTICLE_COMPANY_NEWS)->limit(8)->get();
        $news = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(8)->get();
        $answers = Article::spectacle()->where('map_id', Article::ARTICLE_Q_AND_A)->limit(10)->get();
        $cases = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->limit(8)->get();
        return view('pok.index', compact(
            'title', 'keywords', 'description', 'carousels', 'productCategories', 'products', 'conpany_news', 'news', 'answers', 'cases'
        ));
    }

}
