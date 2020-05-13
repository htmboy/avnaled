<?php


namespace App\Http\Services;


use App\Models\ProductCategory;

class CategoryService
{
    public function getProductCategoryChain(ProductCategory $productCategory)
    {
        if(!(bool)$productCategory->pid)
        {
            $productCategory->put('secCategory', ProductCategory::where('pid', $productCategory->id)->get());
        }

        return null;
    }
}