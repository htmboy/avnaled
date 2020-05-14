<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel
{
    use ModelTree, AdminBuilder;

    protected $table = 'avna_product_category';


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

    public static function getProductCategoryChain($id)
    {
        $category = self::where('id', $id)->get();
        if((bool) $category->pid)
        {

            $category = ProductCategory::where('id', $category->pid)->get();
            $category->merge('secondCategory', ProductCategory::where('pid', $id)->get());
        }else{

            $category->merge('secondCategory', ProductCategory::where('pid', $id)->get());
        }

        return $category;
    }
}
