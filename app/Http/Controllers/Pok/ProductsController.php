<?php

namespace App\Http\Controllers\Pok;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductsController extends Controller
{

    public function product(){
        $productCategories = ProductCategory::where('map_id', ProductCategory::PRODUCT_FLOODLIGHT)->get('id');
        $products = Product::spectacle()->whereIn('cat_id', array_values($productCategories->toArray()))->paginate(10);
        return view('pok.products', array_merge(
            $this->SEOConfig['product'],
            compact('products')
        ));
    }

    public function productList($id)
    {
        $products = Product::spectacle()->where('cat_id', $id)->paginate(12);
        return view('pok.productList', array_merge(
            $this->SEOConfig['productList'],
            compact('products')
        ));
    }

    public function productDetail(Product $product)
    {
        return view('pok.productDetail', compact('product'));
    }

}
