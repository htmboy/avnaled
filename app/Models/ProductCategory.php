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
}
