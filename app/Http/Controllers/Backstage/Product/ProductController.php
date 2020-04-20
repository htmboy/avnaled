<?php

namespace App\Http\Controllers\Backstage\Product;

use App\Http\Requests\ProductGalleryPost;
use App\Http\Requests\ProductPost;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sort', 'desc')->get();
        return view('product.product', compact('products'));
    }

    public function addView()
    {
        $categories = ProductCategory::orderBy('sort', 'desc')->get();
        return view('product.productAdd', compact('categories'));
    }

    public function addProduct(Request $request)
    {
        // 处理图片
        $file = $request->file('thumbnail');
        $path = date('Ym', time());
        $name = date('dHis', time()).$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $thumbnail = $file->storeAs('products/'.$path, $name);

        $product = $request->only('cat_id', 'title', 'thumbnail', 'number', 'watts', 'size', 'color',
            'package', 'weight', 'voltage', 'angle', 'waterproof', 'life', 'distance', 'material',
            'characteristic', 'content');
        $product['thumbnail'] = $thumbnail;
        $product['cat_sort'] = ProductCategory::where('id', $request->get('cate_id'))->count() + 1;
        $product['sort'] = Product::count() + 1;
        Product::create($product);
        return redirect('/backstage/product');
    }

    public function editView(Product $product)
    {

        $categories = ProductCategory::orderBy('sort', 'desc')->get();
        return view('product.productEdit', compact('product', 'categories'));
    }

    public function editProduct(Product $product, Request $request)
    {

        if($request->hasFile('thumbnail')){
            // 处理图片
            $file = $request->file('thumbnail');
            $path = date('Ym', time());
            $name = date('dHis', time()).$file->getClientOriginalExtension();
            $mimeType = $file->getClientMimeType();
            // 验证图片 type
            $thumbnail = $file->storeAs('products/'.$path, $name);
            Storage::delete($product->thumbnail);
        }
        $new_product = $request->only('cat_id', 'title', 'number', 'watts','size', 'color',
            'package', 'weight', 'voltage', 'angle', 'waterproof', 'life', 'distance', 'material',
            'characteristic', 'content');
        if (isset($thumbnail))
            $new_product['thumbnail'] = $thumbnail;
        $product->update($new_product);
        return redirect('backstage/product/'.$product->id.'/edit');
    }


    public function del(Product $product)
    {
        $product->delete();
        return redirect('/backstage/product');
    }

    public function gallery($pro_id)
    {
        $galleries = ProductGallery::where('pro_id', $pro_id)->orderBy('sort', 'desc')->get();
        return view('product.gallery', compact('galleries', 'pro_id'));
    }

    public function galleryAddView($pro_id)
    {
        return view('product.galleryAdd', compact('pro_id'));
    }

    public function galleryAdd(ProductGalleryPost $request, $pro_id)
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

    public function galleryUpdate()
    {
        return null;
    }

    public function galleryDel($pro_id, ProductGallery $productGallery)
    {
        Storage::delete($productGallery->gallery);
        $productGallery->delete();
        return redirect('/backstage/product/gallery/'.$pro_id);
    }
}
