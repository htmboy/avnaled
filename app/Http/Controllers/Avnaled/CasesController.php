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

class CasesController extends Controller
{

    public function cases()
    {
        list($title, $keywords, $description) = ['title', 'keywords', 'description'];
        $articles = Article::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])
            ->where('map_id', Article::ARTICLE_CASES)->paginate(10);
        return view('avnaled.casesList', compact(
            'title', 'keywords', 'description', 'articles'
        ));
    }
}
