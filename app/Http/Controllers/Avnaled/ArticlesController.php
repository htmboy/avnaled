<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function article()
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $articles = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->orderByDesc('cat_sort')->paginate(10);
        return view('avnaled.article', compact('title', 'keywords', 'description', 'articles'));
    }

    public function articleList($id)
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $articles = Article::spectacle()->where('map_id', $id)->paginate(10);
        return view('avnaled.articleList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }

    public function articleDetail(Article $article)
    {
        $related = Article::spectacle()->where('map_id', 4)->limit(10)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
//        $sql = Article::where([['id', '<', $article->sort)->latest('id')->take(1);
//        $last_next = Article::spectacle()->where('id', '>', $article->id)->oldest('id')->take(1)->union($sql)->get();
        return view('avnaled.articleDetail', compact('article', 'related', 'article_recommends'));
    }
}
