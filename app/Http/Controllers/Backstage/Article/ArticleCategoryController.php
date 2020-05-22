<?php

namespace App\Http\Controllers\Backstage\Article;

use App\Models\ArticleCategory;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::orderBy('sort','desc')->paginate(15);
        return view('backstage.article.category', compact('articleCategories'));
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $sort = ArticleCategory::count() +1;
        ArticleCategory::create(compact('name', 'sort'));
        return redirect()->route('art_category.index');
    }

    public function edit()
    {
        return null;
    }

    // 产品分类表不提供删除，只提供软删除
    public function destroy()
    {
        return null;
    }
}
