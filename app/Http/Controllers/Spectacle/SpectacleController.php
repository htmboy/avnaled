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
        $carousels = Carousel::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $products = IndexProduct::orderBy('sort', 'desc')->get();
        $conpany_news = Article::where('cat_id', 1)->orderBy('sort', 'desc')->limit(3)->get();
        $news = Article::where('cat_id', 2)->orderBy('sort', 'desc')->limit(3)->get();
        $answers = Article::where('cat_id', 3)->orderBy('sort', 'desc')->limit(10)->get();
        $cases = Article::where('cat_id', 4)->orderBy('sort', 'desc')->get();
        return view('spectacle.index', compact('carousels', 'title', 'keywords', 'description', 'products', 'articles',
            'conpany_news', 'news', 'answers', 'cases'
        ));
    }

    public function cases()
    {
        $seo = Setting::find('index_seo');
        list($title, $keywords, $description) = explode("%/%", $seo->value);
        $articles = Article::where('cat_id', 2)->orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.articleList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }

    public function product(){
        return view('spectacle.product');
    }

    public function productList(string $id)
    {
        $products = Product::where('cat_id', $id)->orderBy('sort', 'desc')->paginate(10);

        return view('spectacle.productList', compact('products'));
    }

    public function productDetail(Product $product)
    {
        $product_recommends = Product::where('cat_id', 1)->orderBy('sort', 'desc')->limit(4)->get();
        $article_recommends = Article::orderBy('sort', 'desc')->limit(10)->get();
        return view('spectacle.productDetail', compact('product', 'product_recommends', 'article_recommends'));
    }

    public function article()
    {
        return view('spectacle.article');
    }

    public function articleList(ProductCategory $productCategory)
    {
        $seo = Setting::find('index_seo');
        list($title, $keywords, $description) = explode("%/%", $seo->value);
        $articles = Article::where('cat_id', 2)->orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.articleList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }

    public function articleDetail(Article $article)
    {
        $related = Article::where('cat_id', 4)->orderBy('sort', 'desc')->limit(10)->get();
        $article_recommends = Article::orderBy('sort', 'desc')->limit(10)->get();
        $sql = Article::where('id', '<', $article->id)->latest('id')->take(1);
        $last_next = Article::where('id', '>', $article->id)->oldest('id')->take(1)->union($sql)->orderBy('id', 'asc')->get();
        return view('spectacle.articleDetail', compact('article', 'related', 'article_recommends', 'last_next'));
    }

    public function contact()
    {
        return view('spectacle.contact');
    }
}
