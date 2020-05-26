<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class ArticlesController extends Controller
{

    public function article()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', 0], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $articles = Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->orderByDesc('cat_sort')->paginate(10);
        return view('pok.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles', 'poster')
        ));
    }

    public function articleList($articleCategory)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', $articleCategory], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->where('map_id', $articleCategory)->paginate(10);
        return view('pok.article', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles', 'poster')
        ));
    }

    public function articleDetail(Article $article)
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', $article->map_id], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        return view('pok.articleDetail', compact('article', 'poster'));
    }
}
