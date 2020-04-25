<?php

namespace App\Http\Controllers\Backstage\Product;

use App\Http\Requests\CategoryPost;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;

class ProductCategoryController extends Controller
{
    public function index(Request $request)
    {
        $pid = $request->get('pid');
        if(!$pid)
            $pid = 0;
        $productCategories = ProductCategory::where('pid', $pid)->orderBy('sort','desc')->paginate(15);
        return view('backstage.product.category', compact('productCategories'));
    }

    public function add(CategoryPost $request)
    {
        $name = $request->get('name');
        $sort = ProductCategory::count() +1;
        $category = compact('name', 'sort');
        $pid = $request->get('pid');
        if($pid)
            $category['pid'] = $pid;
        ProductCategory::create($category);
        return redirect('backstage/product/category'.($pid?'?pid='.$pid:''));
    }

    public function edit()
    {
        return null;
    }

    // 产品分类表不提供删除，只提供软删除
    public function del()
    {
        return null;
    }
}
