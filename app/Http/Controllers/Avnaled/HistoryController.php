<?php

namespace App\Http\Controllers\Avnaled;

use App\Models\Article;

class HistoryController extends Controller
{

    public function history()
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        return view('avnaled.history', array_merge(
            $this->SEOConfig['history'],
            compact( 'company_id')
        ));
    }

}
