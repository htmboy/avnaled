<?php

namespace App\Http\Controllers\Backstage\Product;

use App\Http\Requests\CategoryPost;
use App\Http\Requests\ProductGalleryPost;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller
{
    public function index($pro_id)
    {
        $galleries = ProductGallery::where('pro_id', $pro_id)->orderBy('sort', 'desc')->get();
        if ($galleries->isEmpty())
            return redirect('/backstage/product/gallery/'.$pro_id.'/add');
        return view('backstage.product.gallery', compact('galleries', 'pro_id'));
    }

    public function create($pro_id)
    {
        return view('backstage.product.galleryAdd', compact('pro_id'));
    }

    public function store(ProductGalleryPost $request, $pro_id)
    {
        // 处理图片
        $file = $request->file('file');
        $path = date('Ym', time());

        $name = uniqid().'.'.$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $gallery = $file->storeAs('products/'.$path, $name);

        $sort = ProductGallery::where('pro_id', $pro_id)->count()+1;
        ProductGallery::create(compact('pro_id', 'gallery', 'sort'));
        return Response::HTTP_CREATED;
    }

    public function update()
    {
        return null;
    }

    public function destroy($pro_id, ProductGallery $gallery)
    {
        Storage::delete($gallery->gallery);
        $gallery->delete();
        return redirect()->route('gallery.index', ['pro_id'=> $pro_id]);
    }
}
