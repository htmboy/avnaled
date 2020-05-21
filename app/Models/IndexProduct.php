<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexProduct extends Model
{
    protected $table = 'avna_index_product';

    public $timestamps = false;

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'pro_id');
    }
}
