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

class ArticlesController extends Controller
{

    public function article()
    {
        list($title, $keywords, $description) = Setting::getSeo('article_seo');
        $articles = Article::spectacle()->paginate(10);
        return view('spectacle.article', compact('title', 'keywords', 'description', 'articles'));
    }

    public function articleList($articleCategory)
    {
        list($title, $keywords, $description) = Setting::getSeo('article_seo');
        $articles = Article::spectacle()->where('cat_id', Article::$typeMap[$articleCategory])->paginate(10);
        return view('spectacle.articleList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }

    public function articleDetail(Article $article)
    {
        $related = Article::spectacle()->where('cat_id', 4)->limit(10)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
        $sql = Article::spectacle()->where('id', '<', $article->id)->latest('id')->take(1);
        $last_next = Article::spectacle()->where('id', '>', $article->id)->oldest('id')->take(1)->union($sql)->get();
        return view('spectacle.articleDetail', compact('article', 'related', 'article_recommends', 'last_next'));
    }
}