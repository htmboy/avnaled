<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Http\Services\CarouselService;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\CarouselServiceImpl;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Config;
use App\Models\Product;
use App\Models\ProductCategory;

class IndexController extends Controller
{

    public function index(CarouselServiceImpl $carouselServiceImpl,
                          ProductServiceImpl $productServiceImpl,
                          ProductCategoryServiceImpl $productCategoryServiceImpl,
                          ArticleServiceImpl $articleServiceImpl)
    {

        $carousels = $carouselServiceImpl->queryAll($this->domain);

        $productCategories = $productCategoryServiceImpl->queryAll()->sortByDesc('map_id');

        $products = $productServiceImpl->queryLimit(array_values($productCategoryServiceImpl->queryAll(ProductCategory::PRODUCT_FLOODLIGHT)->toArray()), 8);

        $conpany_news = Article::spectacle()->where('map_id', Article::ARTICLE_COMPANY_NEWS)->limit(8)->get();
        $news = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(8)->get();
        $answers = Article::spectacle()->where('map_id', Article::ARTICLE_Q_AND_A)->limit(10)->get();
        $cases = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->limit(8)->get();
        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);
        return view('pok.index', array_merge(
            $this->SEOConfig['index'],
            compact('carousels', 'productCategories', 'products', 'conpany_news', 'news', 'answers', 'cases', 'settings')
        ));
    }

}
