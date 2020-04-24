<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'avna_product';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'cat_id', 'id');
    }
}
