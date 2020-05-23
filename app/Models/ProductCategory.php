<?php

namespace App\Models;

use App\Common\GlobalConfiguration;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel
{

    protected $table = 'aoo_product_category';
    public $timestamps = false;

    const PRODUCT_HIGH_BAY_LIGHT = 1;
    const PRODUCT_FLOODLIGHT= 2;

    public static $productMap = [
        self::PRODUCT_HIGH_BAY_LIGHT => '工矿灯',
        self::PRODUCT_FLOODLIGHT => '泛光灯'
    ];

    public function product(){
        return $this->hasMany('App\Models\Product', 'cat_id', 'id');
    }
}
