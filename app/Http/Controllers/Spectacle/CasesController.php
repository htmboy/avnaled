<?php

namespace App\Http\Controllers\Spectacle;

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

class CasesController extends Controller
{

    public function cases()
    {
        list($title, $keywords, $description) = Setting::getSeo('cases_seo');
        $articles = Article::spectacle()->where('cat_id', 2)->paginate(10);
        return view('spectacle.casesList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }
}
