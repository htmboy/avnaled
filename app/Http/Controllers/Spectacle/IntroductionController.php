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

class IntroductionController extends Controller
{

    public function introduction()
    {
        list($title, $keywords, $description) = Setting::getSeo('introduction_seo');
        return view('spectacle.introduction', compact('title', 'keywords', 'description'));
    }

}
