<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class HistoryController extends Controller
{

    public function history()
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', $company_id], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        return view('avnaled.history', array_merge(
            $this->SEOConfig['history'],
            compact( 'company_id', 'poster')
        ));
    }

}
