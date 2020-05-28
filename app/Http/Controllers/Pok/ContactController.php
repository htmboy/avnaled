<?php

namespace App\Http\Controllers\Pok;


use App\Common\DomainConfig;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\Config;
use App\Models\ThemePoster;

class ContactController extends Controller
{

    public function contact(ThemePosterServiceImpl $posterServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_ARTICLE, Article::ARTICLE_COMPANY_NEWS, $this->domain);

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);
        return view('pok.contact', array_merge($this->SEOConfig['contact'],  compact('poster', 'settings')));
    }

}
