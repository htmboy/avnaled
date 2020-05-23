<?php

namespace App\Http\Controllers\Avnaled;

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

class HistoryController extends Controller
{

    public function history()
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        return view('avnaled.history', compact('title', 'keywords', 'description', 'company_id'));
    }

}
