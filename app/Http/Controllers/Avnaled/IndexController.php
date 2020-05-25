<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\ProductCategory;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{

    public function index()
    {
        $carousels = Carousel::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->get();
        $productCategory = ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategory->toArray()))->limit(8)->get();
        $conpany_news = Article::spectacle()->where('map_id', Article::ARTICLE_COMPANY_NEWS)->limit(3)->get();
        $news = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(3)->get();
        $answers = Article::spectacle()->where('map_id', Article::ARTICLE_Q_AND_A)->limit(10)->get();
        $cases = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->get();
        return view('avnaled.index', array_merge(
            $this->SEOConfig['index'],
            compact('carousels', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases')
        ));
    }

}
