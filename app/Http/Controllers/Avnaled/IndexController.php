<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Common\GlobalConfiguration;
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
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $carousels = Carousel::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->get();
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(8)->get();
        $conpany_news = Article::spectacle()->where('map_id', Article::ARTICLE_COMPANY_NEWS)->limit(3)->get();
        $news = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(3)->get();
        $answers = Article::spectacle()->where('map_id', Article::ARTICLE_Q_AND_A)->limit(10)->get();
        $cases = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->get();
        return view('avnaled.index', compact('carousels', 'title', 'keywords', 'description', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases'
        ));
    }

}
