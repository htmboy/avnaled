<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;

class ArticlesController extends Controller
{

    public function article(ThemePosterServiceImpl $posterServiceImpl,
                            ArticleServiceImpl $articleServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, 0, $this->domain);

        $articles = $articleServiceImpl->queryPaginate($this->domain, 10);

        return view('pok.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles', 'poster')
        ));
    }

    public function articleList($articleCategory,
                                ThemePosterServiceImpl $posterServiceImpl,
                                ArticleServiceImpl $articleServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, $articleCategory, $this->domain);


        $articles = $articleServiceImpl->queryPaginate($this->domain, 10, $articleCategory);

        return view('pok.article', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles', 'poster')
        ));
    }

    public function articleDetail(Article $article,
                                  ThemePosterServiceImpl $posterServiceImpl,
                                  ArticleServiceImpl $articleServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, $article->map_id, $this->domain);

        return view('pok.articleDetail', compact('article', 'poster'));
    }
}
