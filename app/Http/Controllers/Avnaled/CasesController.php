<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class CasesController extends Controller
{

    public function cases()
    {
        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])
            ->where('map_id', Article::ARTICLE_CASES)->paginate(10);
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', Article::ARTICLE_CASES], ['domain_id', DomainConfig::DOMAIN_AVNALED]
        ])->first();
        return view('avnaled.casesList', array_merge(
            $this->SEOConfig['cases'],
            compact('articles', 'poster')
        ));
    }
}
