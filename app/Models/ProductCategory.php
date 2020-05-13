<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel
{
    protected $table = 'avna_product_category';

    public function product()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'id');
    }

    public static function getProductCategoryChain($id)
    {
        $category = self::find($id);
        if((bool) $category->pid)
        {

            $category = ProductCategory::where('id', $category->pid)->get();
            $category->put('secondCategory', ProductCategory::where('pid', $id)->get());
        } else {
            $category->put('secondCategory', ProductCategory::where('pid', $id)->get());
        }
        return $category;
    }
}
