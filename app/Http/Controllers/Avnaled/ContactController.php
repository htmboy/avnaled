<?php

namespace App\Http\Controllers\Avnaled;

use App\Models\Article;

class ContactController extends Controller
{

    public function contact()
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        return view('avnaled.contact', array_merge(
            $this->SEOConfig['contact'],
            compact('company_id')
        ));
    }

}
