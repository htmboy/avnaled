<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Http\Services\Implement\ArticleServiceImpl;
use App\Http\Services\Implement\ThemePosterServiceImpl;
use App\Models\Article;
use App\Models\ThemePoster;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request, ThemePosterServiceImpl $posterServiceImpl,
                           ArticleServiceImpl $articleServiceImpl)
    {

        $poster = $posterServiceImpl->queryOne(ThemePoster::TYPE_PRODUCT, 0, $this->domain);

        $word = $request->get('word');

        $articles = $articleServiceImpl->querySearch($word, 8, $this->domain);

        return view('pok.searchList', array_merge(
            $this->SEOConfig['search'],
            compact( 'articles', 'word', 'poster')
        ));
    }

}
