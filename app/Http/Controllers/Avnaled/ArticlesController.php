<?php

namespace App\Http\Controllers\Avnaled;

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

        return view('avnaled.article', array_merge(
            $this->SEOConfig['article'],
            compact('articles', 'poster')
        ));
    }

    public function articleList($id,
                                ThemePosterServiceImpl $posterServiceImpl,
                                ArticleServiceImpl $articleServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, $id, $this->domain);

        $articles = $articleServiceImpl->queryPaginate($this->domain, 10, $id);

        return view('avnaled.articleList', array_merge(
            $this->SEOConfig['articleList'],
            compact('articles', 'poster')
        ));
    }

    public function articleDetail(Article $article,
                                  ThemePosterServiceImpl $posterServiceImpl,
                                  ArticleServiceImpl $articleServiceImpl)
    {
        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, $article->map_id, $this->domain);

        $related = $articleServiceImpl->queryLimit($this->domain, 10, Article::ARTICLE_INDUSTRY_NEWS);

        $article_recommends = $articleServiceImpl->queryLimit($this->domain, 10);

        return view('avnaled.articleDetail', compact('article', 'related', 'article_recommends', 'poster'));
    }
}
