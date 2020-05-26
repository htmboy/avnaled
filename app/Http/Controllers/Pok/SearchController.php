<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\ThemePoster;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        $poster = ThemePoster::where([
            ['is_show', 1], ['type', ThemePoster::TYPE_PRODUCT], ['type_id', 0], ['domain_id', DomainConfig::DOMAIN_POK]
        ])->first();
        $word = $request->get('word');

        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])
            ->where('title', 'like', '%'.$word.'%')->orWhere('content', 'like', '%'.$word.'%')->paginate(8);
        return view('pok.searchList', array_merge(
            $this->SEOConfig['search'],
            compact( 'articles', 'word', 'poster')
        ));
    }

}
