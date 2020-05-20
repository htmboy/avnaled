<?php

namespace App\Http\Controllers\Pok;

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
        list($title, $keywords, $description) = Setting::getSeo('index_seo');
        $query = $request->get('query');

        $articles = Article::spectacle()->where('content', 'like', '%'.$query.'%')->paginate(15);
        return view('pok.searchList', compact('title', 'keywords', 'description', 'articles', 'query'));
    }

}
