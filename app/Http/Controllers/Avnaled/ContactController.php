<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class ContactController extends Controller
{

    public function contact()
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $company_id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        return view('avnaled.contact', array_merge(
            $this->SEOConfig['contact'],
            compact('company_id', 'poster')
        ));
    }

}
