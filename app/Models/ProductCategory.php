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


    public static function getProductMap()
    {
        return GlobalConfiguration::$productMap;
    }
}
