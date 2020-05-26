<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class ArticlesController extends Controller
{

    public function article()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', 0], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $articles = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->orderByDesc('cat_sort')->paginate(10);
        return view('avnaled.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles', 'poster')
        ));
    }

    public function articleList($id)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', $id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $articles = Article::spectacle()->where('map_id', $id)->paginate(10);
        return view('avnaled.articleList', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles', 'poster')
        ));
    }

    public function articleDetail(Article $article)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', $article->map_id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $related = Article::spectacle()->where('map_id', Article::ARTICLE_INDUSTRY_NEWS)->limit(10)->get();
        $article_recommends = Article::spectacle()->limit(10)->get();
        return view('avnaled.articleDetail', compact('article', 'related', 'article_recommends', 'poster'));
    }
}
