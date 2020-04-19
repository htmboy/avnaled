<?php

namespace App\Http\Controllers\Backstage\Product;

use App\Http\Requests\ProductPost;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;
use Illuminate\Support\Facades\Storage;

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
}
