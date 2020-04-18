<?php

namespace App\Http\Controllers\Backstage\Product;

use App\Http\Requests\ProductPost;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.product');
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

        $product = $request->only('cat_id', 'title', 'thumbnail', 'number', 'size', 'color',
            'package', 'weight', 'voltage', 'angle', 'waterproof', 'life', 'distance', 'material',
            'characteristic', 'content');
        $product['thumbnail'] = $thumbnail;
        $product['cat_sort'] = ProductCategory::where('id', $request->get('cate_id'))->count() + 1;
        $product['sort'] = Product::count() + 1;
        Product::create($product);
        return redirect('/backstage/product');
    }
}
