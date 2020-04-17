<?php

namespace App\Http\Controllers\Product;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function add()
    {

    }
}
