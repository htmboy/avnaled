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

class HistoryController extends Controller
{

    public function history()
    {
        list($title, $keywords, $description) = Setting::getSeo('history_seo');
        return view('spectacle.history', compact('title', 'keywords', 'description'));
    }

}
