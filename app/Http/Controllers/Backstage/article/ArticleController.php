<?php

namespace App\Http\Controllers\Backstage\Article;

use App\Http\Requests\ProductGalleryPost;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('sort', 'desc')->paginate(15);
        return view('backstage.article.article', compact('articles'));
    }

    public function addView()
    {
        $categories = ArticleCategory::orderBy('sort', 'desc')->get();
        return view('backstage.article.articleAdd', compact('categories'));
    }

    public function addArticle(Request $request)
    {
        // 处理图片
        $file = $request->file('thumbnail');
        $path = date('Ym', time());
        $name = date('dHis', time()).'.'.$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $thumbnail = $file->storeAs('articles/'.$path, $name);
        $article = $request->only('cat_id', 'seo_title', 'seo_keywords', 'seo_description', 'title', 'author', 'clicks', 'content');
        $article['content'] = htmlspecialchars_decode($request->get('content'));
        $article['thumbnail'] = $thumbnail;
        $article['cat_sort'] = ArticleCategory::where('id', $request->get('cate_id'))->count() + 1;
        $article['sort'] = Article::count() + 1;
        $article['cat_sort'] = Article::where('cat_id', $request->get('cat_id'))->count() + 1;
        Article::create($article);
        return redirect('/backstage/article');
    }

    public function editView(Article $article)
    {

        $categories = ArticleCategory::orderBy('sort', 'desc')->get();
        return view('backstage.article.articleEdit', compact('article', 'categories'));
    }

    public function editArticle(Article $article, Request $request)
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
        $new_article = $request->only('cat_id', 'seo_title', 'seo_keywords', 'seo_description', 'title', 'author', 'clicks', 'content');
        if (isset($thumbnail))
            $new_article['thumbnail'] = $thumbnail;
        $article->update($new_article);
        return redirect('backstage/article/'.$article->id.'/edit');
    }


    public function del(Article $article)
    {
        $article->delete();
        return redirect('/backstage/article');
    }

}
