<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;

class CasesController extends Controller
{

    public function cases()
    {
        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])
            ->where('map_id', Article::ARTICLE_CASES)->paginate(10);
        return view('avnaled.casesList', array_merge(
            $this->SEOConfig['cases'],
            compact('articles')
        ));
    }
}
