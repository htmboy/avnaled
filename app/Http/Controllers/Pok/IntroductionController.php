<?php

namespace App\Http\Controllers\Pok;


use App\Common\DomainConfig;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;

class IntroductionController extends Controller
{

    public function introduction(ThemePosterServiceImpl $posterServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, Article::ARTICLE_COMPANY_NEWS, $this->domain);

        return view('pok.introduction', array_merge(
            $this->SEOConfig['introduction'],
            compact('poster')
            ));
    }

}
