<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $word = $request->get('word');

        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])
            ->where('title', 'like', '%'.$word.'%')->orWhere('content', 'like', '%'.$word.'%')->paginate(8);
        return view('avnaled.searchList', compact( 'word', 'articles'));
    }

}
