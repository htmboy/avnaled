<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'aoo_product';


    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'cat_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany('App\Models\ProductGallery', 'pro_id', 'id');
    }
}
