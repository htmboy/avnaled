<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Article;

class ArticlesController extends Controller
{

    public function article()
    {
        $articles = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->orderByDesc('cat_sort')->paginate(10);
        return view('pok.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles')
        ));
    }

    public function articleList($articleCategory)
    {
        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->where('map_id', $articleCategory)->paginate(10);
        return view('pok.article', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles')
        ));
    }

    public function articleDetail(Article $article)
    {
        return view('pok.articleDetail', compact('article'));
    }
}
