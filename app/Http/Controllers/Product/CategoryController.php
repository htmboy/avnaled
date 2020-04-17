<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\CategoryPost;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::orderBy('sort','desc')->get();
        return view('product.category', compact('productCategories'));
    }

    public function add(CategoryPost $request)
    {
        $name = $request->get('name');
        $sort = ProductCategory::count() +1;
        ProductCategory::create(compact('name', 'sort'));
        return redirect('backstage/product/category');
    }

    public function edit()
    {
        return null;
    }

    public function del()
    {
        return null;
    }
}
