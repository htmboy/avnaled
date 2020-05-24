<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;

class ArticlesController extends Controller
{

    public function article()
    {
        $articles = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->orderByDesc('cat_sort')->paginate(10);
        return view('avnaled.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles')
        ));
    }

    public function articleList($id)
    {
        $articles = Article::spectacle()->where('map_id', $id)->paginate(10);
        return view('avnaled.articleList', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles')
        ));
    }

    public function articleDetail(Article $article)
    {
        $related = Article::spectacle()->where('map_id', 4)->limit(10)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
        return view('avnaled.articleDetail', compact('article', 'related', 'article_recommends'));
    }
}
