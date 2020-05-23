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

class ContactController extends Controller
{

    public function contact()
    {
        list($title, $keywords, $description) = ['title', 'keyword', 'description'];
        return view('pok.contact', compact('title', 'keywords', 'description'));
    }

}
