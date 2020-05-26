<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;

class IntroductionController extends Controller
{

    public function introduction(ThemePosterServiceImpl $posterServiceImpl)
    {

        $company_id = Article::ARTICLE_COMPANY_NEWS;

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $company_id, $this->domain);


        return view('avnaled.introduction', array_merge(
            $this->SEOConfig['introduction'],
            compact('company_id', 'poster')
        ));
    }

}
