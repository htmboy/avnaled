<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;

class CasesController extends Controller
{

    public function cases(ArticleServiceImpl $articleServiceImpl, ThemePosterServiceImpl $posterServiceImpl)
    {
        $articles = $articleServiceImpl->queryPaginate($this->domain,10, Article::ARTICLE_CASES);

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, Article::ARTICLE_CASES, $this->domain);

        return view('avnaled.casesList', array_merge(
            $this->SEOConfig['cases'],
            compact('articles', 'poster')
        ));
    }
}
