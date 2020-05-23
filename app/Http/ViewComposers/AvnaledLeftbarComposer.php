<?php
namespace App\Http\ViewComposers;

use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledLeftbarComposer
{

    public function compose(View $view)
    {
        // 使用 with 方法注入变量
        $view->with('productCategories', ProductCategory::spectacle()->where('map_id', ProductCategory::PRODUCT_HIGH_BAY_LIGHT)->get());
    }
}