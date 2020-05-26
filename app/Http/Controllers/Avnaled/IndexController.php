<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\CarouselServiceImpl;
use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\ProductCategory;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{

    public function index(CarouselServiceImpl $carouselServiceImpl,
                          ProductCategoryServiceImpl $categoryServiceImpl,
                          ProductServiceImpl $productServiceImpl,
                          ArticleServiceImpl $articleServiceImpl)
    {

        $carousels = $carouselServiceImpl->queryAll($this->domain);

        $productCategory = $categoryServiceImpl->queryAll($this->productType);

        $products = $productServiceImpl->queryLimit(array_values($productCategory->toArray()), 8);

        $conpany_news = $articleServiceImpl->queryLimit($this->domain, 3, Article::ARTICLE_COMPANY_NEWS);

        $news = $articleServiceImpl->queryLimit($this->domain, 3, Article::ARTICLE_INDUSTRY_NEWS);

        $answers = $articleServiceImpl->queryLimit($this->domain, 10, Article::ARTICLE_Q_AND_A);

        $cases = $articleServiceImpl->queryLimit($this->domain, 6, Article::ARTICLE_CASES);

        return view('avnaled.index', array_merge(
            $this->SEOConfig['index'],
            compact('carousels', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases')
        ));
    }

}
