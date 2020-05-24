<?php

namespace App\Http\Controllers\Pok;

use App\Models\Article;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\ProductCategory;

class IndexController extends Controller
{

    public function index()
    {

        $carousels = Carousel::spectacle()->get();
        $productCategories = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get();
        $products = Product::where('is_show', 1)->whereIn('cat_id', array_values($productCategories->toArray()))
            ->orderByDesc('cat_sort')->limit(8)->get();
        $conpany_news = Article::spectacle()->where('map_id', Article::ARTICLE_COMPANY_NEWS)->limit(8)->get();
        $news = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(8)->get();
        $answers = Article::spectacle()->where('map_id', Article::ARTICLE_Q_AND_A)->limit(10)->get();
        $cases = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->limit(8)->get();
        return view('pok.index', array_merge(
            $this->SEOConfig['index'],
            compact('carousels', 'productCategories', 'products', 'conpany_news', 'news', 'answers', 'cases')
        ));
    }

}
