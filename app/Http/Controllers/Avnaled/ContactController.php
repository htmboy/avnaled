<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\Config;
use App\Models\ThemePoster;

class ContactController extends Controller
{

    public function contact(ThemePosterServiceImpl $posterServiceImpl)
    {
        $company_id = Article::ARTICLE_COMPANY_NEWS;

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, $company_id, $this->domain);

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);

        return view('avnaled.contact', array_merge(
            $this->SEOConfig['contact'],
            compact('company_id', 'poster', 'settings')
        ));
    }

}
