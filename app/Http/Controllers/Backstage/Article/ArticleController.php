<?php

namespace App\Http\Controllers\Backstage\Article;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $categories = ArticleCategory::orderBy('sort', 'desc')->get();
        $cat = $request->get('cat');
        if($cat){
            $articles = Article::where('cat_id', $cat)->orderBy('sort', 'desc');
            $cat = compact('cat');
        }
        else
            $articles = Article::orderBy('sort', 'desc');
        $articles = $articles->paginate(15);
        return view('backstage.article.article', compact('articles', 'categories', 'cat'));
    }

    public function create()
    {
        $categories = ArticleCategory::orderBy('sort', 'desc')->get();
        return view('backstage.article.articleAdd', compact('categories'));
    }

    public function store(Request $request)
    {
        // 处理图片
        $file = $request->file('thumbnail');
        $path = date('Ym', time());
        $name = date('dHis', time()).'.'.$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $thumbnail = $file->storeAs('articles/'.date('Ym', time()), $name);
        $article = $request->only('cat_id', 'seo_title', 'seo_keywords', 'seo_description', 'created_at', 'title', 'author', 'clicks');
        $article['content'] = htmlspecialchars_decode($request->get('content'));
        $article['thumbnail'] = $thumbnail;
        $article['cat_sort'] = ArticleCategory::where('id', $request->get('cate_id'))->count() + 1;
        $article['sort'] = Article::count() + 1;
        $article['cat_sort'] = Article::where('cat_id', $request->get('cat_id'))->count() + 1;
        Article::create($article);
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {

        $categories = ArticleCategory::orderBy('sort', 'desc')->get();
        return view('backstage.article.articleEdit', compact('article', 'categories'));
    }

    public function update(Article $article, Request $request)
    {

        if($request->hasFile('thumbnail')){
            // 处理图片
            $file = $request->file('thumbnail');
            $path = date('Ym', time());
            $name = date('dHis', time()).$file->getClientOriginalExtension();
            $mimeType = $file->getClientMimeType();
            // 验证图片 type
            $thumbnail = $file->storeAs('articles/'.$path, $name);
            Storage::delete($article->thumbnail);
        }
        $new_article = $request->only('cat_id', 'seo_title', 'seo_keywords', 'seo_description', 'created_at', 'title', 'author', 'clicks');
        $new_article['content'] =  htmlspecialchars_decode($request->get('content'));
        if (isset($thumbnail))
            $new_article['thumbnail'] = $thumbnail;
        $article->update($new_article);
        return redirect()->route('articles.edit', ['article' => $article->id]);
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }

}
