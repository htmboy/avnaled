<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Article;

class CasesController extends Controller
{

    public function cases()
    {
        $articles = Article::spectacle()->where('map_id', Article::ARTICLE_CASES)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->paginate(10);
        return view('pok.casesList', array_merge(
            $this->SEOConfig['cases'],
            compact('articles')
        ));
    }
}
