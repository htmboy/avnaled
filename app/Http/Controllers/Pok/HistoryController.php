<?php

namespace App\Http\Controllers\Pok;


use App\Common\DomainConfig;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;

class HistoryController extends Controller
{

    public function history(ThemePosterServiceImpl $posterServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, Article::ARTICLE_COMPANY_NEWS, $this->domain);

        return view('pok.history', array_merge(
            $this->SEOConfig['history'],
            compact('poster')
        ));
    }

}
