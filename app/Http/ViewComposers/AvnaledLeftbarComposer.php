<?php
namespace App\Http\ViewComposers;

use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\Config;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledLeftbarComposer
{

    public function compose(View $view)
    {

        $productCategories = (new ProductCategoryServiceImpl)->queryAll()->sortByDesc('map_id');

        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);
        // 使用 with 方法注入变量
        $view->with(compact('productCategories', 'settings'));
    }
}