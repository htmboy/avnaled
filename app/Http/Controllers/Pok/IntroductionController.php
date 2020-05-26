<?php

namespace App\Http\Controllers\Pok;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class IntroductionController extends Controller
{

    public function introduction()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', Article::ARTICLE_COMPANY_NEWS], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        return view('pok.introduction', array_merge(
            $this->SEOConfig['introduction'],
            compact('poster')
            ));
    }

}
