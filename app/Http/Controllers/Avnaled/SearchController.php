<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Carousel;
use App\Models\Article;
use App\Models\Links;
use App\Models\IndexProduct;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $word = $request->get('word');

        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])
            ->where('title', 'like', '%'.$word.'%')->orWhere('content', 'like', '%'.$word.'%')->paginate(8);
        return view('avnaled.searchList', compact('title', 'keywords', 'description', 'articles', 'word'));
    }

}
