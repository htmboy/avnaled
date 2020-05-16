<?php

namespace App\Admin\Actions\Product;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Gallery extends RowAction
{
    public $name = '轮播图';

    public function href()
    {
        parent::href();
        return "/admin/product-galleries?pro_id=".$this->getKey();
    }

}