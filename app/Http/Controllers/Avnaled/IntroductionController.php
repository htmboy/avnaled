<?php

namespace App\Http\Controllers\Avnaled;

use App\Models\Article;

class IntroductionController extends Controller
{

    public function introduction()
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        return view('avnaled.introduction', array_merge(
            $this->SEOConfig['introduction'],
            compact('company_id')
        ));
    }

}
