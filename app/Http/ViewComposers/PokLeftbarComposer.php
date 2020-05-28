<?php
namespace App\Http\ViewComposers;

use App\Http\Services\Implement\ProductCategoryServiceImpl;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokLeftbarComposer
{

    public function compose(View $view)
    {
        // 使用 with 方法注入变量
        $view->with('productCategories', (new ProductCategoryServiceImpl)->queryAll()->sortByDesc('map_id'));
    }
}