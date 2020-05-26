<?php

namespace App\Http\Controllers\Pok;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class HistoryController extends Controller
{

    public function history()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', Article::ARTICLE_COMPANY_NEWS], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        return view('pok.history', array_merge(
            $this->SEOConfig['history'],
            compact('poster')
        ));
    }

}
