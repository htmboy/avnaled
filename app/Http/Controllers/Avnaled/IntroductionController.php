<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class IntroductionController extends Controller
{

    public function introduction()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', Article::ARTICLE_COMPANY_NEWS], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        return view('avnaled.introduction', array_merge(
            $this->SEOConfig['introduction'],
            compact('company_id', 'poster')
        ));
    }

}
