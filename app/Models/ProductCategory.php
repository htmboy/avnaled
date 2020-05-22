<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel
{
    use ModelTree, AdminBuilder;

    protected $table = 'aooled_product_category';


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setOrderColumn('sort');
        $this->setParentColumn('pid');
        $this->setTitleColumn('name');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'id');
    }

    public static function getParentCategory($field = null)
    {
        return self::where('pid', 0)->get($field);
    }

    public static function getChildCategory($field = null)
    {
        return self::where('pid', '>', 0)->get($field);
    }
}
