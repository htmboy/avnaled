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
        list($title, $keywords, $description) = Setting::getSeo('index_seo');
        $carousels = Carousel::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $productCategory = ProductCategory::where('pid', 1)->get('id');
        $products = Product::whereIn('cat_id', array_values($productCategory->toArray()))->orderBy('sort', 'desc')->limit(8)->get();
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
        list($title, $keywords, $description) = Setting::getSeo('cases_seo');
        $articles = Article::where('cat_id', 2)->orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.casesList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }

    public function product(){
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $products = Product::orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.product', compact('title', 'keywords', 'description', 'products'));
    }

    public function productList($id)
    {
        // TODO: 优化拼英库
        $param = [
            'gongkuangdeng' => 1,
            'fanguangdeng' => 2,
            'touguangdeng' => 3
         ];
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $productCategory = ProductCategory::where('pid', $param[$id])->get('id');
        $products = Product::whereIn('cat_id', array_values($productCategory->toArray()))->orderBy('sort', 'desc')->paginate(12);
        // $products = Product::where('cat_id', $param[$id])->orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.productList', compact('title', 'keywords', 'description', 'products'));
    }
    public function productSecondaryList($id)
    {
        list($title, $keywords, $description) = Setting::getSeo('product_seo');
        $products = Product::where('cat_id', $id)->orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.productList', compact('title', 'keywords', 'description', 'products'));
    }


    public function productDetail(Product $product)
    {
        $productCategory = ProductCategory::where('pid', 1)->get('id');
        $product_recommends = Product::whereIn('cat_id', array_values($productCategory->toArray()))->orderBy('sort', 'desc')->limit(4)->get();
        // $product_recommends = Product::where('cat_id', 1)->orderBy('sort', 'desc')->limit(4)->get();
        $article_recommends = Article::orderBy('sort', 'desc')->limit(10)->get();
        return view('spectacle.productDetail', compact('product', 'product_recommends', 'article_recommends'));
    }

    public function article()
    {
        list($title, $keywords, $description) = Setting::getSeo('article_seo');
        $articles = Article::orderBy('sort', 'desc')->paginate(10);
        return view('spectacle.article', compact('title', 'keywords', 'description', 'articles'));
    }

    public function articleList()
    {
        list($title, $keywords, $description) = Setting::getSeo('article_seo');
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
        list($title, $keywords, $description) = Setting::getSeo('contact_seo');
        return view('spectacle.contact', compact('title', 'keywords', 'description'));
    }

    public function history()
    {
        list($title, $keywords, $description) = Setting::getSeo('history_seo');
        return view('spectacle.history', compact('title', 'keywords', 'description'));
    }

    public function introduction()
    {
        list($title, $keywords, $description) = Setting::getSeo('introduction_seo');
        return view('spectacle.introduction', compact('title', 'keywords', 'description'));
    }

    public function search(Request $request)
    {
        list($title, $keywords, $description) = Setting::getSeo('index_seo');
        $query = $request->get('query');

        $articles = Article::where('content', 'like', '%'.$query.'%')->paginate(15);
//        $articles = Article::search($query)->paginate(16);
        return view('spectacle.searchList', compact('title', 'keywords', 'description', 'articles', 'query'));
    }
}
