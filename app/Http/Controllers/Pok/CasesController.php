<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;

class CasesController extends Controller
{

    public function cases()
    {
        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_ARTICLE], ['type_id', Article::ARTICLE_CASES], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $articles = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->paginate(10);
        return view('pok.casesList', array_merge(
            $this->SEOConfig['cases'],
            compact('articles', 'poster')
        ));
    }
}
